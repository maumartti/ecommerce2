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
                $payment->update(['status' => 'AUTHORIZED ENVIADO', 'deliveredStart'=> now()]);
            }
            $shippings = Shipping::with('payment')->get();
            $this->logActivity('Envíos','Envío Agregado', $payment->code);//registramos Acción
            return response()->json(['status' => 'success', 'shipping' => $shipping, 'shippings' => $shippings], 200);
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
     *  confirma que el envio llego a destino cambiando (deliveredEnd -> en la tabla del pago)
     */
    public function update(Request $request, string $id)
    {     
        try {
            $payment = Payment::find($id);
            if($payment){
                $payment->update(['deliveredEnd'=> now()]);
            }
            $shippings = Shipping::with('payment')->get();
            $this->logActivity('Envíos','Envío Editado', $payment->code);//registramos Acción
            return response()->json(['status' => 'success', 'shippings' => $shippings], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al confirmar envio recibido: ' . $e->getMessage()], 500);
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
