<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('head')
<body class="antialiased">
    @livewire('header')
    @livewire('products')
    @include('footer')
    @livewireScripts
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>--}}
{{--    <script>--}}
{{--        $('button[type=submit]').click(function(e) {--}}
{{--            $(this).attr("disabled", true);--}}
{{--            var self = this;--}}
{{--            setTimeout(function() {--}}
{{--                // re-enable the submit button after 2 seconds--}}
{{--                $(self).removeAttr("disabled");--}}
{{--            }, 2000);--}}
{{--        });--}}
{{--    </script>--}}
</body>


</html>

