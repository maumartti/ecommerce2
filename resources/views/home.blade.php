@extends('layouts.web')


@section('content')
<div class="super_container">
	
	<!-- Slider -->
	<div class="banner pt-0" id="banner" style="max-height:500px;max-width:1900px;margin:auto;">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
		<div class="carousel-inner">
			@if($web->imageRotor1)
			<div class="carousel-item active">
				<img class="d-block w-100" src="/assets/images/{{$web->imageRotor1}}" alt="First slide">
			</div>
			@endif
			@if($web->imageRotor2)
			<div class="carousel-item">
				<img class="d-block w-100" src="/assets/images/{{$web->imageRotor2}}" alt="Second slide">
			</div>
			@endif
			@if($web->imageRotor3)
			<div class="carousel-item">
				<img class="d-block w-100" src="/assets/images/{{$web->imageRotor3}}" alt="Third slide">
			</div>
			@endif
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	</div>

	<!-- Characteristics -->
	<div class="characteristics">
		<div class="container">
			<div class="row">

				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="/assets/images/char_1.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Entregas gratis</div>
							<!-- <div class="char_subtitle">from $50</div> -->
						</div>
					</div>
				</div>

				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="/assets/images/char_2.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Devoluciónes gratis</div>
							<!-- <div class="char_subtitle">from $50</div> -->
						</div>
					</div>
				</div>

				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="/assets/images/char_3.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Pagos online</div>
							<!-- <div class="char_subtitle">from $50</div> -->
						</div>
					</div>
				</div>

				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="/assets/images/char_4.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Pagos online</div>
							<!-- <div class="char_subtitle">from $50</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Deals of the week -->
	<div class="deals_featured">
		<div class="container">
			<div class="row">
				<div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">
					
					<!-- Deals -->

					<div class="deals">
						<div class="deals_title">Ofertas semanales</div>
						<div class="deals_slider_container">
							
							<!-- Deals Slider -->
							<div class="owl-carousel owl-theme deals_slider">
								
								<!-- Deals Item -->
								<div class="owl-item deals_item">
									<div class="deals_image"><img src="/assets/images/items/n1.jpg" alt=""></div>
									<div class="deals_content">
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_category"><a href="#">Inperdible</a></div>
											<div class="deals_item_price_a ml-auto">Oferta</div>
										</div>
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_name">Bolsones Importados</div>
											<div class="deals_item_price ml-auto">$16000</div>
										</div>
										<div class="available">
											<div class="available_line d-flex flex-row justify-content-start">
												<div class="available_title">Dispojibles: <span>6</span></div>
												<div class="sold_title ml-auto">Vendidos: <span>28</span></div>
											</div>
											<div class="available_bar"><span style="width:17%"></span></div>
										</div>
										<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
											<div class="deals_timer_title_container">
												<div class="deals_timer_title">Oferta especial</div>
												<div class="deals_timer_subtitle">Oferta termina en:</div>
											</div>
											<div class="deals_timer_content ml-auto">
												<div class="deals_timer_box clearfix" data-target-time="">
													<div class="deals_timer_unit">
														<div id="deals_timer1_hr" class="deals_timer_hr"></div>
														<span>hours</span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer1_min" class="deals_timer_min"></div>
														<span>mins</span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer1_sec" class="deals_timer_sec"></div>
														<span>secs</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Deals Item -->
								<div class="owl-item deals_item">
									<div class="deals_image"><img src="/assets/images/items/m-2.jpg" alt=""></div>
									<div class="deals_content">
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_category"><a href="#">Headphones</a></div>
											<div class="deals_item_price_a ml-auto">$300</div>
										</div>
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_name">Beoplay H7</div>
											<div class="deals_item_price ml-auto">$225</div>
										</div>
										<div class="available">
											<div class="available_line d-flex flex-row justify-content-start">
												<div class="available_title">Available: <span>6</span></div>
												<div class="sold_title ml-auto">Already sold: <span>28</span></div>
											</div>
											<div class="available_bar"><span style="width:17%"></span></div>
										</div>
										<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
											<div class="deals_timer_title_container">
												<div class="deals_timer_title">Hurry Up</div>
												<div class="deals_timer_subtitle">Offer ends in:</div>
											</div>
											<div class="deals_timer_content ml-auto">
												<div class="deals_timer_box clearfix" data-target-time="">
													<div class="deals_timer_unit">
														<div id="deals_timer2_hr" class="deals_timer_hr"></div>
														<span>hours</span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer2_min" class="deals_timer_min"></div>
														<span>mins</span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer2_sec" class="deals_timer_sec"></div>
														<span>secs</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Deals Item -->
								<div class="owl-item deals_item">
									<div class="deals_image"><img src="/assets/images/items/m-3.jpg" alt=""></div>
									<div class="deals_content">
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_category"><a href="#">Headphones</a></div>
											<div class="deals_item_price_a ml-auto">$300</div>
										</div>
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_name">Beoplay H7</div>
											<div class="deals_item_price ml-auto">$225</div>
										</div>
										<div class="available">
											<div class="available_line d-flex flex-row justify-content-start">
												<div class="available_title">Available: <span>6</span></div>
												<div class="sold_title ml-auto">Already sold: <span>28</span></div>
											</div>
											<div class="available_bar"><span style="width:17%"></span></div>
										</div>
										<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
											<div class="deals_timer_title_container">
												<div class="deals_timer_title">Hurry Up</div>
												<div class="deals_timer_subtitle">Offer ends in:</div>
											</div>
											<div class="deals_timer_content ml-auto">
												<div class="deals_timer_box clearfix" data-target-time="">
													<div class="deals_timer_unit">
														<div id="deals_timer3_hr" class="deals_timer_hr"></div>
														<span>hours</span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer3_min" class="deals_timer_min"></div>
														<span>mins</span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer3_sec" class="deals_timer_sec"></div>
														<span>secs</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>

						</div>

						<div class="deals_slider_nav_container">
							<div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
							<div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
						</div>
					</div>
					
					<!-- Featured -->
					<div class="featured">
						<div class="tabbed_container">
							<div class="tabs">
								<ul class="clearfix">
                                @if (isset($categories))
                                    @if ($categories)
                                        @foreach ($categories as $index => $category)
                                            <li class="{{ $index === 0 ? 'active' : '' }}">{{ $category->name }}</li>
                                        @endforeach
                                    @endif
                                @endif
								</ul>
								<div class="tabs_line"><span></span></div>
							</div>

							<!-- Panel de productos -->
                            @if (isset($categories))
                                @if ($categories)
                                    @foreach ($categories as $index => $category)
                                        <div class="product_panel panel {{ $index === 0 ? 'active' : '' }}" data-category="{{ $category->id }}">
                                            <div class="featured_slider slider">
                                                @if (isset($products))
                                                    @if ($products)
                                                        @foreach ($products as $product)
                                                            @if ($product->category_id === $category->id)
                                                            <div class="featured_slider_item">
                                                                <div class="border_active"></div>
                                                                <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center">
																																		<a href="/item/{{$product->url}}">
                                                                        <img src="/assets/images/products/{{$product->image1}}" alt="">
																																		</a>
                                                                    </div>
                                                                    <div class="product_content">
                                                                        <div class="product_price discount" style="background: #ffffffa3;">${{$product->price}}</div>
                                                                        <div class="product_name mt-4"><div class="contenedorName"><a href="/item/{{$product->url}}">{{$product->name}}</a></div></div>
                                                                        <div class="product_extras">
                                                                            <button class="product_cart_button">Agregar al carrito</button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                                    <ul class="product_marks">
                                                                        <li class="product_mark product_discount">-25%</li>
                                                                        <li class="product_mark product_new">new</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @endif
                                            </div>
                                            <div class="featured_slider_dots_cover"></div>
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

	<!-- Hot New Arrivals -->
	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabbed_container">
						<div class="tabs clearfix tabs-right">
							<div class="new_arrivals_title">Recién llegados</div>
							<ul class="clearfix">
                            @if (isset($categories))
                                @if ($categories)
                                    @foreach ($categories as $index => $category)
                                        <li class="{{ $index === 0 ? 'active' : '' }}">{{ $category->name }}</li>
                                    @endforeach
                                @endif
                            @endif
							</ul>
							<div class="tabs_line"><span></span></div>
						</div>
						<div class="row">
							<div class="col-lg-9" style="z-index:1;">
                                <!-- Panel de productos -->
                                @if (isset($categories))
                                    @if ($categories)
                                        @foreach ($categories as $index => $category)
                                            <div class="product_panel panel {{ $index === 0 ? 'active' : '' }}">
                                                <div class="arrivals_slider slider">
                                                    @if (isset($productsNew))
                                                        @if ($productsNew)
                                                            @foreach ($productsNew as $product)
                                                                @if ($product->category_id === $category->id)
                                                                <div class="arrivals_slider_item">
                                                                    <div class="border_active"></div>
                                                                    <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                                        <div class="product_image d-flex flex-column align-items-center justify-content-center">
																																				<a href="/item/{{$product->url}}">
                                                                            <img src="/assets/images/products/{{$product->image1}}" alt="">
																																				</a>	
                                                                        </div>
                                                                        <div class="product_content">
                                                                            <div class="product_price" style="background: #ffffffa3;">$225</div>
                                                                            <div class="product_name mt-4" style="background: #ffffffb5;">
                                                                                <div class="contenedorName" ><a href="/item/{{$product->url}}">{{$product->name}}</a></div>
                                                                            </div>
                                                                            <div class="product_extras">
                                                                                <!-- <div class="product_color">
                                                                                    <input type="radio" checked name="product_color" style="background:#b19c83">
                                                                                    <input type="radio" name="product_color" style="background:#000000">
                                                                                    <input type="radio" name="product_color" style="background:#999999">
                                                                                </div> -->
                                                                                <button class="product_cart_button">Agregar al carrito</button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                                        <ul class="product_marks">
                                                                            <li class="product_mark product_discount">-25%</li>
                                                                            <li class="product_mark product_new">new</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    @endif
                                                </div>
                                                <div class="featured_slider_dots_cover"></div>
                                            </div>
                                        @endforeach
                                    @endif
                                @endif

							</div>

							<div class="col-lg-3">
								<div class="arrivals_single clearfix">
									<div class="d-flex flex-column align-items-center justify-content-center">
										<div class="arrivals_single_image"><img src="/assets/images/items/vic5.jpg" alt=""></div>
										<div class="arrivals_single_content">
											<div class="arrivals_single_category"><a href="#">OFERTON</a></div>
											<div class="arrivals_single_name_container clearfix">
												<div class="arrivals_single_name"><a href="#">Buso Nike</a></div>
												<div class="arrivals_single_price text-right">$3079</div>
											</div>
											<!-- <div class="rating_r rating_r_4 arrivals_single_rating"><i></i><i></i><i></i><i></i><i></i></div> -->
											<form action="#"><button class="arrivals_single_button">Agregar al carrito</button></form>
										</div>
										<!-- <div class="arrivals_single_fav product_fav active"><i class="fas fa-heart"></i></div> -->
										<ul class="arrivals_single_marks product_marks">
											<li class="arrivals_single_mark product_mark product_new">new</li>
										</ul>
									</div>
								</div>
							</div>

						</div>
								
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Best Sellers -->
	<div class="best_sellers">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabbed_container">
						<div class="tabs clearfix tabs-right">
							<div class="new_arrivals_title">Más solicitados</div>
							<ul class="clearfix">
								<li class="active">Top 20</li>
								<li>Más vendidos</li>
								<li>Solicitados Mes</li>
							</ul>
							<div class="tabs_line"><span></span></div>
						</div>

						<div class="bestsellers_panel panel active">

							<!-- Best Sellers Slider -->

							<div class="bestsellers_slider slider">

								<!-- Best Sellers Item -->
								@if (isset($productsLikes))
                  @if ($productsLikes)
										@foreach ($productsLikes as $index => $product)
										<div class="bestsellers_item discount">
											<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
												<div class="bestsellers_image">
												<a href="/item/{{$product->url}}">
													<img src="/assets/images/products/{{$product->image1}}" alt="">
												</a>	
												</div>
												<div class="bestsellers_content">
													<div class="bestsellers_category"><a href="#">{{$product->category->name}}</a></div>
													<div class="bestsellers_name"><a href="/item/{{$product->url}}">{{$product->name}}</a></div>
													<!-- <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div> -->
													<div class="bestsellers_price discount">${{$product->price}}<span>{{$product->price_old ? '$'.$product->price_old : ''}}</span></div>
												</div>
											</div>
											<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
											<ul class="bestsellers_marks">
												@if($product->descount)
												<li class="bestsellers_mark bestsellers_discount">-{{$product->descount}}%</li>
												@endif
												<!-- <li class="bestsellers_mark bestsellers_new">new</li> -->
											</ul>
										</div>
										@endforeach
              		@endif
            		@endif



							</div>
						</div>

						<div class="bestsellers_panel panel">

							<!-- Best Sellers Slider -->

							<div class="bestsellers_slider slider">

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="/assets/images/best_1.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.html">Xiaomi redmi Note 4</a></div>
											<!-- <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div> -->
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="/assets/images/best_2.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.html">Xiaomi redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="/assets/images/best_3.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.html">Xiaomi redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="/assets/images/best_4.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.html">Xiaomi redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="/assets/images/best_5.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.html">Xiaomi redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="/assets/images/best_6.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.html">Xiaomi redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="/assets/images/best_1.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.html">Xiaomi redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="/assets/images/best_2.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.html">Xiaomi redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="/assets/images/best_3.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.html">Xiaomi redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="/assets/images/best_4.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.html">Xiaomi redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="/assets/images/best_5.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.html">Xiaomi redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="/assets/images/best_6.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.html">Xiaomi redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

							</div>
						</div>

						<div class="bestsellers_panel panel">

							<!-- Best Sellers Slider -->

							<div class="bestsellers_slider slider">

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="/assets/images/best_1.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.html">Xiaomi redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="/assets/images/best_2.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.html">Xiaomi redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="/assets/images/best_3.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.html">Xiaomi redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="/assets/images/best_4.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.html">Xiaomi redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="/assets/images/best_5.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.html">Xiaomi redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="/assets/images/best_6.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.html">Xiaomi redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="/assets/images/best_1.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.html">Xiaomi redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="/assets/images/best_2.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.html">Xiaomi redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="/assets/images/best_3.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.html">Xiaomi redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="/assets/images/best_4.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.html">Xiaomi redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item discount">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="/assets/images/best_5.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.html">Xiaomi redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

								<!-- Best Sellers Item -->
								<div class="bestsellers_item">
									<div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
										<div class="bestsellers_image"><img src="/assets/images/best_6.png" alt=""></div>
										<div class="bestsellers_content">
											<div class="bestsellers_category"><a href="#">Headphones</a></div>
											<div class="bestsellers_name"><a href="product.html">Xiaomi redmi Note 4</a></div>
											<div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="bestsellers_price discount">$225<span>$300</span></div>
										</div>
									</div>
									<div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
									<ul class="bestsellers_marks">
										<li class="bestsellers_mark bestsellers_discount">-25%</li>
										<li class="bestsellers_mark bestsellers_new">new</li>
									</ul>
								</div>

							</div>
						</div>
					</div>
						
				</div>
			</div>
		</div>
	</div>

	<!-- Adverts -->
	<div class="adverts">
        <div class="container">
            <h2>Top 3</h2>
			<div class="row">
                @if (isset($productsPromo) && count($productsPromo) > 0)
                    @php $count = 0; @endphp
                    @foreach ($productsPromo as $product)
                        @if ($count < 3)
                            <div class="col-lg-4 advert_col">
                                <div class="advert d-flex flex-row align-items-center justify-content-start">
                                    <div class="advert_content">
                                        <div class="advert_title"><a href="/item/{{$product->url}}">{{$product->name}} <br><span style="color:#DE2423">${{$product->price}}</span></a></div>
                                        <div class="advert_text">{{$product->category->name}}</div>
                                    </div>
                                    <div class="ml-auto"><div class="advert_image">
																		<a href="/item/{{$product->url}}">
																			<img src="/assets/images/products/{{$product->image1}}" alt="">
																		</a>
																		</div></div>
                                </div>
                            </div>
                            @php $count++; @endphp
                        @endif
                    @endforeach
                @endif
			</div>
		</div>
	</div>

	<!-- Trends -->
	<div class="trends">
		<div class="trends_background" style="background-image:url(images/trends_background.jpg)"></div>
		<div class="trends_overlay"></div>
		<div class="container">
			<div class="row">

				<!-- Trends Content -->
				<div class="col-lg-3">
					<div class="trends_container">
						<h2 class="trends_title">Con % de descuento</h2>
						<div class="trends_text"><p>Contamos con una amplia variedad de prendas importadas.</p></div>
						<div class="trends_slider_nav">
							<div class="trends_prev trends_nav"><i class="fas fa-angle-left ml-auto"></i></div>
							<div class="trends_next trends_nav"><i class="fas fa-angle-right ml-auto"></i></div>
						</div>
					</div>
				</div>

				<!-- Trends Slider -->
				<div class="col-lg-9">
					<div class="trends_slider_container">

						<!-- Trends Slider -->
						<div class="owl-carousel owl-theme trends_slider">
                        @if (isset($productsDescount))
                            @if ($productsDescount)
                                @foreach ($productsDescount as $product)
                                <div class="owl-item">
                                    <div class="trends_item is_new">
                                        <div class="trends_image d-flex flex-column align-items-center justify-content-center">
																				<a href="/item/{{$product->url}}">
                                            <img src="/assets/images/products/{{$product->image1}}" alt="">
																				</a>		
                                        </div>
                                        <div class="trends_content">
                                            <div class="trends_category"><a href="#" style="color:#DE2423;font-weight:bold">Con {{$product->descount}}% de descuento</a></div>
                                            <div class="trends_info clearfix">
																							<div class="trends_name"><a href="/item/{{$product->url}}">{{$product->name}}</a></div>
																						</div>
																						<div class="trends_info clearfix">
																							<div class="trends_price">Precio $379</div>
																						</div>
                                        </div>
                                        <ul class="trends_marks">
                                            <!-- <li class="trends_mark trends_discount">-25%</li> -->
                                            <li class="trends_mark trends_new">-{{$product->descount}}%</li>
                                        </ul>
                                        <div class="trends_fav"><i class="fas fa-heart"></i></div>
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

	<!-- Reviews -->
	<div class="reviews">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="reviews_title_container">
						<h3 class="reviews_title">Destacados</h3>
						<div class="reviews_all ml-auto"><a href="#">Ver todos <span>destacados</span></a></div>
					</div>

					<div class="reviews_slider_container">
						
						<!-- Reviews Slider -->
						<div class="owl-carousel owl-theme reviews_slider">
							
                        @if (isset($productsPromo))
                            @if ($productsPromo)
                                @foreach ($productsPromo as $product)
                                <div class="owl-item">
                                    <div class="review d-flex flex-row align-items-start justify-content-start">
                                        <div><div class="review_image">
																				<a href="/item/{{$product->url}}">
																					<img src="/assets/images/products/{{$product->image1}}" alt="">
																				</a>
																				</div></div>
                                        <div class="review_content">
                                            <div class="review_name">
																							<a href="/item/{{$product->url}}">
																								{{$product->name}}
																							</a>
																						</div>
                                            <div class="review_rating_container">
                                                <!-- <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div> -->
                                                <div class="review_time" style="color: black;font-size: 14px;">Precio ${{$product->price}}</div>
                                            </div>
                                            <div class="review_text"><p>{{$product->description}}</p></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @endif
                        @endif


						</div>
						<div class="reviews_dots"></div>
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
						<h3 class="viewed_title">Vistas recientemente</h3>
						<div class="viewed_nav_container">
							<div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
							<div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
						</div>
					</div>

					<div class="viewed_slider_container">
						
						<!-- Recently Viewed Slider -->

						<div class="owl-carousel owl-theme viewed_slider">
							
							<!-- Recently Viewed Item -->
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
												<div class="viewed_price">{{$product->price}}<span>{{$product->price_old ? '$'.$product->price_old : ''}}</span></div>
												<div class="viewed_name"><a href="/item/{{$product->url}}">{{$product->name}}</a></div>
											</div>
											<ul class="item_marks">
											@if($product->descount)
												<li class="item_mark item_discount">-{{$product->descount}}%</li>
											@endif	
												<!-- <li class="item_mark item_new">new</li> -->
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


	<div class="mt-5 pb-5">
		<div class="container">
			<h2>Nuestra Propuesta de Valor </h2>
			<p>Bienvenidos a Importadora Tatar. Sumérgete en un mundo de moda incomparable con nuestra selección de ropa importada de segunda mano desde USA y Europa. Con pasión por la calidad, brindamos opciones únicas y asequibles para tu estilo. Únete a nosotros y descubre la distinción en cada prenda.</p>
			<div class="row">
				<p></p>
					<div class="col-4">
						<div style="background:#eff6fa" class="popular_category d-flex flex-column align-items-center justify-content-center">
						<div class="popular_category_image"><img src="/assets/images/heart.png" alt=""></div>
						<div class="popular_category_text">Sonrisas garantizadas: En Importadora Tatar, la satisfacción del cliente es nuestra prioridad número uno.</div>
					</div>
				</div>
				<div class="col-4">
					<div style="background:#eff6fa" class="popular_category d-flex flex-column align-items-center justify-content-center">
						<div class="popular_category_image"><img src="/assets/images/popular_1.png" alt=""></div>
						<div class="popular_category_text">Paga con facilidad: Experimenta la comodidad de pagar en línea en Importadora Tatar.</div>
					</div>
				</div>
				<div class="col-4">
					<div style="background:#eff6fa" class="popular_category d-flex flex-column align-items-center justify-content-center">
						<div class="popular_category_image"><img src="/assets/images/cart.png" alt=""></div>
						<div class="popular_category_text">Ofertas siempre frescas: En Tatar, las ofertas nunca se detienen. ¡Aprovecha los descuentos constantes!</div>
						</div>
					</div>
			</div>
		</div>
	</div>


<!-- instagram feeds -->
	<div class="trends">
		<div class="trends_background" style="background-image:url(images/trends_background.jpg)"></div>
		<div class="trends_overlay"></div>
		<div class="container">
			<div class="row">

				<!-- Trends Content -->
				<div class="col-lg-3">
					<div class="trends_container p-0">
						<h2 class="trends_title p-0">
							<div class="profile-picture">
							<a href="https://www.instagram.com/{{$feed->profile->username}}" target="_blank">
								<img src="/assets/images/instaC.png" class="profile-border" alt="Border">
								<img src="/assets/images/logoInsta.jpg" class="profile-img" alt="Foto de perfil">
							</a>
							</div>
						</h2>
						<div class="trends_text text-center">
							<div class="profile-name">
							<h4 class="text-center mb-0">Síguenos en Instagram</h5>
							<a href="https://www.instagram.com/{{$feed->profile->username}}" target="_blank">
								{{'@'.$feed->profile->username}}
							</a>
							</div>
						</div>
						<div class="trends_slider_nav text-center">
							<div class="trends_prev trends_nav"><i class="fas fa-angle-left ml-auto text-dark"></i></div>
							<div class="trends_next trends_nav"><i class="fas fa-angle-right ml-auto text-dark"></i></div>
						</div>
					</div>
				</div>
				<!-- Trends Slider -->
				<div class="col-lg-9">
					<div class="trends_slider_container">
						<!-- Trends Slider -->
						<div class="owl-carousel owl-theme trends_slider" style="height:400px">
							<!-- Trends Slider Item -->
							@foreach($feed as $item)
								<div class="owl-item h-100">
									<div class="card video-card h-100">
										@if($item->type === 'video')
											<div class="card-video h-100" style="background-color: black;">
												<div class="video-thumbnail h-100">
													<video preload="metadata" id="video-{{ $loop->index }}" onclick="toggleVideo({{ $loop->index }})">
														<source src="{{ $item->url }}" type="video/mp4">
													</video>
													<div class="play-icon" id="play-icon-{{ $loop->index }}" onclick="toggleVideo({{ $loop->index }})">
														<a href="{{$item->permalink}}" target="_blank">
															<i class="fas fa-external-link-alt" title="Ver en Instagram" style="position: absolute;left: 90px;top: -170px;color:#fff;"></i>
														</a>	
														<i class="fas fa-play"></i>
													</div>
												</div>
											</div>
										@else
											<div class="card-video h-100 d-flex align-items-center justify-content-center" style="background-color: black;">
												<div class="video-thumbnail">
													<img src="{{ $item->url }}" >
												</div>
											</div>
										@endif
									</div>
								</div>
							@endforeach
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

<!-- instagram feeds END -->

	<!-- Newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
						<div class="newsletter_title_container">
							<div class="newsletter_icon"><img src="/assets/images/send.png" alt=""></div>
							<div class="newsletter_title">Regístrate para recibir el boletín informativo</div>
							<div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
						</div>
						<div class="newsletter_content clearfix">
							<form action="#" class="newsletter_form">
								<input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
								<button class="newsletter_button">Subscribe</button>
							</form>
							<div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
@endsection

@section('script')
<script>
  function toggleVideo(index) {
    var video = document.getElementById('video-' + index);
    var playIcon = document.getElementById('play-icon-' + index);

    if (video.paused) {
			video.volume = 0.3; // Establecer el volumen al 40%
      video.play();
      playIcon.style.display = 'none';
    } else {
      video.pause();
      playIcon.style.display = 'block';
    }
  }
	  // Detener la propagación del clic en el icono de enlace
	document.querySelectorAll('.play-icon a').forEach(function(link) {
    link.addEventListener('click', function(event) {
      event.stopPropagation();
    });
  });
</script>
@endsection