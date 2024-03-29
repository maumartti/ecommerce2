@extends('layouts.web')

@section('head')
    <title>Contacto - {{ config('app.name') }}</title>
    <meta name="description" content="Ponte en contacto con nuestra empresa - {{ config('app.name') }}">
    <meta property="og:title" content="Contacto - {{ config('app.name') }}">
    <meta property="og:description" content="Ponte en contacto con nuestra empresa {{ config('app.name') }}">
    <meta property="og:url" content="{{request()->url()}}">
    <meta property="og:type" content="website">
		<style>
			#embed-map-display .text-marker{}
			.map-generator{max-width: 100%; max-height: 100%; background: none;}
		</style>
@endsection


@section('content')
	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92 m-t-83" style="background-image: @if($web->imageContact) url('/assets/images/{{$web->imageContact}}'); @else url('/assets/theme/images/bg-01.jpg'); @endif">
		<h2 class="ltext-105 cl0 txt-center">
			Contacto
		</h2>
	</section>
	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-90">
		<div class="container">
		@if (session('success'))
				<div class="alert alert-success">
						{{ session('success') }}
				</div>
		@endif

		@if (session('error'))
				<div class="alert alert-danger">
						{{ session('error') }}
				</div>
		@endif
			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					<form action="message" method="POST">
					@csrf
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Envíanos un mensaje
						</h4>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" maxlength="100" placeholder="Tu Correo">
							<img class="how-pos4 pointer-none" src="/assets/theme/images/icons/icon-email.png" alt="ICON">
						</div>

						<div class="bor8 m-b-30">
							<textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="text" maxlength="500" placeholder="¿Cómo podemos ayudarte?"></textarea>
						</div>

						<button type="submit" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
							Enviar
						</button>
					</form>
				</div>

				<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-map-marker"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Dirección
							</span>

							<p class="stext-115 cl6 size-213 p-t-18">
							{{$web->address ? $web->address : 'Av. Alfredo Acuña 922, 9160000 Estación Central, Región Metropolitana, Chile '}}
							</p>
						</div>
					</div>

					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-phone-handset"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Hablemos
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								@php
										$phone = ($web->cel && $web->countryCode) ? $web->countryCode . ' ' . $web->cel : '+56 94362741';
								@endphp
    						<a href="tel:{{ preg_replace('/[^0-9]/', '', $phone) }}">{{ $phone }}</a>
							</p>
						</div>
					</div>

					<div class="flex-w w-full">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-envelope"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Soporte de ventas
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								@php
										$email = ($web->email) ? $web->email : 'contact@example.com';
								@endphp
								<a href="mailto:{{ $email }}">{{ $email }}</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
	
	
<!-- Map -->
<div class="map">
<div style="overflow:hidden;resize:none;max-width:100%;width:100%;height:500px;">
<div id="embed-map-display" style="height:100%; width:100%;max-width:100%;">
<iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Av.+Obispo+Manuel+Umaña+299,+9160000+Santiago,+Estación+Central,+Región+Metropolitana,+Chile&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
</div>
<a class="google-map-code-enabler" href="https://www.bootstrapskins.com/themes" id="auth-map-data">premium bootstrap themes</a>
</div>
	</div>
@endsection

@section('script')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="/assets/theme/js/map-custom.js"></script>
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