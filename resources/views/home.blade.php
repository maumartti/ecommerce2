@extends('layouts.web')

@section('head')
<style>

@media (min-width: 768px) {
    /* show 4 items */
    .carousel-inner .active,
    .carousel-inner .active + .carousel-item,
    .carousel-inner .active + .carousel-item + .carousel-item,
    .carousel-inner .active + .carousel-item + .carousel-item + .carousel-item  {
        display: block;
    }
    
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item,
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item,
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item + .carousel-item {
        transition: none;
    }
    
    .carousel-inner .carousel-item-next,
    .carousel-inner .carousel-item-prev {
      position: relative;
      transform: translate3d(0, 0, 0);
    }
    
    /* last visible item + 1 */
    .carousel-inner .active.carousel-item + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -25%;
        z-index: -1;
        display: block;
        visibility: visible;
    }
    
    /* left or forward direction */
    .active.carousel-item-left + .carousel-item-next.carousel-item-left,
    .carousel-item-next.carousel-item-left + .carousel-item,
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item,
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item,
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    
    /* farthest right hidden item must be abso position for animations */
    .carousel-inner .carousel-item-next.carousel-item-left {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        display: block;
        visibility: visible;
    }
    
    .carousel-inner .carousel-item-prev.carousel-item-right {
        position: absolute;
        top: 0;
        left: -25%;
        z-index: -1;
        display: block;
        visibility: visible;
    }
    
    /* right or prev direction */
    .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
    .carousel-item-prev.carousel-item-right + .carousel-item,
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item,
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item,
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        display: block;
        visibility: visible;
    }

}
.carousel-control-next-icon, .carousel-control-prev-icon, .fa-lg {
  width: 60px !important;
  height: 60px !important;
  font-size:64px !important;
}
/* .carousel-inner, #productCarousel{
  width: 100% !important;
} */
</style>
@endsection

@section('content')


  <!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
        @if($web->imageRotor1)
				<div class="item-slick1" style="background-image: url(/assets/images/{{$web->imageRotor1}});">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-101 cl2 respon2" style="font-family:{{ $web->fontPretitleRotor1 ?? 'Poppins-Regular' }}, sans-serif;color:{{ $web->colorPretitleRotor1 ?? '#333' }};">
								{{ $web->pretitleRotor1 ?? 'Nuevos productos 2023' }}
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1" style="font-family:{{ $web->fontTitleRotor1 ?? 'Poppins-Regular' }}, sans-serif;color:{{ $web->colorTitleRotor1 ?? '#333' }};">
								{{ $web->titleRotor1 ?? 'De temporada' }}
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								@if($web->useBtnRotor1 == 1)
								<a href="{{ $web->btnUrlRotor1 ?? '/categoria/ofertas' }}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04" style="font-family:{{ $web->fontBtnTextRotor1 ?? 'Poppins-Regular' }}, sans-serif;color:{{ $web->colorBtnTextRotor1 ?? '#333' }};background: {{$web->backgroundBtnTextRotor1 ?? '#DE2423'}};">
								{{ $web->btnTextRotor1 ?? 'Ver Ofertas' }}
								</a>
								@endif
							</div>
						</div>
					</div>
				</div>
        @endif
        @if($web->imageRotor2)
				<div class="item-slick1" style="background-image: url(/assets/images/{{$web->imageRotor2}});">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-101 cl2 respon2" style="font-family:{{ $web->fontPretitleRotor2 ?? 'Poppins-Regular' }}, sans-serif;color:{{ $web->colorPretitleRotor2 ?? '#333' }};">
								{{ $web->pretitleRotor2 ?? 'Nuevos productos 2023' }}
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1" style="font-family:{{ $web->fontTitleRotor2 ?? 'Poppins-Regular' }}, sans-serif;color:{{ $web->colorTitleRotor2 ?? '#333' }};">
								{{ $web->titleRotor2 ?? 'De temporada' }}
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								@if($web->useBtnRotor2 == 1)
								<a href="{{ $web->btnUrlRotor2 ?? '/categoria/ofertas' }}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04" style="font-family:{{ $web->fontBtnTextRotor2 ?? 'Poppins-Regular' }}, sans-serif;color:{{ $web->colorBtnTextRotor2 ?? '#333' }};background: {{$web->backgroundBtnTextRotor2 ?? '#DE2423'}};">
								{{ $web->btnTextRotor2 ?? 'Ver Ofertas' }}
								</a>
								@endif
							</div>
						</div>
					</div>
				</div>
        @endif
        @if($web->imageRotor3)
				<div class="item-slick1" style="background-image: url(/assets/images/{{$web->imageRotor3}});">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-101 cl2 respon2" style="font-family:{{ $web->fontPretitleRotor3 ?? 'Poppins-Regular' }}, sans-serif;color:{{ $web->colorPretitleRotor3 ?? '#333' }};">
								{{ $web->pretitleRotor3 ?? 'Nuevos productos 2023' }}
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1" style="font-family:{{ $web->fontTitleRotor3 ?? 'Poppins-Regular' }}, sans-serif;color:{{ $web->colorTitleRotor3 ?? '#333' }};">
								{{ $web->titleRotor3 ?? 'De temporada' }}
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								@if($web->useBtnRotor3 == 1)
								<a href="{{ $web->btnUrlRotor3 ?? '/categoria/ofertas' }}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04" style="font-family:{{ $web->fontBtnTextRotor3 ?? 'Poppins-Regular' }}, sans-serif;color:{{ $web->colorBtnTextRotor3 ?? '#333' }};background: {{$web->backgroundBtnTextRotor3 ?? '#DE2423'}};">
								{{ $web->btnTextRotor3 ?? 'Ver Ofertas' }}
								</a>
								@endif
							</div>
						</div>
					</div>
				</div>
        @endif

			</div>
		</div>
	</section>

	<!-- Categprias -->
	<div class="sec-banner bg0 p-t-80 p-b-50">
		<div class="container">
			<div class="row">

			@if (isset($categories))
        @if ($categories)
          @foreach ($categories as $index => $category)
					<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
						<!-- Block1 -->
						<div class="block1 wrap-pic-w">
							<img src="/assets/images/{{$category->image ? $category->image : 'no-image2.png'}}" alt="IMG-BANNER">

							<a href="/categoria/{{$category->url}}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
								<div class="block1-txt-child1 flex-col-l">
									<span class="block1-name ltext-102 trans-04 p-b-8">
									{{$category->name}}
									</span>

									<!-- <span class="block1-info stext-102 trans-04">
										Temporada 2023
									</span> -->
								</div>

								<div class="block1-txt-child2 p-b-4 trans-05">
									<div class="block1-link stext-101 cl0 trans-09">
										Ver productos
									</div>
								</div>
							</a>
						</div>
					</div>
					@endforeach
      	@endif
      @endif

			</div>
		</div>
	</div>



  
	<!-- Product -->
	<section class="bg0 p-t-23 p-b-20">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Nuestros Productos
				</h3>
			</div>

			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						Ver Todos
					</button>

          @if (isset($categories))
            @if ($categories)
              @foreach ($categories as $index => $category)
              <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".{{$category->id}}">
                {{$category->name}}
              </button>
              @endforeach
      	    @endif
          @endif     

				</div>

				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
						<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
						<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						 Filtros
					</div>

					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Buscar
					</div>
				</div>
				
				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<div class="bor8 dis-flex p-l-15">
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>

						<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
					</div>	
				</div>

				<!-- Filter -->
				@include('filters')

			<div class="row isotope-grid">
      @if (isset($products))
        @if ($products)
          @foreach ($products as $product)
          	
						<div class="col-6 col-md-4 col-lg-3 p-b-35 isotope-item {{$product->category_id}} @if ($product->promo == 1) populares @endif @if ($product->new == 1) new @endif" data-id="{{$product->id}}" data-price="{{$product->price}}">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-pic hov-img0 {{ $product->new == 1 ? 'label-new' : '' }} {{ $product->promo == 1 ? 'label-featured' : '' }}" data-label="New">
									<img src="/assets/images/products/{{$product->image1}}" alt="IMG-PRODUCT">
									<a href="#" data-product="{{ json_encode($product) }}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
										Ver
									</a>
								</div>
								<div class="block2-txt flex-w flex-t p-t-14">
									<div class="block2-txt-child1 flex-col-l ">
										<a href="/item/{{$product->url}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
										{{$product->name}}
										</a>
										<span class="stext-105 cl3">
											<strong>${{ str_replace(',', '.', number_format($product->price, 0, '.', ',')) }}</strong>
										</span>
									</div>
									<div class="block2-txt-child2 flex-r p-t-3">
										<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
											<img class="icon-heart1 dis-block trans-04" src="/assets/theme/images/icons/icon-heart-01.png" alt="ICON">
											<img class="icon-heart2 dis-block trans-04 ab-t-l" src="/assets/theme/images/icons/icon-heart-02.png" alt="ICON">
										</a>
									</div>
								</div>
							</div>
						</div>
          	
          @endforeach
      	@endif
      @endif
			</div>

			<!-- Load more -->
			<!-- <div class="flex-c-m flex-w w-full p-t-45">
				<a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Cargar más
				</a>
			</div> -->
		</div>
	</section>




 	<!-- Product Ofertas -->
  <section class="bg0 p-t-23 p-b-40">
    <div class="container">
        <div class="p-b-30">
            <h3 class="ltext-103 cl5">
                Destacados
            </h3>
        </div>
        <div class="container-fluid p-0">
				<div id="productCarousel" class="carousel slide" data-ride="carousel" data-interval="12000">
						<div class="carousel-inner row w-100 mx-auto flex-nowrap" role="listbox">
								@if (isset($productsPromo) && $productsPromo)
										@foreach ($productsPromo as $index => $product)
													<div class="carousel-item pl-1 col-md-3 isotope-item p-0 @if ($loop->first) active @endif">
														<!-- Contenido del producto -->
														<div class="block2">
																<div class="block2-pic hov-img0 {{ $product->new == 1 ? 'label-new' : '' }} {{ $product->promo == 1 ? 'label-featured' : '' }}" data-label="New">
																		<img src="/assets/images/products/{{ $product->image1 }}" alt="{{ $product->name }}">
																		<a href="#" data-product="{{ json_encode($product) }}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
																				Ver
																		</a>
																</div>
																<div class="block2-txt flex-w flex-t p-t-14">
																		<div class="block2-txt-child1 flex-col-l">
																				<a href="/item/{{$product->url}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
																						{{ $product->name }}
																				</a>
																				<span class="stext-105 cl3">
																					<strong>${{ str_replace(',', '.', number_format($product->price, 0, '.', ',')) }}</strong>
																				</span>
																		</div>
																		<div class="block2-txt-child2 flex-r p-t-3">
																				<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
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
						<a class="carousel-control-prev" href="#productCarousel" role="button" data-slide="prev" style="left: -1.5rem;">
								<i class="zmdi zmdi-caret-left rot" style="font-size: 12rem;color:grey;"></i>
								<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next text-faded" href="#productCarousel" role="button" data-slide="next" style="right: -1.5rem;">
								<i class="zmdi zmdi-caret-right rot" style="font-size: 12rem;color:grey;"></i>
								<span class="sr-only">Next</span>
						</a>
					</div>
			</div>
    </div>
	</section>


  
  



	<!-- Instagram feed -->
	<section class="bg0 p-t-23 p-b-40">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
          Síguenos en Instagram
          <div class="col-12 mt-3">
            <div class="row">
                <div style="/*! width: 80px !important; */" class="col-0 p-0">
                    <div class="bg-transparent">
                        <a href="https://www.instagram.com/importadora_tatar" target="_blank" style="position: relative;">
                            <img src="/assets/images/instaC.png" class="profile-border" alt="Border" style="width: 50px;">
                            <img src="/assets/images/logoInsta.jpg" class="profile-img" alt="Foto de perfil" style="position: absolute;left: 10px;width: 30px;top:11px;">
                        </a>
                    </div>
                </div>
                <div class="col pl-1">
                    <div class="trends_container p-0">
                        <h6 class="trends_title p-0 pt-1">
                            <div class="profile-picture">
                                <a href="https://www.instagram.com/importadora_tatar" target="_blank">
                                    <h4 class="text-center mb-0"></h4>
                                </a>
                            </div>
                        </h6>
                        <div class="trends_text text-left">
                            <div class="profile-name">
                                <a href="https://www.instagram.com/importadora_tatar" target="_blank" style="font-size: 18px;">
                                    @importadora_tatar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
				</h3>
			</div>
			<div class="row">
      @if (isset($feed))
        @if ($feed)
        @foreach($feed as $item)
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item d-inline-block" >
            <div class="block2-pic hov-img0" style="background:black;">
                @if($item->type === 'video')
                <video preload="metadata" id="video-{{ $loop->index }}" class="video-element" style="width: 100%;">
                    <source src="{{ $item->url }}" type="video/mp4">
                </video>
                <a href="javascript:void(0);" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04" onclick="toggleVideo({{ $loop->index }})">
                    Ver <svg xmlns="http://www.w3.org/2000/svg" class="pl-1" width="20" height="18" viewBox="0 0 20 20"><path fill="currentColor" d="M2.93 17.07A10 10 0 1 1 17.07 2.93A10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM7 6l8 4l-8 4V6z"/></svg>
                </a>
                @else
                <img src="{{ $item->url }}" alt="Imagen" class="hov-img0">
                @endif
            </div>
        </div>
        @endforeach
      	@endif
      @endif
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
												
                        <p id="modal-description" class="stext-102 cl3 p-t-23">
													Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
                        </p>

												<div id="modal-stock" class="mtext-106 cl2 p-t-23">
														Stock: 0
												</div>
                        <div class="p-t-33">
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
                            <div class="flex-m  p-l-10 m-l-11">
                                <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
                                    <i class="zmdi zmdi-favorite"></i> Agregar a favoritos
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

				// Ahora puedes acceder a las propiedades del producto en JavaScript
				console.log('moda product');
				console.log(product);


				$("#modal-btn-cart").attr('data-product-id', product.id);
				$("#modal-name").text(product.name);
				var price = parseFloat(product.price).toLocaleString('es-ES', {minimumFractionDigits: 0,maximumFractionDigits: 0,useGrouping: true});
				$("#modal-price").text('$'+price);
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
//play - stop video instagram
function toggleVideo(index) {
    var video = document.getElementById('video-' + index);
    var playIcon = document.getElementById('play-icon-' + index);

    if (video.paused) {
        video.volume = 0.3; // Establecer el volumen al 30%
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




<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
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