<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Transbank\Webpay\WebpayPlus\Transaction;
use App\Models\Web;
use App\Models\Payment;

use MercadoPago\SDK;
use MercadoPago\Preference;
use MercadoPago\Item;

class MercadopagoController extends Controller
{

    public function mercadopago_pagar($data){
        $parts = explode('-', $data);
        if (count($parts) == 2) { $code = $parts[0]; $paymentId = $parts[1]; }
        $web = Web::find(1);
        $payment = Payment::find($paymentId);
        $id = $payment->id;
        $code = $payment->code;
        $amount = $payment->amountTotal;

        
        $allProductInOne = null;
        if(session()->has('cart')) {
            $cartArray = is_array(session('cart')) ? session('cart') : json_decode(session('cart'), true);
            $combinedTitle = '';
            $totalPrice = 0;
            //dd($cartArray);
            foreach ($cartArray as $item) {
                $combinedTitle .= $item['name'] . ', ';
                $totalPrice += str_replace(',', '.', $item['price']) * (int)$item['quantity'];
            }
            $combinedTitle = rtrim($combinedTitle, ', '); // Eliminar la última coma y el espacio
            $allProductInOne = [
                'title' => $combinedTitle,
                'description' => $combinedTitle,
                'unit_price' => ($payment->shipping == 'envio' ? $totalPrice + 5000 : $totalPrice),
                //'quantity' => count($cartArray),
            ];
        }
        
       //dd($allProductInOne);
        //return $request;
        // $session = substr(md5(uniqid(mt_rand(), true)) , 0, 36);//codigo alfanumerico 36
        // session(['datetimepay' => $session]);//crea sesion de tiempo unica  
        return view('mercadopago')->with('web',$web)->with('payment',$payment)->with('allProductInOne',$allProductInOne);
    }

    public function mercadopago_respuesta(Request $request){
        $paymentCode = $request->input('external_reference');
        $st = $request->input('status');
        if($st == 'approved'){
            $payment = Payment::where('code',$paymentCode)->first();
            $payment->update(['status' => 'AUTHORIZED','payConfirmed' => now(),'amountConfirmed' => null]);
            $web = Web::find(1);
            return view('paymentconfirmed')->with('payment',$payment)->with('web',$web);
        }else{
            $payment = Payment::where('code',$paymentCode)->first();
            $payment->update(['status' => $st]);
            $web = Web::find(1);
            return view('paymentconfirmed')->with('payment',$payment)->with('web',$web);
        }
    }

}

//https://webpay3gint.transbank.cl/webpayserver/bp_auth_emisor.cgi?TBK_TOKEN=01ab31103ec3c9ca740d8ed97448dc9dbb10b5d5c0be0a4074ad95e6eb7e2d6f