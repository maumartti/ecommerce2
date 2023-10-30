@extends('layouts.web')

@php
    $category_name = $blog->category ? $blog->category->name : '';
    $category_url = $blog->category ? $blog->category->url : '';
@endphp


@section('head')
<title>{{$blog->name}}</title>
<meta name="description" content="{{$blog->title}} - {{$category_name}} - precio: ${{ str_replace(',', '.', number_format($blog->price, 0, '.', ',')) }}">

<meta property="og:title" content="{{$blog->title}}">
<meta property="og:description" content="{{$blog->title}} - {{$category_name}} - precio: ${{ str_replace(',', '.', number_format($blog->price, 0, '.', ',')) }}">
<meta property="og:url" content="https://importadoratatar.cl/blog/{{$blog->url}}">
<meta property="og:image" content="https://importadoratatar.cl/assets/images/blogs/{{$blog->image}}">
<meta property="og:type" content="website">

<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@importadoratatar">
<meta name="twitter:title" content="{{$blog->title}}">
<meta name="twitter:description" content="{{$blog->title}} - {{$category_name}} - precio: ${{ str_replace(',', '.', number_format($blog->price, 0, '.', ',')) }}">
<meta name="twitter:image" content="https://importadoratatar.cl/assets/images/blogs/{{$blog->image}}">

<meta property="og:title" content="{{$blog->title}}">
<meta property="og:description" content="{{$blog->title}} - {{$category_name}} - precio: ${{ str_replace(',', '.', number_format($blog->price, 0, '.', ',')) }}">
<meta property="og:url" content="https://importadoratatar.cl/blog/{{$blog->url}}">
<meta property="og:image" content="https://importadoratatar.cl/assets/images/blogs/{{$blog->image}}">
<meta property="og:type" content="website">

<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@nombredeusuario">
<meta name="twitter:title" content="{{$blog->title}}">
<meta name="twitter:description" content="{{$blog->title}} - {{$category_name}} - precio: ${{ str_replace(',', '.', number_format($blog->price, 0, '.', ',')) }}">
<meta name="twitter:image" content="https://importadoratatar.cl/assets/images/blogs/{{$blog->image}}">
@endsection

@section('content')
	<!-- breadcrumb -->
	<div class="container p-t-92">
		<div class="bread-crumb flex-w p-r-15 p-t-20 p-lr-0-lg">
			<a href="/" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<a href="/blog" class="stext-109 cl8 hov-cl1 trans-04">
				Blog
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				{{$blog->title}}
			</span>
		</div>
	</div>

	<!-- Content page -->
	<section class="bg0 p-t-32 p-b-20">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-80">
					<div class="p-r-45 p-r-0-lg">
						<!--  -->
						<div class="wrap-pic-w how-pos5-parent">
							<img src="/assets/images/blogs/{{$blog->image}}" alt="IMG-BLOG">

							<div class="flex-col-c-m size-123 bg9 how-pos5">
								<span class="ltext-107 cl2 txt-center">
									22
								</span>

								<span class="stext-109 cl3 txt-center">
									Jan 2018
								</span>
							</div>
						</div>

						<div class="p-t-32">
							<span class="flex-w flex-m stext-111 cl2 p-b-19">
								<span>
									<span class="cl4">By</span> Admin  
									<span class="cl12 m-l-4 m-r-6">|</span>
								</span>

								<span>
								{{ $blog->created_at->format('d') }} {{ $blog->created_at->format('M Y') }}
									<span class="cl12 m-l-4 m-r-6">|</span>
								</span>

								<span>
									@if($blog->category)
										<a href="/blog/categoria/{{$blog->category->url}}" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
											{{$blog->category->name}}
										</a>
									@endif
									<!-- <span class="cl12 m-l-4 m-r-6">|</span> -->
								</span>

								<!-- <span>
									8 Comments
								</span> -->
							</span>

							<h4 class="ltext-109 cl2 p-b-10">
								{{$blog->title}}
							</h4>

							<p class="stext-117 cl6 p-b-26">
							{!! $blog->text !!}
							</p>

							<!-- <p class="stext-117 cl6 p-b-26">
								Praesent vel mi bibendum, finibus leo ac, condimentum arcu. Pellentesque sem ex, tristique sit amet suscipit in, mattis imperdiet enim. Integer tempus justo nec velit fringilla, eget eleifend neque blandit. Sed tempor magna sed congue auctor. Mauris eu turpis eget tortor ultricies elementum. Phasellus vel placerat orci, a venenatis justo. Phasellus faucibus venenatis nisl vitae vestibulum. Praesent id nibh arcu. Vivamus sagittis accumsan felis, quis vulputate
							</p> -->
						</div>

						<div class="flex-w flex-t p-t-16">
							@if($blog->tags)
							<span class="size-216 stext-116 cl8 p-t-4">
								Tags
							</span>
							@endif

							<div class="flex-w size-217">
							@if($blog->tags)
							@foreach (explode(',', $blog->tags) as $tag)
									<a href="/blog/tag/{{ str_replace(' ', '-', $tag) }}" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
											{{ trim($tag) }}
									</a>
							@endforeach
							@endif
							</div>

							<div class="p-t-30 m-auto">
								<div class="text-center pb-2"><i class="zmdi zmdi-share"></i> Compartir en redes</div>
								<div class="">
										<!-- Botón de Facebook -->
										<a id="linkFacebook" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fimportadoratatar.cl/blog/{{$blog->url}}" class="social-button facebook" target="_blank">
												<i class="fa fa-facebook"></i>
										</a>
										<!-- Botón de WhatsApp -->
										<a id="linkWhatsapp" href="https://api.whatsapp.com/send?text=Producto:%20https%3A%2F%2Fimportadoratatar.cl/blog/{{$blog->url}}" class="social-button whatsapp" target="_blank">
												<i class="fa fa-whatsapp"></i>
										</a>
										<!-- Botón de Twitter -->
										<a id="linkTwitter" href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fimportadoratatar.cl/blog/{{$blog->url}}" class="social-button twitter" target="_blank">
												<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" style="position: relative;top: 4px;">
														<path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/>
												</svg>
										</a>
										<!-- Botón de Telegram -->
										<a id="linkTelegram" href="https://t.me/share/url?url=https%3A%2F%2Fimportadoratatar.cl/blog/{{$blog->url}}" class="social-button telegram" target="_blank">
												<i class="fa fa-telegram"></i>
										</a>
								</div>
							</div>


						</div>

						<!--  -->
						<!-- <div class="p-t-40">
							<h5 class="mtext-113 cl2 p-b-12">
								Leave a Comment
							</h5>

							<p class="stext-107 cl6 p-b-40">
								Your email address will not be published. Required fields are marked *
							</p>

							<form>
								<div class="bor19 m-b-20">
									<textarea class="stext-111 cl2 plh3 size-124 p-lr-18 p-tb-15" name="cmt" placeholder="Comment..."></textarea>
								</div>

								<div class="bor19 size-218 m-b-20">
									<input class="stext-111 cl2 plh3 size-116 p-lr-18" type="text" name="name" placeholder="Name *">
								</div>

								<div class="bor19 size-218 m-b-20">
									<input class="stext-111 cl2 plh3 size-116 p-lr-18" type="text" name="email" placeholder="Email *">
								</div>

								<div class="bor19 size-218 m-b-30">
									<input class="stext-111 cl2 plh3 size-116 p-lr-18" type="text" name="web" placeholder="Website">
								</div>

								<button class="flex-c-m stext-101 cl0 size-125 bg3 bor2 hov-btn3 p-lr-15 trans-04">
									Post Comment
								</button>
							</form>
						</div> -->
					</div>
				</div>

				<div class="col-md-4 col-lg-3 p-b-80">
					<div class="side-menu" >
						<!-- <div class="bor17 of-hidden pos-relative">
							<input class="stext-103 cl2 plh4 size-116 p-l-28 p-r-55" type="text" name="search" placeholder="Search">

							<button class="flex-c-m size-122 ab-t-r fs-18 cl4 hov-cl1 trans-04">
								<i class="zmdi zmdi-search"></i>
							</button>
						</div> -->

						<div class="p-t-0">
							<h4 class="mtext-112 cl2 p-b-33">
								Categorías
							</h4>

							<ul>
							@foreach ($categoriesBlog as $cat)
								<li class="bor18">
									<a href="/blog/categoria/{{$cat->url}}" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										{{$cat->name}}
									</a>
								</li>
								@endforeach
							</ul>
						</div>

						<div class="p-t-65">
							<h4 class="mtext-112 cl2 p-b-33">
								Productos Destacados
							</h4>
							<ul>
								@if($productsPromo)
								@foreach ($productsPromo as $item)
								<li class="flex-w flex-t p-b-30">
									<a href="/item/{{$item->url}}" class="wrao-pic-w size-214 hov-ovelay1 m-r-20">
										<img src="/assets/images/products/{{$item->image1}}" alt="PRODUCT" style="width: 90px;">
									</a>
									<div class="size-215 flex-col-t p-t-8">
										<a href="/item/{{$item->url}}" class="stext-116 cl8 hov-cl1 trans-04">
											{{$item->name}}
										</a>
										<span class="stext-116 cl6 p-t-20">
										${{ str_replace(',', '.', number_format($item->price, 0, '.', ',')) }}
										</span>
									</div>
								</li>
								@endforeach
								@endif
							</ul>
						</div>

						<!-- <div class="p-t-55">
							<h4 class="mtext-112 cl2 p-b-20">
								Archive
							</h4>

							<ul>
								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											July 2018
										</span>

										<span>
											(9)
										</span>
									</a>
								</li>

								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											June 2018
										</span>

										<span>
											(39)
										</span>
									</a>
								</li>

								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											May 2018
										</span>

										<span>
											(29)
										</span>
									</a>
								</li>

								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											April  2018
										</span>

										<span>
											(35)
										</span>
									</a>
								</li>

								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											March 2018
										</span>

										<span>
											(22)
										</span>
									</a>
								</li>

								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											February 2018
										</span>

										<span>
											(32)
										</span>
									</a>
								</li>

								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											January 2018
										</span>

										<span>
											(21)
										</span>
									</a>
								</li>

								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											December 2017
										</span>

										<span>
											(26)
										</span>
									</a>
								</li>
							</ul>
						</div> -->

						<div class="p-t-50">
							<h4 class="mtext-112 cl2 p-b-27">
								Tags
							</h4>

							<div class="flex-w m-r--5">
								@if($tagsAll)
								@foreach ($tagsAll as $tag)
								<a href="/blog/tag/{{ str_replace(' ', '-', $tag) }}" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									{{$tag}}
								</a>
								@endforeach
								@endif
							</div>
							

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
@endsection

@section('script')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
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
@endsection