@component('mail::message')
# Introduction
Bienvenu {{ $user->name }}

Merci de votre confirmation lien here :

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
