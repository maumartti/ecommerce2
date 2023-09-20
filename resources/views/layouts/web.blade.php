<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/assets/styles/bootstrap4/bootstrap.min.css">
    <link href="/assets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="/assets/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="/assets/plugins/slick-1.8.0/slick.css">
    <link rel="stylesheet" type="text/css" href="/assets/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="/assets/styles/responsive.css">
    <link rel="stylesheet" type="text/css" href="/assets/styles/product_styles.css">
    <!-- Scripts -->
    <style>
        .logo a img{
            width:180px;
        }
        .header_search, .logo_container, .wishlist_cart{
            height:70px;
        }
        .banner_background{
            background-image:url(/assets/images/1.png);
            background-size: 100% / 100%;
            background-position:50% 0px;
        }
        @media max-width(764px){
            #banner{
                height: 180px !important;
            }
        }
        .carousel-control-next-icon, .carousel-control-prev-icon{
            width:80px;
            height:80px;
        }
        .bg-light-two {
          background-color: #f8f9fa !important;
        }



        /* Add styles for your floating WhatsApp button */
        .floating-whatsapp {
          position: fixed;
          bottom: 35px;
          right: 32px;
          z-index: 1000;
        }

        .floating-whatsapp a {
          display: block;
          width: 60px;
          height: 60px;
          background-color: #25D366;
          border-radius: 50%;
          text-align: center;
          line-height: 60px;
          box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
          transition: background-color 0.3s ease;
        }

        .floating-whatsapp a img {
            width: 70px;
        height: 70px;
        border-radius: 100%;
        }


        /*********** instaaaaaa  */
        .profile-container {
              text-align: left;
              display: flex;
              align-items: center;
            }
            .profile-picture {
              width: 150px;
              height: 150px;
              position: relative;
              overflow: hidden;
              margin-right: 10px;
              margin:auto;
            }
            .profile-border {
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
            }
            .profile-img {
              width: 100%;
              height: 100%;
              border-radius: 50%;
              object-fit: cover;
              border: 4px solid #ffffff;
              box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
            .profile-name {
              font-size: 24px;
              font-weight: bold;
            }
            .card-video video {
              width: 100%;
              max-width: 100%;
            }
        .profile-name {
          font-size: 24px;
          font-weight: bold;
          background: linear-gradient(to right, #833ab4, #fd1d1d, #fcb045);
          -webkit-background-clip: text;
          background-clip: text;
          color: transparent;
        }

        .video-card {
          position: relative;
          overflow: hidden;
        }

        .video-thumbnail {
          position: relative;
          overflow: hidden;
          background-color: #000;
          cursor: pointer;
        }

        .video-thumbnail video {
          width: 100%;
          height: auto;
          display: block;
          transition: transform 0.2s;
        }

        .play-icon {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          color: #fff;
          font-size: 3rem;
          z-index: 1;
          cursor: pointer;
        }

        .play-icon i {
          transition: transform 0.2s;
        }

        .video-thumbnail:hover video {
          transform: scale(1.1);
        }

        .video-thumbnail:hover .play-icon i {
          transform: scale(1.2);
        }
    </style>
</head>
<body>
    <div id="app">
        <main class="py-4">
          	<!-- Header -->
          <header class="header">
            <!-- Top Bar -->
            <div class="top_bar">
              <div class="container">
                <div class="row">
                  <div class="col d-flex flex-row">
                    <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="/assets/images/phone.png" alt=""></div>+56982639595</div>
                    <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="/assets/images/mail.png" alt=""></div><a href="mailto:importadoratatar@gmail.com">importadoratatar@gmail.com</a></div>
                    <div class="top_bar_content ml-auto">
                      <div class="top_bar_menu">
                        <!-- <ul class="standard_dropdown top_bar_dropdown">
                          <li>
                            <a href="#">English<i class="fas fa-chevron-down"></i></a>
                            <ul>
                              <li><a href="#">Italian</a></li>
                              <li><a href="#">Spanish</a></li>
                              <li><a href="#">Japanese</a></li>
                            </ul>
                          </li>
                          <li>
                            <a href="#">$ US dollar<i class="fas fa-chevron-down"></i></a>
                            <ul>
                              <li><a href="#">EUR Euro</a></li>
                              <li><a href="#">GBP British Pound</a></li>
                              <li><a href="#">JPY Japanese Yen</a></li>
                            </ul>
                          </li>
                        </ul> -->
                      </div>
                      <div class="top_bar_user">
                        <div class="user_icon"><img src="/assets/images/user.svg" alt=""></div>
                        <div><a href="{{ route('register') }}">Registro</a></div>
                        <div><a href="{{ route('login') }}">Iniciar sesión</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>		
            </div>
            <!-- Header Main -->
            <div class="header_main">
              <div class="container">
                <div class="row">

                  <!-- Logo -->
                  <div class="col-lg-2 col-sm-3 col-3 order-1">
                    <div class="logo_container">
                      <div class="logo">
                        <a href="/">
                        <img src="/assets/images/{{$web->imageLogo}}">
                        </a>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Search -->
                  <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                    <div class="header_search">
                      <div class="header_search_content">
                        <div class="header_search_form_container">
                          <form action="#" class="header_search_form clearfix">
                            <input type="search" required="required" class="header_search_input" placeholder="Search for products...">
                            <div class="custom_dropdown">
                              <div class="custom_dropdown_list">
                                <span class="custom_dropdown_placeholder clc">Categorías</span>
                                <i class="fas fa-chevron-down"></i>
                                <ul class="custom_list clc">
                                                        @if(isset($categories))
                                                            @if($subcategories)
                                                                @foreach ($categories as $index => $category)
                                                                <li><a class="clc" href="#">{{$category->name}}</a></li>
                                                                @endforeach
                                                            @endif
                                                        @endif
                                                        
                                </ul>
                              </div>
                            </div>
                            <button type="submit" class="header_search_button trans_300" value="Submit"><img src="/assets/images/search.png" alt=""></button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Wishlist -->
                  <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                    <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                      <div class="wishlist d-flex flex-row align-items-center justify-content-end">
                        <div class="wishlist_icon"><img src="/assets/images/heart.png" alt=""></div>
                        <div class="wishlist_content">
                          <div class="wishlist_text"><a href="#">Likes</a></div>
                          <div class="wishlist_count">115</div>
                        </div>
                      </div>

                      <!-- Cart -->
                      <div class="cart">
                        <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                          <div class="cart_icon">
                            <img src="/assets/images/cart.png" alt="">
                            <div class="cart_count"><span>10</span></div>
                          </div>
                          <div class="cart_content">
                            <div class="cart_text"><a href="#">Carrito</a></div>
                            <div class="cart_price">$85</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Main Navigation -->
            <img src="/assets/images/bb.gif" style="height:40px;width:100%;">
            <nav class="main_nav">
              <div class="container">
                <div class="row">
                  <div class="col">
                    
                    <div class="main_nav_content d-flex flex-row">

                      <!-- Categories Menu -->

                      

                      <!-- Main Nav Menu -->
              
                      <div class="main_nav_menu m-auto">
                        <ul class="standard_dropdown main_nav_dropdown">
                                            @if(isset($categories))
                                                @if($subcategories)
                                                    @foreach ($categories as $index => $category)
                                                  <li class="hassubs">
                                                        <a href="#">{{$category->name}}</a>
                                                        @if(isset($category->subcategories))
                                                            @if($category->subcategories)
                                                            <ul>
                                                                @foreach ($category->subcategories as $index => $subcategory)
                                                                <li><a href="#">{{$subcategory->name}}<i class="fas fa-chevron-down"></i></a></li>
                                                                @endforeach
                                                            </ul>
                                                            @endif
                                                        @endif
                                                        </a>
                                                    </li>
                                                    @endforeach
                                                @endif
                                            @endif

                                            
                          <!-- <li><a href="blog.html">Hogar<i class="fas fa-chevron-down"></i></a></li>
                          <li><a href="blog.html">Temporada<i class="fas fa-chevron-down"></i></a></li>
                          <li><a href="blog.html">Ofertas<i class="fas fa-chevron-down"></i></a></li>
                          <li><a href="contact.html">Contacto<i class="fas fa-chevron-down"></i></a></li> -->
                        </ul>
                      </div>

                      <!-- Menu Trigger -->

                      <div class="menu_trigger_container ml-auto">
                        <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                          <div class="menu_burger">
                            <div class="menu_trigger_text">menu</div>
                            <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </nav>
            <!-- Menu -->
            <div class="page_menu">
              <div class="container">
                <div class="row">
                  <div class="col">
                    
                    <div class="page_menu_content">
                      
                      <div class="page_menu_search">
                        <form action="#">
                          <input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
                        </form>
                      </div>
                      <ul class="page_menu_nav">
                        <!-- <li class="page_menu_item has-children">
                          <a href="#">Language<i class="fa fa-angle-down"></i></a>
                          <ul class="page_menu_selection">
                            <li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
                            <li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
                            <li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
                            <li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
                          </ul>
                        </li> -->
                        <!-- <li class="page_menu_item has-children">
                          <a href="#">Currency<i class="fa fa-angle-down"></i></a>
                          <ul class="page_menu_selection">
                            <li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
                            <li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
                            <li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
                            <li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
                          </ul>
                        </li> -->
                        <li class="page_menu_item">
                          <a href="#">Home<i class="fa fa-angle-down"></i></a>
                        </li>
                        <li class="page_menu_item has-children">
                          <a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
                          <ul class="page_menu_selection">
                            <li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
                            <li class="page_menu_item has-children">
                              <a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
                              <ul class="page_menu_selection">
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                              </ul>
                            </li>
                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                          </ul>
                        </li>
                        <li class="page_menu_item has-children">
                          <a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
                          <ul class="page_menu_selection">
                            <li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                          </ul>
                        </li>
                        <li class="page_menu_item has-children">
                          <a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
                          <ul class="page_menu_selection">
                            <li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                          </ul>
                        </li>
                        <li class="page_menu_item"><a href="blog.html">blog<i class="fa fa-angle-down"></i></a></li>
                        <li class="page_menu_item"><a href="contact.html">contact<i class="fa fa-angle-down"></i></a></li>
                      </ul>
                      
                      <div class="menu_contact">
                        <div class="menu_contact_item"><div class="menu_contact_icon"><img src="/assets/images/phone_white.png" alt=""></div>+56982639595</div>
                        <div class="menu_contact_item"><div class="menu_contact_icon"><img src="/assets/images/mail_white.png" alt=""></div><a href="mailto:importadoratatar@gmail.com">importadoratatar@gmail.com</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </header>

          <div class="floating-whatsapp">
            <a href="https://wa.me/+56982639595" target="_blank">
              <img src="/assets/images/wp.png" alt="WhatsApp">
            </a>
          </div>



            @yield('content')
        </main>
    </div>

<script src="/assets/js/jquery-3.3.1.min.js"></script>
<script src="/assets/styles/bootstrap4/popper.js"></script>
<script src="/assets/styles/bootstrap4/bootstrap.min.js"></script>
<script src="/assets/plugins/greensock/TweenMax.min.js"></script>
<script src="/assets/plugins/greensock/TimelineMax.min.js"></script>
<script src="/assets/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="/assets/plugins/greensock/animation.gsap.min.js"></script>
<script src="/assets/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="/assets/plugins/slick-1.8.0/slick.js"></script>
<script src="/assets/plugins/easing/easing.js"></script>
<script src="/assets/js/custom.js"></script>

@yield('script')
</body>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<div class="col-lg-3 footer_col">
					<div class="footer_column footer_contact">
						<div class="logo_container">
							<div class="logo">
								<a href="#">
								<img src="/assets/images/logo1.png">
								</a>
						</div>
						</div>
						<div class="footer_title">Got Question? Call Us 24/7</div>
						<div class="footer_phone">+56982639595</div>
						<div class="footer_contact_text">
							<p>17 Princess Road, London</p>
							<p>Grester London NW18JR, UK</p>
						</div>
						<div class="footer_social">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								<li><a href="#"><i class="fab fa-google"></i></a></li>
								<li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-2 offset-lg-2">
					<div class="footer_column">
						<div class="footer_title">Find it Fast</div>
						<ul class="footer_list">
							<li><a href="#">Computers & Laptops</a></li>
							<li><a href="#">Cameras & Photos</a></li>
							<li><a href="#">Hardware</a></li>
							<li><a href="#">Smartphones & Tablets</a></li>
							<li><a href="#">TV & Audio</a></li>
						</ul>
						<div class="footer_subtitle">Gadgets</div>
						<ul class="footer_list">
							<li><a href="#">Car Electronics</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<ul class="footer_list footer_list_2">
							<li><a href="#">Video Games & Consoles</a></li>
							<li><a href="#">Accessories</a></li>
							<li><a href="#">Cameras & Photos</a></li>
							<li><a href="#">Hardware</a></li>
							<li><a href="#">Computers & Laptops</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<div class="footer_title">Customer Care</div>
						<ul class="footer_list">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order Tracking</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Customer Services</a></li>
							<li><a href="#">Returns / Exchange</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="#">Product Support</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
						<div class="copyright_content">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						</div>
						<div class="logos ml-sm-auto">
							<ul class="logos_list">
								<li><a href="#"><img src="/assets/images/logos_1.png" alt=""></a></li>
								<li><a href="#"><img src="/assets/images/logos_2.png" alt=""></a></li>
								<li><a href="#"><img src="/assets/images/logos_3.png" alt=""></a></li>
								<li><a href="#"><img src="/assets/images/logos_4.png" alt=""></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</html>
