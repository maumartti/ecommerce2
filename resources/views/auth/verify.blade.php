@extends('layouts.web')

@section('content')
<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr mt-5">
                <div class="bor10 p-t-35 p-b-35 m-auto col-md-6 col-sm-12">
                    <div class="card-body">
                        <div class="alert alert-success mb-5" role="alert">
                        Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico.
                        </div>
                        Antes de continuar, consulte su correo electrónico para obtener un enlace de verificación. Si no recibió el correo electrónico,
                        Si no recibiste el correo electrónico,
                        <form class="d-inline" method="POST" action="">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('haga clic aquí para solicitar otro') }}</button>.
                        </form>
                    </div>
				</div>
			</div>
		</div>
	</section>	
@endsection

