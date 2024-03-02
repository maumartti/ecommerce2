@extends('layouts.web')

@section('head')
<title>{{ config('app.name') }}</title>
<meta name="description" content="{{ config('app.name') }} - Importación y venta de fardos de ropa Americana y Europea de alta calidad, para todo chile.">
<meta property="og:title" content="{{ config('app.name') }} - Venta e Importación de fardos de ropa importada.">
<meta property="og:description" content="{{ config('app.name') }} - Importación y venta de fardos de ropa Americana y Europea de alta calidad, para todo chile.">
<meta property="og:url" content="{{request()->url()}}">
<meta property="og:type" content="website">


<style>

</style>
@endsection

@section('content')
<section>
    <div class="kids-winter">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12 kids">
                    <div class="kids-st">
                        <div class="owl-carousel owl-theme owl-cate v2 js-owl-cate-hp1">
                            <div class="shop-now hp1">
                                <img src="/assets/images/{{$web->imageRotor1}}" alt="">
                                <h4>Kids Winter   <span>Jacket,<br>
                                Coat & Sweater</span></h4>
                                <p style="margin-top: 15px;">It is a long established fact that a reader will be distracted by the<br>
                                readable content of a page when looking at its layout</p>
                                <a href="" style="margin-top: 25px;">Shop now</a>
                            </div>
                            @if($web->imageRotor2)<img src="/assets/images/{{$web->imageRotor2}}" alt="">@endif
                            @if($web->imageRotor3)<img src="/assets/images/{{$web->imageRotor3}}" alt="">@endif
                            @if($web->imageRotor4)<img src="/assets/images/{{$web->imageRotor4}}" alt="">@endif
                            @if($web->imageRotor5)<img src="/assets/images/{{$web->imageRotor5}}" alt="">@endif
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="backpack img81">
                        <a href="" class="hover-images"><img src="/assets/theme/images/img81.png" alt=""></a>
                        <div class="pos">
                            <p>New Styles</p>
                            <h4 class="st-font">Backpack</h4>
                            <span>2018</span>
                        </div>
                    </div>
                    <div class="backpack">
                        <a href="" class="hover-images"><img src="/assets/theme/images/img82.png" alt=""></a>
                        <div class="pos-st2">
                            <h4>Sale <span>50%</span> off</h4>
                            <p>This weekend only</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured -->
    <div class="featured-homepage1">
        <div class="container">
            <div class="product-related hp1 featured-home1">
                <div class="title-pro-v1 hp1">
                    <h3 class="related-title text-center hp1">Featured</h3>
                    <p><a href="" class="view">View All Products<i class="fa fa-angle-right" aria-hidden="true"></i></a></p>
                </div>
                <div class="owl-carousel owl-theme owl-cate v2 js-owl-cate-feat owl-feat-hp1">
                    <div class="product-item pro-v1 home1 ">
                        <div class="product-img product-img-home3">
                            <a href=""><img src="/assets/theme/images/img61.jpg" alt="" class="img-responsive"><i class="fa fa-arrows" aria-hidden="true"></i><span class="quick">Quick view</span></a>
                            <div class="sale-img shop1 shop2">
                                <div class="before shop1 v2 pro-v1 hp1 featured-before before-home1 bf-featured-hp1"></div>
                            </div>
                            <div class="ribbon zoa-hot shop-v1 hp1 featured-sales"><span>New</span></div>
                            <div class="product-button-group hp1">
                                <a href="#" class="zoa-btn zoa-quickview">
                                    <span class="fa fa-shopping-bag"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-wishlist">
                                    <span class="fa fa-balance-scale"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-addcart">
                                    <span class="fa fa-heart "></span>
                                </a>
                            </div>
                        </div>
                        <div class="sale-para2 shop-1 pro-v1 hp2-para home1">
                            <p><a href="#">Animal Print Sweatshirt</a></p>
                            <div class="star-icons">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
                                </ul>
                            </div>
                            <div class="review-hp1">
                                <p>$36.00</p>
                                <del>$42.00</del>
                            </div>
                        </div>
                    </div>
                    <div class="product-item pro-v1 home1">
                        <div class="product-img product-img-home3">
                            <a href=""><img src="/assets/theme/images/img50.jpg" alt="" class="img-responsive"><i class="fa fa-arrows" aria-hidden="true"></i><span class="quick">Quick view</span></a>
                            <div class="sale-img shop1 shop2 st-v2">
                                <div class="before shop1 v2 pro-v1 st-v2 hp1 featured-before-25"></div>
                            </div>
                            <div class="ribbon zoa-hot shop-v1 v2 hp1 featured-sales"><span>-25%</span></div>
                            <div class="product-button-group hp1">
                                <a href="#" class="zoa-btn zoa-quickview">
                                    <span class="fa fa-shopping-bag"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-wishlist">
                                    <span class="fa fa-balance-scale"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-addcart">
                                    <span class="fa fa-heart "></span>
                                </a>
                            </div>
                        </div>
                        <div class="sale-para2 shop-1 pro-v1 hp2-para home1">
                            <p><a href="#">Animal Print Sweatshirt</a></p>
                            <div class="star-icons">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
                                </ul>
                            </div>
                            <div class="review-hp1">
                                <p>$36.00</p>
                                <del>$42.00</del>
                            </div>
                        </div>
                    </div>
                    <div class="product-item pro-v1 home1">
                        <div class="product-img product-img-home3">
                            <div class="style-opacity">
                                <div class="opacity-home2">
                                    <a href=""><img src="/assets/theme/images/img51.jpg" alt="" class="img-responsive"></a>
                                </div>
                                <div class="out-of-stock">
                                    <h4>out of stock!</h4>
                                    <em><span>see</span>similar products</em>
                                </div>
                            </div>
                            <div class="product-button-group hp1">
                                <a href="#" class="zoa-btn zoa-quickview">
                                    <span class="fa fa-shopping-bag"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-wishlist">
                                    <span class="fa fa-balance-scale"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-addcart">
                                    <span class="fa fa-heart "></span>
                                </a>
                            </div>
                        </div>
                        <div class="sale-para2 shop-1 pro-v1 hp2-para home1">
                            <p><a href="#">Animal Print Sweatshirt</a></p>
                            <div class="star-icons">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
                                </ul>
                            </div>
                            <div class="review-hp1">
                                <p>$36.00</p>
                                <del>$42.00</del>
                            </div>
                        </div>
                    </div>
                    <div class="product-item pro-v1 home1">
                        <div class="product-img product-img-home3">
                            <a href=""><img src="/assets/theme/images/img63.jpg" alt="" class="img-responsive"><i class="fa fa-arrows" aria-hidden="true"></i><span class="quick">Quick view</span></a>
                            <div class="product-button-group hp1">
                                <a href="#" class="zoa-btn zoa-quickview">
                                    <span class="fa fa-shopping-bag"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-wishlist">
                                    <span class="fa fa-balance-scale"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-addcart">
                                    <span class="fa fa-heart "></span>
                                </a>
                            </div>
                        </div>
                        <div class="sale-para2 shop-1 pro-v1 hp2-para home1">
                            <p><a href="#">Animal Print Sweatshirt</a></p>
                            <div class="star-icons">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
                                </ul>
                            </div>
                            <div class="review-hp1">
                                <p>$36.00</p>
                                <del>$42.00</del>
                            </div>
                        </div>
                    </div>
                    <div class="product-item pro-v1 home1">
                        <div class="product-img product-img-home3">
                            <a href=""><img src="/assets/theme/images/img61.jpg" alt="" class="img-responsive"><i class="fa fa-arrows" aria-hidden="true"></i><span class="quick">Quick view</span></a>
                            <div class="sale-img shop1 shop2">
                                <div class="before shop1 v2 pro-v1 hp1 featured-before before-home1"></div>
                            </div>
                            <div class="ribbon zoa-hot shop-v1 hp1 featured-sales"><span>New</span></div>
                            <div class="product-button-group hp1">
                                <a href="#" class="zoa-btn zoa-quickview">
                                    <span class="fa fa-shopping-bag"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-wishlist">
                                    <span class="fa fa-balance-scale"></span>
                                </a>
                                <a href="#" class="zoa-btn zoa-addcart">
                                    <span class="fa fa-heart "></span>
                                </a>
                            </div>
                        </div>
                        <div class="sale-para2 shop-1 pro-v1 hp2-para home1">
                            <p><a href="#">Animal Print Sweatshirt</a></p>
                            <div class="star-icons">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
                                </ul>
                            </div>
                            <div class="review-hp1">
                                <p>$36.00</p>
                                <del>$42.00</del>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner -->
    <div class="banner-homepage1">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12 banner">
                    <div class="banner-right">
                        <img src="/assets/theme/images/banner.png" alt="">
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 banner">
                    <div class="banner-right">
                        <img src="/assets/theme/images/banner2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bestseller -->
    <div class="bestseller">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="product-related best">
                        <div class="title-pro-v1 hp1">
                            <h3 class="related-title text-center hp1 best">Bestseller</h3>
                            <p><a href="" class="view">View All Products<i class="fa fa-angle-right" aria-hidden="true"></i></a></p>
                        </div>
                        <div class="owl-carousel owl-theme owl-cate v2 js-owl-cate-bestseller owl-best-hp1">
                            <div class="item">
                                <div class="best-seller">
                                    <div class="img-bestseller">
                                        <a href="" class=" hover-img-home1"><img src="/assets/theme/images/img50.jpg" alt=""></a>
                                        <div class="sale-img shop1 shop2 st-v2">
                                            <div class="before shop1 v2 pro-v1 st-v2 hp1 best"></div>
                                        </div>
                                        <div class="ribbon zoa-hot shop-v1 v2 hp1 best-seller"><span>-25%</span></div>
                                    </div>
                                    <div class="para-best-home1">
                                        <h4><a href="">Animal Print Sweatshirt</a></h4>
                                        <ul>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li class="span"><em>6 Review(s)</em></li>
                                        </ul>
                                        <p>$36.00</p>
                                        <del>$42.00</del><br>
                                        <a href=""><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        <a href=""><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                                        <a href=""><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="best-seller">
                                    <div class="img-bestseller">
                                        <a href="" class=" hover-img-home1"><img class="st-img-best" src="/assets/theme/images/img99.jpg" alt=""></a>
                                        <div class="before shop1 v2 pro-v1 best"></div>
                                        <div class="ribbon zoa-hot shop-v1 v2 hp1 best-seller"><span>-25%</span></div>
                                    </div>
                                    <div class="para-best-home1">
                                        <h4><a href="">Animal Print Sweatshirt</a></h4>
                                        <ul>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li class="span"><em>6 Review(s)</em></li>
                                        </ul>
                                        <p>$36.00</p>
                                        <del>$42.00</del><br>
                                        <a href=""><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        <a href=""><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                                        <a href=""><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="best-seller">
                                    <div class="img-bestseller">
                                        <a href="" class=" hover-img-home1"><img src="/assets/theme/images/img52.jpg" alt=""></a>
                                        <div class="sale-img shop1 shop2 st-v2">
                                            <div class="before shop1 v2 pro-v1 st-v2 hp1 best"></div>
                                        </div>
                                        <div class="ribbon zoa-hot shop-v1 v2 hp1 best-seller st-color-home1"><span>-25%</span></div>
                                    </div>
                                    <div class="para-best-home1">
                                        <h4><a href="">Contrasting Dungarees With Craces</a></h4>
                                        <ul>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li class="span"><em>6 Review(s)</em></li>
                                        </ul>
                                        <p>$36.00</p>
                                        <del>$42.00</del><br>
                                        <a href=""><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        <a href=""><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                                        <a href=""><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="best-seller">
                                    <div class="img-bestseller">
                                        <a href="" class=" hover-img-home1"><img src="/assets/theme/images/img59.jpg" alt=""></a>
                                        <div class="sale-img shop1 shop2 st-v2">
                                            <div class="before shop1 v2 pro-v1 st-v2 hp1 best"></div>
                                        </div>
                                        <div class="ribbon zoa-hot shop-v1 v2 hp1 best-seller"><span>-25%</span></div>
                                    </div>
                                    <div class="para-best-home1">
                                        <h4><a href="">Animal Print Sweatshirt</a></h4>
                                        <ul>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li class="span"><em>6 Review(s)</em></li>
                                        </ul>
                                        <p>$36.00</p>
                                        <del>$42.00</del><br>
                                        <a href=""><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                        <a href=""><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                                        <a href=""><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="monial">
                        <div class="title-pro-v1 hp1">
                            <h3 class="related-title text-center hp1">Testimonial</h3>
                        </div>
                        <div class="owl-carousel owl-theme">
                            <div class="item best">
                                <a href=""><img class="img-st1" src="/assets/theme/images/img90.png" alt=""></a>
                                <a href=""><h4>JoAnne Theodore<br><em>Graphic Design</em></h4></a>
                                <img class="img-st" src="/assets/theme/images/img91.png" alt="">
                                <p><em>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</em></p>
                            </div>
                            <div class="item best">
                                <a href=""><img class="img-st1" src="/assets/theme/images/img90.png" alt=""></a>
                                <a href=""><h4>JoAnne Theodore<br><em>Graphic Design</em></h4></a>
                                <img class="img-st" src="/assets/theme/images/img91.png" alt="">
                                <p><em>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</em></p>
                            </div>
                            <div class="item best">
                                <a href=""><img class="img-st1" src="/assets/theme/images/img90.png" alt=""></a>
                                <a href=""><h4>JoAnne Theodore<br><em>Graphic Design</em></h4></a>
                                <img class="img-st" src="/assets/theme/images/img91.png" alt="">
                                <p><em>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</em></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- On-Sale -->
    <div class="onsale">
        <div class="container">
            <div class="product-related onsale">
                <div class="title-pro-v1">
                    <h3 class="related-title text-center onsale-home1">On Sale !</h3>
                    <p><a href="" class="view
                        ">View All Products<i class="fa fa-angle-right" aria-hidden="true"></i></a></p>
                    </div>
                    <div class="owl-carousel owl-theme owl-cate v2 js-owl-cate-sales-hp1 owl-onsale">
                        <div class="product-item pro-v1 home1">
                            <div class="product-img product-img-home3">
                                <a  href=""><img src="/assets/theme/images/img83.jpg" alt="" class="img-responsive"></a>
                                <div class="sale-img shop1 shop2 st-v2">
                                    <div class="before shop1 v2 pro-v1 st-v2 hp1 before-home1 bf-onsales-hp1"></div>
                                </div>
                                <div class="ribbon zoa-hot shop-v1 v2 hp1"><span>-25%</span></div>
                                <div class="product-button-group hp1 onsale-home1">
                                    <a href="#" class="zoa-btn zoa-quickview stwh-onsales-home1">
                                        <span class="fa fa-shopping-bag"></span>
                                    </a>
                                    <a href="#" class="zoa-btn zoa-wishlist stwh-onsales-home1">
                                        <span class="fa fa-balance-scale"></span>
                                    </a>
                                    <a href="#" class="zoa-btn zoa-addcart stwh-onsales-home1">
                                        <span class="fa fa-heart "></span>
                                    </a>
                                </div>
                            </div>
                            <div class="sale-para2 shop-1 pro-v1 hp2-para home1">
                                <p><a href="#">Skirt With Coloured Top-<br>stitching</a></p>
                                <div class="star-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
                                    </ul>
                                </div>
                                <div class="review-hp1">
                                    <p>$36.00</p>
                                    <del>$42.00</del>
                                </div>
                            </div>
                        </div>
                        <div class="product-item pro-v1 home1">
                            <div class="product-img product-img-home3">
                                <a  href=""><img src="/assets/theme/images/img100.jpg" alt="" class="img-responsive"></a>
                                <div class="sale-img shop1 shop2 st-v2">
                                    <div class="before shop1 v2 pro-v1 st-v2 hp1 before-home1 bf-onsales-hp1"></div>
                                </div>
                                <div class="ribbon zoa-hot shop-v1 v2 hp1"><span>-25%</span></div>
                                <div class="product-button-group hp1 onsale-home1">
                                    <a href="#" class="zoa-btn zoa-quickview stwh-onsales-home1">
                                        <span class="fa fa-shopping-bag"></span>
                                    </a>
                                    <a href="#" class="zoa-btn zoa-wishlist stwh-onsales-home1">
                                        <span class="fa fa-balance-scale"></span>
                                    </a>
                                    <a href="#" class="zoa-btn zoa-addcart stwh-onsales-home1">
                                        <span class="fa fa-heart "></span>
                                    </a>
                                </div>
                            </div>
                            <div class="sale-para2 shop-1 pro-v1 hp2-para home1">
                                <p><a href="#">Fabric Plimsolls With Bow<br> Detail</a></p>
                                <div class="star-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
                                    </ul>
                                </div>
                                <div class="review-hp1">
                                    <p>$36.00</p>
                                    <del>$42.00</del>
                                </div>
                            </div>
                        </div>
                        <div class="product-item pro-v1 home1">
                            <div class="product-img product-img-home3">
                                <a  href=""><img src="/assets/theme/images/img46.jpg" alt="" class="img-responsive"></a>
                                <div class="sale-img shop1 shop2 st-v2">
                                    <div class="before shop1 v2 pro-v1 st-v2 hp1 before-home1 bf-onsales-hp1"></div>
                                </div>
                                <div class="ribbon zoa-hot shop-v1 v2 hp1 before-home1"><span>-25%</span></div>
                                <div class="product-button-group hp1 onsale-home1">
                                    <a href="#" class="zoa-btn zoa-quickview stwh-onsales-home1">
                                        <span class="fa fa-shopping-bag"></span>
                                    </a>
                                    <a href="#" class="zoa-btn zoa-wishlist stwh-onsales-home1">
                                        <span class="fa fa-balance-scale"></span>
                                    </a>
                                    <a href="#" class="zoa-btn zoa-addcart stwh-onsales-home1">
                                        <span class="fa fa-heart "></span>
                                    </a>
                                </div>
                            </div>
                            <div class="sale-para2 shop-1 pro-v1 hp2-para home1">
                                <p><a href="#">Animal Print Sweatshirt</a></p>
                                <div class="star-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
                                    </ul>
                                </div>
                                <div class="review-hp1">
                                    <p>$36.00</p>
                                    <del>$42.00</del>
                                </div>
                            </div>
                        </div>
                        <div class="product-item pro-v1 home1">
                            <div class="product-img product-img-home3">
                                <a  href=""><img src="/assets/theme/images/img62.jpg" alt="" class="img-responsive"></a>
                                <div class="sale-img shop1 shop2 st-v2">
                                    <div class="before shop1 v2 pro-v1 st-v2 hp1 before-home1 bf-onsales-hp1"></div>
                                </div>
                                <div class="ribbon zoa-hot shop-v1 v2 hp1 "><span>-25%</span></div>
                                <div class="product-button-group hp1 onsale-home1">
                                    <a href="#" class="zoa-btn zoa-quickview stwh-onsales-home1">
                                        <span class="fa fa-shopping-bag"></span>
                                    </a>
                                    <a href="#" class="zoa-btn zoa-wishlist stwh-onsales-home1">
                                        <span class="fa fa-balance-scale"></span>
                                    </a>
                                    <a href="#" class="zoa-btn zoa-addcart stwh-onsales-home1">
                                        <span class="fa fa-heart "></span>
                                    </a>
                                </div>
                            </div>
                            <div class="sale-para2 shop-1 pro-v1 hp2-para home1">
                                <p><a href="#">Animal Print Sweatshirt</a></p>
                                <div class="star-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
                                    </ul>
                                </div>
                                <div class="review-hp1">
                                    <p>$36.00</p>
                                    <del>$42.00</del>
                                </div>
                            </div>
                        </div>
                        <div class="product-item pro-v1 home1">
                            <div class="product-img product-img-home3">
                                <a  href=""><img src="/assets/theme/images/img63.jpg" alt="" class="img-responsive"></a>
                                <div class="sale-img shop1 shop2 st-v2">
                                    <div class="before shop1 v2 pro-v1 st-v2 hp1 before-home1 bf-onsales-hp1"></div>
                                </div>
                                <div class="ribbon zoa-hot shop-v1 v2 hp1"><span>-25%</span></div>
                                <div class="product-button-group hp1 onsale-home1">
                                    <a href="#" class="zoa-btn zoa-quickview stwh-onsales-home1">
                                        <span class="fa fa-shopping-bag"></span>
                                    </a>
                                    <a href="#" class="zoa-btn zoa-wishlist stwh-onsales-home1">
                                        <span class="fa fa-balance-scale"></span>
                                    </a>
                                    <a href="#" class="zoa-btn zoa-addcart stwh-onsales-home1">
                                        <span class="fa fa-heart "></span>
                                    </a>
                                </div>
                            </div>
                            <div class="sale-para2 shop-1 pro-v1 hp2-para home1">
                                <p><a href="#">Animal Print Sweatshirt</a></p>
                                <div class="star-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
                                    </ul>
                                </div>
                                <div class="review-hp1">
                                    <p>$36.00</p>
                                    <del>$42.00</del>
                                </div>
                            </div>
                        </div>
                        <div class="product-item pro-v1 home1">
                            <div class="product-img product-img-home3">
                                <a  href=""><img src="/assets/theme/images/img60.jpg" alt="" class="img-responsive"></a>
                                <div class="sale-img shop1 shop2 st-v2">
                                    <div class="before shop1 v2 pro-v1 st-v2 hp1 before-home1 bf-onsales-hp1"></div>
                                </div>
                                <div class="ribbon zoa-hot shop-v1 v2 hp1"><span>-25%</span></div>
                                <div class="product-button-group hp1 onsale-home1">
                                    <a href="#" class="zoa-btn zoa-quickview stwh-onsales-home1">
                                        <span class="fa fa-shopping-bag"></span>
                                    </a>
                                    <a href="#" class="zoa-btn zoa-wishlist stwh-onsales-home1">
                                        <span class="fa fa-balance-scale"></span>
                                    </a>
                                    <a href="#" class="zoa-btn zoa-addcart stwh-onsales-home1">
                                        <span class="fa fa-heart "></span>
                                    </a>
                                </div>
                            </div>
                            <div class="sale-para2 shop-1 pro-v1 hp2-para home1">
                                <p><a href="#">Animal Print Sweatshirt</a></p>
                                <div class="star-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
                                    </ul>
                                </div>
                                <div class="review-hp1">
                                    <p>$36.00</p>
                                    <del>$42.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blogs -->
        <div class="blogs">
            <div class="container">
                <div class="title-pro-v1 hp1">
                    <h3 class="related-title text-center hp1">Blogs</h3>
                </div>
                <div class="owl-carousel owl-theme owl-cate v2 js-owl-cate-blogs">
                    <div class="blog-v3 blog-home1">
                        <div class="img-blog-v2 v3 home-1 img-blog-home1">
                            <a href=""><img class="img-home-1" src="/assets/theme/images/img86.jpg" alt="img"></a>
                        </div>
                        <div class="img-title2 v2 v3">
                            <div class="kid-all v2 v3 hp1">
                                <div class="para blog-v2 v3 para-blog-hp3">
                                    <h4>
                                        <a href="#">Our Kindergarten Anniversarty</a>
                                    </h4>
                                    <div class="img-title2 blog-v2 v3 hp1">
                                        <a href="#"><img src="/assets/theme/images/img4.png" alt="img"></a>
                                        <p><em>Pixel Creative</em></p>
                                    </div>
                                    <div class="img-title3 v2 v3 hp1">
                                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i></a>
                                        <p><em>Jan 30, 2018</em></p>
                                    </div>
                                    <div class="para2 v2 v3 hp1">
                                        <p>The perfect class for your child with the best staff and best teachers...</p>
                                    </div>
                                    <div class="icon v2 v3 hp1">
                                        <a href="#"><i class="fa fa-comments" aria-hidden="true"></i></a>
                                        <p><em>123 Comments</em></p>
                                    </div>
                                    <div class="icon v2 v3 hp1">
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                                        <p><em>98 likes</em></p>
                                    </div>
                                    <div class="read v2 v3 read-hp2 read-home1">
                                        <p><em><a href="#">read more</a></em></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-v3 blog-home1">
                        <div class="img-blog-v2 v3 home1 img-blog-home1">
                            <a href=""><img class="img-home-1" src="/assets/theme/images/img87.jpg" alt="img"></a>
                        </div>
                        <div class="img-title2 v2 v3">
                            <div class="kid-all v2 v3 hp1">
                                <div class="para blog-v2 v3 para-blog-hp3">
                                    <h4>
                                        <a href="#">Our Kindergarten Anniversarty</a>
                                    </h4>
                                    <div class="img-title2 blog-v2 v3 hp1">
                                        <a href="#"><img src="/assets/theme/images/img4.png" alt="img"></a>
                                        <p><em>Pixel Creative</em></p>
                                    </div>
                                    <div class="img-title3 v2 v3 hp1">
                                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i></a>
                                        <p><em>Jan 30, 2018</em></p>
                                    </div>
                                    <div class="para2 v2 v3 hp1 hp1">
                                        <p>The perfect class for your child with the best staff and best teachers...</p>
                                    </div>
                                    <div class="icon v2 v3 hp1">
                                        <a href="#"><i class="fa fa-comments" aria-hidden="true"></i></a>
                                        <p><em>123 Comments</em></p>
                                    </div>
                                    <div class="icon v2 v3 hp1">
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                                        <p><em>98 likes</em></p>
                                    </div>
                                    <div class="read v2 v3 read-hp2 read-home1">
                                        <p><em><a href="#">read more</a></em></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter -->
        <div class="newsletter hp1">
            <h4>newsletter</h4>
            <div class="background-home1">
                <div class="container">
                    <div class="newsletter-2">
                        <p><em>Subscribe to the Miukid mailing list to receive updates on new arrivals, special offers<br>
                        and other discount information.</em></p>
                        <form class="form_newsletter hp1" action="#" method="post">
                            <input type="email" value="" placeholder="Enter your emaill" name="EMAIL" id="mail" class="newsletter-input form-control">
                            <button id="subscribe" class="button_mini zoa-btn button bt-form-home1" type="submit">
                                Subscribe
                            </button>
                        </form>
                    </div>
                    <div class="product-item pro-v1 news newsletter-hp1">
                        <div class="product-img  news news-home1">
                            <a class="hover-images" href=""><img src="/assets/theme/images/img88.jpg" alt="" class="img-responsive"></a>
                            <div class="product-button-group news">
                                <a href=""><img src="/assets/theme/images/img89.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
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
												
                        <p id="modal-description" class="stext-102 cl3 p-t-15">
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

</script>

@endsection