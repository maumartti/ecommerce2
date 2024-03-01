@extends('layouts.web')

@section('head')
    <title>Política de Privacidad - {{ config('app.name') }}</title>
    <meta name="description" content="Información sobre nuestra empresa - {{ config('app.name') }}">
    <meta property="og:title" content="Política de Privacidad - {{ config('app.name') }}">
    <meta property="og:description" content="Política de Privacidad sobre nuestra empresa {{ config('app.name') }}">
    <meta property="og:url" content="{{request()->url()}}">
    <meta property="og:type" content="website">
@endsection


@section('content')
	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92 m-t-83">
		<h2 class="ltext-105 txt-center">
		Política de Privacidad de IMPORTADORA TATAR
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0">
		<div class="container">
			<div class="row p-b-148">
				<div class="col-md-12 col-lg-12">
					<div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
						Fecha de vigencia: 12/12/2023
						</h3>

						<!-- <p class="stext-113 cl6 p-b-26">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consequat consequat enim, non auctor massa ultrices non. Morbi sed odio massa. Quisque at vehicula tellus, sed tincidunt augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas varius egestas diam, eu sodales metus scelerisque congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas gravida justo eu arcu egestas convallis. Nullam eu erat bibendum, tempus ipsum eget, dictum enim. Donec non neque ut enim dapibus tincidunt vitae nec augue. Suspendisse potenti. Proin ut est diam. Donec condimentum euismod tortor, eget facilisis diam faucibus et. Morbi a tempor elit.
						</p>

						<p class="stext-113 cl6 p-b-26">
							Donec gravida lorem elit, quis condimentum ex semper sit amet. Fusce eget ligula magna. Aliquam aliquam imperdiet sodales. Ut fringilla turpis in vehicula vehicula. Pellentesque congue ac orci ut gravida. Aliquam erat volutpat. Donec iaculis lectus a arcu facilisis, eu sodales lectus sagittis. Etiam pellentesque, magna vel dictum rutrum, neque justo eleifend elit, vel tincidunt erat arcu ut sem. Sed rutrum, turpis ut commodo efficitur, quam velit convallis ipsum, et maximus enim ligula ac ligula. 
						</p> -->

						<p class="stext-113 cl6 p-b-26">
						Bienvenidos a <a href="https://tiendasacuanjoche.com/">IMPORTADORATATAR.CL</a> Valoramos y respetamos su privacidad, y nos comprometemos a proteger la información personal que nos proporcione. Esta Política de Privacidad describe cómo recopilamos, utilizamos y compartimos su información cuando utiliza nuestros servicios en línea. Al acceder y utilizar nuestra tienda en línea, usted acepta los términos de esta Política de Privacidad.

1. Información que Recopilamos:

Información Personal: Al realizar una compra, recopilamos información personal como su nombre, dirección, dirección de correo electrónico y número de teléfono para procesar su pedido y brindarle una experiencia de compra personalizada.

Información de Pago: Al realizar una compra, recopilamos la información de pago necesaria para procesar la transacción. Toda la información de pago se gestiona de manera segura y se cifra mediante tecnologías seguras.

2. Uso de la Información:

Procesamiento de Pedidos: Utilizamos la información recopilada para procesar y cumplir con sus pedidos, brindándole un servicio eficiente y entregando productos de alta calidad.

Comunicación: Podemos utilizar su información para enviarle comunicaciones relacionadas con su compra, como confirmaciones de pedidos, detalles de envío y actualizaciones relevantes.

Mejora de Servicios: Analizamos la información recopilada para mejorar nuestros productos, servicios y la experiencia general del usuario en nuestra tienda en línea.

3. Apoyo al Emprendimiento:
En IMPORTADORA TATAR, nos enorgullece apoyar el crecimiento de emprendedores. Trabajamos con proveedores locales y pequeños empresarios para ofrecer productos únicos y de calidad.

4. Política de Devoluciones:

No ofrecemos devoluciones estándar. Confiamos en la calidad de nuestros fardos de ropa y nos esforzamos por garantizar que cada producto cumpla con los estándares más altos.

En casos puntuales, evaluaremos solicitudes de devolución y, cuando sea posible, ofreceremos alternativas o atención especial en la próxima compra. Contáctenos directamente para discutir cualquier problema o inquietud.

5. Trayectoria en Chile:

Nuestra sucursal oficial en Chile ha estado sirviendo a nuestros clientes durante 5 años con dedicación y compromiso. Valoramos la confianza que nuestros clientes han depositado en nosotros a lo largo de los años.
6. Lanzamiento Oficial de la Tienda Online:

El 12 de diciembre celebramos el lanzamiento oficial de nuestra tienda en línea. Estamos emocionados de llevar nuestra dedicación y calidad de servicio a la plataforma digital, brindando una experiencia de compra conveniente y segura.
7. Cambios en la Política de Privacidad:
Nos reservamos el derecho de actualizar o modificar esta Política de Privacidad en cualquier momento. Cualquier cambio será efectivo inmediatamente después de la publicación en nuestra tienda en línea. Le recomendamos revisar periódicamente esta política para estar informado sobre cómo protegemos su información.

Para cualquier pregunta o inquietud sobre nuestra Política de Privacidad, no dude en ponerse en contacto con nosotros a través de correo electrónico ventas@tiendasacuanjoche.com

Gracias por confiar en <a href="https://tiendasacuanjoche.com/">IMPORTADORATATAR.CL</a> Estamos comprometidos a brindarle una experiencia de compra segura y satisfactoria.

Atentamente,

IMPORTADORATATAR.CL
						</p>
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