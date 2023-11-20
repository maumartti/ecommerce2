@component('mail::message')

<div style="text-align:center;padding-bottom:30px;">
  <img src="https://importadoratatar.cl/assets/images/logoh.png" >
</div>

# {{ $message }}

{{-- Agrega la imagen aquí --}}
@component('mail::panel')
![Nombre Alt Text]({{ $image }})
@endcomponent

{{-- Boton ir a la tienda --}}
@component('mail::button', ['url' => $link])
Ir a la tienda
@endcomponent


@component('mail::subcopy')
Saludos,<br>
{{ config('app.name') }}<br>
[{{ config('app.url') }}]({{ config('app.url') }})
@endcomponent

@endcomponent
