<section class="mt-48 my-14 container px-10">
    <div class="justify-center bg-gray-100 flex flex-wrap overflow-hidden xl:-mx-4">

        <div class="w-96 p-2 m-2 text-center overflow-hidden xl:my-4 xl:px-4 xl:w-1/4">
            <a href="{{ route('akcijos') }}"><p class="text-center text-blue-800 border-r-2 border-solid border-gray-200 font-semibold text-2xl"><i class="fas fa-gifts"></i> AKCIJOS</p></a>
        </div>

        <div class="w-96 p-2 m-2 text-center overflow-hidden xl:my-4 xl:px-4 xl:w-1/4">
            <p class="text-center text-black-300 border-r-2 border-solid border-gray-200 font-semibold text-2xl"><i class="fab fa-shopify"></i> IŠPARDAVIMAI</p>
        </div>

        <div class="w-96 p-2 m-2 text-center overflow-hidden xl:my-4 xl:px-4 xl:w-1/4">
            <p class="text-center text-gray-500 font-semibold text-2xl"><i class="far fa-newspaper"></i> NAUJIENLAIŠKIS</p>
        </div>

    </div>
{{--    FILTRAVIMAS  --}}

    <div class="flex flex-wrap -mx-4 overflow-hidden lg:-mx-2 justify-center">

        <div class="my-4 px-4 w-1/6 overflow-hidden lg:my-2 lg:px-2">
            <h4>Kaina</h4>
            <div class="flex">
            <h4>50 €</h4>
            <form action="">
                <input type="range" id="myRange" name="vol" min="50" max="5000" class="slider" >
            </form>
            <h4>5000 €</h4>
            </div>
            <p>Kaina nuo:  <span id="priceValue"></span> </p>
        </div>
        <div class="my-4 px-4 w-1/6 overflow-hidden lg:my-2 lg:px-2">
            <h4>Gamintojas</h4>
            <form>
            <input type="checkbox" id="manufacture1" name="manufacture" value="Bike">
            <label for="manufacture1"> Samsung</label><br>
            <input type="checkbox" id="manufacture2" name="vehicle2" value="Car">
            <label for="manufacture2"> Bosch</label><br>
            <input type="checkbox" id="manufacture3" name="vehicle3" value="Boat">
            <label for="manufacture3"> LG </label>
            </form>
        </div>

        <div class="my-4 px-4 w-1/6 overflow-hidden lg:my-2 lg:px-2">
            <h4>Tipas</h4>
            <form>
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1"> Šaldytuvas</label><br>
            <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
            <label for="vehicle2"> Kavos virimo aparatas</label><br>
            <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
            <label for="vehicle3">{{__('Skalbimo mašina')}}</label>
            </form>
        </div>

        <div class="my-4 px-4 w-1/6 overflow-hidden lg:my-2 lg:px-2">
            <h4>Spalva</h4>
            <form>
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1"> Rožinė</label><br>
            <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
            <label for="vehicle2"> Balta</label><br>
            <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
            <label for="vehicle3"> Juoda</label>
            </form>
        </div>

        <div class="my-4 px-4 w-1/6 overflow-hidden lg:my-2 lg:px-2">
            <h4>Energijos klasė</h4>
            <form>
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1"> 2kw </label><br>
            <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
            <label for="vehicle2"> 3kw </label><br>
            <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
            <label for="vehicle3"> 5kw </label>
            </form>
        </div>


    </div>


    <h1 class="p-12 m-12 border-t-2 border-solid border-blue-700 text-center text-gray-200 font-semibold text-2xl xs:text-5xl md:text-6xl">
        <span class="text-blue-700"><i class="fas fa-shopping-bag"></i> Visi</span> produktai
    </h1>
    <div class="px-6 py-6 border border-gray-200  owl-carousel owl-theme bg-white rounded">
        @foreach ($all as $product)
            <div class=" overflow-hidden rounded-lg shadow-lg h-80  border-r-2 border-l-2" >
                <a href="{{ route('product', [$product->id]) }}">
                    <img alt="Placeholder" class="block object-contain h-48 w-full"
                        src="{{ asset($product->images->first()->path) }}">
                    <div class="mt-5">
                        <p class=" mx-5 text-center uppercase font-bold hover:underline" >{{$product->title}}</p>
                    </div>
                </a>
            </div>

        @endforeach

    </div>
    <div class="flex justify-end mt-10">
        <a href="{{ route('all_products') }}" class=" font-semibold text-indigo-600 text-lg ">
            Peržiūrėkite visus produktus
        </a>
        <a href="{{ route('all_products') }}">
            <svg class="fill-current text-indigo-600 w-5 mt-0.5 ml-4" aria-hidden="true" focusable="false" data-prefix="fas"
                data-icon="long-arrow-alt-right" class="svg-inline--fa fa-long-arrow-alt-right fa-w-14" role="img"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="currentColor"
                    d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z">
                </path>
            </svg>
        </a>
    </div>
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
