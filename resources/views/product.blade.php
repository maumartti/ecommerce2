@extends('layouts.web')


@section('head')
<link rel="stylesheet" type="text/css" href="/assets/styles/product_styles.css">
@endsection


@section('content')
<div class="super_container">
	
	<!-- Single Product -->
	<div class="single_product">
		<div class="container">
			<div class="row">

				<!-- Images -->
				<div class="col-lg-2 order-lg-1 order-2">
						<ul class="image_list">
								<li data-image="/assets/images/products/{{$product->image1}}">
										<img src="/assets/images/products/{{$product->image1}}" alt="">
								</li>
								@if ($product->image2)
										<li data-image="/assets/images/products/{{$product->image2}}">
												<img src="/assets/images/products/{{$product->image2}}" alt="">
										</li>
								@else
										<li data-image="/assets/images/no-image.png">
												<img src="/assets/images/no-image.png" alt="No Image">
										</li>
								@endif
								@if ($product->image3)
										<li data-image="/assets/images/products/{{$product->image3}}">
												<img src="/assets/images/products/{{$product->image3}}" alt="">
										</li>
								@else
										<li data-image="/assets/images/no-image.png">
												<img src="/assets/images/no-image.png" alt="No Image">
										</li>
								@endif
						</ul>
					</div>	
					<div class="col-lg-2 order-lg-1 order-2">
						<ul class="image_list">	
								@if ($product->image4)
										<li data-image="/assets/images/products/{{$product->image4}}">
												<img src="/assets/images/products/{{$product->image4}}" alt="">
										</li>
								@else
										<li data-image="/assets/images/no-image.png">
												<img src="/assets/images/no-image.png" alt="No Image">
										</li>
								@endif
								@if ($product->image5)
										<li data-image="/assets/images/products/{{$product->image5}}">
												<img src="/assets/images/products/{{$product->image5}}" alt="">
										</li>
								@else
										<li data-image="/assets/images/no-image.png">
												<img src="/assets/images/no-image.png" alt="No Image">
										</li>
								@endif
								@if ($product->image6)
										<li data-image="/assets/images/products/{{$product->image6}}">
												<img src="/assets/images/products/{{$product->image6}}" alt="">
										</li>
								@else
										<li data-image="/assets/images/no-image.png">
												<img src="/assets/images/no-image.png" alt="No Image">
										</li>
								@endif
						</ul>
				</div>


				<!-- Selected Image -->
				<div class="col-lg-4 order-lg-2 order-1">
					<div class="image_selected">
						<img src="/assets/images/products/{{$product->image1}}" alt="">
					</div>
				</div>

				<!-- Description -->
				<div class="col-lg-4 order-3">
					<div class="product_description">
						<div class="product_category text-dark">Categoría: {{$product->category->name}}</div>
						<div class="product_name">{{$product->name}}</div>
						<!-- <div class="rating_r rating_r_4 product_rating"><i></i><i></i><i></i><i></i><i></i></div> -->
						<div class="product_text"><p class="text-dark">{{$product->description}}</p></div>
						<div class="order_info d-flex flex-row mt-4">
							<form action="#">
								<div class="clearfix" style="z-index: 1000;">

									<!-- Product Quantity -->
									<div class="product_quantity clearfix">
										<span>Quantity: </span>
										<input id="quantity_input" type="text" pattern="[0-9]*" value="1">
										<div class="quantity_buttons">
											<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>
											<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>
										</div>
									</div>

									<!-- Product Color -->
									<!-- <ul class="product_color">
										<li>
											<span>Color: </span>
											<div class="color_mark_container"><div id="selected_color" class="color_mark"></div></div>
											<div class="color_dropdown_button"><i class="fas fa-chevron-down"></i></div>

											<ul class="color_list">
												<li><div class="color_mark" style="background: #999999;"></div></li>
												<li><div class="color_mark" style="background: #b19c83;"></div></li>
												<li><div class="color_mark" style="background: #000000;"></div></li>
											</ul>
										</li>
									</ul> -->

								</div>
								@if (isset($product->stock))
									@if ($product->stock > '0')
										<div class="product_price mt-5">Precio: ${{$product->price}}</div>
										<div class="button_container mt-4">
											<button type="button" class="button cart_button cart_button" data-product-id="{{$product->id}}">Agregar al carrito</button>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
										</div>
									@else
										<div class="product_price mt-5" style="color:#DE2423;font-size:20px">Sin Stock !</div>
									@endif
								@endif
								
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Recently Viewed -->
	<div class="viewed">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="viewed_title_container">
						<h3 class="viewed_title">Vistos Recientes</h3>
						<div class="viewed_nav_container">
							<div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
							<div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
						</div>
					</div>

					<div class="viewed_slider_container">
						
						<!-- Recently Viewed Slider -->

						<div class="owl-carousel owl-theme viewed_slider">
							
				@if (isset($productsViews))
					@if ($productsViews)
						@foreach ($productsViews as $product)
							<div class="owl-item">
								<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image">
										<a href="/item/{{$product->url}}">
											<img src="/assets/images/products/{{$product->image1}}" alt="">
										</a>
									</div>
									<div class="viewed_content text-center">
										<div class="viewed_price">${{$product->price}}
											<span>{{$product->price_old ? '$'.$product->price_old : ''}}</span>
										</div>
										<div class="viewed_name"><a href="/item/{{$product->url}}">{{$product->name}}</a></div>
									</div>
									<ul class="item_marks">
									@if($product->descount)
										<li class="item_mark item_discount">-{{$product->descount}}%</li>
									@endif	
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>
						@endforeach
          @endif
        @endif

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>


</div>
@endsection