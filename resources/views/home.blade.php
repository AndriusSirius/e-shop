<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('head')
<body class="antialiased">
    @livewire('header')
    @livewire('products')
    @include('footer')
    @livewireScripts
</body>
</html>

