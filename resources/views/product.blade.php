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
<meta property="og:url" content="https://importadoratatar.cl/item/{{$product->url}}">
<meta property="og:image" content="https://importadoratatar.cl/assets/images/products/{{$product->image1}}">
<meta property="og:type" content="website">

<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@importadoratatar">
<meta name="twitter:title" content="{{$product->name}}">
<meta name="twitter:description" content="{{$product->name}} - {{$category_name}} - precio: ${{ str_replace(',', '.', number_format($product->price, 0, '.', ',')) }}">
<meta name="twitter:image" content="https://importadoratatar.cl/assets/images/products/{{$product->image1}}">

<meta property="og:title" content="{{$product->name}}">
<meta property="og:description" content="{{$product->name}} - {{$category_name}} - precio: ${{ str_replace(',', '.', number_format($product->price, 0, '.', ',')) }}">
<meta property="og:url" content="https://importadoratatar.cl/item/{{$product->url}}">
<meta property="og:image" content="https://importadoratatar.cl/assets/images/products/{{$product->image1}}">
<meta property="og:type" content="website">

<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@nombredeusuario">
<meta name="twitter:title" content="{{$product->name}}">
<meta name="twitter:description" content="{{$product->name}} - {{$category_name}} - precio: ${{ str_replace(',', '.', number_format($product->price, 0, '.', ',')) }}">
<meta name="twitter:image" content="https://importadoratatar.cl/assets/images/products/{{$product->image1}}">

<style>
@media (max-width: 576px) {
  #modal-stock{
    text-align: center;
  }
}
</style>
@endsection

@section('content')

	<!-- breadcrumb -->
	<div class="container m-t-83">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="/" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>
			@if($category_name !== '')
			<a href="/categoria/{{$category_url}}" class="stext-109 cl8 hov-cl1 trans-04">
				{{$category_name}}
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>
			@endif
			<span class="stext-109 cl4">
				{{$product->name}}
			</span>
		</div>
	</div>
		

	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

							<div class="slick3 gallery-lb">
								<div class="item-slick3" data-thumb="/assets/images/products/{{$product->image1}}">
									<div class="wrap-pic-w pos-relative">
										<img src="/assets/images/products/{{$product->image1}}" alt="IMG-PRODUCT">
										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-01.jpg">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
								<div class="item-slick3" data-thumb="{{ $product->image2 ? '/assets/images/products/'.$product->image2 : '/assets/images/no-image2.png' }}">
									<div class="wrap-pic-w pos-relative">
										<img src="{{ $product->image2 ? '/assets/images/products/'.$product->image2 : '/assets/images/no-image2.png' }}" alt="IMG-PRODUCT">
										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{ $product->image2 ? '/assets/images/products/'.$product->image2 : '/assets/images/no-image2.png' }}">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
								<div class="item-slick3" data-thumb="{{ $product->image3 ? '/assets/images/products/'.$product->image3 : '/assets/images/no-image2.png' }}">
									<div class="wrap-pic-w pos-relative">
										<img src="{{ $product->image3 ? '/assets/images/products/'.$product->image3 : '/assets/images/no-image2.png' }}" alt="IMG-PRODUCT">
										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{ $product->image3 ? '/assets/images/products/'.$product->image3 : '/assets/images/no-image2.png' }}">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
								<div class="item-slick3" data-thumb="{{ $product->image4 ? '/assets/images/products/'.$product->image4 : '/assets/images/no-image2.png' }}">
									<div class="wrap-pic-w pos-relative">
										<img src="{{ $product->image4 ? '/assets/images/products/'.$product->image4 : '/assets/images/no-image2.png' }}" alt="IMG-PRODUCT">
										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{ $product->image4 ? '/assets/images/products/'.$product->image4 : '/assets/images/no-image2.png' }}">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
								<div class="item-slick3" data-thumb="{{ $product->image5 ? '/assets/images/products/'.$product->image5 : '/assets/images/no-image2.png' }}">
									<div class="wrap-pic-w pos-relative">
										<img src="{{ $product->image5 ? '/assets/images/products/'.$product->image5 : '/assets/images/no-image2.png' }}" alt="IMG-PRODUCT">
										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{ $product->image5 ? '/assets/images/products/'.$product->image5 : '/assets/images/no-image2.png' }}">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
								<div class="item-slick3" data-thumb="{{ $product->image6 ? '/assets/images/products/'.$product->image6 : '/assets/images/no-image2.png' }}">
									<div class="wrap-pic-w pos-relative">
										<img src="{{ $product->image6 ? '/assets/images/products/'.$product->image6 : '/assets/images/no-image2.png' }}" alt="IMG-PRODUCT">
										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{ $product->image6 ? '/assets/images/products/'.$product->image6 : '/assets/images/no-image2.png' }}">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
					
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-0 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							<a class="cl2" href="#">{{$product->name}}</a>
						</h4>
						
						<span class="mtext-106 cl2">
							${{ str_replace(',', '.', number_format($product->price, 0, '.', ',')) }}
						</span>
						
						<p class="stext-102 cl3 p-t-30">
							@if($category_name !== '') Categoría: <strong>{{$category_name}}</strong> @endif
						</p>

						<p class="stext-102 cl3 p-t-30">
							@if($product->kilos) Kilos: <strong>{{$product->kilos}}</strong> @endif
						</p>

						<p class="stext-102 cl3 p-t-10">
							{{$product->description}}
						</p>
						<div id="modal-stock" class="mtext-106 cl2 p-t-30">
								Stock: {{$product->stock}}
						</div>
						<!--  -->
						<div class="p-t-20">           
								<div class="flex-w flex-r-m p-b-10">
										<div id="modal-cont-cart" class="size-204 flex-w flex-m mx-auto">
											@if($product->stock > 0)
												<div class="wrap-num-product flex-w m-l-20 m-tb-20 mx-auto">
														<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
																<i class="fs-16 zmdi zmdi-minus"></i>
														</div>
														<input id="modal-cant" class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1" max="" min="1">
														<div id="modal-cant-sum" data-max="{{$product->stock}}" class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
																<i class="fs-16 zmdi zmdi-plus"></i>
														</div>
													</div>
												<button id="modal-btn-cart" data-product-id="{{$product->id}}" class="mx-auto flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
														Agregar al carrito
												</button>
											@endif
										</div>
										@if($product->stock == 0)
											<h4 id="modal-no-stock" style="margin: auto;padding-right: 24px;color: #de1616;padding-top:40px;" >Sin Stock !</h4>
										@endif
								</div>	
						</div>
						<div class="flex-w flex-m p-l-100 p-t-40 respon7">
									<div id="contAddFavorite" class="flex-m  p-l-10 m-l-11">
										@if(session('favorites') && collect(session('favorites'))->contains('id', $product->id))
										<div class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 pointer" style="color:#DE2423">
											<i class="zmdi zmdi-favorite"></i> Agregado a favoritos
										</div>
										@else
										<div id="addFavoriteLink" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 tooltip100 js-addwish-b2 pointer" data-item="{{$product->name}}" data-product-id="{{$product->id}}" data-tooltip="Agregar">
											<i class="zmdi zmdi-favorite"></i> Agregar a favoritos
										</div>
										@endif
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

			<!-- <div class="bor10 m-t-50 p-t-43 p-b-40">
				<div class="tab01">
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item p-b-10">
							<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Descripción</a>
						</li>

						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#information" role="tab">Datos del producto</a>
						</li>

						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reseñas (1)</a>
						</li>
					</ul>

					<div class="tab-content p-t-43">
						<div class="tab-pane fade show active" id="description" role="tabpanel">
							<div class="how-pos2 p-lr-15-md">
								<p class="stext-102 cl6">
									{{$product->description}}
								</p>
							</div>
						</div>

						<div class="tab-pane fade" id="information" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
									<ul class="p-lr-28 p-lr-15-sm">
										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Weight
											</span>

											<span class="stext-102 cl6 size-206">
												0.79 kg
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Dimensions
											</span>

											<span class="stext-102 cl6 size-206">
												110 x 33 x 100 cm
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Materials
											</span>

											<span class="stext-102 cl6 size-206">
												60% cotton
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Color
											</span>

											<span class="stext-102 cl6 size-206">
												Black, Blue, Grey, Green, Red, White
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Size
											</span>

											<span class="stext-102 cl6 size-206">
												XL, L, M, S
											</span>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="tab-pane fade" id="reviews" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
									<div class="p-b-30 m-lr-15-sm">
										<div class="flex-w flex-t p-b-68">
											<div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
												<img src="/assets/theme/images/avatar-01.jpg" alt="AVATAR">
											</div>

											<div class="size-207">
												<div class="flex-w flex-sb-m p-b-17">
													<span class="mtext-107 cl2 p-r-20">
														Ariana Grande
													</span>

													<span class="fs-18 cl11">
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star-half"></i>
													</span>
												</div>

												<p class="stext-102 cl6">
													Quod autem in homine praestantissimum atque optimum est, id deseruit. Apud ceteros autem philosophos
												</p>
											</div>
										</div>
										

										<form class="w-full">
											<h5 class="mtext-108 cl2 p-b-7">
												Add a review
											</h5>

											<p class="stext-102 cl6">
												Your email address will not be published. Required fields are marked *
											</p>

											<div class="flex-w flex-m p-t-50 p-b-23">
												<span class="stext-102 cl3 m-r-16">
													Your Rating
												</span>

												<span class="wrap-rating fs-18 cl11 pointer">
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<input class="dis-none" type="number" name="rating">
												</span>
											</div>

											<div class="row p-b-25">
												<div class="col-12 p-b-5">
													<label class="stext-102 cl3" for="review">Your review</label>
													<textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review" name="review"></textarea>
												</div>

												<div class="col-sm-6 p-b-5">
													<label class="stext-102 cl3" for="name">Name</label>
													<input class="size-111 bor8 stext-102 cl2 p-lr-20" id="name" type="text" name="name">
												</div>

												<div class="col-sm-6 p-b-5">
													<label class="stext-102 cl3" for="email">Email</label>
													<input class="size-111 bor8 stext-102 cl2 p-lr-20" id="email" type="text" name="email">
												</div>
											</div>

											<button class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10">
												Submit
											</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
		</div>

		<div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
			<span class="stext-107 cl6 p-lr-25">
				CODE: <strong>{{$product->code}}</strong>
			</span>
			<span class="stext-107 cl6 p-lr-25">
				Nombre: <strong>{{$product->name}}</strong>
			</span>
			<span class="stext-107 cl6 p-lr-25">
				Categories: <strong>{{$category_name}}</strong>
			</span>
		</div>
	</section>


	<!-- Related Products -->
	<section class="sec-relate-product bg0 p-t-45 p-b-105">
		<div class="container">
			<div class="p-b-45">
				<h3 class="ltext-106 cl5 txt-center">
					Produtos destacados
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">
				@if (isset($productsPromo) && $productsPromo)
					@foreach ($productsPromo as $index => $product)
					<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15  @if ($loop->first) active @endif {{$product->category_id}} @if($product->promo == 1) populares @endif @if($product->new == 1) new @endif @if($product->size) size-{{$product->size}} @endif @if($product->kilos) kilos-{{$product->kilos}} @endif @if($product->color) color-{{$product->color}} @endif @if($product->tags) @foreach(json_decode($product->tags) as $tag) tag-{{$tag}} @endforeach @endif" data-id="{{$product->id}}" data-price="{{$product->price}}" data-sales="{{$product->sales}}">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-pic hov-img0 {{ $product->new == 1 ? 'label-new' : '' }} {{ $product->promo == 1 ? 'label-featured' : '' }}" data-label="New"" >
								<img src="/assets/images/products/{{ $product->image1 }}" alt="{{ $product->name }}">
								<a href="#" data-product="{{ json_encode($product) }}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
									Ver
								</a>
							</div>
							<div class="block2-txt flex-w flex-t p-t-14">
								<div class="block2-txt-child1 flex-col-l ">
									<a href="/item/{{$product->url}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									{{ $product->name }}
									</a>
									<span class="stext-105 cl3">
									${{ str_replace(',', '.', number_format($product->price, 0, '.', ',')) }}
									</span>
								</div>
								<div class="block2-txt-child2 flex-r p-t-3">
										<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2 {{ session('favorites') && collect(session('favorites'))->contains('id', $product->id) ? 'js-addedwish-b2' : '' }}" data-item="{{$product->name}}" data-product-id="{{$product->id}}">
											<img class="icon-heart1 dis-block trans-04" src="/assets/theme/images/icons/icon-heart-01.png" alt="ICON">
											<img class="icon-heart2 dis-block trans-04 ab-t-l" src="/assets/theme/images/icons/icon-heart-02.png" alt="ICON">
										</a>
								</div>
							</div>
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