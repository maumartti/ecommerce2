@extends('layouts.web')


@section('head')
<link rel="stylesheet" type="text/css" href="/assets/styles/cart_styles.css">
<link rel="stylesheet" type="text/css" href="/assets/styles/cart_responsive.css">
@endsection


@section('content')
<div class="cart_section">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="cart_container">
						<div class="cart_title">Carrito de compras</div>
						<div class="cart_items">
							<ul class="cart_list">

							@foreach(session('cart', []) as $item)
							<li class="cart_item clearfix">
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
											<div class="cart_item_quantity cart_info_col">
													<div class="cart_item_title">Cantidad</div>
													<div class="cart_item_text">{{ $item['quantity'] }}</div>
											</div>
											<div class="cart_item_price cart_info_col">
													<div class="cart_item_title">Precio</div>
													<div class="cart_item_text">${{ $item['price'] }}</div>
											</div>
											<div class="cart_item_total cart_info_col">
													<div class="cart_item_title">Total</div>
													<div class="cart_item_text">${{ $item['quantity'] * $item['price'] }}</div>
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