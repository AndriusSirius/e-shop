<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('head')
<body class="antialiased">
    @include('testing')
    @livewire('header')
    @livewire('products.home-products')
    @include('footer')
{{--    @livewire('admin.show-admin')--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    @livewireScripts
</body>
</html>

