@component('mail::message')
# دورة الجائزة
 {{ $user->name }}

مرحا بكم في دورة الجائزة
يمكنك تفعيل حسابك عبر الرابط التالي

@component('mail::button', ['url' => 'http://localhost:8000/company/'. $user->company->id .'/confirmed-registre'])
    فعل الآن
@endcomponent

شكرا لكم ,<br>
{{ config('app.name') }}
@endcomponent
