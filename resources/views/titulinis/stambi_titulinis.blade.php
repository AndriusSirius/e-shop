<section class=" my-14 container px-10">

    <div class="bg-gray-200 p-2 border-t-4 border-solid border-blue-500">
        <h2 class="font-sans font-semibold text-xl ml-2"><i class="text-blue-500 text-2xl fas fa-laptop-house"></i> STAMBI BUITINĖ TECHNIKA</h2>
    </div>
    <div class="px-6 py-6 border border-gray-200  owl-carousel owl-theme bg-white rounded">
        @foreach ($news as $product)
            <div class=" overflow-hidden rounded-lg shadow-lg h-80  border-r-2 border-l-2" >
                <a href="{{ route('product', [$product->id]) }}">
                    <img alt="Placeholder" class="block object-contain h-48 w-full"
                        src="{{ asset($product->images->first()->path) }}">
                    <div class="mt-5">
                        <p class=" mx-2 text-center uppercase font-bold hover:underline" >{{$product->title}}</p>
                    </div>
                </a>
            </div>

        @endforeach

    </div>
    <a href="" class="flex justify-end font-semibold text-indigo-600 text-lg mt-10">
        Peržiūrėkite visus produktus
        <svg class="fill-current ml-2 text-indigo-600 w-4" aria-hidden="true" focusable="false" data-prefix="fas"
            data-icon="long-arrow-alt-right" class="svg-inline--fa fa-long-arrow-alt-right fa-w-14" role="img"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path fill="currentColor"
                d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z">
            </path>
        </svg>
    </a>
    <link rel="stylesheet" href="{{ asset('owl/owl.carousel.min.css') }}">


    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 80,
            nav: true,
            dots: false,
            navText: [
                "<div class='nav-btn prev-slide absolute top-28 left-5 cursor-pointer hover:text-black hover:opacity-10'><i class='fa fa-arrow-left text-4xl ' aria-hidden='true'></i></div>",
                "<div class='nav-btn next-slide absolute  top-28 right-5 cursor-pointer hover:text-black hover:opacity-10'><i class='fa fa-arrow-right text-4xl' aria-hidden='true'></i></div>"
            ],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    margin: 80,
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })

    </script>
</section>
