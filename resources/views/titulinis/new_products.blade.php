<section class=" mt-52 container px-10">
    <div class="bg-gray-200 p-2 border-t-4 border-solid border-blue-900">
        <h2 class="font-sans font-semibold text-xl ml-2"><i class="text-blue-900 text-2xl fas fa-feather-alt"></i> NAUJAUSI PASIŪLYMAI</h2>
    </div>
    <div class="px-6 py-6 border border-gray-200  owl-carousel owl-theme bg-white rounded">
        @foreach ($news as $product)
            <div class="   overflow-hidden rounded-lg shadow-lg h-80  border-r-2 border-l-2">
                <a href="{{ route('product', [$product->id]) }}">
                    <img alt="Placeholder" class="block object-contain h-48 w-full"
                        src="{{ asset($product->images->first()->path) }}">
                    <div class="mt-5">
                        <p class=" mx-2 text-center uppercase font-bold hover:underline">{{ $product->title }}</p>
                    </div>
                </a>
            </div>

        @endforeach

    </div>
    <script type="text/javascript" src="{{ asset('owl/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('owl/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('owl/owl.carousel.js') }}"></script>
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
