@component('mail::message')
# Introduction
Bienvenu {{ $user->name }}

Merci de votre confirmation lien here :

@component('mail::button', ['url' => 'http://localhost:8000/company/'. $user->company->id .'/confirmed-registre'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
