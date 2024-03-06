@extends('layouts.web')

@php
    $url = request()->url(); // Obtener la URL actual
@endphp


@section('content')
<!-- Title page -->
@if (strpos($url, 'categoria') !== false)
	@section('head')
		<title>Blog - Categoría: {{$category->name}}</title>
		<meta name="description" content="Blog con artículos de la categoría: {{$category->name}}">
		<meta property="og:title" content="Blog - Categoría: {{$category->name}}">
		<meta property="og:description" content="Blog con artículos de la categoría: {{$category->name}}">
		<meta property="og:url" content="{{$url}}">
		<meta property="og:type" content="website">
	@endsection
	<section class="bg-img1 txt-center p-lr-15 p-b-20 p-t-35 m-t-83" >
		<h2 class="ltext-105 txt-center cl2">
		@if($category) Categoría: {{$category->name}} @endif
		</h2>
	</section>	
@elseif (strpos($url, 'tag') !== false)
	@php
		$tag =  last(explode('/', str_replace('-', ' ', $url) ));
	@endphp
	@section('head')
		<title>Blog - tag: {{ $tag }}</title>
		<meta name="description" content="Blog con artículos referidos al tag: {{ $tag }}">
		<meta property="og:title" content="Blog - tag: {{ $tag }}">
		<meta property="og:description" content="Blog con artículos referidos al tag: {{ $tag }}">
		<meta property="og:url" content="{{$url}}">
		<meta property="og:type" content="website">
	@endsection
	<section class="bg-img1 txt-center p-lr-15 p-b-20 p-t-35 m-t-83" >
		<h2 class="ltext-105 txt-center cl2">
		@if($url)
			Tag: {{ last(explode('/', str_replace('-', ' ', $url) )) }}
		@endif
		</h2>
	</section>
@else
	@section('head')
		<title>Blog - importadora tatar</title>
		<meta name="description" content="Blog con artículos relacionados a importadora tatar">
		<meta property="og:title" content="Blog - importadora tatar">
		<meta property="og:description" content="Blog con artículos relacionados a importadora tatar">
		<meta property="og:url" content="https://tiendasacuanjoche.com/blog">
		<meta property="og:type" content="website">
	@endsection
	<div class="header-page bg-img1" style="background-image: @if($web->imageblog) url('/assets/images/{{$web->imageblog}}'); @else url('/assets/theme/images/bg-02.jpg'); @endif">
			<div class="container myContainer" style="margin-bottom:20px;">
				<h1 class="text-center" style="margin-top: 34px;font-weight:bold;margin-bottom: 40px;">Blog</h1>
			</div>
	</div>
@endif

<!-- Content page -->
<section>
    <div class="kid v3">
        <div class="container">
            <div class="row v3">
                <div class="col-md-9 col-sm-12 col-xs-12 v3">
                    <div class="blog-v3 xs-mg-15">
                        <div class="img-blog-v2 v3">
                            <a href=""><img src="/assets/theme/images/img33.jpg" alt="img"></a>
                        </div>
                        <div class="img-title2 v2 v3">
                            <div class="kid-all v2 v3">
                                <div class="para blog-v2 v3">
                                    <h4>
                                        <a href="#">Our Kindergarten Anniversarty</a>
                                    </h4>
                                    <div class="img-title2 blog-v2 v3">
                                        <!-- <a href="#"><img src="/assets/theme/images/img4.png" alt="img"></a> -->
                                        <p><em>Pixel Creative</em></p>
                                    </div>
                                    <div class="img-title3 v2 v3">
                                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i></a>
                                        <p><em>Jan 30, 2018</em></p>
                                    </div>
                                    <div class="para2 v2 v3">
                                        <p>Morbi sed dui id purus dictum vestibulum in id lectus. Duis<br>
                                        rutrum ornare mi id consectetur. </p>
                                    </div>
                                    <div class="icon v2 v3">
                                        <a href="#"><i class="fa fa-comments" aria-hidden="true"></i></a>
                                        <p><em>123 Comments</em></p>
                                    </div>
                                    <div class="icon v2 v3">
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                                        <p><em>98 likes</em></p>
                                    </div>
                                    <div class="read v2 v3">
                                        <p><em><a href="#">read more</a></em></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-v3 xs-mg-15">
                        <div class="img-blog-v2 v3 blogs-st">
                            <a href=""><img src="/assets/theme/images/img34.jpg" alt="img"></a>
                        </div>
                        <div class="img-title2 v2 v3">
                            <div class="kid-all v2 v3">
                                <div class="para blog-v2 v3">
                                    <h4>
                                        <a href="#">Our Kindergarten Anniversarty</a>
                                    </h4>
                                    <div class="img-title2 blog-v2 v3">
                                        <!-- <a href="#"><img src="/assets/theme/images/img4.png" alt="img"></a> -->
                                        <p><em>Pixel Creative</em></p>
                                    </div>
                                    <div class="img-title3 v2 v3">
                                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i></a>
                                        <p><em>Jan 30, 2018</em></p>
                                    </div>
                                    <div class="para2 v2 v3">
                                        <p>Morbi sed dui id purus dictum vestibulum in id lectus. Duis<br>
                                        rutrum ornare mi id consectetur. </p>
                                    </div>
                                    <div class="icon v2 v3">
                                        <a href="#"><i class="fa fa-comments" aria-hidden="true"></i></a>
                                        <p> <em>123 Comments</em></p>
                                    </div>
                                    <div class="icon v2 v3">
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                                        <p><em>98 likes</em></p>
                                    </div>
                                    <div class="read v2 v3">
                                        <p><em><a href="#">read more</a></em></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-v3 xs-mg-15">
                        <div class="img-blog-v2 v3">
                            <a href=""><img src="/assets/theme/images/img35.jpg" alt="img"></a>
                        </div>
                        <div class="img-title2 v2 v3">
                            <div class="kid-all v2 v3">
                                <div class="para blog-v2 v3">
                                    <h4>
                                        <a href="#">Our Kindergarten Anniversarty</a>
                                    </h4>
                                    <div class="img-title2 blog-v2 v3">
                                        <!-- <a href="#"><img src="/assets/theme/images/img4.png" alt="img"></a> -->
                                        <p><em>Pixel Creative</em></p>
                                    </div>
                                    <div class="img-title3 v2 v3">
                                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i></a>
                                        <p><em>Jan 30, 2018</em></p>
                                    </div>
                                    <div class="para2 v2 v3">
                                        <p>Morbi sed dui id purus dictum vestibulum in id lectus. Duis<br>
                                        rutrum ornare mi id consectetur. </p>
                                    </div>
                                    <div class="icon v2 v3">
                                        <a href="#"><i class="fa fa-comments" aria-hidden="true"></i></a>
                                        <p><em>123 Comments</em></p>
                                    </div>
                                    <div class="icon v2 v3">
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                                        <p><em>98 likes</em></p>
                                    </div>
                                    <div class="read v2 v3">
                                        <p><em><a href="#">read more</a></em></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-v3 xs-mg-15">
                        <div class="img-blog-v2 v3 blogs-st">
                            <a href=""><img src="/assets/theme/images/img30.jpg" alt="img"></a>
                        </div>
                        <div class="img-title2 v2 v3">
                            <div class="kid-all v2 v3">
                                <div class="para blog-v2 v3">
                                    <h4>
                                     <a href="#">Our Kindergarten Anniversarty</a>
                                 </h4>
                                 <div class="img-title2 blog-v2 v3">
                                    <!-- <a href="#"><img src="/assets/theme/images/img4.png" alt="img"></a> -->
                                    <p><em>Pixel Creative</em></p>
                                </div>
                                <div class="img-title3 v2 v3">
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i></a>
                                    <p><em>Jan 30, 2018</em></p>
                                </div>
                                <div class="para2 v2 v3">
                                    <p>Morbi sed dui id purus dictum vestibulum in id lectus. Duis<br>
                                    rutrum ornare mi id consectetur. </p>
                                </div>
                                <div class="icon v2 v3">
                                    <a href="#"><i class="fa fa-comments" aria-hidden="true"></i></a>
                                    <p> <em>123 Comments</em></p>
                                </div>
                                <div class="icon v2 v3">
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                                    <p><em>98 likes</em></p>
                                </div>
                                <div class="read v2 v3">
                                    <p><em><a href="#">read more</a></em></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-v3 xs-mg-15">
                    <div class="img-blog-v2 v3">
                        <a href=""><img src="/assets/theme/images/img31.jpg" alt="img"></a>
                    </div>
                    <div class="img-title2 v2 v3">
                        <div class="kid-all v2 v3">
                            <div class="para blog-v2 v3">
                                <h4>
                                    <a href="#">Our Kindergarten Anniversarty</a>
                                </h4>
                                <div class="img-title2 blog-v2 v3">
                                    <!-- <a href="#"><img src="/assets/theme/images/img4.png" alt="img"></a> -->
                                    <p><em>Pixel Creative</em></p>
                                </div>
                                <div class="img-title3 v2 v3">
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i></a>
                                    <p><em>Jan 30, 2018</em></p>
                                </div>
                                <div class="para2 v2 v3">
                                    <p>Morbi sed dui id purus dictum vestibulum in id lectus. Duis<br>
                                    rutrum ornare mi id consectetur. </p>
                                </div>
                                <div class="icon v2 v3">
                                    <a href="#"><i class="fa fa-comments" aria-hidden="true"></i></a>
                                    <p> <em>123 Comments</em></p>
                                </div>
                                <div class="icon v2 v3">
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                                    <p><em>98 likes</em></p>
                                </div>
                                <div class="read v2 v3">
                                   <p> <em><a href="#">read more</a></em></p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="blog-v3 xs-mg-15">
                <div class="img-blog-v2 v3 blogs-st">
                    <a href=""><img src="/assets/theme/images/img32.jpg" alt="img"></a>
                </div>
                <div class="img-title2 v2 v3">
                    <div class="kid-all v2 v3">
                        <div class="para blog-v2 v3">
                            <h4>
                                <a href="#">Our Kindergarten Anniversarty</a>
                            </h4>
                            <div class="img-title2 blog-v2 v3">
                                <!-- <a href="#"><img src="/assets/theme/images/img4.png" alt="img"></a> -->
                                <p> <em>Pixel Creative</em></p>
                            </div>
                            <div class="img-title3 v2 v3">
                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i></a>
                                <p><em>Jan 30, 2018</em></p>
                            </div>
                            <div class="para2 v2 v3">
                                <p>Morbi sed dui id purus dictum vestibulum in id lectus. Duis<br>
                                rutrum ornare mi id consectetur. </p>
                            </div>
                            <div class="icon v2 v3">
                                <a href="#"><i class="fa fa-comments" aria-hidden="true"></i></a>
                                <p><em>123 Comments</em></p>
                            </div>
                            <div class="icon v2 v3">
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                                <p>  <em>98 likes</em></p>
                            </div>
                            <div class="read v2 v3">
                               <p> <em><a href="#">read more</a></em></p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-md-3 col-sm-12 col-xs-12 feed">
        <div class="search2">
            <div class="search">
                <form method="get" action="/search" role="search" class="search-form  has-categories-select">
                    <input name="q" class="search-input" type="text" value="" placeholder="Search..." autocomplete="off">
                    <input type="hidden" name="post_type" value="product">
                    <button type="submit" ><i class="ion-ios-search-strong"></i></button>
                </form>
            </div>
            <div class="categories">
                <h4>Categories</h4>
                <div class="ul-li">
                    <ul>
                        <li><a href="#">Beauty (4)</a></li>
                        <li><a href="#">Fashion (6)</a></li>
                        <li><a href="#">Food (5)</a></li>
                        <li><a href="#">Travel (6)</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--instargram Feed-->
        <div class="instargram">
            <h4>Instargram Feed</h4>
            <div class="imgs">
                <a href="#"><img src="/assets/theme/images/insta1.png" alt="img"></a>
                <a href="#"><img src="/assets/theme/images/insta2.png" alt="img"></a>
                <a href="#"><img src="/assets/theme/images/insta3.png" alt="img"></a>
                <a href="#"><img src="/assets/theme/images/insta4.png" alt="img"></a>
                <a href="#"><img src="/assets/theme/images/insta5.png" alt="img"></a>
                <a href="#"><img src="/assets/theme/images/insta6.png" alt="img"></a>
            </div>
        </div>
        <!-- Recent Posts -->
        <div class="recentposts">
            <h4>Recent Posts</h4>
            <div class="recentposts2 v3">
                <ul>
                    <li><a href="#">La Femme For Flaunt Magazine</a>
                        <br><em><span>Jan 30, 2018</span></em></li>
                        <li><a href="#">Gardner and the Gang was founded...</a>
                            <br><em><span>Jan 30, 2018</span></em></li>
                            <li><a href="#">How did gardener and the gang first...</a>
                                <br><em><span>Jan 30, 2018</span></em>
                            </li>
                            <li><a href="#">Singapore and a teacher that kindly...</a>
                                <br><em><span>Jan 30, 2018</span></em>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Recent Comments -->
                <div class="recentcomments v3">
                    <h4>Recent Comments</h4>
                    <ul>
                        <li><a href="#">JoAnne on</a><em><span>How did gardener and the...</span></em></li>
                        <li><a href="#">Blase on</a><em><span>The lookbook for kid 2018</span></em>
                            <br>
                        </li>
                        <li><a href="#">Pixel on</a><em><span>Two weeks to become a great...</span></em></li>
                        <li><a href="#">Anna Tran on</a><em><span>Big dream come to</span></em></li>
                    </ul>
                </div>
                <!-- sale Products -->
                <div class="saleproduct v3">
                    <h4>Sale Products</h4>
                    <div class="all">
                        <div class="sale-img">
                            <a href="#"><img src="/assets/theme/images/img14.jpg" alt="img"></a>
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
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a><em><span>6Review(s)</span></em></li>        
														<li><a class="sales-36" href="#">$36.00</a>
																<del>$42.00</del>
														</li>     
												</ul>
										</div>
								</div>
								<div class="all">
										<div class="sale-img">
												<a href="#"><img src="/assets/theme/images/img15.jpg" alt="img"></a>
												<div class="sale"><a href="#">-25%</a></div>
												<div class="before"></div>
										</div>
										<div class="sale-para2 v2">
												<p><a href="#">Clouds Sweater</a></p>
												<ul>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a><em><span>6Review(s)</span></em></li>
														<li><a class="sales-36" href="#">$36.00</a>
																<del>$42.00</del>
														</li>
													</ul>
											</div>
									</div>
									<div class="all">
											<div class="sale-img">
													<a href="#"><img src="/assets/theme/images/img16.jpg" alt="img"></a>
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
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a><em><span>6Review(s)</span></em></li>			
												<li><a class="sales-36" href="#">$36.00</a>
													<del>$42.00</del>
												</li>					
											</ul>
									</div>
							</div>
							<div class="all">
									<div class="sale-img">
											<a href="#"><img src="/assets/theme/images/img17.jpg" alt="img"></a>
											<div class="sale"><a href="#">-25%</a></div>
											<div class="before"></div>
									</div>
									<div class="sale-para2 v2">
											<p><a href="#">louds Sweater</a></p>
											<ul>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a><em><span>6Review(s)</span></em></li>
												<li><a class="sales-36" href="#">$36.00</a>
													<del>$42.00</del>
												</li>							
											</ul>
									</div>
							</div>
					</div>
					<!-- blog tags -->
					<div class="blogtags">
							<h4>Blog Tags</h4>
							<div class="ul-1">
									<ul>
											<li><a href="#">watch</a></li>
											<li><a href="#">bottom</a></li>
											<li><a href="#">jeans</a></li>
											
											<li><a href="#">accessories</a></li>
											<li><a href="#">clothes</a></li>
											
											<li><a href="#">shoes</a></li>
											<li><a href="#">iBaby</a></li>
											<li><a href="#">Momy</a></li>
									</ul>
							</div>
					</div>
			</div>
			<div class="pagination2 v3">
					<ul class="pagination v2 v3">
							<li><a href="#">Prew</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">Next</a></li>
					</ul>
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