@extends('layouts.web')

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
                        <div class="col-12 m-b-3 how-pos4-parent text-center">
                            <img class="mb-4" src="/assets/images/bancobci.jpg" alt="ICON" style="width: 300px;margin: auto;text-align: center;display: inline-block;">
                            <h4>BCI Banco de credito e inveriones</h4>
                        </div>
                        <div class="my-5">
                            <h3 class="text-center">Cuenta Bancaria</h3>
                            <div class="flex-w flex-t p-b-4 pt-4 mt-3" style="border-top: 1px dashed #d9d9d9;">
                                <div class="size-208">
                                    <span class="mtext-101 cl2">
                                        Tipo de cuenta:
                                    </span>
                                </div>
                                <div class="size-209">
                                    <strong class="text-danger productId header-cart-subtotal mtext-110 cl2">
                                    CUENTA CORRIENTE
                                    </strong>
                                </div>
                            </div>
                            <div class="flex-w flex-t p-b-4 pt-4 mt-3" style="border-top: 1px dashed #d9d9d9;">
                                <div class="size-208">
                                    <span class="mtext-101 cl2">
                                        Nombre:
                                    </span>
                                </div>
                                <div class="size-209">
                                    <strong class="text-danger productId header-cart-subtotal mtext-110 cl2">
                                    ONDER OZDAS IMPORTADORA
                                    </strong>
                                </div>
                            </div>
                            <div class="flex-w flex-t p-b-4 pt-4 mt-3" style="border-top: 1px dashed #d9d9d9;">
                                <div class="size-208">
                                    <span class="mtext-101 cl2">
                                        RUT:
                                    </span>
                                </div>
                                <div class="size-209">
                                    <strong class="text-danger productId header-cart-subtotal mtext-110 cl2">
                                    76.598.552-8
                                    </strong>
                                </div>
                            </div>
                            <div class="flex-w flex-t p-b-4 pt-4 mt-3" style="border-top: 1px dashed #d9d9d9;">
                                <div class="size-208">
                                    <span class="mtext-101 cl2">
                                        Numero de cuenta:
                                    </span>
                                </div>
                                <div class="size-209">
                                    <strong class="text-danger productId header-cart-subtotal mtext-110 cl2">
                                    000052326250
                                    </strong>
                                </div>
                            </div>
                            <div class="flex-w flex-t p-b-4 pt-4 mt-3" style="border-top: 1px dashed #d9d9d9;">
                                <div class="size-208">
                                    <span class="mtext-101 cl2">
                                        Correo electreonico:
                                    </span>
                                </div>
                                <div class="size-209">
                                    <strong class="text-danger productId header-cart-subtotal mtext-110 cl2">
                                    ventas@importadoratatar.cl
                                    </strong>
                                </div>
                            </div>
                        </div>
						<h4 class="mtext-105 cl2 text-center p-b-15 mt-5 pt-5">Detalles de su compra</h4>

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
                        <div class="alert alert-success" role="alert" style="font-size: 18px;">
                        Le hemos enviado un correo electrónico con los pasos detallados para completar la transacción. Una vez que haya realizado la operación, por favor, póngase en contacto con nosotros para confirmar y agilizar el proceso de envío.
                        </div>  
                        <a href="/" class="mt-5 flex-c-m stext-101 cl0 size-116 bg1 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                        Regresar a la tienda
                        </a> 
				</div>
			</div>
		</div>
	</section>	
@endsection
    

        
