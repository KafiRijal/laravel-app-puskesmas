<x-layout>
@php
$username = 'Kafi Rijal';
$role = 'Admin';
@endphp

@if ($role == 'Admin')
<h3>Selamat datang, {{$username}}! Anda adalah seorang {{$role}}</h3>
@else
<h3>Selamat datang, {{$username}}!</h3>
@endif
</x-layout>