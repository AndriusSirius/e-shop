<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('head')
<body class="antialiased">
    @livewire('header')
    @livewire('home-products')
    @include('footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    @livewireScripts
</body>
</html>

