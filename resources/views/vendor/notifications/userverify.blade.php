@component('mail::message')
# Bienvenido {{ $notifiable->name }}

Debe verificar su dirección de correo electrónico.

@component('mail::button', ['url' => $url])
verificar mi correo electrónico
@endcomponent

Si no creó una cuenta, no es necesario realizar ninguna otra acción.

Saludos,<br>
{{ config('app.name') }}

@component('mail::subcopy')
Si tiene problemas para hacer clic en el botón "Verificar dirección de correo electrónico", copie y pegue la siguiente URL en su navegador web: {{ $url }} 
@endcomponent

@endcomponent
