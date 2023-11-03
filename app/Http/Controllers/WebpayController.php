<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Transbank\Webpay\WebpayPlus\Transaction;

class WebpayController extends Controller
{


    public function webpay_pagar(){
        // Transbank\Webpay\WebpayPlus::setCommerceCode('59705555532');
        // Transbank\Webpay\WebpayPlus::setApiKey('59705555532');
        // Transbank\Webpay\WebpayPlus::setIntegrationType('TEST');
        $transaction = new Transaction();
        $createResponse = $transaction->create('buyOrder123', uniqid(), 1500, 'http://localhost:8000/webpay-plus/index.php?action=result');
        $redirectUrl = $createResponse->getUrl().'?token_ws='.$createResponse->getToken();
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

