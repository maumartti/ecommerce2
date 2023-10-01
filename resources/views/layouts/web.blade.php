<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/assets/theme/images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/assets/theme/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/assets/theme/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/assets/theme/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/assets/theme/fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/assets/theme/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/assets/theme/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/assets/theme/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/assets/theme/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/assets/theme/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/assets/theme/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/assets/theme/vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/assets/theme/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/assets/theme/css/util.css">
	<link rel="stylesheet" type="text/css" href="/assets/theme/css/main.css">
<!--===============================================================================================-->
@yield('head')

<style>
	.quit-cart:hover, a:hover, .hov-tag1:hover, .js-addedwish-detail, .filter-link-active, .filter-link:hover, .main-menu > li.active-menu > a, .main-menu > li:hover > a, .hov-cl1:hover, .sub-menu > li:hover > a{
		color: {{ $web->color }} !important;
  }
	.block2-btn:hover{
		color: white !important;
	}
  .bg1 , .btn-back-to-top, .btn-back-to-top:hover, .icon-header-noti::after, .loader05, .swal-button, .icon-header-noti::after, .btn-back-to-top, .hov-btn3:hover, .show-search:hover::after, .show-filter:hover::after, .main-menu-m {
		background-color: {{ $web->color }} ;
  }
  .hov-btn3:hover, .filter-link-active, .hov-tag1:hover, .filter-link:hover, .show-search:hover::after, .show-filter:hover::after, .loader05{
    border-color: {{ $web->color }} ;
  }
  /* Add styles for your floating WhatsApp button */
  .floating-whatsapp {
    position: fixed;
    bottom: 55px;
    right: 32px;
    z-index: 1000;
  }

  .floating-whatsapp a {
    display: block;
    width: 60px;
    height: 60px;
    background-color: transparent;
    border-radius: 50%;
    text-align: center;
    line-height: 60px;
    /* box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3); */
    transition: background-color 0.3s ease;
  }

  .floating-whatsapp a img {
      width: 70px;
  height: 70px;
  border-radius: 100%;
  }
	.slick3-dots li{
		margin-bottom:14px !important;
	}
	.label-featured::before:hover {
  	display:inline-block !important;
	}
</style>

</head>
<body class="animsition">
	
	<!-- Header -->
	<header class="header-v1">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						<!-- Envío gratis en compras a partir de $30.000 -->
					</div>

					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m trans-04 p-lr-25">
							Registro
						</a>

						<a href="/login" class="flex-c-m trans-04 p-lr-25">
							Admin
						</a>

						<!-- <a href="#" class="flex-c-m trans-04 p-lr-25">
							EN
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							USD
						</a> -->
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop" >
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="/" class="logo">
						<img src="/assets/images/{{$web->imageLogo}}" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="active-menu">
								<a href="/">Home</a>
							</li>

							<li>
								<a href="#">Categorías</a>
									<ul class="sub-menu">
									@if (isset($categories))
										@if ($categories)
											@foreach ($categories as $index => $category)
											<li><a href="/categoria/{{$category->url}}">{{$category->name}}</a></li>
											@endforeach
										@endif
									@endif
									</ul>
							</li>

							<li class="label1" data-label1="hot">
								<a href="/destacados">Destacados</a>
							</li>

							<li>
								<a href="/blog">Blog</a>
							</li>

							<li>
								<a href="/nosotros">Nosotros</a>
							</li>

							<li>
								<a href="/contacto">Contacto</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="{{ session()->has('totalCart') ? session('totalCart') : 0 }}">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>

						<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
							<i class="zmdi zmdi-favorite-outline"></i>
						</a>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="/"><img src="/assets/images/{{$web->imageLogo}}" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="{{ session()->has('totalCart') ? session('totalCart') : 0 }}">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>

				<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
					<i class="zmdi zmdi-favorite-outline"></i>
				</a>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<!-- <li>
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>
				</li> -->

				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m p-lr-10 trans-04">
							Registro
						</a>

						<a href="/login" class="flex-c-m p-lr-10 trans-04">
							Admin
						</a>

						<!-- <a href="#" class="flex-c-m p-lr-10 trans-04">
							EN
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							USD
						</a> -->
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="#">Home</a>
				</li>

				<li>
					<a>Cateogrías</a>
					<ul class="sub-menu-m">
						@if (isset($categories))
							@if ($categories)
								@foreach ($categories as $index => $category)
								<li><a href="/categoria/{{$category->url}}">{{$category->name}}</a></li>
								@endforeach
							@endif
						@endif
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="/destacados" class="label1 rs1" data-label1="hot">Destacados</a>
				</li>

				<li>
					<a href="/blog">Blog</a>
				</li>

				<li>
					<a href="/nosotros">Nosotros</a>
				</li>

				<li>
					<a href="/contacto">Contacto</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="/assets/theme/images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>

  <div class="floating-whatsapp">
    <a href="https://wa.me/+56982639595" target="_blank">
      <img src="/assets/images/wp.png" alt="WhatsApp">
    </a>
  </div>
	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-30 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Tu Carrito
				</span>
				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
					@if(session()->has('cart'))
						@foreach (session('cart') as $item)
						<li product-id="{{$item['id']}}" class="header-cart-item flex-w flex-t m-b-20">
								<div class="header-cart-item-img">
										<img src="/assets/images/products/{{ $item['image1'] }}" alt="IMG">
								</div>
								<div class="header-cart-item-txt p-t-8">
										<a href="{{ $item['url'] }}" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
												{{ $item['name'] }}
										</a>
										<span class="header-cart-item-info">
												{{ $item['quantity'] }} x ${{ number_format($item['price'], 2) }}
												<a product-id="{{ $item['id'] }}" class="header-cart-item-info float-right quit-cart" style="cursor:pointer;">
													<span>Borrar</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="float: right;position: relative;top: -2px;"><path fill="currentColor" d="M9 3v1H4v2h1v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1V4h-5V3H9m0 5h2v9H9V8m4 0h2v9h-2V8Z"/></svg>
												</a>
										</span>
								</div>
						</li>
						@endforeach
					@else
						<li class="empty-cart">El carrito está vacío</li>
					@endif
			</ul>
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: ${{ number_format(session('totalPrice', 0), 2) }}
					</div>
					<div class="header-cart-buttons flex-w w-full">
						<a href="/carrito" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							Ver Carrito
						</a>
						<a href="/carrito" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Completar compra
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

		

@yield('content')


	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Categorías
					</h4>

					<ul>
          @if (isset($categories))
            @if ($categories)
              @foreach ($categories as $index => $category)
						<li class="p-b-10">
							<a href="/categoria/{{$category->url}}" class="stext-107 cl7 hov-cl1 trans-04">
								{{$category->name}}
							</a>
						</li>
            @endforeach
      	    @endif
          @endif 
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Ayuda
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Sistema de envíos
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Devoluciónes 
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Políticas
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								FAQs
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Contacto
					</h4>

					<p class="stext-107 cl7 size-201">
          Av. Obispo Manuel Umaña 299, 9160000 Estación Central, Región Metropolitana, Chile
					</p>

					<div class="p-t-27">
						<a href="https://www.facebook.com/ImportadoraTatarSpA/" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="https://www.instagram.com/importadora_tatar/" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>

						<a href="https://g.co/kgs/cXg3UX" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-google"></i>
						</a>
						<a href="https://www.tiktok.com/@importadora_tatar" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" style="top: 2px;position: relative;" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#b2b2b2}</style><path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"/></svg>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Subscribeté
					</h4>

					<form>
						<div class="wrap-input1 w-full p-b-4">
							<input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
							<div class="focus-input1 trans-04"></div>
						</div>

						<div class="p-t-18">
							<button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
								Subscribe
							</button>
						</div>
					</form>
				</div>
			</div>

			<div class="p-t-40">
				<div class="flex-c-m flex-w p-b-18">
					<a href="#" class="m-all-1">
						<img src="/assets/theme/images/icons/m.png" alt="ICON-PAY" style="width:32px;position:relative;top:-1px;height:21px;border-radius:3px;">
					</a>

					<a href="#" class="m-all-1">
						<img src="/assets/theme/images/icons/icon-pay-02.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="/assets/theme/images/icons/icon-pay-03.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="/assets/theme/images/icons/icon-pay-04.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="/assets/theme/images/icons/icon-pay-05.png" alt="ICON-PAY">
					</a>
				</div>

				<p class="stext-107 cl6 txt-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | importadoratatar.cl
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

				</p>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	<!-- Modal1 -->
	<!-- <div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
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
									<div class="item-slick3" data-thumb="images/product-detail-01.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="/assets/theme/images/product-detail-01.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-01.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="images/product-detail-02.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="/assets/theme/images/product-detail-02.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-02.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="images/product-detail-03.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="/assets/theme/images/product-detail-03.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-03.jpg">
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
							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
								Lightweight Jacket
							</h4>

							<span class="mtext-106 cl2">
								$58.79
							</span>

							<p class="stext-102 cl3 p-t-23">
								Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
							</p>
							
							<div class="p-t-33">
								<div class="flex-w flex-r-m p-b-10">
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
								</div>

								<div class="flex-w flex-r-m p-b-10">
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
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-204 flex-w flex-m respon6-next">
										<div class="wrap-num-product flex-w m-r-20 m-tb-10">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>

										<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
											Add to cart
										</button>
									</div>
								</div>	
							</div>

					
							<div class="flex-w flex-m p-l-100 p-t-40 respon7">
								<div class="flex-m bor9 p-r-10 m-r-11">
									<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
										<i class="zmdi zmdi-favorite"></i>
									</a>
								</div>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
									<i class="fa fa-facebook"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
									<i class="fa fa-twitter"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
									<i class="fa fa-google-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	@yield('modal')

<!--===============================================================================================-->	
	<script src="/assets/theme/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/assets/theme/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/assets/theme/vendor/bootstrap/js/popper.js"></script>
	<script src="/assets/theme/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/assets/theme/vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="/assets/theme/vendor/daterangepicker/moment.min.js"></script>
	<script src="/assets/theme/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/assets/theme/vendor/slick/slick.min.js"></script>
	<script src="/assets/theme/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="/assets/theme/vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="/assets/theme/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="/assets/theme/vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="/assets/theme/vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});




		//funcion agregar al carrito click
		/*---------------------------------------------*/
		$('.js-addcart-detail').on('click', function(){
			console.log('click add cart');
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			var productId = $(this).attr('data-product-id');
			var csrfToken = $('meta[name="csrf-token"]').attr('content'); // Obtener el token CSRF
			var quantity = $('#modal-cant').val(); //
			// Realiza una solicitud AJAX para agregar el producto al carrito
			$.ajax({
					url: '/add-to-cart/' + productId,
					type: 'POST',
					data: {
							_token: csrfToken, // Incluye el token CSRF en los datos de la solicitud
							quantity: quantity
					},
					success: function(data) {
							if (data.status == 'success') {
									// El producto se agregó exitosamente al carrito
									//$.toastr.success('Agregado con éxito');
									swal(nameProduct, "Agregado al carrito !", "success");
									//cambiamos el count de cart
									$('.js-show-cart').attr('data-notify',data.totalCart);
									var totalPriceFormatted = parseFloat(data.totalPrice).toLocaleString('en-US', {minimumFractionDigits: 2,maximumFractionDigits: 2});
        					$('.header-cart-total').text('Total: '+totalPriceFormatted);
									// Agrega el nuevo elemento al carrito usando jQuery
									var cartItem = data.cart; // Último elemento del carrito
									//console.log('cartItem',cartItem)
									if(cartItem){
										var price = parseFloat(cartItem.price).toLocaleString('en-US', {minimumFractionDigits: 2,maximumFractionDigits: 2});
										var cartItemHtml = `
											<li product-id="${cartItem.id}" class="header-cart-item flex-w flex-t m-b-20">
													<div class="header-cart-item-img">
															<img src="/assets/images/products/${cartItem.image1}" alt="IMG">
													</div>
													<div class="header-cart-item-txt p-t-8">
															<a href="${cartItem.url}" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
																	${cartItem.name}
															</a>
															<span class="header-cart-item-info">
																	${cartItem.quantity} x $${price}
																	<a product-id="${cartItem.id}" class="header-cart-item-info float-right quit-cart" style="cursor:pointer;">
																			<span>Borrar</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="float: right;position: relative;top: -2px;"><path fill="currentColor" d="M9 3v1H4v2h1v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1V4h-5V3H9m0 5h2v9H9V8m4 0h2v9h-2V8Z"></path></svg>
																	</a>
															</span>
													</div>
											</li>`;
										//quite el elemento y aAgrega el nuevo elemento al carrito
										$('.header-cart-wrapitem li[product-id="' + cartItem.id + '"]').remove();
										$('.header-cart-wrapitem').append(cartItemHtml);
									}
							} else {
									// Maneja el caso de error si es necesario
									//$.toastr.error('Error al agregar');
									swal(nameProduct, "Error al agregar !", "error");
							}
					},
					error: function() {
							// Maneja el caso de error si la solicitud falla
							alert('Error al realizar la solicitud');
					}
			});
		});
		//quitar item del carrito
		/*---------------------------------------------*/
		$('.header-cart-wrapitem').on('click', '.quit-cart', function() {
			console.log('click quit cart');
			//var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			var btnQuit = $(this);
			var productId = $(this).attr('product-id');
			var csrfToken = $('meta[name="csrf-token"]').attr('content'); // Obtener el token CSRF
			// Realiza una solicitud AJAX para agregar el producto al carrito
			$.ajax({
					url: '/quit-to-cart/' + productId,
					type: 'GET',
					data: {
							_token: csrfToken, // Incluye el token CSRF en los datos de la solicitud
					},
					success: function(data) {
							if (data.status == 'success') {
									//$.toastr.success('Agregado con éxito');
									//swal(nameProduct, "Agregado al carrito !", "success");
									btnQuit.parents('.header-cart-item').remove();
        					$('.js-show-cart').attr('data-notify',data.totalCart);
									var totalPriceFormatted = parseFloat(data.totalPrice).toLocaleString('en-US', {minimumFractionDigits: 2,maximumFractionDigits: 2});
        					$('.header-cart-total').text('Total: '+totalPriceFormatted);
							} else {
									// Maneja el caso de error si es necesario
									//$.toastr.error('Error al agregar');
									swal(nameProduct, "Error al quitar !", "error");
							}
					},
					error: function() {
							// Maneja el caso de error si la solicitud falla
							alert('Error al realizar la solicitud');
					}
			});
		});
	
	</script>
<!--===============================================================================================-->
	<script src="/assets/theme/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
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
	</script>
<!--===============================================================================================-->
	<script src="/assets/theme/js/main.js"></script>

  @yield('script')
</body>
</html>