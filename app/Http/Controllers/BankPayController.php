<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Transbank\Webpay\WebpayPlus\Transaction;
use App\Models\Web;
use App\Models\Payment;
use App\Models\Product;

use MercadoPago\SDK;
use MercadoPago\Preference;
use MercadoPago\Item;

class BankPayController extends Controller
{

    public function bank_pagar($data){
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
        return view('bank')->with('web',$web)->with('payment',$payment)->with('allProductInOne',$allProductInOne);
    }

    public function confirm_pay_bank(Request $request, string $code){
        try {
            $payment = Payment::where('code',$code)->first();
            if($payment){
                //descontar stock
                $productIds = array_map('intval', explode(',', $payment->itemsId));
                foreach ($productIds as $productId) {
                    $product = Product::find($productId);
                    if ($product) {
                        $product->stock -= 1;
                        $product->save();
                    }
                }
                //--
                $payment->update(['status' => 'AUTHORIZED','payConfirmed' => now(),'amountConfirmed' => null]);
                $payments = Payment::all();
                return response()->json(['status' => 'success', 'payment' => $payment, 'payments' => $payments], 200);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al confirmar el pago: ' . $e->getMessage()], 500);
        }
    }

}