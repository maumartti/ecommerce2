@extends('layouts.web')

@section('head')
<!-- estilos de theme2 el original -->
<!-- <link rel="stylesheet" type="text/css" href="/assets/theme2/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/assets/theme2/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/assets/theme2/fonts/iconic/css/material-design-iconic-font.min.css">
<link rel="stylesheet" type="text/css" href="/assets/theme2/fonts/linearicons-v1.0.0/icon-font.min.css">
<link rel="stylesheet" type="text/css" href="/assets/theme2/vendor/animate/animate.css">	
<link rel="stylesheet" type="text/css" href="/assets/theme2/vendor/css-hamburgers/hamburgers.min.css">
<link rel="stylesheet" type="text/css" href="/assets/theme2/vendor/animsition/css/animsition.min.css">
<link rel="stylesheet" type="text/css" href="/assets/theme2/vendor/select2/select2.min.css">	
<link rel="stylesheet" type="text/css" href="/assets/theme2/vendor/daterangepicker/daterangepicker.css">
<link rel="stylesheet" type="text/css" href="/assets/theme2/vendor/slick/slick.css">
<link rel="stylesheet" type="text/css" href="/assets/theme2/vendor/MagnificPopup/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="/assets/theme2/vendor/perfect-scrollbar/perfect-scrollbar.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="/assets/theme2/css/util.css">
<link rel="stylesheet" type="text/css" href="/assets/theme2/css/main.css"> -->
@endsection


@section('content')
<section class="bg0 p-t-104 p-b-116">
		<div class="container">


        <div class="form-v4 contact" style="margin: 40px 0px;">
        <h2 class="card-header text-center font-weight-bold" >Iniciar Sesión</h2>
            <form method="post" action="{{ route('login') }}" class="form-customer form-login" style="max-width: 320px;margin: auto;padding: 15px;background: #f4f4f4;border-radius: 10px;">
            @csrf
                <div class="form-group">
                    <input id="email" type="email" name="email" class="form-control form-account"  placeholder="Email address*">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group contact">
                    <input id="password" type="password" name="password" placeholder="Password" class="form-control form-account @error('password') is-invalid @enderror" required autocomplete="current-password">
                </div>
                <div class="btn-button-group mg-top-30 mg-bottom-15 bt-contact" style="width: 100%;margin: auto;padding: 15px;">
                    <button type="submit" class="zoa-btn btn-login hover-white contact" style="margin:auto;">Entrar</button>
                    <div class="col-12 text-center mt-3">
                        <a class="btn btn-link" href="/password/email">
                            Recuperar contraseña
                        </a>
                    </div>
                </div>
            </form>
        </div>

			
		</div>
	</section>	

@endsection