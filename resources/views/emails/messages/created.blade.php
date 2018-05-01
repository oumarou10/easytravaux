@component('mail::message')
# Bonjour Amadi

Vous avez reçu un message de la part de {{ $name }}

@component('mail::panel')
{{ $msg }}
@endcomponent

Contact téléphonique: {{ $telephone }}
Contact email : {{ $email }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
