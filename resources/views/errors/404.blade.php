@include('head')

<body class="antialiased">
@include('navigation-menu')
<div class="grid grid-cols-1 mx-auto pb-16">
    <h1 class="text-center font-bold text-9xl p-16"> 404 <h1>
            <h3 class="text-center font-bold text-3xl">Atsiprašome, puslapis kurio ieškote nerastas</h3>
            <a class="text-center font-bold text-indigo-700 pt-8"  href="{{ route('home') }}">Grįžti į pradinį puslapį</a>
</div>
</body>


@include('footer')
