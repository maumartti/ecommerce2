<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Tools;
use App\Models\Web;
use App\Models\Payment;
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
        $validatedData = $request->validate([
            'code' => 'integer',
            'status' => 'string|max:20',
            'amount' => 'nullable|integer',
            'itemsId' => 'string|max:100',
            'itemsPrices' => 'string|max:255',
            'userName' => 'required|string|max:100',
            'userRut' => 'nullable|string|max:20',
            'userEmail' => 'required|string|email',
            'userCountryCode' => 'required|string|max:12',
            'userCel' => 'required|string|max:36',
            'userRegion' => 'required|string|max:64',
            'userCity' => 'required|string|max:100',
            'userAddress' => 'required|string|max:255',
            'shipping' => 'required|string',
            'amountShipping' => 'nullable|integer',
            'shippingCompanyId' => 'nullable',
            'shippingCompanyName' => 'nullable|string|max:64',
            'payMethod' => 'required|string|max:36',
            'payConfirmed' => 'nullable|date',
            'deliveredStart' => 'nullable|date',
            'deliveredEnd' => 'nullable|date',
            'user_id' => 'nullable|integer',
            'seller_id' => 'nullable|integer',
        ]);        
        try {
            //return $validatedData;
            $validatedData['code'] = 33333;
            $validatedData['status'] = 'inicial';
            $validatedData['amountShipping'] = 5000;
            $validatedData['user_id'] = 3;
            $validatedData['seller_id'] = 4;
            

            //del carrito sacamos los items
            $cart = session()->get('cart', []); // Obtener el array de la sesión
            $ids = [];
            $prs = [];

            //sacamos los items del carrito
            foreach ($cart as $item) {
                if (isset($item['id'])) {
                    $ids[] = $item['id'];
                    $prs[] = $item['price'];
                }
            }
            $validatedData['itemsId'] = implode(',', $ids);
            $validatedData['itemsPrices'] = implode(',', $prs);
            //--
            
            $validatedData['amount'] = session()->get('totalPrice');
            if($validatedData['amountShipping'] > 0){
                $validatedData['amountTotal'] = $validatedData['amount'] + $validatedData['amountShipping'];
            }else{
                $validatedData['amountTotal'] = $validatedData['amount'];
            }

            if($validatedData['shippingCompanyId']){
                $shippingCompany = ShippingCompany::find($validatedData['shippingCompanyId']);
                $validatedData['shippingCompanyName'] = $shippingCompany->name;
            }

            //return $validatedData;
            $payment = Payment::create($validatedData);
            //return $payment->id;
            //redirecciona al pago
            if($validatedData['payMethod'] == 'webpay'){
                return redirect()->route('webpay_pagar', ['paymentId' => $payment->id]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
