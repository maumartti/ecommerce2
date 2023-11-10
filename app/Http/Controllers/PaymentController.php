<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Tools;
use App\Models\Web;
use App\Models\Payment;
use App\Models\Region;
use App\Models\ShippingCompany;



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
        $payments = Payment::all();
        return view('admin.payments')->with('web',$web)->with('payments',$payments);   
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
            $validatedData['code'] = Str::random(8) . Str::random(8);// Genera un número aleatorio de 10 dígitos
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
            if($validatedData['payMethod'] == 'webpay'){
                return redirect()->route('webpay_pagar', ['paymentId' => $payment->id]);
            }elseif($validatedData['payMethod'] == 'mercadopago'){
                return redirect()->route('mercadopago_pagar', ['data' => $payment->code.'-'.$payment->id]);
            }elseif($validatedData['payMethod'] == 'banco'){
                //return redirect()->route('mercadopago_pagar', ['paymentId' => $payment->id]);
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
}
