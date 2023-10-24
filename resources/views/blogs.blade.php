@extends('layouts.web')


@section('content')
@php
    $url = request()->url(); // Obtener la URL actual
@endphp
<!-- Title page -->
@if (strpos($url, 'categoria') !== false)
<section class="bg-img1 txt-center p-lr-15 p-b-20 p-t-35 m-t-83" >
	<h2 class="ltext-105 txt-center cl2">
	@if($category) Categoría: {{$category->name}} @endif
	</h2>
</section>	
@elseif (strpos($url, 'tag') !== false)
<section class="bg-img1 txt-center p-lr-15 p-b-20 p-t-35 m-t-83" >
	<h2 class="ltext-105 txt-center cl2">
	@if($url)
    Tag: {{ last(explode('/', str_replace('-', ' ', $url) )) }}
  @endif
	</h2>
</section>
@else
<section class="bg-img1 txt-center p-lr-15 p-tb-92 m-t-83" style="background-image: @if($web->imageblog) url('/assets/images/{{$web->imageblog}}'); @else url('/assets/theme/images/bg-02.jpg'); @endif">
	<h2 class="ltext-105 cl0 txt-center">
	Blog
	</h2>
</section>	
@endif


	<!-- Content page -->
	<section class="bg0 p-t-62 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-80">
					<div class="p-r-45 p-r-0-lg">

						<!-- item blog -->
						@if (isset($blogs))
        			@if ($blogs)
          			@foreach ($blogs as $blog)
								<div class="p-b-63">
									<a href="/blog/{{$blog->url}}" class="hov-img0 how-pos5-parent">
										<img src="/assets/images/blogs/{{$blog->image}}" alt="imágen de : {{$blog->title}}">
										<div class="flex-col-c-m size-123 bg9 how-pos5">
											<span class="ltext-107 cl2 txt-center">
											{{ $blog->created_at->format('d') }}
											</span>
											<span class="stext-109 cl3 txt-center">
											{{ $blog->created_at->format('M Y') }}
											</span>
										</div>
									</a>
									<div class="p-t-32">
										<h4 class="p-b-15">
											<a href="/blog/{{$blog->url}}" class="ltext-108 cl2 hov-cl1 trans-04">
											{{$blog->title}}
											</a>
										</h4>
										<p class="stext-117 cl6">
										{{$blog->cita}}
										</p>
										<div class="flex-w flex-sb-m p-t-18">
											<span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">
												<span>
													<span class="cl4">By</span> {{$blog->user->name}}  
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
											<a href="/blog/{{$blog->url}}" class="stext-101 cl2 hov-cl1 trans-04 m-tb-10">
												Continuar leyendo
												<i class="fa fa-long-arrow-right m-l-9"></i>
											</a>
										</div>
									</div>
								</div>
								@endforeach
							@endif
						@endif		

						<!-- item blog -->
						<!-- <div class="p-b-63">
							<a href="#" class="hov-img0 how-pos5-parent">
								<img src="/assets/theme/images/blog-05.jpg" alt="IMG-BLOG">

								<div class="flex-col-c-m size-123 bg9 how-pos5">
									<span class="ltext-107 cl2 txt-center">
										18
									</span>

									<span class="stext-109 cl3 txt-center">
										Jan 2018
									</span>
								</div>
							</a>

							<div class="p-t-32">
								<h4 class="p-b-15">
									<a href="#" class="ltext-108 cl2 hov-cl1 trans-04">
										The Great Big List of Men’s Gifts for the Holidays 
									</a>
								</h4>

								<p class="stext-117 cl6">
									Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius
								</p>

								<div class="flex-w flex-sb-m p-t-18">
									<span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">
										<span>
											<span class="cl4">By</span> Admin  
											<span class="cl12 m-l-4 m-r-6">|</span>
										</span>

										<span>
											StreetStyle, Fashion, Couple  
											<span class="cl12 m-l-4 m-r-6">|</span>
										</span>

										<span>
											8 Comments
										</span>
									</span>

									<a href="#" class="stext-101 cl2 hov-cl1 trans-04 m-tb-10">
										Continue Reading

										<i class="fa fa-long-arrow-right m-l-9"></i>
									</a>
								</div>
							</div>
						</div> -->


						<!-- Pagination -->
						<!-- <div class="flex-l-m flex-w w-full p-t-10 m-lr--7">
							<a href="#" class="flex-c-m how-pagination1 trans-04 m-all-7 active-pagination1">
								1
							</a>

							<a href="#" class="flex-c-m how-pagination1 trans-04 m-all-7">
								2
							</a>
						</div> -->
					</div>
				</div>

				<div class="col-md-4 col-lg-3 p-b-80">
					<div class="side-menu">
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

								</li>
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
									<a href="#" class="wrao-pic-w size-214 hov-ovelay1 m-r-20">
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