@extends('layouts.web')


@section('head')
<link rel="stylesheet" type="text/css" href="/assets/styles/shop_styles.css">
<link rel="stylesheet" type="text/css" href="/assets/styles/shop_responsive.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
<style>
    .category-arrow {
        float: right;
				transition: transform 0.3s;
    }
    .category-arrow::before {
        content: ">"; /* Unicode for right-pointing triangle */
				transition: transform 0.3s;
				display: inline-block; /* Add this line to ensure the arrow takes up space */
				width: 10px; /* Adjust the width as needed */
				text-align: right; /* Align the arrow to the right */
    }
		/* .collapsed .category-arrow::before {
    transform: rotate(90deg); 
		} */
		.category-item{
			border:1px solid silver;
			border-radius:2px;
		}
		.category-rotated {
        transform: rotate(90deg);
    }
</style>

@endsection

@section('content')
<div class="super_container">
	
	
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/shop_background.jpg"></div>
		<div class="home_overlay"></div>
		<div class="home_content d-flex flex-column align-items-center justify-content-center" style="background-image: url('/assets/images/{{ isset($category->image) ? $category->image : '' }}');background-size: 100% 100%; background-repeat: no-repeat; background-position: center center;">
			@if(!$category->image)
			<h2 class="home_title" style="background: #dfdfdfa3;border-radius: 7px;padding: 0px 10px;">Categoría: {{$category->name}}</h2>
			@endif
		</div>
	</div>

	<!-- Shop -->

	<div class="shop">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">

					<!-- Shop Sidebar -->
					<div class="shop_sidebar">
						<div class="sidebar_section">

						<div class="sidebar_section">
							<div class="sidebar_subtitle brands_subtitle"></div>
							<ul class="brands_list">
									<li class="brand">
											<img src="/assets/images/char_1.png" class="mr-2 float-left" alt="Imagen">
											<h4 style="color:#5a9edb;">Envío gratis
											<div class="custom-control custom-switch" style="width: 70px;float: right;">
													<input type="checkbox" class="custom-control-input" id="customSwitch1">
													<label class="custom-control-label" for="customSwitch1"></label>
											</div>
											</h4>
											<p class="pt-2">En productos pequeños por compras desde: $30.000</p>
									</li>
							</ul>
							</div>
						</div>
						
							<div class="sidebar_title">Categorías</div>
							<ul class="sidebar_categories mt-2">
									@if(isset($categories))
											@foreach ($categories as $index => $category)
													<li class="category-toggle category-item p-2"  data-toggle="collapse" data-target="#submenu{{$index}}">
															<a href="#">
																	<span class="category-name">{{$category->name}}</span>
																	<span class="category-arrow"></span>
															</a>
															@if(isset($category->subcategories))
																	<ul id="submenu{{$index}}" class="submenu collapse mt-2">
																			@foreach ($category->subcategories as $index => $subcategory)
																					<li class="pl-3"><a href="/categoria/{{$category->url}}/{{$subcategory->url}}">{{$subcategory->name}} →</a></li>
																			@endforeach
																	</ul>
															@endif
													</li>
											@endforeach
									@endif
							</ul>
						</div>
						<!-- <div class="sidebar_section filter_by_section">
							<div class="sidebar_title">Filter By</div>
							<div class="sidebar_subtitle">Price</div>
							<div class="filter_price">
								<div id="slider-range" class="slider_range"></div>
								<p>Range: </p>
								<p><input type="text" id="amount" class="amount" readonly style="border:0; font-weight:bold;"></p>
							</div>
						</div>
						<div class="sidebar_section">
							<div class="sidebar_subtitle color_subtitle">Color</div>
							<ul class="colors_list">
								<li class="color"><a href="#" style="background: #b19c83;"></a></li>
								<li class="color"><a href="#" style="background: #000000;"></a></li>
								<li class="color"><a href="#" style="background: #999999;"></a></li>
								<li class="color"><a href="#" style="background: #0e8ce4;"></a></li>
								<li class="color"><a href="#" style="background: #df3b3b;"></a></li>
								<li class="color"><a href="#" style="background: #ffffff; border: solid 1px #e1e1e1;"></a></li>
							</ul>
						</div> -->
						


				</div>

				<div class="col-lg-9">
					
					<!-- Shop Content -->

					<div class="shop_content">
						<div class="shop_bar clearfix">
							<div class="shop_product_count"><span>{{count($productsCategory)}}</span> productos encontrados</div>
							<div class="shop_sorting">
								<span>Filtrar por:</span>
								<ul>
									<li>
										<span class="sorting_text">últimos agregados <i class="fas fa-chevron-down"></span></i>
										<ul>
											<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "original-order" }'>últimos agregados</li>
											<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "name" }'>Nombre</li>
											<li class="shop_sorting_button"data-isotope-option='{ "sortBy": "price" }'>Precio</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>

						<div class="">
							<div class="product_grid_border"></div>

							<!-- Product Item -->
							@if (isset($productsCategory))
								@if ($productsCategory)
										<div class="col-12">
										<div class="row">
												@foreach ($productsCategory as $product)
														<div class="product_item col-md-3 col-sm-6">
																<div class="product_border"></div>
																<div class="product_image d-flex flex-column align-items-center justify-content-center">
																		<a href="/item/{{$product->url}}">
																				<img src="/assets/images/products/{{$product->image1}}" alt="">
																		</a>
																</div>
																<div class="product_content">
																		<div class="product_price" style="color:#DE2423;background: #ffffffa3;">${{$product->price}}</div>
																		<div class="product_name mt-4"><div><a href="#" tabindex="0">{{$product->name}}</a></div></div>
																</div>
																<div class="product_fav"><i class="fas fa-heart"></i></div>
																<ul class="product_marks">
																		@if($product->descount)
																				<li class="product_mark product_discount">-{{$product->descount}}%</li>
																		@endif
																		<!-- <li class="product_mark product_new">new</li> -->
																</ul>
														</div>
												@endforeach
										</div>
										</div>
								@endif
							@endif


						</div>

						<!-- Shop Page Navigation -->

						<div class="shop_page_nav d-flex flex-row">
							<div class="page_prev d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-left"></i></div>
							<ul class="page_nav d-flex flex-row">
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">...</a></li>
								<li><a href="#">21</a></li>
							</ul>
							<div class="page_next d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-right"></i></div>
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



@endsection

@section('script')
<script>
    // Add a click event listener to category toggles
    $(".category-toggle").click(function (e) {
        e.preventDefault();
        var arrow = $(this).find(".category-arrow");
        arrow.toggleClass("category-rotated");
    });
</script>
@endsection