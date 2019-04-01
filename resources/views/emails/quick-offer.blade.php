@component('mail::message')
# {{ $name }} size bir hızlı teklif talebi gönderdi.
Telefon: {{ $phone }} <br>
Teklifin geldiği sayfa: {{ $page }} <br>

{{ $name }} <br>
<hr>
Email: {{ $email }}
@endcomponent