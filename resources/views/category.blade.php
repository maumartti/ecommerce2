@extends('layouts.web')


@section('head')
<link rel="stylesheet" type="text/css" href="/assets/styles/shop_styles.css">
<link rel="stylesheet" type="text/css" href="/assets/styles/shop_responsive.css">
@endsection

@section('content')
<div class="super_container">
	
	
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/shop_background.jpg"></div>
		<div class="home_overlay"></div>
		<div class="home_content d-flex flex-column align-items-center justify-content-center">
			<h2 class="home_title">Categoría: {{$category->name}}</h2>
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
							<div class="sidebar_title">Categorías</div>
							<ul class="sidebar_categories">
							@if(isset($categories))
									@if($subcategories)
											@foreach ($categories as $index => $category)
											<li><a href="/categoria/{{$category->url}}">{{$category->name}}</a></li>
											@if(isset($category->subcategories))
												@if($category->subcategories)
														@foreach ($category->subcategories as $index => $subcategory)
														<li class="pl-3">- <a href="/categoria/{{$category->url}}/{{$subcategory->url}}">{{$subcategory->name}}</a></li>
														@endforeach
														@endif
												@endif
											@endforeach
									@endif
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
						<div class="sidebar_section">
							<div class="sidebar_subtitle brands_subtitle"></div>
							<ul class="brands_list">
											<li class="brand"><a href="#">-</a></li>
							</ul>
						</div>
					</div>

				</div>

				<div class="col-lg-9">
					
					<!-- Shop Content -->

					<div class="shop_content">
						<div class="shop_bar clearfix">
							<div class="shop_product_count"><span>{{count($productsCategory)}}</span> productos encontrados</div>
							<div class="shop_sorting">
								<span>Sort by:</span>
								<ul>
									<li>
										<span class="sorting_text">highest rated<i class="fas fa-chevron-down"></span></i>
										<ul>
											<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "original-order" }'>highest rated</li>
											<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "name" }'>name</li>
											<li class="shop_sorting_button"data-isotope-option='{ "sortBy": "price" }'>price</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>

						<div class="product_grid">
							<div class="product_grid_border"></div>

							<!-- Product Item -->
							@if (isset($productsCategory))
							@if ($productsCategory)
							<div class="row">
							@foreach ($productsCategory as $product)
							<div class="product_item col-md-3">
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