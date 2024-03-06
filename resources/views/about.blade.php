@extends('layouts.web')

@section('head')
    <title>Sobre Nosotros - {{ config('app.name') }}</title>
    <meta name="description" content="Información sobre nuestra empresa - {{ config('app.name') }}">
    <meta property="og:title" content="Sobre nosotros - {{ config('app.name') }}">
    <meta property="og:description" content="Información sobre nuestra empresa {{ config('app.name') }}">
    <meta property="og:url" content="{{request()->url()}}">
    <meta property="og:type" content="website">

<style>
	.bg-img1 {
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
}
</style>
@endsection

@section('content')

	<!-- Content page -->
	<section>
		<div class="header-page bg-img1" style="margin-bottom:30px;background-image: @if($web->imageAbout) url('/assets/images/{{$web->imageAbout}}'); @else url('/assets/theme/images/bg-01.jpg'); @endif height:200px;">
			<div class="container myContainer">
				<h1 class="text-center" style="margin-top: 74px;font-weight:bold;">{{$web->aboutTitle ? $web->aboutTitle : 'Sobre Nosotros'}}</h1>
			</div>
		</div>
		<div class="our">
			<div class="container" stlye="margin-top:15px !important;">
				<div class="row">
						<div class="col-md-8 col-sm-8 col-xs-12 about-us">
								<div class="mission">
										<h4>{{$web->aboutTitleText1 ? $web->aboutTitleText1 : 'Historia de Nuestra empresa'}}</h4>
										<p>{{$web->aboutText1 ? $web->aboutText1 : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consequat consequat enim, non auctor massa ultrices non. Morbi sed odio massa. Quisque at vehicula tellus, sed tincidunt augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas varius egestas diam, eu sodales metus scelerisque congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas gravida justo eu arcu egestas convallis. Nullam eu erat bibendum, tempus ipsum eget, dictum enim. Donec non neque ut enim dapibus tincidunt vitae nec augue. Suspendisse potenti. Proin ut est diam. Donec condimentum euismod tortor, eget facilisis diam faucibus et. Morbi a tempor elit.'}}</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 about-us">
							<div class="mission">
								<img src="{{$web->aboutImageText1 ? '/assets/images/'.$web->aboutImageText1 :'/assets/theme/images/about-01.jpg'}}" alt="IMG" style="width: 100%;">
							</div>
						</div>
				</div>
			</div>
		</div>
		<div class="our">
				<div class="container">
						<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-12 about-us">
										<div class="mission">
											<img src="{{$web->aboutImageText2 ? '/assets/images/'.$web->aboutImageText2 :'/assets/theme/images/about-02.jpg'}}" alt="IMG" style="width: 100%;">
										</div>
								</div>
								<div class="col-md-8 col-sm-8 col-xs-12 about-us">
										<div class="mission">
												<h4>{{$web->aboutTitleText2 ? $web->aboutTitleText2 : 'Nuestra Misión'}}</h4>
												<p>{{$web->aboutText2 ? $web->aboutText2 : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consequat consequat enim, non auctor massa ultrices non. Morbi sed odio massa. Quisque at vehicula tellus, sed tincidunt augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas varius egestas diam, eu sodales metus scelerisque congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas gravida justo eu arcu egestas convallis. Nullam eu erat bibendum, tempus ipsum eget, dictum enim. Donec non neque ut enim dapibus tincidunt vitae nec augue. Suspendisse potenti. Proin ut est diam. Donec condimentum euismod tortor, eget facilisis diam faucibus et. Morbi a tempor elit.'}}</p>
									</div>
							</div>
					</div>
			</div>
	</div>
		<!-- <div class="our-team">
				<div class="container">
						<h4>Our Team</h4>
						<div class="col-md-3 col-sm-2 col-sx-12 team">
								<div class="team-1">
										<a href="" class="plus-zoom"><img src="/assets/theme/images/team1.png" alt=""></a>
										<p>JoAnne Theodore <br><em>Graphic Design</em></p>
								</div>
						</div>
						<div class="col-md-3 col-sm-2 col-sx-12 team">
								<div class="team-1">
										<a href="" class="plus-zoom"><img src="/assets/theme/images/team2.png" alt=""></a>
										<p>Jack Brown<br><em>Graphic Design</em></p>
								</div>
						</div>
						<div class="col-md-3 col-sm-2 col-sx-12 team">
								<div class="team-1">
										<a href="" class="plus-zoom"><img src="/assets/theme/images/team3.png" alt=""></a>
										<p>Johnson<br><em>Graphic Design</em></p>
								</div>
						</div>
						<div class="col-md-3 col-sm-2 col-sx-12 team">
								<div class="team-1">
										<a href="" class="plus-zoom"><img src="/assets/theme/images/team4.png" alt=""></a>
										<p>Pixel Creative<br><em>Graphic Design</em></p>
								</div>
						</div>
				</div>
		</div> -->
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