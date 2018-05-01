@component('mail::message')
# Bonjour Amadi

Vous avez reçu un message de la part de {{ $contact->name }}

@component('mail::panel')
{{ $contact->message }}
@endcomponent

Contact téléphonique: {{ $contact->telephone }}
Contact email : {{ $contact->email }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
