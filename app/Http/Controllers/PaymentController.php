<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tools;
use App\Models\Web;
use App\Models\Payment;


class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
            'userRut' => 'string|max:20',
            'userEmail' => 'required|string|email',
            'userCel' => 'required|string|max:36',
            'shipping' => 'required|string',
            'amountShipping' => 'nullable|integer',
            'shippingCompanyId' => 'nullable|integer',
            'shippingCompanyName' => 'nullable|string|max:64',
            'payMethod' => 'required|string|max:36',
            'payConfirmed' => 'nullable|date',
            'deliveredStart' => 'nullable|date',
            'deliveredEnd' => 'nullable|date',
            'user_id' => 'nullable|integer',
            'seller_id' => 'nullable|integer',
        ]);        
        try {
            $validatedData['code'] = 33333;
            $validatedData['status'] = 'inicial';
            $payment = Payment::create($validatedData);
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
