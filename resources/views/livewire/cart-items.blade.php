<section class="py-6">
    <div class="container mx-auto">
        <nav class="text-black font-bold my-8 ml-5" aria-label="Breadcrumb">
            <ol class="list-none p-0 inline-flex">
                <li class="flex items-center">
                    <p>Pagrindinis</p>
                    <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path
                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/>
                    </svg>
                </li>
                <li>
                    <p class="text-gray-500" aria-current="page">Krepšelis</p>
                </li>
            </ol>
        </nav>
        <div>
            <h4 class="text-2xl font-medium text-gray-1000 ml-5">
                Jūsų krepšelis
            </h4>
        </div>
    </div>

    <div class="flex container mx-auto">
        <div class="flex-1 mt-4">
            <div class="flex my-4">
                <div class="w-3/4 bg-white px-4 py-4">
                    @if(count($cart) < 1) <h5>Jusų krepšelyje prekių nėra. Prašome pridėti prekes, kad galėtumėte jas
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
{{--                    @foreach($cart as $cart_item)--}}
{{--                        {{$cart_item}}--}}
{{--                        <hr>--}}
{{--                    @endforeach--}}

                    @foreach($cart as $cart_item)
                        @livewire('cart-item', ['cart_item' => $cart_item], key($cart_item->id))
                    @endforeach

                    <a href="{{ route('home') }}" class="flex font-semibold text-indigo-600 text-sm mt-10">

                        <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512">
                            <path
                                d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"/>
                        </svg>
                        Tęskite apsipirkimą
                    </a>
                </div>


                <div id="summary" class="px-8 py-10 bg-gray-100 sm:w-1/3 md:w-1/3 lg:w-1/4">
                    <h1 class="font-semibold text-2xl border-b pb-8">Užsakymo apskaita</h1>
                    <div class="flex justify-between mt-10 mb-5">
                        <span class="font-semibold text-sm uppercase">Prekės:</span>
                        <span class="font-semibold text-sm">Kaina be PVM: 590€</span>
                    </div>
                    <div>
                        <label class="font-medium inline-block mb-3 text-sm uppercase">Pristatymas</label>
                        <select class="block p-2 text-gray-600 w-full text-sm">
                            <option>Kurjeriu - €3.99</option>
                        </select>
                    </div>
                    <div class="py-10">
                        <label for="promo" class="font-semibold inline-block mb-3 text-sm uppercase">Nuolaidos
                            kodas</label>
                        <input type="text" id="promo" placeholder="Įrašykite nuolaidos kodą" class="p-2 text-sm w-full">
                    </div>
                    <button
                        class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-blue-700 rounded-full shadow ripple hover:shadow-lg hover:bg-blue-800 focus:outline-none">
                        Patvirtinti
                    </button>
                    <div class="border-t mt-8">
                        <div class="flex justify-between font-semibold p-3">
                            <span>PVM mokestis:</span>
                            <span>€10</span>
                        </div>
                        <div class="flex justify-between font-semibold p-3 mb-1">
                            <span>Pristatymo mokestis:</span>
                            <span>€3.99</span>
                        </div>
                        <div class="flex justify-between font-semibold p-3 mb-3">
                            <span>Galutinė kaina:</span>
                            <span>€600</span>
                        </div>
                        <button
                            class="border-2 text-sm uppercase w-full text-center border-blue-700 rounded-full font-bold text-blue-700 px-4 py-3 transition duration-300 ease-in-out hover:bg-blue-500 hover:text-white">
                            pereiti prie apmokėjimo
                        </button>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
