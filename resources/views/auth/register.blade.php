@extends('layouts.web')

@section('content')
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
			<div class="flex-w flex-tr mt-5">
				<div class="bor10 p-t-55 m-auto col-md-6 col-sm-12">
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Nombre y apellido *:</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" maxlenght="64" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="company" class="col-md-4 col-form-label text-md-end">Empresa:</label>
                                <div class="col-md-6">
                                    <input id="company" type="text" class="form-control @error('company') is-invalid @enderror" name="company" value="{{ old('company') }}" maxlenght="20" required autocomplete="company" autofocus>
                                    @error('company')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Correo electrónico *:</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" maxlenght="64" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">Contraseña *:</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" maxlenght="16" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Repite contraseña *:</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" maxlenght="16" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4 pt-4 m-auto">
                                    <button type="submit" class="flex-c-m stext-101 cl0 size-116 bg1 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                                        Registrarme
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
				</div>
			</div>
		</div>
	</section>	
    

@endsection
