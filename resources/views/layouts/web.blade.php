<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Tiendasacuanjoche</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">
    <link rel="stylesheet" href="/assets/theme/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/theme/css/slick.css">
    <link rel="stylesheet" href="/assets/theme/css/slick-theme.css">
    <link rel="stylesheet" href="/assets/theme/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/assets/theme/Hover-master/Hover-master/css/hover-min.css">
    <link rel="stylesheet" href="/assets/theme/css/styles.css">
    <link rel="stylesheet" href="/assets/theme/css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <!--==============Favicon==========================================================================-->
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--==END=FAVICON=======================================================================-->
    @yield('head')
</head>

<body>
<!-- push menu-->
<div class="pushmenu menu-home5">
    <div class="menu-push">
        <span class="close-left js-close"><i class="ion-ios-close-empty f-40"></i></span>
        <div class="clearfix"></div>
        <!-- <form role="search" method="get" id="searchform" class="searchform" action="/search">
            <div>
                <label class="screen-reader-text" for="q"></label>
                <input type="text" placeholder="Search for products" value="" name="q" id="q" autocomplete="off">
                <input type="hidden" name="type" value="product">
                <button type="submit" id="searchsubmit"><i class="ion-ios-search-strong"></i></button>
            </div>
        </form> -->
        <ul class="nav-home5 js-menubar">
            <li class="level1">
                <a href="/">Home</a>
            </li>
            <li class="level1 "><a href="/destacados">Destacados</a></li>
            <li class="level1 dropdown"><a href="#">Categorías</a>
                <span class="icon-sub-menu"></span>
                <div class="menu-level1 js-open-menu">
                    <ul class="level1">
                        <li class="level2">	
                            <a href="#">Categorías</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="#" title="">Categories Full Width</a></li>
                                <li class="level3"><a href="#" title="">Categories Left Sidebar</a></li>
                                <li class="level3"><a href="#" title="">Categories Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="level2">
                            <a href="#">Single Product Layout</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="#" title="">Product Extended</a></li>
                                <li class="level3"><a href="#" title="">Product Left Sidebar</a></li>
                                <li class="level3"><a href="#" title="">Product Right Sideba</a></li>
                            </ul>
                        </li>
                        <li class="level2">
                            <a href="#">Other Pages</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="#" title="">Shop</a></li>
                                <li class="level3"><a href="#" title="">Cart</a></li>
                                <li class="level3"><a href="#" title="">My Wishlist</a></li>
                                <li class="level3"><a href="#" title="">Checkout</a></li>
                                <li class="level3"><a href="#" title="">My Account</a></li>
                                <li class="level3"><a href="#" title="">Track Your Order</a></li>
                                <li class="level3"><a href="#" title="">Quick View</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </li>
            <li class="level1 active dropdown"><a href="/nosotros">Nosotros</a></li>
            <li class="level1">
                <a href="#">Contacto</a>
            </li>
            <li class="level1">
                <a href="/blog">Blog</a>
            </li>
        </ul>
        <ul class="mobile-account">
            <li><a href="/login"><i class="fa fa-unlock-alt"></i>Login</a></li>
            <li><a href="#"><i class="fa fa-user-plus"></i>Registro</a></li>
        </ul>
        <h4 class="mb-title">Nuestras redes</h4>
        <div class="mobile-social mg-bottom-30">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
        </div>
    </div>
</div>
<header id="header" class="header-v2">
    <div class="topbar hidden-xs hidden-sm" style="background: #f8f5b9;">
        <div class="container">
            <div class="row flex">
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="topbar-left homepage-v1">
                        <div class="a">
                            <a class="hover-images" href="#"><img src="/assets/theme/images/truck.png" style="width: 45px;" alt="icon" >Envíos a todo el país !</a>
                        </div>
                        <div class="topbar-social gift">
                            <a href="#"><i class="fa fa-gift home3" aria-hidden="true"></i>Devoluciones</a>
                            <span>02</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12 col-xs-12 justify-content-end">
                    <div class="topbar-right homepage-v1">
                        <!-- <div class="element element-currency">
                            <a href="#"><i class="fa fa-language" aria-hidden="true"></i>Language:</a>
                            <a id="label3" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span>ENG</span>
                                <span class="fa fa-chevron-down"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="label3">
                                <li><a href="#">EN-English</a></li>
                                <li><a href="#">US-American</a></li>
                                <li><a href="#">FR-France</a></li>
                            </ul>
                        </div> -->
                        <!-- <div class="element element-leaguage">
                            <a href="#"><i class="fa fa-money" aria-hidden="true"></i>Curency:</a>
                            <a id="label2" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span>USD</span>
                                <span class="fa fa-chevron-down"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="label2">
                                <li><a href="#">USD-Dollar</a></li>
                                <li><a href="#">Eur-Euro</a></li>
                                <li><a href="#">GBP-Pound</a></li>
                            </ul>
                        </div> -->
                        <div class="sign-in">
                            <p><a href="/login">Login</a></p>
                        </div>
                        <div class="sign-in">
                            <p><a href="/login">Registro</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-center-1">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12 header">
                    <div class="logo">
                        <a href="#"><img src="/assets/images/{{$web->imageLogo}}" alt="logo"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12 logo">
                    <div class="date2">
                        <div class="date">
                            <a href="#"><i class="fa fa-calendar st-calendar" aria-hidden="true"></i></a>
                        </div>
                        <div class="para-a">
                            <h4>Mon - Sat 8h00 -18h00</h4>
                            <p>Sunday</p>
                            <span>CLOSED</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12 header-center2">
                    <div class="date2">
                        <div class="date">
                            <a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i></a>
                        </div>
                        <div class="para-a a2">
                            <h4>Every Week Sales!</h4>
                            <p>Discount</p>
                            <span>up to 50% off.</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12 hd-right">
                    <div class="date4">
                        <div class="date">
                            <a href="#"><i class="fa fa-phone st-phone" aria-hidden="true"></i></a>
                        </div>
                        <div class="para-a a3">
                            <h4>Have a Questions?</h4>
                            <p>Call:</p>
                            <span>1900 - 819898.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-center pro-v1 hp1" style="background: #d4db32;">
        <div class="container">
            <!-- push-menu -->
            <a href="#" class="icon-pushmenu js-push-menu">
                <i class="fa fa-bars" aria-hidden="true"></i></a>
                <div class="row flex align-items-center justify-content-between">
                    <div class="col-md-6 col-xs-12 col-sm-6 col2 flex justify-content-end">
                        <ul class="nav navbar-nav js-menubar hidden-xs hidden-sm">
                            <li class="level1 active dropdown home-page-v1-st style-menu-home-1"><a class="menu-home-3 home-1-font" href="/">Home</a></li>
                            <li class="level1 dropdown hassub style-menu-home-1"><a class="menu-home-3 home-1-font" href="#">Categorías <span class="fa fa-chevron-down"></span></a>
                                <span class="plus js-plus-icon"></span>
                                <div class="menu-level-1 dropdown-menu style5">
                                    <ul class="level1">
                                        <li class="level2 col-6">
                                            <a href="#">Categorías</a>
                                            <ul class="menu-level-2">
                                            @if (isset($categories))
                                                @if ($categories)
                                                    @foreach ($categories as $index => $category)
                                                    <li class="level3"><a href="/categoria/{{$category->url}}" title="">{{$category->name}}</a></li> 
                                                    @endforeach
                                                @endif
                                            @endif                                               
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                            </li>

                            <li class="level1 hassub dropdown style-menu-home-1">
                                <a class="menu-home-3 home-1-font" href="/destacados">Destacados</a>
                            </li>
                            <li class="level1 dropdown hassub style-menu-home-1" >
                                <a class="menu-home-3 home-1-font" href="/blog">Blog</a>
                            </li>
                            <li class="level1 dropdown hassub style-menu-home-1">
                                <a class="menu-home-3 home-1-font" href="/nosotros">Nosotros</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-6 carts">
                        <div class="search3 search-home-1">
                            <form method="get" action="/search" role="search" class="search-form  has-categories-select">
                                <input name="q" class="search-input" type="text" value="" placeholder="Search..." autocomplete="off">
                                <input type="hidden" name="post_type" value="product">
                                <button type="submit" id="search-btn"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>
                        <div class="date3 dropdown">
                            <div class="date mycart">
                                <button class="fa fa-shopping-bag dropdown-toggle" type="button" data-toggle="dropdown">
                                </button>
                                <div class="dropdown-menu cart2 drop-home-1 check-out-home-1">
                                    
                                    <div class="cart-2">
                                        <div class="check-out">
                                            <div class="img-cart">
                                                <a href="#"><img src="/assets/theme/images/img27.jpg" alt="img"></a>
                                            </div>
                                            <div class="para-cart">
                                                <p><a href="#">Crepe Jacket With Pompom</a></p>
                                                <h4>$36.00</h4>
                                                <del>$42.00</del>
                                                <br>
                                                <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="check-out">
                                            <div class="img-cart">
                                                <a href="#"><img src="/assets/theme/images/img28.jpg" alt="img"></a>
                                            </div>
                                            <div class="para-cart">
                                                <p><a href="#">Animal Print Sweatshirt</a></p>
                                                <h4>$36.00</h4>
                                                <del>$42.00</del>
                                                <br>
                                                <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="check-out bd-bt">
                                            <div class="img-cart">
                                                <a href="#"><img src="/assets/theme/images/img29.jpg" alt="img"></a>
                                            </div>
                                            <div class="para-cart">
                                                <p><a href="#">Knit Cardigan</a></p>
                                                <br>
                                                <h4>$36.00</h4>
                                                <del>$42.00</del>
                                                <br>
                                                <a href="#"><i class="fa fa-trash-o st" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="check-out2">
                                            <div class="total">
                                                <p>Total</p>
                                                <span>$ 689.8</span>
                                            </div>
                                            <div class="check">
                                                <a href="#">check out</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="para-a a4">
                                <h4><a href="#">My Cart.</a></h4>
                                <p>01 </p>
                                <span>/ $150.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</header>
<!-- header -->
@yield('content')
<!-- footer -->
<footer>
    <div class="footers">
        <div class="container">
            <div class="one">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="logo-para">
                            <a href="#"><img src="/assets/images/{{$web->imageLogo}}" alt="logo"></a>
                            <p><em><a href="#">Miukid is a premium eCommerce theme with<br>
                            advanced admin module.</a></em></p>
                        </div>
                        <div class="icon-para">
                            <ul>
                                <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>Telephone: +84 988  992 085</a></li>
                                <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>Email: lamhvdesigner@gmail.com</a></li>
                                <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>8:00 - 19:00, Monday - Saturday,<br> 
                                Sunday - closed</a></li>
                            </ul>
                        </div>
                        <div class="bytheme">
                            <div class="bytheme2">
                                <a href="#">Buy This Theme</a>
                            </div>
                            <div class="icons-ft">
                                <ul>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vine" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- footer-left -->
                    <div class="col-md-4 col-sm-4 col-xs-12 fix ">
                        <div class="ft-center">
                            <div class="information">
                                <h4>Información</h4>
                                <div class="border2"></div>
                                <a href="#">About Us</a>
                                <br>
                                <a href="#">Shipping & Returns</a>
                                <br>
                                <a href="#">Privacy Notice</a>
                                <br>
                                <a href="#">Conditions of Use</a>
                                <br>
                                <a href="#">RSS</a>
                                <br>
                            </div>
                            <div class="information center">
                                <h4>Servicios</h4>
                                <div class="border2"></div>
                                <a href="#">Online support</a>
                                <br>
                                <a href="#">Help & FAQs</a>
                                <br>
                                <a href="#">Call Center</a>
                                <br>
                                <a href="#">Contact Us</a>
                                <br>
                                <a href="#">Custom Link</a>
                                <br>
                            </div>
                        </div>
                    </div>
                    <!-- footer center -->
                    <div class="col-md-4 col-sm-4 col-xs-12 right">
                        <div class="Instagram">
                            <h4>Instagram</h4>
                            <div class="border2"></div>
                        </div>
                        <div class="img-ul img-ft-st">
                            <ul>
                                <li><a href="#"><img src="/assets/theme/images/insta1.png" alt="img"></a></li>
                                <li><a href="#"><img src="/assets/theme/images/insta2.png" alt="img"></a></li>
                                <li><a href="#"><img src="/assets/theme/images/insta3.png" alt="img"></a></li>
                                <li><a href="#"><img src="/assets/theme/images/insta4.png" alt="img"></a></li>
                            </ul>
                        </div>
                        <div class="img-ul img-ft-st">
                            <ul>
                                <li><a href="#"><img src="/assets/theme/images/insta5.png" alt="img"></a></li>
                                <li><a href="#"><img src="/assets/theme/images/insta6.png" alt="img"></a></li>
                                <li><a href="#"><img src="/assets/theme/images/insta7.png" alt="img"></a></li>
                                <li><a href="#"><img src="/assets/theme/images/insta8.png" alt="img"></a></li>
                            </ul>
                        </div>
                        <div class="menu-ft">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">New Arrivals</a></li>
                                <li><a href="#">Site map</a></li>
                            </ul>
                        </div>
                        <!-- footer right -->
                    </div>
                </div>
            </div>
            <div class="border"></div>
        </div>
    </div>
    <!-- footer-ending -->
    <div class="footerending">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="fted-left">
                        <p>Copyright © 2018 by </p>
                        <a href="#">EngoTheme. </a>
                        <span>All Rights Reserved.</span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 ">
                    <div class="fted-left two">
                        <ul>
                            <li><a href="#"><img src="/assets/theme/images/icon1.png" alt="icon"></a></li>
                            <li><a href="#"><img src="/assets/theme/images/icon2.png" alt="icon"></a></li>
                            <li><a href="#"><img src="/assets/theme/images/icon3.png" alt="icon"></a></li>
                            <li><a href="#"><img src="/assets/theme/images/icon4.png" alt="icon"></a></li>
                            <li><a href="#"><img src="/assets/theme/images/icon5.png" alt="icon"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="#" class="zoa-btn scroll_top"><i class="ion-ios-arrow-up"></i></a>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/assets/theme/js/jquery.js"></script>
<script src="/assets/theme/js/bootstrap.min.js"></script>
<script src="/assets/theme/js/owl.carousel.min.js"></script>
<script src="/assets/theme/js/slick.min.js"></script>
<script src="/assets/theme/js/countdown.js"></script>
<script src="/assets/theme/js/main.js"></script>
<script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: false,
            autoplayTimeout: 3000,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                1014: {
                    items: 1
                },
                1200: {
                    items: 1
                },
                1600: {
                    items: 1
                }
            }
        });

    });
</script>
<script> 
    $(document).ready(function(){
      $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
  });
</script>
@yield('script')
</body>

</html>