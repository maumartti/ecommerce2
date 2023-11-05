<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Transbank\Webpay\WebpayPlus\Transaction;
use App\Models\Payment;

class WebpayController extends Controller
{
    public function webpay_pagar($paymentId){
        $payment = Payment::find($paymentId);
        $id = $payment->id;
        $code = $payment->code;
        $amount = $payment->amountTotal;

        $transaction = new Transaction();
        $createResponse = $transaction->create($code, $id, $amount, 'https://importadoratatar.cl/webpay/respuesta?action=result');
        $redirectUrl = $createResponse->getUrl() . '?token_ws=' . $createResponse->getToken() . '&item_name=' . urlencode($code);
        header('Location: '.$redirectUrl, true, 302);
        exit;
    }

    public function webpay_respuesta(){
        $response = Http::withHeaders(
            [
                'Content-Type' => 'application/json',
                'Tbk-Api-Key-Id' => env('WEBPAY_ID'),
                'Tbk-Api-Key-Secret' => env('WEBPAY_SECRET')
            ]
        )->put(env('WEBPAY_URL')."/". $_GET['token_ws'], []);
        $datos = json_decode($response);
        return view('webpay.respuesta', compact('datos'));        
    }
}

