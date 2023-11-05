@extends('layouts.web')


@section('head')
    <title>Carrito de compras - {{ config('app.name') }}</title>
    <meta name="description" content="Artículos del carrito de compras - {{ config('app.name') }}">
    <meta property="og:title" content="Carrito de compras - {{ config('app.name') }}">
    <meta property="og:description" content="Artículos del carrito de compras {{ config('app.name') }}">
    <meta property="og:url" content="{{request()->url()}}">
    <meta property="og:type" content="website">
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
	<form action="payments" method="POST" class="php-email-form" class="bg0 p-t-75 p-b-85">
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
									<th class="column-4">Cantidad</th>
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
									<td class="column-2">{{ $item['name'] }}</td>
									<td class="column-3 p-l-10">{{ str_replace(',', '.', number_format($item['price'], 0, ',', '.')) }} </td>
									<td class="column-4">
										<div class="wrap-num-product flex-w m-l-auto m-r-0">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" value="{{$item['quantity']}}">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>
									</td>
									<td class="column-5">{{ str_replace(',', '.', number_format($item['price'] * $item['quantity'], 0, ',', '.')) }}</td>
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
										<input type="text" name="userName" value="@if(auth()->check() && auth()->user()->name) {{auth()->user()->name}} @endif" class="stext-111 cl8 plh3 size-111 p-lr-15" placeholder="Nombre y apellido" autocomplete="off" required>
									</div>

									<div class="bor8 bg0 m-b-22">
										<input type="text" name="userRut" value="@if(auth()->check() && auth()->user()->rut) {{auth()->user()->rut}} @endif" class="stext-111 cl8 plh3 size-111 p-lr-15" placeholder="RUT" autocomplete="off">
									</div>

									<div class="bor8 bg0 m-b-22">
										<input type="email" name="userEmail" value="@if(auth()->check() && auth()->user()->email) {{auth()->user()->email}} @endif" class="stext-111 cl8 plh3 size-111 p-lr-15" placeholder="Correo electrónico" autocomplete="off">
									</div>

									<div class="bor8 bg0 m-b-22">
										<div class="input-group">
											<div class="input-group-prepend">
												<select name="userCountryCode" class="form-control w-100" autocomplete="off" required>
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
											<input type="text" id="cel" name="userCel" value="@if(auth()->check() && auth()->user()->cel) {{auth()->user()->cel}} @endif" class="form-control" maxlength="20"   placeholder="Teléfono / Cel" autocomplete="off" required>
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
											<div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
												<select name="userRegion" id="regionSelect" class="js-select2" autocomplete="off" required>
													<option value="">Selecciona tu región...</option>
												@if($regions)
														@foreach ($regions as $region)
																<option value="{{$region->id}}" @if(auth()->check() && auth()->user()->region_id == $region->id) selected @endif>{{$region->name}}</option>
														@endforeach
												@endif
												</select>
												<div class="dropDownSelect2"></div>
											</div>
											<label class="mb-1">Tu ciudad:</label>
											<div class="bor8 bg0 m-b-12">
												<input type="text" name="userCity" value="@if(auth()->check() && auth()->user()->city) {{auth()->user()->city}} @endif" class="stext-111 cl8 plh3 size-111 p-lr-15" placeholder="Ciudad" autocomplete="off">
											</div>
											<label class="mb-1">Tu dirección:</label>
											<div class="bor8 bg0 m-b-22">
												<textarea name="userAddress" class="stext-111 cl8 plh3 size-111 p-lr-15" placeholder="Dirección" autocomplete="off">@if(auth()->check() && auth()->user()->address){{auth()->user()->address}}@endif</textarea>
											</div>
										<!-- selecciona sucursal -->
											<span class="stext-112 cl8">
												Selecciona Empresa de envío <img src="/assets/images/local_shipping.png" style="position: relative;top: -1.4px;width:19px;">
											</span>
											<div class=" bg0 m-b-32 m-t-9" id="companiesContainer">
													@if(auth()->check() && auth()->user()->region_id)
															@foreach ($regions->find(auth()->user()->region_id)->companies as $company)
																	<div class="form-check pb-2 bor8 p-l-12 p-t-4">
																		<label class="form-check-label" for="{{ $company->id }}">
																				<input type="radio" name="shippingCompanyId" id="{{ $company->id }}" value="{{ $company->id }}" class="sucursal form-check-input" data-offices="{{ $company->offices }}" style="top: 10px !important;" autocomplete="off">
																				<img src="/assets/images/companies/{{ $company->image }}" style="width: 100px;"> {{ $company->name }}
																			</label>
																	</div>
															@endforeach
													@endif
											</div>
											<!-- retiro sucursal / envien a casa -->
											<div  id="cont">
												<span class="stext-112 cl8">
														A donde enviamos tu pedido
												</span>
												<div class="bg0 m-b-12 m-t-9" id="">
													<div class="row">
														<div class="col-6 pr-0">
															<div class="form-check pb-2 bor8 p-l-12 p-t-4">
																<input type="radio" class="form-check-input modeship" name="shippingTwo" value="sucursal" id="shipp-mode-1" style="top: 6px !important;left: 26px;" autocomplete="off">
																<label class="form-check-label" for="shipp-mode-1">
																	Retiro en sucursal de mi zona <img src="/assets/images/local_shipping.png" style="position: relative;top: -1px;width:19px;"><img src="/assets/images/store.png" style="position: relative;top: -1px;width:19px;">
																</label>
															</div>
														</div>
														<div class="col-6">
															<div class="form-check pb-2 bor8 p-l-12 p-t-4">
																<input type="radio" class="form-check-input modeship" name="shippingTwo" value="casa" id="shipp-mode-2" style="top: 6px !important;left: 26px;" autocomplete="off">
																<label class="form-check-label" for="shipp-mode-2">
																	Qué lo envíen a mi dirección <img src="/assets/images/local_shipping.png" style="position: relative;top: -1px;width:19px;"><img src="/assets/images/home.png" style="position: relative;top: -1px;width:19px;">
																</label>
															</div>
														</div>
														<!-- sucursales empresa retiro en region seleccionada -->
														<div class="col-12 input-group-prepend">
															<select name="shippingOfficeAddress" id="SelectOffices" class="form-control w-100" autocomplete="off" style="display: none;">
																<option value="" selected>Seleccione una sucursal...</option>
															</select>
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
									<span class="stext-112 cl8">
										Selecciona Método de Pago <img src="/assets/images/credit.png" style="position: relative;top: -1.4px;width:19px;">
									</span>
									<div class=" bg0 m-b-12 m-t-9" id="">
										<div class="form-check pb-2 bor8 p-l-12 p-t-4">
											<label class="form-check-label" for="method-1">
													<input type="radio" class="form-check-input" id="method-1" name="payMethod" value="mercado-pago" style="top: 6px !important;" autocomplete="off" required>
													<img src="/assets/images/mercadopago.png" class="ml-2" style="width: 100px;">
												</label>
										</div>
										<div class="form-check pb-2 bor8 p-l-12 p-t-4">
											<label class="form-check-label" for="method-2">
													<input type="radio" class="form-check-input" id="method-2" name="payMethod" value="webpay" style="top: 6px !important;" autocomplete="off" required>
													<img src="/assets/images/webpay.png" class="ml-2" style="width: 100px;">
												</label>
										</div>
										<div class="form-check pb-2 bor8 p-l-12 p-t-4">
											<label class="form-check-label" for="method-3">
													<input type="radio" class="form-check-input" id="method-3" name="payMethod" value="banco" style="top: 6px !important;" autocomplete="off" required>
													<img src="/assets/images/banco.jpg" class="ml-2" style="width: 125px;">
												</label>
										</div>
									</div>

								</div>
							</div>
						</div>



						<!-- seccion total -->
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
								<span class="mtext-110 cl2 header-cart-subtotal" id="totalPriceDisplay">
								${{ session()->has('totalPrice') ? str_replace(',', '.', number_format(session('totalPrice'), 0, '.', ',')) : '0' }}
								</span>
							</div>
						</div>

						<button class="flex-c-m stext-101 cl0 size-116 bg1 bor1 hov-btn3 p-lr-15 trans-04 pointer">
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
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

	
	//al cambiar select region , carga todos las empresas de envio de la nueva region selecionada
	$(document).ready(function() {
    $('#regionSelect').on('change', function() {
        var regionId = $(this).val();
        var $companyContainer = $('#companiesContainer');
        // Limpiar el contenedor de compañías antes de cargar nuevas opciones
        $companyContainer.empty();
        // Verificar si la región seleccionada tiene compañías
        if (regionId) {
            var companies = {!! json_encode($regions->pluck('companies', 'id')) !!};

            if (companies[regionId]) {
                $.each(companies[regionId], function(index, company) {
                    // Crear la estructura HTML para cada compañía en el formato deseado
                    var companyHtml = '<div class="form-check pb-2 bor8 p-l-12 p-t-4">';
                    companyHtml += '<label class="form-check-label" for="' + company.id + '">';
                    companyHtml += '<input type="radio" class="form-check-input" id="' + company.id + '" name="company_id" value="' + company.id + '" style="top: 10px !important;">';
                    companyHtml += '<img src="/assets/images/companies/' + company.image + '" style="width: 100px;"> ' + company.name;
                    companyHtml += '</label>';
                    companyHtml += '</div>';

                    // Agregar la estructura HTML de la compañía al contenedor de compañías
                    $companyContainer.append(companyHtml);
                });
            }
        }
		});

		//muestra el select de sucursales si se selecciona: retira en sucursal de su zona
		$('.modeship').on('change', function() {
        var selectedValue = $(this).val();
        if (selectedValue === 'sucursal') {
            $('#SelectOffices').show(); // Mostrar el elemento select si se selecciona 'sucursal'
						$('#SelectOffices').prop('required', true);
        } else {
            $('#SelectOffices').hide(); // Ocultar el elemento select en caso contrario
						$('#SelectOffices').prop('required', false);
        }
    });

		//llenamos el select de oficinas de la empresa de envio que se seleciono
		$('input[type="radio"].sucursal').on('change', function() {
			var selectedCompanyId = $(this).val(); // ID de la empresa seleccionada
			var selectedRegionId = $('#regionSelect').val(); // Valor seleccionado en el elemento #regionSelect
			var officesData = $(this).data('offices'); // Obtener los datos de oficinas desde el atributo data-offices
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
			$('#contEnvio, #priceShipping').toggle(this.value === 'envio');
			var currentPrice = $('#totalPriceDisplay').text();
			var currentPriceValue = parseInt(currentPrice.replace(/[^\d]/g, '')); // Usar parseInt
			if (this.value === 'envio') {
				var newPriceValue = currentPriceValue + 5000;
			} else {
				var newPriceValue = currentPriceValue - 5000; // Restar $5000 si no se selecciona 'envio'
			}
			var newPriceString = '$' + newPriceValue.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
			$('#totalPriceDisplay').text(newPriceString);
		});


});
</script>
@endsection