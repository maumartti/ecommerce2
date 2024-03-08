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
<meta property="og:url" content="https://tiendasacuanjoche.com/blog/{{$blog->url}}">
<meta property="og:image" content="https://tiendasacuanjoche.com/assets/images/blogs/{{$blog->image}}">
<meta property="og:type" content="website">

<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@importadoratatar">
<meta name="twitter:title" content="{{$blog->title}}">
<meta name="twitter:description" content="{{$blog->title}} - {{$category_name}} - precio: ${{ str_replace(',', '.', number_format($blog->price, 0, '.', ',')) }}">
<meta name="twitter:image" content="https://tiendasacuanjoche.com/assets/images/blogs/{{$blog->image}}">

<meta property="og:title" content="{{$blog->title}}">
<meta property="og:description" content="{{$blog->title}} - {{$category_name}} - precio: ${{ str_replace(',', '.', number_format($blog->price, 0, '.', ',')) }}">
<meta property="og:url" content="https://tiendasacuanjoche.com/blog/{{$blog->url}}">
<meta property="og:image" content="https://tiendasacuanjoche.com/assets/images/blogs/{{$blog->image}}">
<meta property="og:type" content="website">

<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@nombredeusuario">
<meta name="twitter:title" content="{{$blog->title}}">
<meta name="twitter:description" content="{{$blog->title}} - {{$category_name}} - precio: ${{ str_replace(',', '.', number_format($blog->price, 0, '.', ',')) }}">
<meta name="twitter:image" content="https://tiendasacuanjoche.com/assets/images/blogs/{{$blog->image}}">
@endsection

@section('content')

<!-- Content page -->
<section>
            <div class="kid v3 v4">
                <div class="container">
                    <div class="row v3 v4">
                        <div class="col-md-9 col-sm-12 col-xs-12 v3 v4">
                            <div class="blog-v3 v4">
                                <div class="img-title2 v2 v3 v4">
                                    <div class="kid-all v2 v3 v4">
                                        <div class="para blog-v2 v3 v4">
                                            <h1 style="margin-bottom:23px;">{{$blog->title}}</h1>
                                            <div class="img-title2 blog-v2 v3 v4">
                                                <p><em>By {{$blog->user->name}}</em></p>
                                            </div>
                                            <div class="img-title3 v2 v3 v4">
                                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i></a>
                                                <p><em>{{ $blog->updated_at->format('d-m-Y') }}</em></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border v4"></div>
                                </div>
                            </div>
                            <!-- <div class="border"></div> -->
                            <div class="row two">
                                
																<div class="col-md-12 col-sm-12 col-xs-12">
																	<div class="img-v4" style="margin-bottom:26px;">
																		<a href="#" class=""><img src="/assets/images/blogs/{{$blog->image}}" alt="img"></a>
																	</div>
                                    <div class="para-v4">
																		{!! $blog->text !!}
                                  </div>
                                </div>
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
                            <!-- <div class="happykid">
                                <div class="happykid2">
                                    <p><a href="#"><i class="fa fa-tags" aria-hidden="true"></i></a>Happy kid, Ut accumsan, Nullam eu</p>
                                </div>
                                <div class="cmt-like">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-comments" aria-hidden="true"></i></a> 1 Comment</li>
                                        <li><a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a> 98 Likes</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="jan">
                                <div class="left-v4">
                                    <a href="#"><i class="fa fa-chevron-left" aria-hidden="true"></i></a><p>La Femme For Flaunt Magazine<br> Jan 30, 2018</p>
                                </div>
                                <div class="right-v4">
                                    <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a><p>How did gardener and the gang first...<br> Jan 30, 2018</p>
                                </div>
                            </div>
                            <div class="comment">
                                <h4>comments(1)</h4>
                                <div class="border v4 cmt"></div>
                                <div class="img-cmt-v4">
                                    <a href="#"><img src="images/img37.png" alt="img"></a>
                                </div>
                                <div class="para-cmt">
                                    <h4>JoAnne Theodore</h4><br>
                                    <p>Feb 30, 2018 at 10:25 AM</p>
                                    <div class="lorem">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lacus eu erat integer bibendum rutrum, sed arcu molestie, in quis ornare, rhoncus sceleris velit, nam feugiat nibh leo. Ac suspendisse turpis posuere, cursus fames eu eget.<br>
                                    </div>
                                    <a href="#"><em>Reply</em></a>
                                </div>
                            </div>

                            <div class="form-v4">
                                <h4>Comments (1)</h4>
                                <form method="post" class="form-customer form-login">
                                    <div class="form-group review">
                                     
                                        <input type="text" class="form-control form-account" placeholder="Your review*" >
                                    </div>
                                    <div class="form-group name">
                                     
                                        <input type="text" class="form-control form-account"  placeholder="Name*" >
                                    </div>
                                    <div class="form-group email">
                                     
                                        <input type="email" class="form-control form-account" id="exampleInputEmail1" placeholder="Email address*">
                                    </div>
                                    <div class="btn-button-group mg-top-30 mg-bottom-15">
                                        <button type="submit" class="zoa-btn btn-login hover-white">Submit</button>
                                    </div>
                                </form>
                            </div> -->

                        </div>
                        <!--categories-->
                        <div class="col-md-3 col-sm-12 col-xs-12 feed">
                            <div class="search2">
                                <div class="search search-blog-4">
                                    <form method="get" action="/search" role="search" class="search-form  has-categories-select">
                                        <input name="q" class="search-input" type="text" value="" placeholder="Search..." autocomplete="off">
                                        <input type="hidden" name="post_type" value="product">
                                        <button type="submit" id="search-btn"><i class="ion-ios-search-strong"></i></button>
                                    </form>
                                </div>
                                <div class="categories">
                                    <h4>Categorías</h4>
                                    <div class="ul-li">
                                        <ul>
																				@foreach ($categoriesBlog as $cat)
																				<li><a href="/blog/categoria/{{$cat->url}}">{{$cat->name}}</a></li>
																				@endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--instargram Feed-->
                            <div class="instargram v4">
                                <h4>Instargram Feed</h4>
                                <div class="imgs">
                                    <a href="#"><img src="images/img5.jpg" alt="img"></a>
                                    <a href="#"><img src="images/img6.jpg" alt="img"></a>
                                    <a href="#"><img src="images/img7.jpg" alt="img"></a>
                                    <a href="#"><img src="images/img8.jpg" alt="img"></a>
                                    <a href="#"><img src="images/img9.jpg" alt="img"></a>
                                    <a href="#"><img src="images/img10.jpg" alt="img"></a>
                                    <a href="#"><img src="images/img11.jpg" alt="img"></a>
                                    <a href="#"><img src="images/img12.jpg" alt="img"></a>
                                    <a href="#"><img src="images/img13.jpg" alt="img"></a>
                                </div>
                            </div>
                            <!-- Recent Posts -->
                            <div class="recentposts">
                                <h4>Últimos Posts</h4>
                                <div class="recentposts2">
                                    <ul>
																		@if (isset($blogs))
																		@if ($blogs)
																		@foreach ($blogs as $index => $blog)
																				@if($index < 5)
																				<li><a href="/blog/{{$blog->url}}">{{$blog->title}}</a>
																						<br><em><span>{{ $blog->updated_at->format('d-m-Y') }}</span></em>
																				</li>
																				@endif
																		@endforeach
																		@endif
																		@endif	
																		</ul>
																	</div>
															</div>
															<!-- Recent Comments -->
															<!-- <div class="recentcomments">
																	<h4>Recent Comments</h4>
																	<ul>
																			<li><a href="#">JoAnne on</a><em><span>How did gardener and the...</span></em></li>
																			<li><a href="#">Blase on</a><em><span>The lookbook for kid 2018</span></em>
																					<br>
																			</li>
																			<li><a href="#">Pixel on</a><em><span>Two weeks to become a great...</span></em></li>
																			<li><a href="#">Anna Tran on</a><em><span>Big dream come to</span></em></li>
																	</ul>
															</div> -->
															<!-- blog tags -->
															<div class="blogtags v4">
																	<h4>Blog Tags</h4>
																	<div class="ul-1">
																			<ul>
																			@if($tagsAll)
																			@foreach ($tagsAll as $tag)
																			@if($tag)
																				<li><a href="/blog/tag/{{ str_replace(' ', '-', $tag) }}">{{$tag}}</a></li>
																			@endif
																			@endforeach
																			@endif
																			</ul>
																	</div>
															</div>
															<!-- sale Products -->
															<!-- <div class="saleproduct v4">
																	<h4>Sale Products</h4>
																	<div class="all">
																			<div class="sale-img">
																					<a href="#"><img src="images/img14.jpg" alt="img"></a>
																					<div class="sale"><a href="#">-50%</a></div>
																					<div class="before"></div>
																			</div>
																			<div class="sale-para">
																					<p><a href="#">Contrasting Dungarees<br>
																					With Craces</a>
																			</p>
																			<ul>
																					<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
																					<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
																					<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
																					<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
																					<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a><em><span>6 Review(s)</span></em></li>
																					<li><a class="sales-36" href="#">$36.00</a>
																							<del>$42.00</del>
																					</li> 
																			</ul>
																	</div>
															</div> -->
															<!-- <div class="all">
																	<div class="sale-img">
																			<a href="#"><img src="images/img15.jpg" alt="img"></a>
																			<div class="sale"><a href="#">-25%</a></div>
																			<div class="before"></div>
																	</div>
																	<div class="sale-para2">
																			<p><a href="#">Clouds Sweater</a></p>
																			<ul>
																					<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
																					<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
																					<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
																					<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
																					<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a><em><span>6 Review(s)</span></em></li>
																					<li><a class="sales-36" href="#">$36.00</a>
																							<del>$42.00</del>
																					</li>
																			</ul>
																	</div>
															</div>
															<div class="all">
																	<div class="sale-img">
																			<a href="#"><img src="images/img16.jpg" alt="img"></a>
																			<div class="sale"><a href="#">-50%</a></div>
																			<div class="before"></div>
																	</div>
																	<div class="sale-para">
																			<p><a href="#">Contrasting Dungarees<br>
																			With Craces</a>
																	</p>
																	<ul>
																			<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
																			<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
																			<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
																			<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
																			<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a><em><span>6 Review(s)</span></em></li>       
																			<li><a class="sales-36" href="#">$36.00</a>
																					<del>$42.00</del>
																			</li>      
																	</ul>
															</div>
															</div>
															<div class="all">
																	<div class="sale-img">
																			<a href="#"><img src="images/img17.jpg" alt="img"></a>
																			<div class="sale"><a href="#">-25%</a></div>
																			<div class="before"></div>
																	</div>
																	<div class="sale-para2">
																			<p><a href="#">Clouds Sweater</a></p>
																			<ul>
																					<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
																					<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
																					<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
																					<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
																					<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a><em><span>6 Review(s)</span></em></li>
																					<li><a class="sales-36" href="#">$36.00</a>
																							<del>$42.00</del>
																					</li>			
																			</ul>
																	</div>
															</div> -->
											</div>
											
									</div>
							</div>
							<div class="border"></div>
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