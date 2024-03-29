@extends('layouts.web')

@section('content')
<section class="bg0 p-t-104 p-b-116">
		<div class="container">

			<div class="flex-w flex-tr mt-5">
                <div class="bor10 p-t-35 m-auto col-md-6 col-sm-12">
                    <h4 class="pl-3 pb-5">Recuperar Contraseña <svg xmlns="http://www.w3.org/2000/svg" style="position:relative;top:4px;" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 17a2 2 0 0 0 2-2a2 2 0 0 0-2-2a2 2 0 0 0-2 2a2 2 0 0 0 2 2m6-9a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V10a2 2 0 0 1 2-2h1V6a5 5 0 0 1 5-5a5 5 0 0 1 5 5v2h1m-6-5a3 3 0 0 0-3 3v2h6V6a3 3 0 0 0-3-3Z"/></svg></h4>
                        <div class="card-body">
                        <p class="pb-5">{{ __('Please confirm your password before continuing.') }}</p>

                        <form method="POST" action="">
                            @csrf

                            <div class="row mb-2">
                                <label for="password" class="col-md-2 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-8">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4 pt-4 m-auto">
                                    <button type="submit" class="flex-c-m stext-101 cl0 size-116 bg1 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                                        Entrar
                                    </button>
                                    <div class="col-12 text-center mt-3">
                                        <a class="btn btn-link" href="/password/confirm">
                                            Recuperar contraseña
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
				</div>
			</div>
		</div>
	</section>	

@endsection
