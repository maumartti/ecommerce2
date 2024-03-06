@extends('layouts.web')

@php
    $category_name = $product->category ? $product->category->name : '';
    $category_url = $product->category ? $product->category->url : '';
@endphp

@section('head')
<title>{{$product->name}}</title>
<meta name="description" content="{{$product->name}} - {{$category_name}} - precio: ${{ str_replace(',', '.', number_format($product->price, 0, '.', ',')) }}">

<meta property="og:title" content="{{$product->name}}">
<meta property="og:description" content="{{$product->name}} - {{$category_name}} - precio: ${{ str_replace(',', '.', number_format($product->price, 0, '.', ',')) }}">
<meta property="og:url" content="https://tiendasacuanjoche.com/item/{{$product->url}}">
<meta property="og:image" content="https://tiendasacuanjoche.com/assets/images/products/{{$product->image1}}">
<meta property="og:type" content="website">

<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@importadoratatar">
<meta name="twitter:title" content="{{$product->name}}">
<meta name="twitter:description" content="{{$product->name}} - {{$category_name}} - precio: ${{ str_replace(',', '.', number_format($product->price, 0, '.', ',')) }}">
<meta name="twitter:image" content="https://tiendasacuanjoche.com/assets/images/products/{{$product->image1}}">

<meta property="og:title" content="{{$product->name}}">
<meta property="og:description" content="{{$product->name}} - {{$category_name}} - precio: ${{ str_replace(',', '.', number_format($product->price, 0, '.', ',')) }}">
<meta property="og:url" content="https://tiendasacuanjoche.com/item/{{$product->url}}">
<meta property="og:image" content="https://tiendasacuanjoche.com/assets/images/products/{{$product->image1}}">
<meta property="og:type" content="website">

<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@nombredeusuario">
<meta name="twitter:title" content="{{$product->name}}">
<meta name="twitter:description" content="{{$product->name}} - {{$category_name}} - precio: ${{ str_replace(',', '.', number_format($product->price, 0, '.', ',')) }}">
<meta name="twitter:image" content="https://tiendasacuanjoche.com/assets/images/products/{{$product->image1}}">

<style>
@media (max-width: 576px) {
  #modal-stock{
    text-align: center;
  }
}
</style>
@endsection

@section('content')

		

	<section>
		<div class="product-v1 pro-v4">
			<div class="container">
				<div class="menu-prv1">
					<ul>
						<li><a href="/">Home</a></li>
						<li><a href="">/</a></li>
						@if($category_name !== '')<li><a href="/categoria/{{$category_url}}">{{$category_name}}</a></li>@endif
						<li><a href="">/</a></li>
						<li><a href="">{{$product->name}}</a></li>
					</ul>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12 pro-v4">
						<div class="product-img-slide pro-v4">
							<div class="product-images quickview">
								<div class="main-img js-product-slider-normal">
									@if($product->image1)<a href="#" class="hover-images effect"><img src="/assets/images/products/{{$product->image1}}" alt="photo" class="img-responsive"></a>@endif
									@if($product->image2)<a href="#" class="hover-images effect"><img src="/assets/images/products/{{$product->image2}}" alt="photo" class="img-responsive"></a>@endif
									@if($product->image3)<a href="#" class="hover-images effect"><img src="/assets/images/products/{{$product->image3}}" alt="photo" class="img-responsive"></a>@endif
									@if($product->image4)<a href="#" class="hover-images effect"><img src="/assets/images/products/{{$product->image4}}" alt="photo" class="img-responsive"></a>@endif
									@if($product->image5)<a href="#" class="hover-images effect"><img src="/assets/images/products/{{$product->image5}}" alt="photo" class="img-responsive"></a>@endif
									@if($product->image6)<a href="#" class="hover-images effect"><img src="/assets/images/products/{{$product->image6}}" alt="photo" class="img-responsive"></a>@endif
								</div>
							</div>
							<div class="multiple-img-list js-click-product-normal">
								@if($product->image1)
								<div class="product-col">
									<div class="img pro-v4 ">
										<img src="/assets/images/products/{{$product->image1}}" alt="photo" class="img-responsive">
									</div>
								</div>
								@endif
								@if($product->image2)
								<div class="product-col">
									<div class="img pro-v4 ">
										<img src="/assets/images/products/{{$product->image2}}" alt="photo" class="img-responsive">
									</div>
								</div>
								@endif
								@if($product->image3)
								<div class="product-col">
									<div class="img pro-v4 ">
										<img src="/assets/images/products/{{$product->image3}}" alt="photo" class="img-responsive">
									</div>
								</div>
								@endif
								@if($product->image4)
								<div class="product-col">
									<div class="img pro-v4 ">
										<img src="/assets/images/products/{{$product->image4}}" alt="photo" class="img-responsive">
									</div>
								</div>
								@endif
								@if($product->image5)
								<div class="product-col">
									<div class="img pro-v4 ">
										<img src="/assets/images/products/{{$product->image5}}" alt="photo" class="img-responsive">
									</div>
								</div>
								@endif
								@if($product->image6)
								<div class="product-col">
									<div class="img pro-v4 ">
										<img src="/assets/images/products/{{$product->image6}}" alt="photo" class="img-responsive">
									</div>
								</div>
								@endif
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="product-info s8 pro-v1 pro-v4">
							<div class="sale-para2 shop-1 pro-v1 shop-5 shop-6 shop-7 shop-8 pro-v1">
								<p><a href="#">{{$product->name}}</a></p>
								<ul>
									<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
									<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
									<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
									<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
									<li class="st"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a><em><span>6
												Review(s)</span></em></li>

									<li><a class="sales-36-products" href="#">C${{ str_replace(',', '.', number_format($product->price, 0, '.', ',')) }}</a>
									</li>

								</ul>
							</div>
							<div class="short-desc">
								<p class="product-desc s8 pro-v1 pro-v4">{{$product->description}}</p>
							</div>
							<div class="color pr1 pro-v4">
								<h4>Color</h4>
								<ul>
									<li><a href=""><img src="/assets/theme/images/elip1.png" alt=""></a></li>
									<li><a href=""><img src="/assets/theme/images/elip2.png" alt=""></a></li>
									<li><a href=""><img src="/assets/theme/images/elip3.png" alt=""></a></li>
									<li><a href=""><img src="/assets/theme/images/elip4.png" alt=""></a></li>
									<li><a href=""><img src="/assets/theme/images/elip5.png" alt=""></a></li>
								</ul>
							</div>
							<div class="size shop5 pro-1 pro-v4">
								<h4>Size</h4>
								<ul>
									<li><a class="st-xs" href="#">XS</a></li>
									<li><a href="">S</a></li>
									<li><a href="">M</a></li>
									<li><a href="">L</a></li>
									<li><a class="st-xl" href="">XL</a></li>
								</ul>
							</div>
							<div class="zoa-qtt pro-v1">
								<button type="button" class="quantity-left-minus btn btn-number js-minus" data-type="minus"
									data-field="">
								</button>
								<input type="text" name="number" value="1" class="product_quantity_number js-number">
								<button type="button" class="quantity-right-plus btn btn-number js-plus" data-type="plus" data-field="">
								</button>
							</div>
							<div class="product-bottom-group shop7 s8 pro-v1 pro-v2">
								<a href="#" class="fa fa-shopping-bag shop7 pro-v1">
									<span class="zoa-icon-quick-view shop7"></span>
								</a> <a href="#" class="fa fa-balance-scale shop7 pro-v1">
									<span class="zoa-icon-heart shop7"></span>
								</a>
								<a href="#" class="fa fa-heart shop7">
									<span class="zoa-icon-cart shop7"></span>
								</a>
							</div>
							<div class="size-guide pro-v4">
								<div class="guide">
									<ul>
										<li><a href="">Guía de tallas</a></li>
										<li><a href="">Entrega y devolución</a></li>
									</ul>
								</div>
								<div class="sku pro-v1">
									<p>SKU: <span>CK-2207</span></p><br>
									<p>Categories: <span>Jackets, Jewellery, Masonry, Accessories, Denim</span></p>
									<p>Tags: <span>jewellery, jackets, masonry, shoes, short</span></p>
								</div>
							</div>
							<div class="share-shop7 s8">
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
			</div>
		</div>
		<!-- details -->
		<div class="container">
			<div class="single-product-tab bd-bottom">
				<ul class="tabs text-center">
					<li class="active"><a data-toggle="pill" href="#review">Description</a></li>
					<!-- <li><a data-toggle="pill" href="#desc">Additional information</a></li> -->
					<li><a data-toggle="pill" href="#add">Reviews(s)</a></li>
				</ul>
				<div class="tab-content">
					<!-- <div id="desc" class="tab-pane fade in ">

						<div class="para-v4">
							<p><em>Duis id odio quis purus lacinia</em> viverra non eget sapien. Aenean sed tortor sapien. Aenean ut
								iaculis justo, in hendrerit sem. Ut ac tincidunt velit, ac ultrices est. <strong>Nullam eu massa auctor,
								</strong>aecenas in ligula neque. Etiam nec ligula finibus, scelerisque tellus sed, rutrum mauris. Donec
								iaculis mattis interdum. Praesent et mauris non orci lacinia dignissim. Pellentesque vel sapien <em>ut
									ante interdum aliquam.</em></p>
						</div>
						<div class="para-v4 bgr">
							<p><span>"</span><em>Nullam eu massa auctor, euismod arcu eget, suscipit nisl. Maecenas in ligula neque.
									Etiam nec ligula finibus, scelerisque tellus sed, rutrum mauris. Donec iaculis mattis interdum.
									Praesent et mauris non orci lacinia dignissim. Pellentesque vel sapien ut ante interdum aliquam.</em>
							</p>
						</div>
						<div class="row two">
							<div class="col-md-4 col-sm-5 col-xs-12">
								<div class="img-v4">
									<a href="#" class="plus-zoom"><img src="/assets/theme/images/img36.jpg" alt="img"></a>
									<p>Photo: Baby happy with Zara</p>
								</div>
							</div>
							<div class="col-md-8 col-sm-7 col-xs-12">
								<div class="para-v4">
									<p><em>Duis id odio quis purus lacinia</em> viverra non eget sapien. Aenean sed tortor sapien. Aenean
										ut iaculis justo, in hendrerit sem. Ut ac tincidunt velit, ac ultrices est. <strong>Nullam eu massa
											auctor, </strong>aecenas in ligula neque. Etiam nec ligula finibus, scelerisque tellus sed, rutrum
										mauris. Donec iaculis mattis interdum. Praesent et mauris non orci lacinia dignissim. Pellentesque
										vel sapien <em>ut ante interdum aliquam.</em></p>
								</div>
								<div class="para-v4">
									<p><em>Duis id odio quis purus lacinia</em> viverra non eget sapien. Aenean sed tortor sapien. Aenean
										ut iaculis justo, in hendrerit sem. Ut ac tincidunt velit, ac ultrices est. <strong>Nullam eu massa
											auctor, </strong>aecenas in ligula neque. Etiam nec ligula finibus, scelerisque tellus sed, rutrum
										mauris. Donec iaculis mattis interdum. Praesent et mauris non orci lacinia dignissim. Pellentesque
										vel sapien <em>ut ante interdum aliquam.</em></p>
								</div>
							</div>
						</div>
						<div class="para-v4">
							<p><em>Duis id odio quis purus lacinia</em> viverra non eget sapien. Aenean sed tortor sapien. Aenean ut
								iaculis justo, in hendrerit sem. Ut ac tincidunt velit, ac ultrices est. <strong>Nullam eu massa auctor,
								</strong>aecenas in ligula neque. Etiam nec ligula finibus, scelerisque tellus sed, rutrum mauris. Donec
								iaculis mattis interdum. Praesent et mauris non orci lacinia dignissim. Pellentesque vel sapien <em>ut
									ante interdum aliquam.</em></p>
						</div>
						<div class="share">
							<div class="share2">
								<p>Share: </p>
							</div>
							<div class="ul-li v4">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div><br>
					</div> -->
					<div id="review" class="tab-pane fade in active ">
						<div class="details">
							<div class="container">
								<div class="row">
									<div class="col-md-8 col-sm-6 col-xs-12 pro-v4">
										<div class="para-details">
											<p>{{$product->description}}</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 col-xs-12 pro-v4">
										<div class="img-details">
											<a href="" class="plus-zoom"><img src="/assets/images/products/{{$product->image1}}"" alt=""></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="add" class="tab-pane fade in">
						<div class="para-pro-v1">
							<p>{{$product->name}} <br>
								<span>La dirección de correo electrónico no será publicada. Los campos obligatorios están marcados*</span>
							</p>
						</div>
						<div class="rating">
							<h4>Your rating:</h4>
							<ul>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
							</ul>
						</div>
						<div class="form-v4 pro-v1">
							<form method="post" class="form-customer form-login">
								<div class="form-group review">

									<p>Your review*</p>
									<input type="text" class="form-control form-account">
								</div>
								<div class=" form-group name pro-v1">

									<p>Name*</p>
									<input type="text" class="form-control form-account">
								</div>
								<div class="form-group email pro-v1">

									<p>Email address*</p>
									<input type="email" class="form-control form-account">
								</div>
								<div class="btn-button-group mg-top-30 mg-bottom-15">
									<button type="submit" class="zoa-btn btn-login hover-white">Enviar</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="product-related pd-products">
				<div class="title-pro-v1">
					<h3 class="related-title text-center">Destacados</h3>
					<p><a href="">View All Products<i class="fa fa-angle-right" aria-hidden="true"></i></a></p>
				</div>
				<div class="owl-carousel owl-theme owl-cate v2 js-owl-cate">
				@if (isset($productsPromo) && $productsPromo)
					@foreach ($productsPromo as $index => $product)
					<div class="product-item pro-v1 ">
						<div class="product-img">
							<a href="/item/{{$product->url}}"><img src="/assets/images/products/{{$product->image1}}" alt="" class="img-responsive"></a>
							<div class="sale-img shop1 shop2">
								<div class="before shop1 v2 pro-v1 before-pro-v1"></div>
							</div>
							<div class="ribbon zoa-hot shop-v1 new-pro-v1"><span>New</span></div>
							<div class="product-button-group product-details">
								<a href="#" class="zoa-btn zoa-quickview">
									<span class="fa fa-shopping-bag"></span>
								</a>
								<a href="#" class="zoa-btn zoa-addcart">
									<span class="fa fa-heart"></span>
								</a>
							</div>
						</div>
						<div class="sale-para2 shop-1 pro-v1">
							<p><a href="#">{{$product->name}}</a></p>
							<ul>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
								<li class="st-rv"><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a><em><span>6
											Review(s)</span></em></li>

								<li><a class="sales-36" href="#">$C{{ str_replace(',', '.', number_format($product->price, 0, '.', ',')) }}</a>
								</li>

							</ul>
						</div>
					</div>
					@endforeach
				@endif
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
                            <div class="wrap-slick3-dots dots-two"></div>
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

												<div id="modal-stock-modal" class="mtext-106 cl2 p-t-23">
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
                                <div id="modal-cont-cart-modal" class="size-204 flex-w flex-m respon6-next">
                                    <div class="wrap-num-product flex-w m-l-20 m-tb-20">
                                        <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-minus"></i>
                                        </div>

                                        <input id="modal-cant-modal" class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1" max="" min="1">

                                        <div id="modal-cant-sum-modal" data-max="" class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-plus"></i>
                                        </div>
                                    </div>
                                    <button id="modal-btn-cart-modal" data-product-id="" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                        Agregar al carrito
                                    </button>
                                </div>
							    							<h4 id="modal-no-stock-modal" style="margin: auto;padding-right: 24px;color: #de1616;" >Sin Stock !</h4>
                            </div>	
                        </div>
                        <div class="flex-w flex-m p-l-100 p-t-40 respon7">
												<div id="contAddFavoriteModal" class="flex-m  p-l-10 m-l-11">
                                <div id="addFavoriteLinkModal" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 tooltip100 js-addwish-b2 pointer" data-item="" data-product-id="" data-tooltip="Agregar">
                                    <i class="zmdi zmdi-favorite"></i> Agregar a favoritos
                                </div>
                            </div>
                        </div>
                        <div class="p-t-40 p-l-35">
                            <div class="text-center pb-2" style="padding-right: 65px;"><i class="zmdi zmdi-share"></i> Compartir en redes</div>
                            <div class="p-l-56">
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
				$("#contAddFavoriteModal").html('<div id="addFavoriteLinkModal" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 tooltip100 js-addwish-b2 pointer" data-item="" data-product-id="" data-tooltip="Agregar"><i class="zmdi zmdi-favorite"></i> Agregar a favoritos </div>');
		}

		// Ahora puedes acceder a las propiedades del producto en JavaScript
		console.log('moda product pr');
		console.log(product.name);

		//links share sociales
		$("#linkFacebook").attr('href', 'https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fimportadoratatar.cl/item/' + product.url);
		$("#linkWhatsapp").attr('href', 'https://api.whatsapp.com/send?text=Producto:%20https%3A%2F%2Fimportadoratatar.cl/item/' + product.url);
		$("#linkTwitter").attr('href', 'https://twitter.com/intent/tweet?url=https%3A%2F%2Fimportadoratatar.cl/item/' + product.url);
		$("#linkTelegram").attr('href', 'https://t.me/share/url?url=https%3A%2F%2Fimportadoratatar.cl/item/' + product.url);


		$("#modal-btn-cart").attr('data-product-id', product.id);
		$("#modal-btn-cart-modal").attr('data-product-id', product.id);
		$("#modal-name").html('<a class="cl2" href="/item/'+product.url+'" >'+product.name+'</a>');
		$("#addFavoriteLinkModal").attr('data-item',product.name);
		$("#addFavoriteLinkModal").attr('data-product-id',product.id);
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
		$("#modal-stock-modal").text('Stock: '+product.stock);
		$("#modal-cant").attr('max', product.stock);
		$("#modal-cant").val(1);
		$("#modal-cant-sum").attr('data-max', product.stock);

		//para modal -
		$("#modal-cant-modal").attr('max', product.stock);
		$("#modal-cant-modal").val(1);
		$("#modal-cant-sum-modal").attr('data-max', product.stock);
		if(product.stock == 0){
				$("#modal-cont-cart-modal").hide();
				$("#modal-no-stock-modal").show();
		}else{
				$("#modal-no-stock-modal").hide();
				$("#modal-cont-cart-modal").show();
		}

		// Agrega las imagenes del producto al modal
		var imagenes = $(".dots-two img");
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