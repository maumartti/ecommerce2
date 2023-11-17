<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use App\Notifications\PaymentMessage;
use Illuminate\Support\Str;
use Transbank\Webpay\WebpayPlus\Transaction;
use App\Models\Web;
use App\Models\Payment;

class WebpayController extends Controller
{
    public function webpay_pagar($paymentId){
        $payment = Payment::find($paymentId);
        $id = $payment->id;
        $code = $payment->code;
        $amount = $payment->amountTotal;
        //$codewp = Str::random(8) . Str::random(8);

        $transaction = new Transaction();
        $createResponse = $transaction->create($code, $id, $amount, 'https://importadoratatar.cl/webpay/respuesta?payment_id='. $id);
        //dd($createResponse);
        $redirectUrl = $createResponse->getUrl() . '?token_ws=' . $createResponse->getToken();
        header('Location: '.$redirectUrl, true, 302);
        exit;
    }

    public function webpay_respuesta(Request $request){
        //dd($request->all());
        $paymentId = $request->input('payment_id');
        $tbk = $request->input('TBK_ORDEN_COMPRA');
        if($tbk){
            $payment = Payment::find($paymentId);
            $web = Web::find(1);
            return view('paymentconfirmed')->with('payment',$payment)->with('web',$web);
        }
        $token = $request->input('token_ws');
        $transaction = new Transaction(); // Crea una instancia de la clase Transaction
        $response = $transaction->commit($token); // Llama al método commit en la instancia
        //dd($response);
        $user_id = null;
        if (Auth::check()){ $user_id = Auth::user()->id; }
        $payment = Payment::find($paymentId);
        if($response->status == 'AUTHORIZED'){
            $payment->update(['status' => 'AUTHORIZED','payConfirmed' => now(),'amountConfirmed' => $response->amount, 'user_id' => $user_id]);

            // Enviar una notificación por correo electrónico aquí
            //if($payment->payMethod == 'banco'){ //CONFIRMAR EL PAGO
            if(isset($payment->shippingCompanyName)){
                if($payment->shippingTwo == 'casa'){
                    $end = 'Dirección del cliente'.', dirección: '.$payment->userAddress;
                }else{
                    $end = 'sucursal de '.$payment->shippingCompanyName.', dirección: '.$payment->shippingOfficeAddress;
                }
                $ship = 'mediante ( Empresa: '.$payment->shippingCompanyName.' ), destino: '.$end.', Región: '.$payment->userRegionName.', ciudad: '.$payment->userCity;
                $amountShipping = 5000;
            }else{
                $ship = 'Retira en nuestro local';
                $amountShipping = 0;
            }
            $notificationData = [
                'header' => '',
                'name' => $payment->userName, // Asegúrate de que tu modelo Message tenga un campo 'name'
                'code' => $payment->code, // Asegúrate de que tu modelo Message tenga un campo 'name'
                'details' => $payment->itemsNames,
                'counts' => count(explode(',', $payment->itemsId)),
                'subtotal' => '$'.$payment->amount,
                'envio' => '$'.$amountShipping,
                'total' => '$'.$payment->amountTotal,
                'shipping' => $ship,
                'message' => 'Si realizaste la compra mediante transferencia bancaria, te solicitamos amablemente que te comuniques con nosotros una vez que hayas efectuado el pago respondiendo a este correo con la confirmación. Estamos aquí para brindarte asistencia y agilizar el proceso.',      
                'messagetwo' => ''    
            ];
            Notification::route('mail', $payment->userEmail)->notify(new PaymentMessage($notificationData));
            $notificationData['header'] = 'AVISO DE PAGO CONFIRMADO !! -> '.$payment->userEmail.' / cel: '.$payment->userCountryCode.' '.$payment->userCel.' / RUT: '.$payment->userRut;
            Notification::route('mail', config('mail.from.address'))->notify(new PaymentMessage($notificationData));
            //}
            // END CORREO


            return redirect('https://webpay3gint.transbank.cl/webpayserver/bp_auth_emisor.cgi?TBK_TOKEN='.$token);
            //dd($response);
        }else{//no autorizado
            $payment->update(['status' => $response->status, 'user_id' => $user_id]);
            return redirect('https://webpay3gint.transbank.cl/webpayserver/bp_auth_emisor.cgi?TBK_TOKEN='.$token);
            //dd($response);
        }
        //dd($response);
    }

}

//https://webpay3gint.transbank.cl/webpayserver/bp_auth_emisor.cgi?TBK_TOKEN=01ab31103ec3c9ca740d8ed97448dc9dbb10b5d5c0be0a4074ad95e6eb7e2d6f