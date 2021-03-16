<x-app-layout>

    @livewire('header')

    <div class="bg-gray-100">
        <div class="py-6 container mx-auto">
            <div class="text-black font-bold my-8 ml-5" aria-label="Breadcrumb">
                <ol class="list-none p-0 inline-flex">
                    <li class="flex items-center">
                        <p>Pagrindinis</p>
                        <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <path
                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                        </svg>
                    </li>
                    <li class="flex items-center">
                        <p>Prekės</p>
                        <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <path
                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                        </svg>
                    </li>
                    <li>
                        <p class="text-gray-500" aria-current="page"> {{ $product['title'] }}</p>
                    </li>
                </ol>
            </div>
            <br>
        </div>
    </div>

    <div class="w-full bg-gray-100">

        <div class="flex">
            <div class="container mx-auto rounded bg-white overflow-hidden mb-24">
                <div class="p-4 m-3">
                    <span class="text-2xl text-black-200 font-semibold uppercase">{{ $product['title'] }} </span>
                </div>
                <div class="md:flex">
                    <div class="bg-white flex lg:w-1/3 sm:w-44 border m-4">

                        <div class="swiper-container max-h-96">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                @foreach ($product->images as $img)
                                    <div class="swiper-slide">
                                        <img class="object-contain w-full h-full cursor-pointer"
                                            src="{{ asset($img->path) }}" alt="Trulli" onclick="myFunction(this);">
                                    </div>
                                @endforeach

                            </div>
                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>

                            <!-- If we need scrollbar -->
                            <div class="swiper-scrollbar"></div>
                        </div>
                    </div>
                    <div class="px-6 flex flex-col w-full">

                        <div class="my-8">
                            <p class="font-semibold text-xs text-gray-500 mb-6">Kodas: 488447</p>
                            <p class="font-bold text-3xl text-black">{{ $product['price'] }} €</p>
                        </div>
                        <div class="my-4 ">
                            <label class="font-semibold text-xl text-gray-500">
                                Kiekis:
                                <input class="mx-2 border text-center w-14" type="text" wire.model="quantity">
                            </label>
                        </div>
                        <div class="my-8">
                            <button wire:click="addToCart({{$product->id}})"
                                class="bg-white w-64 p-2 hover:bg-blue-500 hover:text-white text-blue-500 border border-2 border-blue-700 transition duration-300 ease-in-out rounded-full text-lg focus:outline-none  focus:shadow-outline font-semibold ">
                            <svg class="h-6  inline mx-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                                      d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            Į krepšelį
                        </button>
                        </div>
                        <div class="my-8 border-b-2 font-semibold text-gray-500">
                            SVARBU
                        </div>
                        <ul class="my-6 px-6 ">
                            <li class="pb-2 list-disc">Turite klausimų? <a class="underline" href="">Kontaktai</a></li>
                            <li class="pb-2 list-disc">Nuotrauka yra iliustracinio pobūdžio. Prekės spalvos, išvaizda ir techninės charakteristikos gali šiek tiek skirtis nuo svetainėje pateikiamos informacijos. Visus su šia preke susijusius klausimus galite mums užduoti telefonu 860000000 arba el. paštu info@household.lt

                                Jei prekė ekspozicinė, konsultantas su Jumis susisieks aptarti prekės išvaizdą.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </div>

    @include('section')

</x-app-layout>

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper-container', {

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });

</script>
