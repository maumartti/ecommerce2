@extends('layouts.web')

@section('head')
    <title>Pago - {{ config('app.name') }}</title>
    <meta name="description" content="Pago confirmado - {{ config('app.name') }}">
    <meta property="og:title" content="respultado de su compra - {{ config('app.name') }}">
    <meta property="og:description" content="Resultado de su compra {{ config('app.name') }}">
    <meta property="og:url" content="{{request()->url()}}">
    <meta property="og:type" content="website">
@endsection


@section('content')
	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
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
			<div class="flex-w flex-tr ">
				<div class="size-210 bor10 p-lr-70 p-t-85 p-b-70  p-lr-15-lg w-full-md m-auto">
						@if($payment->status == 'AUTHORIZED')
						<h4 class="mtext-105 cl2 txt-center text-success p-b-30">Su compra fue exitosa!</h4>
						@else
						<h4 class="mtext-105 cl2 txt-center text-danger p-b-30">Error al realizar el pago!</h4>
						@endif

						<div class="col-12 m-b-20 how-pos4-parent text-center">
							@if($payment->status == 'AUTHORIZED')
							<img class="" src="/assets/images/ok.png" alt="ICON" style="width: 300px;margin: auto;text-align: center;display: inline-block;">
							@else
							<img class="" src="/assets/images/error.png" alt="ICON" style="width: 300px;margin: auto;text-align: center;display: inline-block;">
							@endif
						</div>

						<a href="/" class=" {{ $payment->status == 'AUTHORIZED' ? 'btn-success' : 'btn-danger' }} mt-4 flex-c-m stext-101 cl0 size-121 bg4 bor1 hov-btn3 p-lr-15 trans-04 pointer">
							Regresar a la home
						</a>
				</div>
			</div>
		</div>
	</section>	
	
	
	<!-- Map -->
	<div class="map">
		<div class="size-303" id="google_map" data-map-x="40.691446" data-map-y="-73.886787" data-pin="images/icons/pin.png" data-scrollwhell="0" data-draggable="1" data-zoom="11"></div>
	</div>
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