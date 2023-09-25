@extends('layouts.web')


@section('head')
<link rel="stylesheet" type="text/css" href="/assets/styles/cart_styles.css">
<link rel="stylesheet" type="text/css" href="/assets/styles/cart_responsive.css">
<link rel="stylesheet" type="text/css" href="/assets/styles/product_styles.css">
@endsection


@section('content')
<div class="cart_section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 offset-lg-1">
					<div class="cart_container">
						<div class="cart_title">Carrito de compras</div>
						<div class="cart_items mt-4">
							<ul class="cart_list">

							@foreach(session('cart', []) as $item)
							<li class="cart_item clearfix" id="cart_item_{{$item['id']}}" data-product-id="{{$item['id']}}">
									<div class="cart_item_image">
									<a href="/item/{{$item['url']}}">
											<img src="/assets/images/products/{{$item['image1']}}" alt="{{ $item['image1'] }}">
									</a>
									</div>
									<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
											<div class="cart_item_name cart_info_col" style="min-width: 230px;">
													<div class="cart_item_title">Nombre</div>
													<div class="cart_item_text">
														<a href="/item/{{$item['url']}}">
														{{ $item['name'] }}
														</a>
													</div>
											</div>
											<div class="cart_item_price cart_info_col">
													<div class="cart_item_title">Stock</div>
													<div class="cart_item_text text-center" id="stockCart{{$item['id']}}">{{ $item['stock'] ? $item['stock'] : '0' }}</div>
											</div>
											<div class="cart_item_quantity cart_info_col">
													<div class="cart_item_title">Cantidad</div>
													<div class="product_quantity clearfix mt-4" style="width: 80px; padding-left: 10px;">
															<input class="quantity_input" type="text" pattern="[0-9]*" value="{{ $item['quantity'] }}" id="quantity_input_{{$item['id']}}" style="width:70px">
															<div class="quantity_buttons">
																	<div class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>
																	<div class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>
															</div>
													</div>
											</div>
											<div class="cart_item_price cart_info_col">
													<div class="cart_item_title">Precio</div>
													<div class="cart_item_text">${{ $item['price'] }}</div>
											</div>
											<div class="cart_item_total cart_info_col">
													<div class="cart_item_title">Total</div>
													<div class="cart_item_text">${{ $item['quantity'] * $item['price'] }}</div>
											</div>
											<div class="cart_item_total cart_info_col">
													<div class="cart_item_title">Quitar</div>
													<div class="cart_item_text text-center"><i class="fa fa-trash" style="cursor:pointer"></i></div>
											</div>
									</div>
							</li>
							@endforeach

							</ul>
						</div>
						
						<!-- Order Total -->
						<div class="order_total">
							<div class="order_total_content text-md-right">
								<div class="order_total_title"><strong>Sub Total:</strong></div>
								<div class="order_total_amount">${{$subtotal}}</div>
							</div>
						</div>
						<div class="order_total">
							<div class="order_total_content text-md-right">
								<div class="order_total_title"><strong>IVA 19%:</strong></div>
								<div class="order_total_amount">$ {{$subtotal * 0.19}}</div>
							</div>
						</div>
						<div class="order_total">
							<div class="order_total_content text-md-right">
								<div class="order_total_title"><strong>Total:</strong></div>
								<div class="order_total_amount">${{$total}}</div>
							</div>
						</div>

						<div class="cart_buttons">
							<button type="button" class="button cart_button_checkout">Completar compra</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection


@section('script')
<script>
$(document).ready(function() {
    // Maneja la cantidad para cada elemento del carrito
    $('.product_quantity').each(function() {
        var container = $(this);
        var input = container.find('.quantity_input');
        var incButton = container.find('.quantity_inc');
        var decButton = container.find('.quantity_dec');

        function updateTotal() {
            var val = parseFloat(input.val());
            var stock = parseFloat(container.closest('.cart_item_quantity').prev().find('.cart_item_text').text());

            if (isNaN(val) || val < 1) {
                input.val(1);
                val = 1;
            } else if (val > stock) {
                input.val(stock);
                val = stock;
            }

            // Obtén el ID del producto desde el atributo de datos del elemento li
            var productId = container.closest('.cart_item').data('product-id');

            // Obtén el token CSRF
            var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            // Realiza una solicitud AJAX al servidor para actualizar la cantidad
            $.ajax({
                type: 'POST',
                url: '/actualizar-carrito/' + productId,
                data: { quantity: val, _token: csrfToken }, // Envia el token CSRF
                success: function(response) {
                    // Actualiza los totales en la interfaz del usuario
                    if (response.status === 'success') {
                        var totalCart = 0;
                        for (var i = 0; i < response.cart.length; i++) {
                            totalCart += response.cart[i].quantity;
                        }
                        $('#totalCart').text(totalCart);
                    }
                }
            });
        }

        input.on('blur', updateTotal);

        incButton.on('click', function() {
            var originalVal = input.val();
            var stock = parseFloat(container.closest('.cart_item_quantity').prev().find('.cart_item_text').text());
            var endVal = parseFloat(originalVal) + 1;

            if (endVal <= stock) {
                input.val(endVal);
                updateTotal();
            }
        });

        decButton.on('click', function() {
            var originalVal = input.val();

            if (originalVal > 1) {
                var endVal = parseFloat(originalVal) - 1;
                input.val(endVal);
                updateTotal();
            }
        });
    });
});
</script>


@endsection