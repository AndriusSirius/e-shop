<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('head')
<body class="antialiased">
    @livewire('header')
    @include('testing')
    @livewire('products.home-products')
    @include('footer')
{{--    @livewire('admin.show-admin')--}}
    @livewireScripts

</body>
</html>

