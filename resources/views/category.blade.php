@extends('layouts.web')


@section('head')
    <title>{{$category->name}} - {{ config('app.name') }}</title>
    <meta name="description" content="Categoría: {{$category->name}} - {{ config('app.name') }}">
    <meta property="og:title" content="Categoría {{$category->name}} - {{ config('app.name') }}">
    <meta property="og:description" content="Categoría: {{$category->name}} - {{ config('app.name') }}">
    <meta property="og:url" content="{{request()->url()}}">
    <meta property="og:type" content="website">
@endsection


@section('content')
    <div class="header-page bg-img1" style="">
        <div class="container myContainer" style="margin-bottom:20px;">
            <h1 class="text-center" style="font-weight:bold;">Categoría: {{$category->name}}</h1>
        </div>
	</div>
    <div class="shop-page">
		<div class="container">
			<div class="row shop">
				<div class="col-md-8 col-sm-6 col-xs-12 shoppage1 found-shoppage7">
					<div class="we-found s4 we-found-shoppage7">
						<h4>Encontramos <strong>25</strong> productos disponibles</h4>
					</div>
					<div class="view-mode view-group shop-7">
						<a href="#" class="list-icon list"><i title="Grid view" class="fa fa-th"></i></a>
						<a href="#" class="grid-icon col active"><i title="List view" class="fa fa-list"></i></a>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 shoppage1">
					<div class="wrappage">
						<!-- Filters -->
						<div class="dropdown drop-filter">
							<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
								<span class="caret"></span><img class="img-filter" src="/assets/theme/images/icon7.png" alt="">Filters</button>
							<div class=" dropdown-menu filter-shoppage filter-shoppages-v7">
								<div class="container container-filter">
									<div class="row">
										<div class="col-md-2 widget-filter filter-cate no-pd-top">
											<h4>Sort by</h4>
											<ul>
												<li><a href="">Default</a></li>
												<li><a href="">Popularity</a></li>
												<li><a href="">Newnest</a></li>
												<li><a href="">Price: low to high</a></li>
												<li><a href="">Price: high to low</a></li>
											</ul>
										</div>
										<div class="col-md-2 widget-filter filter-cate filter-color">
											<h4>Price</h4>
											<ul>
												<li><a href="">$0.00 - $300.00</a></li>
												<li><a href="">$300.00 - $600.00</a></li>
												<li><a href="">$600.00 - $900.00</a></li>
												<li><a href="">$900.00 - $120.00</a></li>
												<li><a href="">$120.00+</a></li>
											</ul>
										</div>
										<div class="col-md-3 widget-filter filter-cate  filter-style-size">
											<h4>Size</h4>
											<ul>
												<li><a class="st-xs" href="#">XS</a></li>
												<li><a href="">S</a></li>
												<li><a href="">M</a></li>
												<li><a href="">L</a></li>
												<li><a class="st-xl" href="">XL</a></li>
												<li><a class="xxl" href="">XXL</a></li>
												<li><a class="xxl" href="">Free size</a></li>
											</ul>
										</div>
										<div class="col-md-2 widget-filter filter-cate filter-style">
											<h4>Color</h4>
											<ul class="color2">
												<li><a href=""><img src="/assets/theme/images/elip1.png" alt=""></a></li>
												<li><a href=""><img src="/assets/theme/images/elip2.png" alt=""></a></li>
												<li><a href=""><img src="/assets/theme/images/elip3.png" alt=""></a></li>
												<li><a href=""><img src="/assets/theme/images/elip4.png" alt=""></a></li>
												<li><a href=""><img src="/assets/theme/images/elip5.png" alt=""></a></li>
												<li><a href=""><img src="/assets/theme/images/elip6.png" alt=""></a></li>
												<li><a href=""><img src="/assets/theme/images/elip7.png" alt=""></a></li>
												<li><a href=""><img src="/assets/theme/images/elip8.png" alt=""></a></li>
												<li><a href=""><img src="/assets/theme/images/elip9.png" alt=""></a></li>
												<li><a href=""><img src="/assets/theme/images/elip10.png" alt=""></a></li>
												<li><a href=""><img src="/assets/theme/images/elip11.png" alt=""></a></li>
												<li><a href=""><img src="/assets/theme/images/elip12.png" alt=""></a></li>
												<li><a href=""><img src="/assets/theme/images/elip13.png" alt=""></a></li>
											</ul>
										</div>
										<div class="col-md-3 widget-filter filter-cate  filter-style-brand">
											<h4>Brand</h4>
											<div class="ul-1 shop3">
												<ul>
													<li><a href="#">Miukid</a></li>
													<li><a href="#">KidStar</a></li>
													<li><a href="#">Momy</a></li>
													<li><a href="#">Huggies</a></li>
													<li><a href="#">Mshop</a></li>
													<li><a href="#">iBaby</a></li>
													<li><a href="#">Me & Be</a></li>
													<li><a href="#">CocoShop</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="wrappage">
								<div class="filter-collection-left hidden-lg hidden-md">
									<a class="btn"><i class="zoa-icon-filter"><img src="/assets/theme/images/icon7.png" alt=""></i> Filter</a>
								</div>
								<div class="col-xs-12 hidden-md hidden-lg col-left collection-sidebar" id="filter-sidebar">
									<div class="close-sidebar-collection hidden-lg hidden-md">
										<span>Filter</span><i class="icon_close ion-close"></i>
									</div>
									<div class="widget-filter filter-cate no-pd-top">
										<h4>Sort by</h4>
										<ul>
											<li><a href="">Default</a></li>
											<li><a href="">Popularity</a></li>
											<li><a href="">Newnest</a></li>
											<li><a href="">Price: low to high</a></li>
											<li><a href="">Price: high to low</a></li>
										</ul>
									</div>
									<div class="widget-filter filter-cate filter-color">
										<h4>Price</h4>
										<ul>
											<li><a href="">$0.00 - $300.00</a></li>
											<li><a href="">$300.00 - $600.00</a></li>
											<li><a href="">$600.00 - $900.00</a></li>
											<li><a href="">$900.00 - $120.00</a></li>
											<li><a href="">$120.00+</a></li>
										</ul>
									</div>
									<div class="widget-filter filter-cate filter-size">
										<h4>Size</h4>
										<ul>
											<li><a href="#">XS</a></li>
											<li><a href="">S</a></li>
											<li><a href="">M</a></li>
											<li><a href="">L</a></li>
											<li><a href="">XL</a></li>
											<li><a class="xxl" href="">XXL</a></li>
											<li><a class="xxl" href="">Free size</a></li>
										</ul>
									</div>
									<div class="widget-filter filter-cate filter-size">
										<h4>Color</h4>
										<ul class="color2">
											<li><a href=""><img src="/assets/theme/images/elip1.png" alt=""></a></li>
											<li><a href=""><img src="/assets/theme/images/elip2.png" alt=""></a></li>
											<li><a href=""><img src="/assets/theme/images/elip3.png" alt=""></a></li>
											<li><a href=""><img src="/assets/theme/images/elip4.png" alt=""></a></li>
											<li><a href=""><img src="/assets/theme/images/elip5.png" alt=""></a></li>
											<li><a href=""><img src="/assets/theme/images/elip6.png" alt=""></a></li>
											<li><a href=""><img src="/assets/theme/images/elip7.png" alt=""></a></li>
											<li><a href=""><img src="/assets/theme/images/elip8.png" alt=""></a></li>
											<li><a href=""><img src="/assets/theme/images/elip9.png" alt=""></a></li>
											<li><a href=""><img src="/assets/theme/images/elip10.png" alt=""></a></li>
											<li><a href=""><img src="/assets/theme/images/elip11.png" alt=""></a></li>
											<li><a href=""><img src="/assets/theme/images/elip12.png" alt=""></a></li>
											<li><a href=""><img src="/assets/theme/images/elip13.png" alt=""></a></li>
										</ul>
									</div>
									<div class="widget-filter filter-cate filter-size">
										<h4>Brand</h4>
										<div class="ul-1 shop3">
											<ul>
												<li><a href="#">Miukid</a></li>
												<li><a href="#">KidStar</a></li>
												<li><a href="#">Momy</a></li>
												<li><a href="#">Huggies</a></li>
												<li><a href="#">Mshop</a></li>
												<li><a href="#">iBaby</a></li>
												<li><a href="#">Me & Be</a></li>
												<li><a href="#">CocoShop</a></li>
											</ul>
										</div>
									</div>
									<a class="zoa-btn btn-filter">
										Filter
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="border shopv1"></div>
		</div>
	</div>
	<!-- Content -->
	<div class="container">
		<div class="shop-top page-7">
			<div class="shop-element right shop-7">
			</div>
		</div>
		<div class="product-collection-grid product-grid bd-bottom">
			<div class="row">
			@if (isset($productsCategory))
        @if ($productsCategory)
          @foreach ($productsCategory as $product)
          @if ($product->stock > 0)
          	@if ($loop->iteration <= 8)
						<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 product-item">
							<div class="product-img">
								<a href="/item/{{$product->url}}"><img src="/assets/images/products/{{$product->image1}}" alt="" class="img-responsive"></a>
								<div class="product-button-group product-details">
									<a href="#" class="zoa-btn zoa-quickview">
										<span class="fa fa-shopping-bag"></span>
									</a>
									<a href="#" class="zoa-btn zoa-addcart">
										<span class="fa fa-heart"></span>
									</a>
								</div>
							</div>
							<div class="product-info">
								<div class="sale-para2 shop-1 pro-v1 shop-5 shop-6 shop-7">
									<p><a href="/item/{{$product->url}}">{{$product->name}}</a></p>
									<ul>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<li class="st-rv"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a><em><span>6
													Review(s)</span></em></li>

										<li><a class="sales-pro-v1-36" href="#">C${{ str_replace(',', '.', number_format($product->price, 0, '.', ',')) }}</a>
										</li>

									</ul>
								</div>
								<div class="short-desc">
									{!! $product->description !!}
								</div>
								<div class="sku">
									<p>SKU:</p> <span>CKLS-2207</span>
								</div>
								<div class="size shop-7">
									<div class="size-h4">
										<h4>Size: </h4>
									</div>
									<div class="size-ul">
										<ul>
											<li><a class="st-xs" href="">XS</a></li>
											<li><a href="">S</a></li>
											<li><a href="">M</a></li>
											<li><a href="">L</a></li>
											<li><a class="st-xl" href="">XL</a></li>
										</ul>
									</div>
								</div>
								<div class="product-bottom-group shop7">
									<a href="#" class="fa fa-shopping-bag shop7">
										<span class="zoa-icon-quick-view shop7"></span>
									</a>
									<a href="#" class="fa fa-heart shop7">
										<span class="zoa-icon-cart shop7"></span>
									</a>
								</div>
								<div class="share-shop7">
									<ul>
										<li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
										<li><a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
										<li><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						@else
            	@break
          	@endif
          @endif
          @endforeach
      	@endif
      @endif
			</div>
		</div>
		<!-- <div class="product-collection-grid product-grid bd-bottom">
			<div class="row">
				<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 product-item">
					<div class="product-img">
						<a href=""><img src="/assets/theme/images/img60.jpg" alt="" class="img-responsive"></a>
						<div class="product-button-group product-details">
							<a href="#" class="zoa-btn zoa-quickview">
								<span class="fa fa-shopping-bag"></span>
							</a>
							<a href="#" class="zoa-btn zoa-addcart">
								<span class="fa fa-heart"></span>
							</a>
						</div>
					</div>
					<div class="product-info">
						<div class="sale-para2 shop-1 pro-v1 shop-5 shop-6 shop-7">
							<p><a href="#">Calvin Klein Logo Sweatpants</a></p>
							<ul>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li class="st-rv"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a><em><span>6
											Review(s)</span></em></li>

								<li><a class="sales-pro-v1-36" href="#">$36.00</a>
								</li>

							</ul>
						</div>
						<div class="short-desc">
							<p class="product-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
								Ipsum has been<br> the industry's standard dummy text ever since the 1500s, when an unknown printer took
								a galley<br>
								of type and scrambled it to make a type specimen book.
						</div>
						<div class="sku">
							<p>SKU:</p> <span>CKLS-2207</span>
						</div>
						<div class="size shop-7">
							<div class="size-h4">
								<h4>Size: </h4>
							</div>
							<div class="size-ul">
								<ul>
									<li><a class="st-xs" href="">XS</a></li>
									<li><a href="">S</a></li>
									<li><a href="">M</a></li>
									<li><a href="">L</a></li>
									<li><a class="st-xl" href="">XL</a></li>
								</ul>
							</div>
						</div>
						<div class="product-bottom-group shop7">
							<a href="#" class="fa fa-shopping-bag shop7">
								<span class="zoa-icon-quick-view shop7"></span>
							</a>
							<a href="#" class="fa fa-heart shop7">
								<span class="zoa-icon-cart shop7"></span>
							</a>
						</div>
						<div class="share-shop7">
							<ul>
								<li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 product-item">
					<div class="product-img">
						<a href=""><img src="/assets/theme/images/img61.jpg" alt="" class="img-responsive"></a>
						<div class="product-button-group product-details">
							<a href="#" class="zoa-btn zoa-quickview">
								<span class="fa fa-shopping-bag"></span>
							</a>
							<a href="#" class="zoa-btn zoa-addcart">
								<span class="fa fa-heart"></span>
							</a>
						</div>
					</div>
					<div class="product-info">
						<div class="sale-para2 shop-1 pro-v1 shop-5 shop-6 shop-7">
							<p><a href="#">Calvin Klein Logo Sweatpants</a></p>
							<ul>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li class="st-rv"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a><em><span>6
											Review(s)</span></em></li>

								<li><a class="sales-pro-v1-36" href="#">$36.00</a>
								</li>

							</ul>
						</div>
						<div class="short-desc">
							<p class="product-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
								Ipsum has been<br> the industry's standard dummy text ever since the 1500s, when an unknown printer took
								a galley<br>
								of type and scrambled it to make a type specimen book.
						</div>
						<div class="sku">
							<p>SKU: <span>CKLS-2207</span></p>
						</div>
						<div class="size shop-7">
							<div class="size-h4">
								<h4>Size: </h4>
							</div>
							<div class="size-ul">
								<ul>
									<li><a class="st-xs" href="">XS</a></li>
									<li><a href="">S</a></li>
									<li><a href="">M</a></li>
									<li><a href="">L</a></li>
									<li><a class="st-xl" href="">XL</a></li>
								</ul>
							</div>
						</div>
						<div class="product-bottom-group shop7">
							<a href="#" class="fa fa-shopping-bag shop7">
								<span class="zoa-icon-quick-view shop7"></span>
							</a>
							<a href="#" class="fa fa-heart shop7">
								<span class="zoa-icon-cart shop7"></span>
							</a>
						</div>
						<div class="share-shop7">
							<ul>
								<li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 product-item">
					<div class="product-img">
						<a href=""><img src="/assets/theme/images/img62.jpg" alt="" class="img-responsive"></a>
						<div class="product-button-group product-details">
							<a href="#" class="zoa-btn zoa-quickview">
								<span class="fa fa-shopping-bag"></span>
							</a>
							<a href="#" class="zoa-btn zoa-addcart">
								<span class="fa fa-heart"></span>
							</a>
						</div>
					</div>
					<div class="product-info">
						<div class="sale-para2 shop-1 pro-v1 shop-5 shop-6 shop-7">
							<p><a href="#">Calvin Klein Logo Sweatpants</a></p>
							<ul>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li class="st-rv"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a><em><span>6
											Review(s)</span></em></li>

								<li><a class="sales-pro-v1-36" href="#">$36.00</a>
								</li>

							</ul>
						</div>
						<div class="short-desc">
							<p class="product-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
								Ipsum has been<br> the industry's standard dummy text ever since the 1500s, when an unknown printer took
								a galley<br>
								of type and scrambled it to make a type specimen book.
						</div>
						<div class="sku">
							<p>SKU:<span>CKLS-2207</span></p>
						</div>
						<div class="size shop-7">
							<div class="size-h4">
								<h4>Size: </h4>
							</div>
							<div class="size-ul">
								<ul>
									<li><a class="st-xs" href="">XS</a></li>
									<li><a href="">S</a></li>
									<li><a href="">M</a></li>
									<li><a href="">L</a></li>
									<li><a class="st-xl" href="">XL</a></li>
								</ul>
							</div>
						</div>
						<div class="product-bottom-group shop7">
							<a href="#" class="fa fa-shopping-bag shop7">
								<span class="zoa-icon-quick-view shop7"></span>
							</a>
							<a href="#" class="fa fa-heart shop7">
								<span class="zoa-icon-cart shop7"></span>
							</a>
						</div>
						<div class="share-shop7">
							<ul>
								<li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 product-item">
					<div class="product-img">
						<a href=""><img src="/assets/theme/images/img62.jpg" alt="" class="img-responsive"></a>
						<div class="product-button-group product-details">
							<a href="#" class="zoa-btn zoa-quickview">
								<span class="fa fa-shopping-bag"></span>
							</a>
							<a href="#" class="zoa-btn zoa-addcart">
								<span class="fa fa-heart"></span>
							</a>
						</div>
					</div>
					<div class="product-info">
						<div class="sale-para2 shop-1 pro-v1 shop-5 shop-6 shop-7">
							<p><a href="#">Calvin Klein Logo Sweatpants</a></p>
							<ul>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li class="st-rv"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a><em><span>6
											Review(s)</span></em></li>
								<li><a class="sales-pro-v1-36" href="#">$36.00</a>
								</li>

							</ul>
						</div>
						<div class="short-desc">
							<p class="product-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
								Ipsum has been<br> the industry's standard dummy text ever since the 1500s, when an unknown printer took
								a galley<br>
								of type and scrambled it to make a type specimen book.
						</div>
						<div class="sku">
							<p>SKU: <span>CKLS-2207</span></p>
						</div>
						<div class="size shop-7">
							<div class="size-h4">
								<h4>Size: </h4>
							</div>
							<div class="size-ul">
								<ul>
									<li><a class="st-xs" href="">XS</a></li>
									<li><a href="">S</a></li>
									<li><a href="">M</a></li>
									<li><a href="">L</a></li>
									<li><a class="st-xl" href="">XL</a></li>
								</ul>
							</div>
						</div>
						<div class="product-bottom-group shop7">
							<a href="#" class="fa fa-shopping-bag shop7">
								<span class="zoa-icon-quick-view shop7"></span>
							</a>
							<a href="#" class="fa fa-heart shop7">
								<span class="zoa-icon-cart shop7"></span>
							</a>
						</div>
						<div class="share-shop7">
							<ul>
								<li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<div class="product-collection-grid product-grid bd-bottom">
			<!-- <div class="row">
				<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 product-item">
					<div class="product-img">
						<a href=""><img src="/assets/theme/images/img60.jpg" alt="" class="img-responsive"></a>
						<div class="product-button-group product-details">
							<a href="#" class="zoa-btn zoa-quickview">
								<span class="fa fa-shopping-bag"></span>
							</a>
							<a href="#" class="zoa-btn zoa-addcart">
								<span class="fa fa-heart"></span>
							</a>
						</div>
					</div>
					<div class="product-info">
						<div class="sale-para2 shop-1 pro-v1 shop-5 shop-6 shop-7">
							<p><a href="#">Calvin Klein Logo Sweatpants</a></p>
							<ul>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li class="st-rv"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a><em><span>6
											Review(s)</span></em></li>

								<li><a class="sales-pro-v1-36" href="#">$36.00</a>
								</li>

							</ul>
						</div>
						<div class="short-desc">
							<p class="product-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
								Ipsum has been<br> the industry's standard dummy text ever since the 1500s, when an unknown printer took
								a galley<br>
								of type and scrambled it to make a type specimen book.
						</div>
						<div class="sku">
							<p>SKU:<span>CKLS-2207</span></p>
						</div>
						<div class="size shop-7">
							<div class="size-h4">
								<h4>Size: </h4>
							</div>
							<div class="size-ul">
								<ul>
									<li><a class="st-xs" href="">XS</a></li>
									<li><a href="">S</a></li>
									<li><a href="">M</a></li>
									<li><a href="">L</a></li>
									<li><a class="st-xl" href="">XL</a></li>
								</ul>
							</div>
						</div>
						<div class="product-bottom-group shop7">
							<a href="#" class="fa fa-shopping-bag shop7">
								<span class="zoa-icon-quick-view shop7"></span>
							</a>
							<a href="#" class="fa fa-heart shop7">
								<span class="zoa-icon-cart shop7"></span>
							</a>
						</div>
						<div class="share-shop7">
							<ul>
								<li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 product-item">
					<div class="product-img">
						<a href=""><img src="/assets/theme/images/img61.jpg" alt="" class="img-responsive"></a>
						<div class="product-button-group product-details">
							<a href="#" class="zoa-btn zoa-quickview">
								<span class="fa fa-shopping-bag"></span>
							</a>
							<a href="#" class="zoa-btn zoa-addcart">
								<span class="fa fa-heart"></span>
							</a>
						</div>
					</div>
					<div class="product-info">
						<div class="sale-para2 shop-1 pro-v1 shop-5 shop-6 shop-7">
							<p><a href="#">Calvin Klein Logo Sweatpants</a></p>
							<ul>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li class="st-rv"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a><em><span>6
											Review(s)</span></em></li>

								<li><a class="sales-pro-v1-36" href="#">$36.00</a>
								</li>

							</ul>
						</div>
						<div class="short-desc">
							<p class="product-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
								Ipsum has been<br> the industry's standard dummy text ever since the 1500s, when an unknown printer took
								a galley<br>
								of type and scrambled it to make a type specimen book.
						</div>
						<div class="sku">
							<p>SKU: <span>CKLS-2207</span></p>
						</div>
						<div class="size shop-7">
							<div class="size-h4">
								<h4>Size: </h4>
							</div>
							<div class="size-ul">
								<ul>
									<li><a class="st-xs" href="">XS</a></li>
									<li><a href="">S</a></li>
									<li><a href="">M</a></li>
									<li><a href="">L</a></li>
									<li><a class="st-xl" href="">XL</a></li>
								</ul>
							</div>
						</div>
						<div class="product-bottom-group shop7">
							<a href="#" class="fa fa-shopping-bag shop7">
								<span class="zoa-icon-quick-view shop7"></span>
							</a>
							<a href="#" class="fa fa-heart shop7">
								<span class="zoa-icon-cart shop7"></span>
							</a>
						</div>
						<div class="share-shop7">
							<ul>
								<li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 product-item">
					<div class="product-img">
						<a href=""><img src="/assets/theme/images/img62.jpg" alt="" class="img-responsive"></a>
						<div class="product-button-group product-details">
							<a href="#" class="zoa-btn zoa-quickview">
								<span class="fa fa-shopping-bag"></span>
							</a>
							<a href="#" class="zoa-btn zoa-addcart">
								<span class="fa fa-heart"></span>
							</a>
						</div>
					</div>
					<div class="product-info">
						<div class="sale-para2 shop-1 pro-v1 shop-5 shop-6 shop-7">
							<p><a href="#">Calvin Klein Logo Sweatpants</a></p>
							<ul>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li class="st-rv"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a><em><span>6
											Review(s)</span></em></li>

								<li><a class="sales-pro-v1-36" href="#">$36.00</a>
								</li>

							</ul>
						</div>
						<div class="short-desc">
							<p class="product-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
								Ipsum has been<br> the industry's standard dummy text ever since the 1500s, when an unknown printer took
								a galley<br>
								of type and scrambled it to make a type specimen book.
						</div>
						<div class="sku">
							<p>SKU: <span>CKLS-2207</span></p>
						</div>
						<div class="size shop-7">
							<div class="size-h4">
								<h4>Size: </h4>
							</div>
							<div class="size-ul">
								<ul>
									<li><a class="st-xs" href="">XS</a></li>
									<li><a href="">S</a></li>
									<li><a href="">M</a></li>
									<li><a href="">L</a></li>
									<li><a class="st-xl" href="">XL</a></li>
								</ul>
							</div>
						</div>
						<div class="product-bottom-group shop7">
							<a href="#" class="fa fa-shopping-bag shop7">
								<span class="zoa-icon-quick-view shop7"></span>
							</a>
							<a href="#" class="fa fa-heart shop7">
								<span class="zoa-icon-cart shop7"></span>
							</a>
						</div>
						<div class="share-shop7">
							<ul>
								<li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 product-item">
					<div class="product-img">
						<a href=""><img src="/assets/theme/images/img62.jpg" alt="" class="img-responsive"></a>
						<div class="product-button-group product-details">
							<a href="#" class="zoa-btn zoa-quickview">
								<span class="fa fa-shopping-bag"></span>
							</a>
							<a href="#" class="zoa-btn zoa-addcart">
								<span class="fa fa-heart"></span>
							</a>
						</div>
					</div>
					<div class="product-info">
						<div class="sale-para2 shop-1 pro-v1 shop-5 shop-6 shop-7">
							<p><a href="#">Calvin Klein Logo Sweatpants</a></p>
							<ul>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li class="st-rv"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a><em><span>6
											Review(s)</span></em></li>

								<li><a class="sales-pro-v1-36" href="#">$36.00</a>
								</li>

							</ul>
						</div>
						<div class="short-desc">
							<p class="product-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
								Ipsum has been<br> the industry's standard dummy text ever since the 1500s, when an unknown printer took
								a galley<br>
								of type and scrambled it to make a type specimen book.
						</div>
						<div class="sku">
							<p>SKU: <span>CKLS-2207</span></p>
						</div>
						<div class="size shop-7">
							<div class="size-h4">
								<h4>Size: </h4>
							</div>
							<div class="size-ul">
								<ul>
									<li><a class="st-xs" href="">XS</a></li>
									<li><a href="">S</a></li>
									<li><a href="">M</a></li>
									<li><a href="">L</a></li>
									<li><a class="st-xl" href="">XL</a></li>
								</ul>
							</div>
						</div>
						<div class="product-bottom-group shop7">
							<a href="#" class="fa fa-shopping-bag shop7">
								<span class="zoa-icon-quick-view shop7"></span>
							</a>
							<a href="#" class="fa fa-heart shop7">
								<span class="zoa-icon-cart shop7"></span>
							</a>
						</div>
						<div class="share-shop7">
							<ul>
								<li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div> -->
			<div class="loadmore">
				<a href="#">load more</a>
			</div>
			<div class="border"></div>
		</div>
	</div>
@endsection




@section('modal')
<!-- Modal1 Ver Producto-->
<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
    <div class="overlay-modal1 js-hide-modal1"></div>
    <div class="container">
        <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
            <button class="how-pos3 hov3 trans-04 js-hide-modal1">
                <img src="/assets/theme/images/icons/icon-close.png" alt="CLOSE">
            </button>
            <div class="row">
                <div class="col-md-6 col-lg-7 p-b-30">
                    <div class="p-l-25 p-r-30 p-lr-0-lg">
                        <div class="wrap-slick3 flex-sb flex-w">
                            <div class="wrap-slick3-dots"></div>
                            <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
                            <div class="slick3 gallery-lb">
                                <div id="img-modal1" class="item-slick3" data-thumb="/assets/images/no-image2.png" >
                                    <div class="wrap-pic-w pos-relative">
                                        <img id="modal-image1" src="/assets/images/no-image2.png" alt="IMG-PRODUCT">
                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="/assets/images/no-image2.png">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>
                                <div id="img-modal2" class="item-slick2" data-thumb="/assets/images/no-image2.png">
                                    <div class="wrap-pic-w pos-relative">
                                        <img id="modal-image2" src="/assets/images/no-image2.png" alt="IMG-PRODUCT">
                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="/assets/images/no-image2.png">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>
                                <div id="img-modal3" class="item-slick3" data-thumb="/assets/images/no-image2.png">
                                    <div class="wrap-pic-w pos-relative">
                                        <img id="modal-image3" src="/assets/images/no-image2.png" alt="IMG-PRODUCT">

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="/assets/images/no-image2.png">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>
                                <div id="img-modal4" class="item-slick4" data-thumb="/assets/images/no-image2.png">
                                    <div class="wrap-pic-w pos-relative">
                                        <img id="modal-image4" src="/assets/images/no-image2.png" alt="IMG-PRODUCT">

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="/assets/images/no-image2.png">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>
                                <div id="img-modal5" class="item-slick5" data-thumb="/assets/images/no-image2.png">
                                    <div class="wrap-pic-w pos-relative">
                                        <img id="modal-image5" src="/assets/images/no-image2.png" alt="IMG-PRODUCT">

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="/assets/images/no-image2.png">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>
                                <div id="img-modal6" class="item-slick6" data-thumb="/assets/images/no-image2.png">
                                    <div class="wrap-pic-w pos-relative">
                                        <img id="modal-image6" src="/assets/images/no-image2.png" alt="IMG-PRODUCT">

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="/assets/images/no-image2.png">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 p-b-30">
                    <div class="p-r-50 p-t-5 p-lr-0-lg">
                        <h4 id="modal-name" class="mtext-105 cl2 js-name-detail p-b-14">
                            Product name
                        </h4>

                        <span id="modal-price" class="mtext-106 cl2">
                            $0
                        </span>

                        <p id="modal-category" class="stext-102 cl3 p-t-30">
                            <strong></strong>
                        </p>

                        <p id="modal-kilos" class="stext-102 cl3 p-t-15">
						 <strong></strong>
						</p>

                        <p id="modal-tags" class="stext-102 cl3 p-t-15">
						 <strong></strong>
						</p>
												
                        <p id="modal-description" class="stext-102 cl3 p-t-23">
													Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
                        </p>

												<div id="modal-stock" class="mtext-106 cl2 p-t-23">
														Stock: 0
												</div>
                        <div class="p-t-23">
                            <!-- <div class="flex-w flex-r-m p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    Size
                                </div>
                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2" name="time">
                                            <option>Choose an option</option>
                                            <option>Size S</option>
                                            <option>Size M</option>
                                            <option>Size L</option>
                                            <option>Size XL</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="flex-w flex-r-m p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    Color
                                </div>

                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2" name="time">
                                            <option>Choose an option</option>
                                            <option>Red</option>
                                            <option>Blue</option>
                                            <option>White</option>
                                            <option>Grey</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="flex-w flex-r-m p-b-10">
                                <div id="modal-cont-cart" class="size-204 flex-w flex-m respon6-next">
                                    <div class="wrap-num-product flex-w m-l-20 m-tb-20">
                                        <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-minus"></i>
                                        </div>

                                        <input id="modal-cant" class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1" max="" min="1">

                                        <div id="modal-cant-sum" data-max="" class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-plus"></i>
                                        </div>
                                    </div>
                                    <button id="modal-btn-cart" data-product-id="" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                        Agregar al carrito
                                    </button>
                                </div>
								<h4 id="modal-no-stock" style="margin: auto;padding-right: 24px;color: #de1616;" >Sin Stock !</h4>
                            </div>	
                        </div>
                        <div class="flex-w flex-m p-l-100 p-t-40 respon7">
                            <div id="contAddFavoriteModal" class="flex-m  p-l-10 m-l-11">
                                <div id="addFavoriteLink" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 tooltip100 js-addwish-b2 pointer" data-item="" data-product-id="" data-tooltip="Agregar">
                                    <i class="zmdi zmdi-favorite"></i> Agregar a favoritos
                                </div>
                            </div>
                        </div>
                        <div class="flex-w flex-m p-l-100 p-t-40 respon7">
                            <div class="flex-m  p-l-10 m-l-11">
                                <div class="text-center pb-2" style="padding-right: 65px;"><i class="zmdi zmdi-share"></i> Compartir en redes</div>
                            </div>    
                            <div class="flex-m">
                                <div class="">
                                    <!-- Botón de Facebook -->
                                    <a id="linkFacebook" href="https://www.facebook.com/tu-pagina" class="social-button facebook" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <!-- Botón de WhatsApp -->
                                    <a id="linkWhatsapp" href="https://api.whatsapp.com/send?text=Visita%20mi%20p%C3%A1gina:%20https%3A%2F%2Fwww.tu-pagina.com" class="social-button whatsapp" target="_blank">
                                        <i class="fa fa-whatsapp"></i>
                                    </a>
                                    <!-- Botón de Twitter -->
                                    <a id="linkTwitter" href="https://twitter.com/tu-usuario-o-pagina" class="social-button twitter" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" style="position: relative;top: 4px;">
                                            <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/>
                                        </svg>
                                    </a>
                                    <!-- Botón de Telegram -->
                                    <a id="linkTelegram" href="https://t.me/tu-canal" class="social-button telegram" target="_blank">
                                        <i class="fa fa-telegram"></i>
                                    </a>
                                </div>
                            </div>
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
//al Abrir modal Prdocuto cargar info
$(document).ready(function () {
    $(".js-show-modal1").click(function (e) {
        e.preventDefault(); // Evita que el enlace redirija

        // Obtén el objeto JSON del atributo data-product y analízalo
        var productData = $(this).attr("data-product");
        var product = JSON.parse(productData);


        //buscamos en la session de favoritos si ya esta agregado el item y cambiamos su link
        ///sessionFavorites con favoritos variable global en -> (web.blade)
        var isProductInFavorites = Object.values(sessionFavorites).some(item => item.id === product.id);
        console.log('sessiones-fav',sessionFavorites)
        if (isProductInFavorites) {
            $("#contAddFavoriteModal").html('<div class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 pointer" style="color:#DE2423"><i class="zmdi zmdi-favorite"></i> Agregado a favoritos</div>');
        } else {
            // Si no está en la lista, dejarlo como está
            $("#contAddFavoriteModal").html('<div id="addFavoriteLink" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 tooltip100 js-addwish-b2 pointer" data-item="" data-product-id="" data-tooltip="Agregar"><i class="zmdi zmdi-favorite"></i> Agregar a favoritos </div>');
        }
        
        // Ahora puedes acceder a las propiedades del producto en JavaScript
        console.log('moda product');
        console.log(product);

        //links share sociales
        $("#linkFacebook").attr('href', 'https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fimportadoratatar.cl/item/' + product.url);
        $("#linkWhatsapp").attr('href', 'https://api.whatsapp.com/send?text=Producto:%20https%3A%2F%2Fimportadoratatar.cl/item/' + product.url);
        $("#linkTwitter").attr('href', 'https://twitter.com/intent/tweet?url=https%3A%2F%2Fimportadoratatar.cl/item/' + product.url);
        $("#linkTelegram").attr('href', 'https://t.me/share/url?url=https%3A%2F%2Fimportadoratatar.cl/item/' + product.url);

        $("#modal-btn-cart").attr('data-product-id', product.id);
        $("#modal-name").html('<a class="cl2" href="/item/'+product.url+'" >'+product.name+'</a>');
        $("#addFavoriteLink").attr('data-item',product.name);
        $("#addFavoriteLink").attr('data-product-id',product.id);
        var price = parseFloat(product.price).toLocaleString('es-ES', {minimumFractionDigits: 0,maximumFractionDigits: 0,useGrouping: true});
        $("#modal-price").text('$'+price);
        if(product.category){ $("#modal-category").html("Categoría: <strong>"+product.category.name+"</strong>"); }
        if(product.kilos){ $("#modal-kilos").html("Kilos: <strong>"+product.kilos+"</strong>"); }
        if (product.tags) {
            let tags = JSON.parse(product.tags);
            var cleanedTags = tags.map(function (tag) {
                return '<span style="border: 1px solid silver;padding: 1px 2px;border-radius: 8px;">' + tag.replace(/[^\w\s]/gi, '').toLowerCase() + '</span>';
            });
            var tagsString = cleanedTags.join(' ');
            $("#modal-tags").html("Tags: " + tagsString);
        }
        $("#modal-description").text(product.description); 
        $("#modal-stock").text('Stock: '+product.stock);
        $("#modal-cant").attr('max', product.stock);
        $("#modal-cant").val(1);
        $("#modal-cant-sum").attr('data-max', product.stock);
        if(product.stock == 0){
            $("#modal-cont-cart").hide();
            $("#modal-no-stock").show();
            
        }else{
            $("#modal-no-stock").hide();
            $("#modal-cont-cart").show();
        }

        // Agrega las imagenes del producto al modal
        var imagenes = $(".slick3-dots img");
        imagenes.each(function (index, elemento) {
            var propiedadImagen = "image" + (index + 1); // Calcula la propiedad de imagen correspondiente
            if (product[propiedadImagen] !== null) {
                $(elemento).show();
                $(elemento).attr("src", '/assets/images/products/' + product[propiedadImagen]);
                $("#modal-"+propiedadImagen).attr("src", '/assets/images/products/' + product[propiedadImagen]);
                $("#modal-"+propiedadImagen).next('a').attr("href", '/assets/images/products/' + product[propiedadImagen]);
            }else{
                // $(elemento).remove();
                // $("#img-modal"+propiedadImagen).remove();
                // $("#modal-image"+propiedadImagen).remove();
                $(elemento).attr("src", '/assets/images/no-image2.png');
                $("#modal-"+propiedadImagen).attr("src", '/assets/images/no-image2.png');
                $("#modal-"+propiedadImagen).next('a').attr("href", '/assets/images/no-image2.png');
            }
        });

        // Abre el modal
        $(".wrap-modal1").show();
    });

    // Cierra el modal cuando se hace clic en el botón de cerrar
    $(".js-hide-modal1").click(function () {
            $(".wrap-modal1").hide();
    });
});
</script>



<script>
//codigo de rotor de destacados
$(document).ready(function(){
    $('#carouselExample').on('slide.bs.carousel', function (e) {
        var $e = $(e.relatedTarget);
        var idx = $e.index();
        var itemsPerSlide = 4;
        var totalItems = $('.carousel-item').length;

        if (idx >= totalItems-(itemsPerSlide-1)) {
            var it = itemsPerSlide - (totalItems - idx);
            for (var i=0; i<it; i++) {
                // append slides to end
                if (e.direction=="left") {
                    $('.carousel-item').eq(i).appendTo('.carousel-inner');
                }
                else {
                    $('.carousel-item').eq(0).appendTo('.carousel-inner');
                }
            }
        }
    });
});
</script>

@endsection