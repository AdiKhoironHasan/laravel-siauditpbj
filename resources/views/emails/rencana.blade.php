@component('mail::message')
{{-- # Introduction --}}

{{-- Hii {{ $email }} --}}

{{ $message }}

@component('mail::button', ['url' => 'http://127.0.0.1:8000/rencana'])
Website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
