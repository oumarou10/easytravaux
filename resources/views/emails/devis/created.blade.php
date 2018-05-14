@component('mail::message')
# Salam alaykum Amadi,


Vous avez reçu un devis de l'expéditeur {{ $devis->email }}
joignable au {{ $devis->telephone }}

@component('mail::panel')
Un devis pour un {{ $devis->type_appartement }}

Pour des travaux :  {{ $devis->prestations }}
Une surface de {{ $devis->surface }}m2
@endcomponent

@component('mail::panel')
    {{ $devis->message }}
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
