@extends('layouts.web')


@section('head')
    <title>Carrito de compras - {{ config('app.name') }}</title>
    <meta name="description" content="Artículos del carrito de compras - {{ config('app.name') }}">
    <meta property="og:title" content="Carrito de compras - {{ config('app.name') }}">
    <meta property="og:description" content="Artículos del carrito de compras {{ config('app.name') }}">
    <meta property="og:url" content="{{request()->url()}}">
    <meta property="og:type" content="website">
		<style>
			.error-message {
					color: red;
					font-size: 12px;
					margin-top: 5px;
			}
			.required-label {
					color: red;
			}
			/* #btnsubmit:hover{
				background:#c02a29 !important;
			} */
			#btnsubmit:disabled {
        background-color: #8B8B8B !important;
    	}
		</style>
@endsection


@section('content')
	<!-- breadcrumb -->
	<div class="container m-t-83">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="/" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Shoping Cart
			</span>
		</div>
	</div>
		

	<!-- Shoping Cart -->
	<form action="payments" method="POST" id="paymentForm" class="was-validated" class="bg0 p-t-75 p-b-85">
	@csrf
		<div class="container">
			<div class="row">
				<div class="col-sm-7 col-lg-12 m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<!-- Muestra los errores de validación -->
						@if ($errors->any())
								<div class="alert alert-danger mt-3">
										<ul>
												@foreach ($errors->all() as $error)
														<li>{{ $error }}</li>
												@endforeach
										</ul>
								</div>
						@endif
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart header-cart-wrapitem">
								<tr class="table_head">
									<th class="column-1">Producto</th>
									<th class="column-2"></th>
									<th class="column-3 p-l-10">Precio</th>
									<th class="">Stock</th>
									<th class="text-center">Cantidad</th>
									<th class="column-5">Total</th>
									<th class="column-5">Borrar</th>
								</tr>
								@if(session()->has('cart'))
								@foreach (session('cart') as $item)
								<tr product-id="{{$item['id']}}"  class="header-cart-item table_row">
									<td class="column-1">
										<div class="how-itemcart1">
											<img src="/assets/images/products/{{ $item['image1'] }}" alt="IMG">
										</div>
									</td>
									<td class="column-2"><a class="stext-104 cl5 hov-cl1 trans-04 js-name-b2 p-b-6" href="/item/{{ $item['url'] }}">{{ $item['name'] }}</a></td>
									<td class="column-3 p-l-10">{{ str_replace(',', '.', number_format($item['price'], 0, ',', '.')) }} </td>
									<td class="p-l-10">{{ $item['stock'] }}</td>
									<td class="">
										<div class="wrap-num-product flex-w m-auto m-r-0">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" value="{{$item['quantity']}}" min="1" max="{{$item['stock']}}" product-id="{{$item['id']}}" autocomplete="off">

											<div id="modal-cant-sum" data-max="{{$item['stock']}}" class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>
									</td>
									<td class="column-5 totalItemPrice" id="totalItemPrice{{$item['id']}}" >{{ str_replace(',', '.', number_format($item['price'] * $item['quantity'], 0, ',', '.')) }}</td>
									<td class="column-5">
										<a product-id="{{ $item['id'] }}" class="header-cart-item-info float-right quit-cart" style="cursor:pointer;">
											<span>Borrar</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="float: right;position: relative;top: -2px;"><path fill="currentColor" d="M9 3v1H4v2h1v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1V4h-5V3H9m0 5h2v9H9V8m4 0h2v9h-2V8Z"/></svg>
										</a>
									</td>
								</tr>
								@endforeach
								@endif

								
							</table>
						</div>

						<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
							<div class="flex-w flex-m m-r-20 m-tb-5">
								<!-- <input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Coupon Code">
								<div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
									Aplicar coupón
								</div> -->
							</div>

							<div onclick="location.reload();" class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
								Actualizar Carrito
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-12 col-lg-12 m-b-50">
					<div class="bor10 m-l-25 m-r--38 m-lr-0-xl p-t-35 p-b-20 p-lr-40">
						<h4 class="mtext-109 cl2 p-b-30">
							Resumen
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Subtotal:
								</span>
							</div>

							<div class="size-209">
								<span class="productId header-cart-subtotal mtext-110 cl2">
								${{ session()->has('totalPrice') ? str_replace(',', '.', number_format(session('totalPrice'), 0, '.', ',')) : '0' }}
								</span>
							</div>
						</div>


						@if(!empty(session('cart', [])))
						<!-- seccion datos cliente -->
						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									Datos del cliente:
								</span>
							</div>

							<div class="size-209 p-r-0-sm w-full-ssm">
								<!-- <p class="stext-111 cl6 p-t-2">
								Si no hay métodos de envío disponibles. Por favor verifique su dirección o contáctenos si necesita ayuda.
								</p> -->
								
								<div class="p-t-15">
									<span class="stext-112 cl8">
										Información básica
									</span>

									<div class="bor8 bg0 m-b-12">
										<input type="text" name="userName" value="@if(auth()->check() && auth()->user()->name) {{auth()->user()->name}} @endif" class="form-control stext-111 cl8 plh3 size-111 p-lr-15" maxlength="100" placeholder="Nombre y apellido"  required>
									</div>

									<div class="bor8 bg0 m-b-22">
										<input type="text" name="userRut" value="@if(auth()->check() && auth()->user()->rut) {{auth()->user()->rut}} @endif" class="form-control stext-111 cl8 plh3 size-111 p-lr-15" maxlength="20" placeholder="RUT" >
									</div>

									<div class="bor8 bg0 m-b-22">
										<input type="email" name="userEmail" value="@if(auth()->check() && auth()->user()->email) {{auth()->user()->email}} @endif" class="form-control stext-111 cl8 plh3 size-111 p-lr-15" placeholder="Correo electrónico" maxlength="64"  required>
									</div>

									<div class="bor8 bg0 m-b-22">
										<div class="input-group">
											<div class="input-group-prepend">
												<select name="userCountryCode" class="form-control w-100" required>
													<!-- <option value="" selected>Seleccione uno...</option> -->
													<option value="+56" {{ auth()->check() && auth()->user()->countryCode == '+56' ? 'selected' : 'selected' }}>Chile (+56)</option>
													<option value="+54" {{ auth()->check() && auth()->user()->countryCode == '+54' ? 'selected' : '' }}>Argentina (+54)</option>
													<option value="+57" {{ auth()->check() && auth()->user()->countryCode == '+57' ? 'selected' : '' }}>Colombia (+57)</option>
													<option value="+52" {{ auth()->check() && auth()->user()->countryCode == '+52' ? 'selected' : '' }}>Mexico (+52)</option>
													<option value="+51" {{ auth()->check() && auth()->user()->countryCode == '+51' ? 'selected' : '' }}>Perú (+51)</option>
													<option value="+507" {{ auth()->check() && auth()->user()->countryCode == '+507' ? 'selected' : '' }}>Panama (+507)</option>
													<option value="+34" {{ auth()->check() && auth()->user()->countryCode == '+34' ? 'selected' : '' }}>España (+34)</option>
													<option value="+598" {{ auth()->check() && auth()->user()->countryCode == '+598' ? 'selected' : '' }}>Uruguay (+598)</option>
													<option value="+1" {{ auth()->check() && auth()->user()->countryCode == '+1' ? 'selected' : '' }}>USA (+1)</option>
												</select>
											</div>
											<input type="text" id="cel" name="userCel" value="@if(auth()->check() && auth()->user()->cel) {{auth()->user()->cel}} @endif" class="form-control" maxlength="20"   placeholder="Teléfono / Cel" required>
										</div>
									</div>

									<!-- <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
										<select name="region" id="regionSelect" class="js-select2" autocomplete="off" required>
											<option value="">Selecciona tu región...</option>
										@if($regions)
												@foreach ($regions as $region)
														<option value="{{$region->id}}" @if(auth()->check() && auth()->user()->region_id == $region->id) selected @endif>{{$region->name}}</option>
												@endforeach
										@endif
										</select>
										<div class="dropDownSelect2"></div>
									</div>

									<div class="bor8 bg0 m-b-12">
										<input type="text" name="city" value="@if(auth()->check() && auth()->user()->city) {{auth()->user()->city}} @endif" class="stext-111 cl8 plh3 size-111 p-lr-15" placeholder="Ciudad" autocomplete="off">
									</div>

									<div class="bor8 bg0 m-b-22">
										<textarea name="address" class="stext-111 cl8 plh3 size-111 p-lr-15" placeholder="Dirección" autocomplete="off">@if(auth()->check() && auth()->user()->address){{auth()->user()->address}}@endif</textarea>
									</div> -->

										
								</div>
							</div>
						</div>
						
						
						<!-- seccion envios -->
						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									Envío:
								</span>
							</div>

							<div class="size-209 p-r-0-sm w-full-ssm">
								<span class="stext-112 cl8">
										Como retiras tu compra
								</span>
								<div class="bg0 m-b-12 m-t-9" id="">
									<div class="row">
										<div class="col-6 pr-0">
											<div class="form-check pb-2 bor8 p-l-12 p-t-4">
												<input type="radio" class="form-check-input formaship" id="shipp-1" name="shipping" value="local" style="top: 6px !important;left: 26px;" autocomplete="off" required>
												<label class="form-check-label" for="shipp-1">
													Retiro en local <img src="/assets/images/box.png" style="position: relative;top: -1.4px;width:19px;">
												</label>
											</div>
										</div>
										<div class="col-6">
											<div class="form-check pb-2 bor8 p-l-12 p-t-4">
												<input type="radio" class="form-check-input formaship" id="shipp-2" name="shipping" value="envio" style="top: 6px !important;left: 26px;" autocomplete="off" required>
												<label class="form-check-label" for="shipp-2">
													Qué me lo envíen <img src="/assets/images/local_shipping.png" style="position: relative;top: -1px;width:19px;">
												</label>
											</div>
										</div>
									</div>
								</div>


								<div id="contEnvio" style="display: none;">
									<p class="stext-111 cl6 p-t-10 alert alert-info">
										Todos los envíos tienen un costo base de <strong>$5000</strong> pesos chilenos
									</p>
									<span class="stext-112 cl8">
										Información de envío
									</span>
									<div class="p-t-15">
										<!-- info de direcccion -->
											<label class="mt-1">Selecciona tu región:</label>
											<div class="rs1-select2 rs2-select2 bg0 m-b-12 m-t-9">
												<select name="userRegion" id="regionSelect" class="form-control js-select2" autocomplete="off" >
													<option value="" selected>Selecciona tu región...</option>
												@if($regions)
														@foreach ($regions as $region)
																<option value="{{$region->id}}" >{{$region->name}}</option>
														@endforeach
												@endif
												</select>
												<div class="dropDownSelect2"></div>
												<div class="invalid-feedback invalid-region">
													Selecciona una región
												</div>
											</div>
											<label class="mb-1">Tu ciudad:</label>
											<div class="bor8 bg0 m-b-12">
												<input type="text" name="userCity" id="userCity" value="@if(auth()->check() && auth()->user()->city) {{auth()->user()->city}} @endif" class="form-control stext-111 cl8 plh3 size-111 p-lr-15" maxlength="100" placeholder="Ciudad" required>
											</div>
										<!-- selecciona sucursal -->
											<span class="stext-112 cl8" id="labelSelectCompany">
												Selecciona Empresa de envío <img src="/assets/images/local_shipping.png" style="position: relative;top: -1.4px;width:19px;">
											</span>
											<div class=" bg0 m-b-32 m-t-9" id="companiesContainer">
													@if(auth()->check() && auth()->user()->region_id)
															@foreach ($regions->find(auth()->user()->region_id)->companies as $company)
																	<div class="form-check pb-2 bor8 p-l-12 p-t-4">
																		<label class="form-check-label" for="{{ $company->id }}">
																				<input type="radio" name="shippingCompanyId" id="{{ $company->id }}" value="{{ $company->id }}" class="sucursal form-control form-check-input" data-offices="{{ $company->offices }}" style="top: 10px !important;" autocomplete="off">
																				<img src="/assets/images/companies/{{ $company->image }}" style="width: 100px;"> {{ $company->name }}
																			</label>
																	</div>
															@endforeach
													@endif
											</div>
											<!-- retiro sucursal / envien a casa -->
											<div id="contDonde" style="display:none">
												<span class="stext-112 cl8">
														A donde enviamos tu pedido
												</span>
												<div class="bg0 m-b-12 m-t-9" id="">
													<div class="row">
														<div class="col-sm-12 col-md-6 pr-0">
															<div class="form-check pb-2 bor8 p-l-12 p-t-4">
																<input type="radio" class="form-check-input modeship" name="shippingTwo" value="sucursal" id="shipp-mode-1" style="top: 5px !important;left: 26px;" autocomplete="off">
																<label class="form-check-label" for="shipp-mode-1">
																	Retiro en sucursal de mi zona <img src="/assets/images/local_shipping.png" style="position: relative;top: -1px;width:19px;"><img src="/assets/images/store.png" style="position: relative;top: -1px;width:19px;">
																</label>
															</div>
														</div>
														<div class="col-sm-12 col-md-6">
															<div class="form-check pb-2 bor8 p-l-12 p-t-4">
																<input type="radio" class="form-check-input modeship" name="shippingTwo" value="casa" id="shipp-mode-2" style="top: 5px !important;left: 26px;" autocomplete="off">
																<label class="form-check-label" for="shipp-mode-2">
																Enviarlo a mi dirección <img src="/assets/images/local_shipping.png" style="position: relative;top: -1px;width:19px;"><img src="/assets/images/home.png" style="position: relative;top: -1px;width:19px;">
																</label>
															</div>
														</div>
														<!-- sucursales empresa retiro en region seleccionada -->
														<div class="col-12 input-group-prepend">
															<select name="shippingOfficeAddress" id="SelectOffices" class="form-control w-100" autocomplete="off" style="display: none;">
																<option value="" selected>Seleccione una sucursal...</option>
															</select>
														</div>
														<div id="contUserAddress" class="col-12 input-group-prepend" style="display: none;">
															<label class="mb-1" id="labeluserAddress">Tu dirección:</label>
															<div class="bor8 bg0 m-b-22 has-validation">
																<textarea name="userAddress" id="userAddress" class="form-control stext-111 cl8 plh3 size-111 p-lr-15" placeholder="Escribir tu dirección / villa o condominio / referencia..." maxlength="255" required="false">@if(auth()->check() && auth()->user()->address){{auth()->user()->address}}@endif</textarea>
															</div>
														</div>

													</div>
												</div>
											</div>


									</div>
									<!-- <div class="flex-w">
										<div class="flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer">
											Actualizar Costos
										</div>
									</div> -->
								</div>


							</div>
						</div>
							

					<!-- seccion forma de pago -->
					<div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									Método de pago:
								</span>
							</div>
							<div class="size-209 p-r-0-sm w-full-ssm">
								<!-- <p class="stext-111 cl6 p-t-2">
								Si no hay métodos de envío disponibles. Por favor verifique su dirección o contáctenos si necesita ayuda.
								</p> -->
								
								<div class="p-t-15">
									<!-- <span class="stext-112 cl8">
										Información de pago
									</span> -->
									<span class="stext-112 cl8" id="labelSelectMetodoPago">
										Selecciona Método de Pago <img src="/assets/images/credit.png" style="position: relative;top: -1.4px;width:19px;">
									</span>
									<div class=" bg0 m-b-12 m-t-9" id="">
										<!-- <div class="form-check pb-2 bor8 p-l-12 p-t-4">
											<label class="form-check-label" for="method-1">
													<input type="radio" class="pay form-check-input" id="method-1" name="payMethod" value="mercadopago" style="top: 6px !important;" autocomplete="off" required>
													<img src="/assets/images/mercadopago.png" class="ml-2" style="width: 100px;">
												</label>
										</div> -->
										<div class="form-check pb-2 bor8 p-l-12 p-t-4">
											<label class="form-check-label" for="method-2">
													<input type="radio" class="pay form-check-input" id="method-2" name="payMethod" value="webpay" style="top: 6px !important;" autocomplete="off" required>
													<img src="/assets/images/webpay2.png" class="ml-2" style="width: 100px;">
												</label>
										</div>
										<div class="form-check pb-2 bor8 p-l-12 p-t-4">
											<label class="form-check-label" for="method-3">
													<input type="radio" class="pay form-check-input" id="method-3" name="payMethod" value="banco" style="top: 6px !important;" autocomplete="off" required>
													<img src="/assets/images/banco.jpg" class="ml-2" style="width: 125px;">
												</label>
										</div>
									</div>

								</div>
							</div>
						</div>



						<!-- seccion total -->
						<div class="flex-w flex-t p-b-4 pt-4">
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
						<div class="flex-w flex-t p-t-27 p-b-5" id="priceShipping" style="display:none;">
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
						<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="mtext-101 cl2">
									Total:
								</span>
							</div>
							<div class="size-209 p-t-1">
								<span class="mtext-110 cl2 header-cart-subtotal" id="totalPriceDisplay" data-total="{{ session()->has('totalPrice') ? str_replace(',', '.', number_format(session('totalPrice'), 0, '.', ',')) : '0' }}">
								${{ session()->has('totalPrice') ? str_replace(',', '.', number_format(session('totalPrice'), 0, '.', ',')) : '0' }}
								</span>
							</div>
						</div>


						<div>
							<div class="accordion mb-3" id="accordionTerms">
									<div class="card pl-3">
											<div class="card-header" id="headingOne" style="background: white;">
													<div class="form-check">
															<input type="checkbox" class="form-check-input" id="termsCheckbox" checked="false" autocomplete="off" style="margin-top: .65rem !important">
															<button class="btn btn-link pl-1" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
															Acepto las Condiciones de Compra
															</button>
													</div>
											</div>
											<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionTerms">
													<div class="card-body">
															<h5>Condiciones de Compra en ImportadoraTatar.cl:</h5><hr>
															<p>¡Bienvenido a Importadora Tatar! Queremos asegurarnos de que tengas una experiencia de compra clara y satisfactoria con nosotros. <strong>A continuación, detallamos nuestras condiciones en 7 pasos para tu conocimiento:</strong></p>
															<hr>
															<ol>
																	<li><strong>Paso 1: Explora Nuestro Catálogo:</strong><br>Navega por nuestra amplia selección de productos y encuentra todo lo que necesitas. Estamos comprometidos a ofrecer productos de calidad para satisfacer tus necesidades.</li>
																	<li><strong>Paso 2: Realiza tu Pedido:</strong><br>Selecciona los productos deseados y completa el proceso de compra. Asegúrate de revisar tu carrito antes de confirmar la orden para evitar errores.</li>
																	<li><strong>Paso 3: Pago Seguro:</strong><br>Garantizamos un proceso de pago seguro para proteger tu información personal. Aceptamos diversas formas de pago para tu comodidad.</li>
																	<li><strong>Paso 4: Confirmación de Pedido:</strong><br>Recibirás una confirmación de tu pedido por correo electrónico. Revísalo detenidamente para asegurarte de que todos los detalles sean correctos.</li>
																	<li><strong>Paso 5: Envío Rápido:</strong><br>Nos esforzamos por procesar y enviar tu pedido lo más rápido posible. Mantente al tanto de las actualizaciones de seguimiento proporcionadas por nuestro equipo.</li>
																	<li><strong>Paso 6: Política de No Devoluciones:</strong><br>En Importadora Tatar, queremos ser transparentes sobre nuestra política de no devoluciones. Una vez realizada la compra, no aceptamos devoluciones. Sin embargo, entendemos que pueden surgir situaciones especiales.</li>
																	<li><strong>Paso 7: Cambios y Compensaciones Futuras:</strong><br>A pesar de nuestra política de no devoluciones, estamos comprometidos a brindarte el mejor servicio. En situaciones excepcionales, como productos defectuosos o errores en el envío, ofrecemos la posibilidad de cambios o compensaciones futuras. Contáctanos directamente para discutir cualquier problema y buscaremos la mejor solución para ti.</li>
															</ol>
															<p>En Importadora Tatar, valoramos a nuestros clientes y nos esforzamos por garantizar tu satisfacción. ¡Gracias por elegirnos!</p>
															<p>Para cualquier pregunta o inquietud, no dudes en ponerte en contacto con nuestro equipo de atención al cliente.</p>
													</div>
											</div>
									</div>
								</div>
						</div>


						<button type="submit" id="btnsubmit" class="flex-c-m stext-101 cl0 size-116 bg1 bor1 hov-btn3 p-lr-15 trans-04 pointer" style="z-index:9999999;">
							Completar Pedido
						</button>
						@else
						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									Carrito Vacio
								</span>
							</div>
						</div>
						@endif
					</div>
					
				</div>
			</div>
		</div>
	</form>
		
@endsection

@section('script')
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script> -->
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			// var ps = new PerfectScrollbar(this, {
			// 	wheelSpeed: 1,
			// 	scrollingThreshold: 1000,
			// 	wheelPropagation: false,
			// });

			// $(window).on('resize', function(){
			// 	ps.update();
			// })
		});




		// (function () {
		// 	'use strict'

		// 	// Fetch all the forms we want to apply custom Bootstrap validation styles to
		// 	var forms = document.querySelectorAll('.needs-validation')

		// 	// Loop over them and prevent submission
		// 	Array.prototype.slice.call(forms)
		// 		.forEach(function (form) {
		// 			form.addEventListener('submit', function (event) {
		// 				console.log('inputfrom0')
		// 				if (!form.checkValidity()) {
		// 					event.preventDefault()
		// 					//event.stopPropagation()
		// 				}else{
		// 					console.log('problema ')
		// 					event.submit();
		// 				}
		// 				form.classList.add('was-validated')
		// 			}, false)
		// 		})
		// })()


	//al cambiar select region , carga todos las empresas de envio de la nueva region selecionada
	$(document).ready(function() {

		//Bloquea completar pedido si no esta check terminos
		var checkbox = $('#termsCheckbox');
		var button = $('#btnsubmit');
		checkbox.change(function () {
				button.prop('disabled', !checkbox.prop('checked'));
		});


		//agregamos borde al select region
		$('.select2').addClass('bor8');


		$('#regionSelect').on('change', function() {
			$('.invalid-region').hide();
				var regionId = $(this).val();
				var $companyContainer = $('#companiesContainer');
				// Limpiar el contenedor de compañías antes de cargar nuevas opciones
				$companyContainer.empty();
				// Verificar si la región seleccionada tiene compañías
				if (regionId) {
						var companies = {!! json_encode($regions->pluck('companies', 'id')) !!};
						//console.log('companies', companies);
						if (companies[regionId]) {
								// Obtener las oficinas correspondientes a regionId desde la variable $offices
								// Procesa las oficinas y constrxuye tus elementos HTML
								$.each(companies[regionId], function(index, company) {
										var offices = {!! json_encode($offices) !!}.filter(function(office) {
												return office.region_id == regionId && office.company_id == company.id;
										});
										var officesJSON = JSON.stringify(offices);
										// console.log('regionId', regionId)
										// console.log('company', company.id)
										// console.log('offices', offices)
										var companyHtml = '<div class="form-check pb-2 bor8 p-l-12 p-t-4">';
										companyHtml += '<label class="form-check-label" for="' + company.id + '">';
										companyHtml += '<input type="radio" class="sucursal form-check-input" id="' + company.id + '" name="shippingCompanyId" value="' + company.id + '"  data-offices=\'' + officesJSON + '\' style="top: 10px !important;" required>';
										companyHtml += '<img src="/assets/images/companies/' + company.image + '" style="width: 100px;"> ' + company.name;
										companyHtml += '</label>';
										companyHtml += '</div>';

										var $companyElement = $(companyHtml);
										$companyContainer.append($companyElement);
								});
						}
				}
		});



		//muestra el select de sucursales si se selecciona: retira en sucursal de su zona
		$('.modeship').on('change', function() {
        var selectedValue = $(this).val();
        if (selectedValue === 'sucursal') {
            $('#SelectOffices').show(); // Mostrar el elemento select si se selecciona 'sucursal'
            $('#contUserAddress').hide(); // Mostrar el elemento direccion
						$('#SelectOffices').prop('required', true);
						$('#userAddress').prop('required', false);
        } else {
            $('#SelectOffices').hide(); // Ocultar el elemento select en caso contrario
						$('#SelectOffices').prop('required', false);
            $('#contUserAddress').show(); // Ocultar el elemento direccion
						$('#userAddress').prop('required', true);
        }
    });

		//llenamos el select de oficinas de la empresa de envio que se seleciono
		$(document).on('change', 'input[type="radio"].sucursal', function() {
			console.log('change sucursal radiobutton');
			$('#labelSelectCompany').css('color', '#666666');
			$('#contDonde').show();
			var selectedCompanyId = $(this).val(); // ID de la empresa seleccionada
			var selectedRegionId = $('#regionSelect').val(); // Valor seleccionado en el elemento #regionSelect
			var data = $(this).attr('data-offices'); // Obtener los datos de oficinas desde el atributo data-offices
			var officesData = JSON.parse(data);
			//console.log('json', json);

			// Filtrar las oficinas por region_id
			var filteredOffices = officesData.filter(function(office) {
				return office.region_id == selectedRegionId;
			});
			// Limpiar y actualizar el elemento select con las oficinas filtradas
			var selectOffices = $('#SelectOffices');
			selectOffices.empty();
			// Agregar la opción "Seleccione una sucursal..." como la primera opción y seleccionarla por defecto
			selectOffices.append(new Option('Seleccione una sucursal...', '', true, true));
			// Agregar las oficinas filtradas al elemento select
			$.each(filteredOffices, function(index, office) {
					selectOffices.append(new Option(office.address_office, office.address_office));
			});
		});




		// muestra oculta div envio o retiro local - y suma el precio de envio al total
		$('.formaship').change(function() {
				var initialTtotalPrice = $('#totalPriceDisplay').attr('data-total');
				var initialTtotalPrice = parseInt(initialTtotalPrice.replace(/[^\d]/g, '')); // Usar parseInt
				var currentPrice = $('#totalPriceDisplay').text();
				var currentPriceValue = parseInt(currentPrice.replace(/[^\d]/g, '')); // Usar parseInt
				var newPriceValue = currentPriceValue; // Inicializar con el valor actual

				$('#contEnvio, #priceShipping').toggle(this.value === 'envio');

				if (this.value === 'envio') {
						$('#regionSelect').prop('required', true);
						$('#userCity').prop('required', true);
						$('#userAddress').prop('required', true);
						$('.modeship').prop('required', true);
						newPriceValue += 5000;
				} else if(this.value === 'local'){ // retira en local
						$('#regionSelect').prop('required', false);
						$('#userCity').prop('required', false);
						$('#userAddress').prop('required', false);
						$('.modeship').prop('required', false);
						if (currentPriceValue == initialTtotalPrice + 5000) {
								newPriceValue -= 5000; // Restar $5000 si no se selecciona 'envio'
						}
				}
				var newPriceString = '$' + newPriceValue.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
				$('#totalPriceDisplay').text(newPriceString);
		});



		//--------------------------------
		//sumar restar precio dentro del item
		//--------------------------------

// Click event for the plus button
$('.btn-num-product-up').on('click', function() {
    var quantityInput = $(this).siblings('.num-product');
    var currentQuantity = parseInt(quantityInput.val());
    var maxStock = parseInt($(this).prev().attr('max'));
    var productId = parseInt($(this).prev().attr('product-id'));

    if (currentQuantity <= maxStock) {
        updateTotalItemPrice(quantityInput, productId);
    }
});

// Click event for the minus button
$('.btn-num-product-down').on('click', function() {
    var quantityInput = $(this).siblings('.num-product');
    var currentQuantity = parseInt(quantityInput.val());
    var productId = parseInt($(this).next().attr('product-id'));

		console.log('currentQuantity', currentQuantity)
    if (currentQuantity >= 1) {
				console.log('resta');
        updateTotalItemPrice(quantityInput, productId, -1); // Pass -1 to indicate subtraction
    }
});

// Function to update the total item price
function updateTotalItemPrice(quantityInput, productId, multiplier) {
    var row = quantityInput.closest('.header-cart-item');
    var price = parseFloat(row.find('.column-3').text().replace(',', '.'));
    var newQuantity = parseInt(quantityInput.val()) ;
    var newTotalPrice = price * newQuantity;
    var formattedTotalPrice = newTotalPrice.toFixed(3).replace(/\B(?=(\d{3})+(?!\d))/g, '.');
    row.find('.totalItemPrice').text(formattedTotalPrice);

    // Update the subtotal with productId and newQuantity
    updateSubtotal(productId, newQuantity);
}

// Function to update subtotal
function updateSubtotal(productId, newQuantity) {
    var subtotal = 0;
    $('.header-cart-item').each(function () {
        var price = parseFloat($(this).find('.column-3').text().replace(',', '.'));
        var quantity = parseInt($(this).find('.num-product').val());
        subtotal += price * quantity;
    });
    // Send productId and newQuantity via AJAX
		var csrfToken = $('meta[name="csrf-token"]').attr('content'); // Obtener el token CSRF
    $.ajax({
        method: 'POST',
        url: `actualizar-carrito/${productId}`, // Replace with your actual endpoint
        data: { 
					_token: csrfToken,
					quantity: newQuantity 
				},
        success: function(response) {
            console.log(response.totalPrice);
						let totalPrice = response.totalPrice
						var formattedSubtotal = totalPrice.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, '.');//format 
    				$('.header-cart-subtotal').text('$' + formattedSubtotal);
        },
        error: function(error) {
            console.error('Error updating subtotal:', error);
        }
    });
}










});
</script>
@endsection