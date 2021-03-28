<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('head')
<body class="antialiased">
    @include('navigation-menu')
    @include('testing')
    @include('Products.home-products')
{{--    @livewire('products.home-products')--}}
    @include('footer')
{{--    @livewire('admin.show-admin')--}}
    @livewireScripts

</body>
</html>

