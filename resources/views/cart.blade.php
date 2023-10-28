@extends('layouts.web')


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
	<form class="bg0 p-t-75 p-b-85">
		<div class="container">
			<div class="row">
				<div class="col-sm-7 col-lg-7 m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Producto</th>
									<th class="column-2"></th>
									<th class="column-3 p-l-10">Precio</th>
									<th class="column-4">Cantidad</th>
									<th class="column-5">Total</th>
									<th class="column-5">Borrar</th>
								</tr>
								@foreach(session('cart', []) as $item)
								<tr class="table_row">
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

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product1" value="{{$item['quantity']}}">

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

								
							</table>
						</div>

						<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
							<div class="flex-w flex-m m-r-20 m-tb-5">
								<!-- <input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Coupon Code">
								<div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
									Aplicar coupón
								</div> -->
							</div>

							<div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
								Actualizar Carrito
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-12 col-lg-5 m-b-50">
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
								<span class="mtext-110 cl2">
								${{ session()->has('totalPrice') ? str_replace(',', '.', number_format(session('totalPrice'), 0, '.', ',')) : '0' }}
								</span>
							</div>
						</div>

						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									Envío:
								</span>
							</div>

							<div class="size-209 p-r-0-sm w-full-ssm">
								<p class="stext-111 cl6 p-t-2">
									There are no shipping methods available. Please double check your address, or contact us if you need any help.
								</p>
								
								<div class="p-t-15">
									<span class="stext-112 cl8">
										Información de envío
									</span>

									<div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
										<select name="region" id="regionSelect" class="js-select2" autocomplete="off">
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
										<input type="text" name="postcode" value="@if(auth()->check() && auth()->user()->zip) {{auth()->user()->zip}} @endif" class="stext-111 cl8 plh3 size-111 p-lr-15" placeholder="Codigo postal / Zip" autocomplete="off">
									</div>

									<div class="bor8 bg0 m-b-22">
										<textarea name="address" class="stext-111 cl8 plh3 size-111 p-lr-15" placeholder="Dirección" autocomplete="off">@if(auth()->check() && auth()->user()->address){{auth()->user()->address}}@endif</textarea>
									</div>

									<span class="stext-112 cl8">
										Empresa de envío <img src="/assets/images/local_shipping.png" style="position: relative;top: -1.4px;width:19px;">
									</span>
									<div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
									<select name="company_id" id="companySelect" class="js-select2" autocomplete="off" required>
											<option value="">Seleccione una...</option>
											@if(auth()->check() && auth()->user()->region_id)
													@foreach ($regions->find(auth()->user()->region_id)->companies as $company)
															<option value="{{ $company->id }}">{{ $company->name }}</option>
													@endforeach
											@endif
									</select>
										<div class="dropDownSelect2"></div>
									</div>
									
									<!-- <div class="flex-w">
										<div class="flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer">
											Actualizar Costos
										</div>
									</div> -->
										
								</div>
							</div>
						</div>

						<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="mtext-101 cl2">
									Total:
								</span>
							</div>

							<div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
								${{ session()->has('totalPrice') ? str_replace(',', '.', number_format(session('totalPrice'), 0, '.', ',')) : '0' }}
								</span>
							</div>
						</div>

						<button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
							Completar Pedido
						</button>
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
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});

	
	//al cambiar select region cambia el select empresa de envio si tiene esa region
	$(document).ready(function() {
    $('#regionSelect').on('change', function() {
        var regionId = $(this).val();
        var $companySelect = $('#companySelect');
        
        // Limpiar el select de compañías antes de cargar nuevas opciones
        $companySelect.empty();
        
        // Verificar si la región seleccionada tiene compañías
        if (regionId) {
            var companies = {!! json_encode($regions->pluck('companies', 'id')) !!};
            
            if (companies[regionId]) {
                $.each(companies[regionId], function(index, company) {
                    $companySelect.append($('<option>', {
                        value: company.id,
                        text: company.name
                    }));
                });
            }
        }
    });
    
    // Cargar automáticamente la compañía seleccionada si auth()->user()->region_id tiene una company asociada
    // var $companySelect = $('#companySelect');
    // var regionId = $('#regionSelect').val();
    
    // if (regionId) {
    //     var companies = {!! json_encode($regions->pluck('companies', 'id')) !!};
    //     var selectedCompany = companies[regionId][0]; // Supongamos que quieres la primera compañía de la lista
        
    //     if (selectedCompany) {
    //         $companySelect.append($('<option>', {
    //             value: selectedCompany.id,
    //             text: selectedCompany.name
    //         }));
    //     }
    // }
});

	</script>
@endsection