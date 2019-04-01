@component('mail::message')
# {{ $name }} {{ $type }}
Telefon: {{ $phone }} <br>
Pozisyon: {{ $position }} <br>

{!! $body !!}

{{ $name }} <br>
<hr>
Email: {{ $email }}

@endcomponent