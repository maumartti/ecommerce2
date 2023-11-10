<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tools;
use App\Models\Web;
use App\Models\Region;
use App\Models\Payment;
use App\Models\Shipping;
use App\Models\ShippingCompany;
use App\Models\ShippingOfficeCompanyRegion;

class ShippingController extends Controller
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
        $regions = Region::with('companies')->get();
        //dd( $regions);
        $companies = ShippingCompany::with('offices')->get();
        $shippings = Shipping::with('payment')->get();
        return view('admin.shipping')->with('web',$web)->with('regions',$regions)->with('companies',$companies)->with('shippings',$shippings);   
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
            'payment_id' => 'required',
        ]);       
        try {
            $payment = Payment::find($validatedData['payment_id']);
            if($payment){
                $shipping = Shipping::create(['status' => 'ENVIADO', 'payment_id' => $payment->id]);
                $payment->update(['deliveredStart'=> now()]);
            }
            $shippings = Shipping::all();
            return response()->json(['status' => 'success', 'shipping' => $shipping, 'shippings' => $shippings], 200);
            return response()->json(['status' => 'success', 'envío guardado' => $payment], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al guardar envio: ' . $e->getMessage()], 500);
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
