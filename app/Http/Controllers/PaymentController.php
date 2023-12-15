<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use App\Notifications\PaymentMessage;
use App\Notifications\PrePaymentMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Tools;
use Carbon\Carbon;
use App\Models\Web;
use App\Models\Payment;
use App\Models\Region;
use App\Models\ShippingCompany;
use App\Models\Product;



class PaymentController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $web = Web::find(1);
        // Buscar y eliminar pagos con estado 'INICIAL' y created_at mayor a 48 horas
        Payment::where(function($query) {
            $query->where('status', 'INICIAL')
                  ->orWhere('status', 'FAILED');
        })->where('created_at', '<=', Carbon::now()->subHours(72))->delete();
        //get todos los pagos con fecha de confirmado mas reciente arriba 
        $payments = Payment::orderBy('payConfirmed', 'desc')->get();
        //dd($payments);
        return view('admin.payments')->with('web', $web)->with('payments', $payments);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $validatedData = $request->validate([
            'code' => 'string|max:16',
            'status' => 'string|max:20',
            'amount' => 'nullable|integer',
            'itemsId' => 'string|max:100',
            'itemsPrices' => 'string|max:255',
            'userName' => 'required|string|max:100',
            'userRut' => 'nullable|string|max:20',
            'userEmail' => 'required|string|email',
            'userCountryCode' => 'required|string|max:12',
            'userCel' => 'required|string|max:36',
            'userRegion' => 'nullable|string|max:64',
            'userCity' => 'nullable|string|max:100',
            'userAddress' => 'nullable|string|max:255',
            'shipping' => 'required|string',
            'shippingTwo' => 'nullable|string',
            'shippingOfficeAddress' => 'nullable|string|max:255',
            'amountShipping' => 'nullable|integer',
            'shippingCompanyId' => 'sometimes',
            'shippingCompanyName' => 'nullable|string|max:64',
            'payMethod' => 'required|string|max:36',
            'payConfirmed' => 'nullable|date',
            'amountConfirmed' => 'nullable',
            'deliveredStart' => 'nullable|date',
            'deliveredEnd' => 'nullable|date',
            'user_id' => 'nullable|integer',
            'seller_id' => 'nullable|integer',
        ]);        
        try {
            //return $validatedData;
            $validatedData['code'] = mt_rand(100000000,999999999);// Genera un número aleatorio numerico de 8 dígitos
            $validatedData['status'] = 'INICIAL';
            $validatedData['amountShipping'] = 5000;
            $validatedData['user_id'] = Auth::check() ? Auth::user()->id : null;
            $validatedData['seller_id'] = null;

            //region name
            $region = Region::find($validatedData['userRegion']);
            if($region){
                $validatedData['userRegionName'] = $region->name;
            }

            //del carrito sacamos los items
            $cart = session()->get('cart', []); // Obtener el array de la sesión
            $ids = [];
            $prs = [];

            //sacamos los items del carrito
            foreach ($cart as $item) {
                if (isset($item['id'])) {
                    $ids[] = $item['id'];
                    $prs[] = $item['price'];
                    $nms[] = $item['name'];
                }
            }
            $validatedData['itemsId'] = implode(',', $ids);
            $validatedData['itemsNames'] = implode(',', $nms);
            $validatedData['itemsPrices'] = implode(',', $prs);
            //--
            
            $validatedData['amount'] = session()->get('totalPrice');
            if($validatedData['amountShipping'] > 0 && $validatedData['shipping'] == 'envio'){
                $validatedData['amountTotal'] = $validatedData['amount'] + $validatedData['amountShipping'];
            }else{
                $validatedData['amountTotal'] = $validatedData['amount'];
            }

            if($validatedData['shipping'] == 'envio' && $validatedData['shippingCompanyId']){
                $shippingCompany = ShippingCompany::find($validatedData['shippingCompanyId']);
                $validatedData['shippingCompanyName'] = $shippingCompany->name;
            }

            //return $validatedData;
            $payment = Payment::create($validatedData);
            //return $payment->id;
            //redirecciona al pago


            // Enviar una notificación por correo electrónico aquí
            if($validatedData['payMethod'] == 'banco'){ // SOLO MANDAR SI SE SELECIONO TRANSFERENCIA BANCARIA , LOS OTROS SE ENVIAN AL CONFIRMAR EL PAGO
                if(isset($shippingCompany)){
                    if($validatedData['shippingTwo'] == 'casa'){
                        $end = 'Dirección del cliente'.', dirección: '.$validatedData['userAddress'];
                    }else{
                        $end = 'sucursal de '.$shippingCompany->name.', dirección: '.$validatedData['shippingOfficeAddress'];
                    }
                    $ship = 'mediante ( Empresa: '.$shippingCompany->name.' ), destino: '.$end.', Región: '.$region->name.', ciudad: '.$validatedData['userCity'];
                }else{
                    $ship = 'Retira en nuestro local';
                    $validatedData['amountShipping'] = 0;
                }
                $notificationData = [
                    'details' => $validatedData['itemsNames'],
                    'name' => $payment->userName,
                    'code' => $validatedData['code'],
                    'counts' => count($ids),
                    'subtotal' => '$'.$validatedData['amount'],
                    'envio' => '$'.$validatedData['amountShipping'],
                    'total' => '$'.$validatedData['amountTotal'],
                    'shipping' => $ship,
                    'message' => 'Si realizaste la compra mediante transferencia bancaria, te solicitamos amablemente que te comuniques con nosotros una vez que hayas efectuado el pago respondiendo a este correo con la confirmación. Estamos aquí para brindarte asistencia y agilizar el proceso.',      
                    'messagetwo' => ''    
                ];
                Notification::route('mail', $payment->userEmail)->notify(new PrePaymentMessage($notificationData));
            }


            if($validatedData['payMethod'] == 'webpay'){
                return redirect()->route('webpay_pagar', ['paymentId' => $payment->id]);
            }elseif($validatedData['payMethod'] == 'mercadopago'){
                return redirect()->route('mercadopago_pagar', ['data' => $payment->code.'-'.$payment->id]);
            }elseif($validatedData['payMethod'] == 'banco'){
                return redirect()->route('bank_pagar', ['data' => $payment->code.'-'.$payment->id]);
            }
            return response()->json(['status' => 'success', 'pago guardado' => $payment], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al guardar pago: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $payment = Payment::find($id);
            if($payment){
                $payment->update(['status' => 'AUTHORIZED','payConfirmed' => now(),'amountConfirmed' => null]);

            // Enviar una notificación por correo electrónico aquí
            if($payment->payMethod == 'banco'){ //CONFIRMAR EL PAGO
                if(isset($payment->shippingCompanyName)){
                    if($payment->shippingTwo == 'casa'){
                        $end = 'Dirección del cliente'.', dirección: '.$payment->userAddress;
                    }else{
                        $end = 'sucursal de '.$payment->shippingCompanyName.', dirección: '.$payment->shippingOfficeAddress;
                    }
                    $ship = 'mediante ( Empresa: '.$payment->shippingCompanyName.' ), destino: '.$end.', Región: '.$payment->userRegionName.', ciudad: '.$payment->userCity;
                    $amountShipping = 5000;
                }else{
                    $ship = 'Retira en nuestro local';
                    $amountShipping = 0;
                }
                //descontar stock
                $productIds = array_map('intval', explode(',', $payment->itemsId));
                foreach ($productIds as $productId) {
                    $product = Product::find($productId);
                    if ($product) {
                        $product->stock -= 1;
                        $product->save();
                    }
                }
                //--
                $notificationData = [
                    'header' => '',
                    'name' => $payment->userName, // Asegúrate de que tu modelo Message tenga un campo 'name'
                    'code' => $payment->code, // Asegúrate de que tu modelo Message tenga un campo 'name'
                    'details' => $payment->itemsNames,
                    'counts' => count(explode(',', $payment->itemsId)),
                    'subtotal' => '$'.$payment->amount,
                    'envio' => '$'.$amountShipping,
                    'total' => '$'.$payment->amountTotal,
                    'shipping' => $ship,
                    'message' => 'Si realizaste la compra mediante transferencia bancaria, te solicitamos amablemente que te comuniques con nosotros una vez que hayas efectuado el pago respondiendo a este correo con la confirmación. Estamos aquí para brindarte asistencia y agilizar el proceso.',      
                    'messagetwo' => ''    
                ];
                Notification::route('mail', $payment->userEmail)->notify(new PaymentMessage($notificationData));
                $notificationData['header'] = 'AVISO DE PAGO CONFIRMADO !! -> '.$payment->userEmail.' / cel: '.$payment->userCountryCode.' '.$payment->userCel.' / RUT: '.$payment->userRut;
                Notification::route('mail', config('mail.from.address'))->notify(new PaymentMessage($notificationData));
            }


                $payments = Payment::all();
                return response()->json(['status' => 'success', 'payment' => $payment, 'payments' => $payments], 200);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al confirmar el pago: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function exportarCsvPayments()
    {
        // Obtén el primer y último día del mes actual
        $primerDiaMesActual = Carbon::now()->startOfMonth();
        $ultimoDiaMesActual = Carbon::now()->endOfMonth();

        // Filtra los pagos dentro del mes actual y excluye los estados 'INICIAL' y 'FAILED'
        $payments = Payment::whereNotIn('status', ['INICIAL', 'FAILED'])->whereBetween('created_at', [$primerDiaMesActual, $ultimoDiaMesActual])->orderBy('payConfirmed', 'desc')->get();

        $csvFileName = 'exportacion.csv';
        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$csvFileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0",
        );
        $handle = fopen('php://output', 'w');
        // Cabecera personalizada con los campos que quieres exportar
        $headerFields = [
            'code',
            'status',
            'payMethod',
            'payConfirmed',
            'amountConfirmed',
            'amount',
            'amountTotal',
            'itemsNames',
            'itemsPrices',
            'userName',
            'userRut',
            'userEmail',
            'userCel',
            'userRegion',
            'userRegionName',
            'userCity',
            'userZip',
            'userAddress',
            'userCountryCode',
            'shipping',
            'shippingTwo',
            'shippingOfficeAddress',
            'amountShipping',
            'shippingCompanyId',
            'shippingCompanyName',
            'deliveredStart',
            'deliveredEnd',
        ];
        fputcsv($handle, $headerFields);
        foreach ($payments as $payment) {
            $paymentData = [
                $payment->code,
                $payment->status,
                $payment->payMethod,
                $payment->payConfirmed,
                $payment->amountConfirmed,
                $payment->amount,
                $payment->amountTotal,
                $payment->itemsNames,
                $payment->itemsPrices,
                $payment->userName,
                $payment->userRut,
                $payment->userEmail,
                $payment->userCel,
                $payment->userRegion,
                $payment->userRegionName,
                $payment->userCity,
                $payment->userZip,
                $payment->userAddress,
                $payment->userCountryCode,
                $payment->shipping,
                $payment->shippingTwo,
                $payment->shippingOfficeAddress,
                $payment->amountShipping,
                $payment->shippingCompanyId,
                $payment->shippingCompanyName,
                $payment->deliveredStart,
                $payment->deliveredEnd,
            ];
    
            fputcsv($handle, $paymentData);
        }
        fclose($handle);
        return response()->make('', 200, $headers);
    }
    
    
    
}
