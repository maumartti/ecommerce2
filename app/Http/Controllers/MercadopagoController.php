<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
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
                //'brand__name' => 'IMPORTADORA TATAR',
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
        $user_id = null;
        if (Auth::check()){ $user_id = Auth::user()->id; }
        if($st == 'approved'){
            $payment = Payment::where('code',$paymentCode)->first();
            $payment->update(['status' => 'AUTHORIZED','payConfirmed' => now(),'amountConfirmed' => null, 'user_id' => $user_id]);
            $web = Web::find(1);
            return view('paymentconfirmed')->with('payment',$payment)->with('web',$web);
        }else{
            $payment = Payment::where('code',$paymentCode)->first();
            $payment->update(['status' => $st, 'user_id' => $user_id]);
            $web = Web::find(1);
            return view('paymentconfirmed')->with('payment',$payment)->with('web',$web);
        }
    }

    public function mercadopagohooks(Request $request){
        $user_id = null;
        if (Auth::check()){ $user_id = Auth::user()->id; }
        //traemos el JSON con el payment_id y obtenemos el external_reference que es el codigo de pago guardado en la BD
        $payment_id = $request->data_id;
        $url = 'https://api.mercadopago.com/v1/payments/'. $payment_id .'?access_token=APP_USR-1027733735932556-110716-4924158cbc263adb5a447097dd87d383-1526308784';
        $json = file_get_contents($url);  
        $data = json_decode($json, true);
        $external_reference = $data['external_reference']; //codigo del pago agregado inicialmente en el front y guardado en tabla pagos de BD
        $status_payment = $data['status']; //estado del pago
        
        //actualizamos el pago del external_reference = code , como pago 
        if($status_payment == 'approved'){
            $payment = Payment::where('code', $external_reference)->first();
            if($payment){
                $payment->update(['status' => 'AUTHORIZED','payConfirmed' => now(),'amountConfirmed' => null, 'user_id' => $user_id]);
                $payment->save();
            }
        }
      }

}

//https://webpay3gint.transbank.cl/webpayserver/bp_auth_emisor.cgi?TBK_TOKEN=01ab31103ec3c9ca740d8ed97448dc9dbb10b5d5c0be0a4074ad95e6eb7e2d6f