<section class="py-6 container mx-auto ">
    <div class="w-full">
        <div class="text-black font-bold my-8 ml-5" aria-label="Breadcrumb">
            <ol class="list-none p-0 inline-flex">
                <li class="flex items-center">
                    <p>Pagrindinis</p>
                    <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path
                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                    </svg>
                </li>
                <li>
                    <p class="text-gray-500" aria-current="page">Krepšelis</p>
                </li>
            </ol>
        </div>
        <div>
            <h4 class="text-2xl font-medium text-gray-1000 ml-5">
                Jūsų krepšelis
            </h4>
        </div>
    </div>

    <div class="w-full">
        <div class="flex mt-4">
            <div class="flex flex-col container mx-auto my-4 lg:flex-row lg:flex-1">

                <div class="lg:w-3/4 w-full bg-white px-4 py-4">
                    @if (count($cart) < 1)
                        <h5>Jusų krepšelyje prekių nėra. Prašome pridėti prekes, kad galėtumėte jas
                            valdyti. </h5>
                    @else
                        <div class="flex mb-5 border-b p-5">
                            <h3 class="font-semibold text-black-600 text-xs uppercase w-2/5">Prekė</h3>
                            <h3 class="font-semibold text-center text-black-600 text-xs uppercase w-1/5 text-center">
                                Kiekis</h3>
                            <h3 class="font-semibold text-center text-black-600 text-xs uppercase w-1/5 text-center">
                                Kaina</h3>
                            <h3 class="font-semibold text-center text-black-600 text-xs uppercase w-1/5 text-center">Iš
                                viso</h3>
                        </div>
                    @endif
                    {{-- @foreach ($cart as $cart_item) --}}
                    {{-- {{$cart_item}} --}}
                    {{-- <hr> --}}
                    {{-- @endforeach --}}

                    @foreach ($cart as $cart_item)
                        @livewire('cart-item', ['cart_item' => $cart_item], key($cart_item->id))
                    @endforeach

                    <a href="{{ route('home') }}" class="flex font-semibold text-indigo-600 text-sm mt-10">

                        <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512">
                            <path
                                d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z" />
                        </svg>
                        Tęskite apsipirkimą
                    </a>
                </div>
                @livewire('order')
            </div>
        </div>
    </div>
</section>
