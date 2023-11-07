@extends('layouts.web')

@php
    require base_path('vendor/autoload.php');
    MercadoPago\SDK::setAccessToken('TEST-5723281934660194-110618-39dbda0b9e9407d699d3dff2e5f56d18-45448239');

    // Crea un objeto de preferencia
    $preference = new MercadoPago\Preference();

    // Crea un ítem en la preferencia
    $item = new MercadoPago\Item();
    $item->title = $allProductInOne['title'];
    $item->quantity = 1;
    $item->unit_price = $allProductInOne['unit_price'];
    $preference->items = array($item);
    
    $preference->external_reference = $payment->code;

    $preference->back_urls = array(
        "success" => "https://importadoratatar.cl/mercadopago/respuesta",
        "failure" => "https://importadoratatar.cl/mercadopago/respuesta",
        "pending" => "https://importadoratatar.cl/mercadopago/respuesta"
    );
    $preference->auto_return = "approved";
    $preference->save();
@endphp

@section('head')
    <style type="text/css">
    .mercadopago-button{
        width: 100% !important;
        padding: 6px !important;
        font-size: 14px !important;
        border-radius:23px !important;
    }
    </style>
@endsection

@section('content')	
<section class="bg0 p-t-104 p-b-116">
		<div class="container">

			<div class="flex-w flex-tr ">
				<div class="size-210 bor10 p-lr-70 p-t-10 p-b-70  p-lr-15-lg w-full-md m-auto">
                        <div class="col-12 m-b-0 how-pos4-parent text-center">
                            <img class="mb-0" src="/assets/images/Mercado-Pago.png" alt="ICON" style="width: 300px;margin: auto;text-align: center;display: inline-block;">
                        </div>
						<h4 class="mtext-105 cl2 text-center p-b-15">Detalles de su compra</h4>

                        <div class="wrap-table-shopping-cart">
							<table class="header-cart-wrapitem w-100">
								@if(session()->has('cart'))
								@foreach (session('cart') as $item)
								<tr product-id="{{$item['id']}}"  class="header-cart-item table_row" style="border-top: 1px dashed #d9d9d9;">
									<td class="p-l-0" style="width: 100px;">
										<div class="how-itemcart1">
											<img src="/assets/images/products/{{ $item['image1'] }}" alt="IMG">
										</div>
									</td>
                                    <td class="font-weight-bold">{{ $item['name'] }}</td>
									<td class="p-l-10">${{ str_replace(',', '.', number_format($item['price'], 0, ',', '.')) }} x {{$item['quantity']}} = ${{ str_replace(',', '.', number_format($item['price'] * $item['quantity'], 0, ',', '.')) }}</td>
								</tr>
								@endforeach
								@endif
							</table>
						</div>

                        <div class="m-auto" style="border-top: 1px dashed #d9d9d9;">
                            <div class="flex-w flex-t p-b-14 p-t-14">
                                <div class="size-206">
                                    <span class="mtext-95 cl2">
                                        Detalles de envío:
                                    </span>
                                </div>
                                <div class="size-209">
                                    <span class="productId header-cart-subtotal mtext-90 cl2">
                                    @if($payment->shippingTwo == 'sucursal')
                                    <strong>Empresa {{$payment->shippingCompanyName}}</strong>: {{$payment->shippingOfficeAddress}}
                                    @elseif($payment->shippingTwo == 'casa')
                                    {{$payment->userAddress}}
                                    @endif
                                    </span>
                                </div>
                            </div>
                            <div class="flex-w flex-t p-b-4 pt-4" style="border-top: 1px dashed #d9d9d9;">
                                <div class="size-208">
                                    <span class="mtext-101 cl2">
                                        Subtotal:
                                    </span>
                                </div>
                                <div class="size-209">
                                    <span class="productId header-cart-subtotal mtext-110 cl2">
                                    ${{ session()->has('totalPrice') ? str_replace(',', '.', number_format(session('totalPrice'), 0, '.', ',')) : '0' }}
                                    </span>
                                </div>
                            </div>
                            @if($payment->shipping == 'envio')
                            <div class="flex-w flex-t p-t-27 p-b-5" id="priceShipping" >
                                <div class="size-208">
                                    <span class="mtext-101 cl2">
                                        Envío:
                                    </span>
                                </div>
                                <div class="size-209 p-t-1">
                                    <span class="mtext-110 cl2">
                                    $5.000
                                    </span>
                                </div>
                            </div>
                            @endif
                            <div class="flex-w bor12 flex-t p-t-27 m-b-26 p-b-20">
                                <div class="size-208">
                                    <span class="mtext-101 cl2">
                                        Total:
                                    </span>
                                </div>
                                <div class="size-209 p-t-1">
                                @if($payment->shipping == 'envio')
                                    <span class="mtext-110 cl2 header-cart-subtotal" id="totalPriceDisplay" >
                                    @php
                                        $totalPrice = session()->has('totalPrice') ? (float)str_replace(',', '.', str_replace('.', '', session('totalPrice'))) : 0;
                                        $result = $totalPrice + 5000;
                                    @endphp
                                    ${{ number_format($result, 0, ',', '.') }}
                                    </span>
                                @else
                                    <span class="mtext-110 cl2 header-cart-subtotal" id="totalPriceDisplay" >
                                        ${{ session()->has('totalPrice') ? str_replace(',', '.', number_format(session('totalPrice'), 0, '.', ',')) : '0' }}
                                    </span>
                                @endif    
                                </div>
                            </div>
                        </div>    
                        <div class="cho-container"></div>
				</div>
			</div>
		</div>
	</section>	
@endsection
    
@section('script')    

<!-- Modulo mercado pago -->
<script src="https://sdk.mercadopago.com/js/v2"></script>
<script>
const mp = new MercadoPago('TEST-5c5b411d-eda2-4841-8aa1-0e9dd8e5955e', {
    locale: 'es-UY'
  });

  mp.checkout({
    preference: {
      id: '{{ $preference->id }}'
    },
    render: {
      container: '.cho-container',
      label: 'PAGAR',
    }
  });
</script>
<!-- END Modulo mercado pago -->



<script>
</script>

@endsection

        
