@component('mail::message')
# {{ $name }} size bir teklif talebi gönderdi.

{!! $body !!}

{{ $name }} <br>
<hr>
Email: {{ $email }} <br>
İl: {{ $city }} <br>
Firma: {{ $company }} <br>
Telefon: {{ $phone }} <br>
GSM: {{ $gsm }} <br>
İletişim Tercihleri: {{ $preferences }} <br>
İlgilendiği Hizmetler: {{ $services }}
@endcomponent