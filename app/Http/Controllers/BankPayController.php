<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use App\Models\Web;
use App\Models\Payment;

class BankPayController extends Controller
{
    public function confirm_pay_bank((Request $request, string $code){
        try {
            $payment = Payment::where('code',$code)->first();
            if($payment){
                $payment->update(['status' => 'AUTHORIZED','payConfirmed' => now(),'amountConfirmed' => null]);
                $payments = Payment::all();
                return response()->json(['status' => 'success', 'payment' => $payment, 'payments' => $payments], 200);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al confirmar el pago: ' . $e->getMessage()], 500);
        }
    }

}