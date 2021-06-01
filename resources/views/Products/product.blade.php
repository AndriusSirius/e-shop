<x-app-layout>
    <div class="bg-gray-100">
        <div class="py-6 container mx-auto">
            <div class="text-black font-bold my-12 ml-5" aria-label="Breadcrumb">
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
        </div>
    </div>

    <div class="w-full bg-gray-100">

        <div class="flex">
            <div class="container mx-auto rounded bg-white overflow-hidden mb-12">
                <div class="p-4 m-3">
                    <span class="text-2xl text-black-200 font-semibold uppercase">{{ $product['title'] }} </span>
                </div>
                <div class="md:flex">
                    <div class="bg-white flex lg:w-1/3 sm:w-44 border m-4">
                        <div class="owl-carousel owl-theme">
                            @foreach ($product->images as $img)
                                <div class="item h-96" data-merge="7"><img class="object-contain w-full h-full cursor-pointer"
                                    src="{{ asset($img->path) }}" alt="Trulli" ></div>

                                @endforeach
                        </div>

                    </div>
                    <div class="px-6 flex flex-col w-full">
                        <div class="my-8">
                            <p class="font-semibold text-xs text-gray-500 mb-6">Kodas: 488447</p>
                            @if($product->discount)
                                <p class=" line-through text-red-400">{{ $product->price }} €</p>
                                <p class="font-bold text-3xl text-black">{{ ($product->price * (100 - $product->discount->percentage) / 100) }} €</p>

                            @else
                                <p class="font-bold text-3xl text-black">{{ $product->price }} €</p>

                            @endif
                        </div>

                            @livewire('carts.add-cart-button-product', compact('product'))

                        <div class="my-10 border-b-2 font-semibold text-gray-500">
                            SVARBU
                        </div>
                        <ul class="my-6 px-6 ">
                            <li class="pb-2 list-disc">Turite klausimų? <a class="underline" href="">Kontaktai</a></li>
                            <li class="pb-2 list-disc">Nuotrauka yra iliustracinio pobūdžio. Prekės spalvos, išvaizda ir
                                techninės charakteristikos gali šiek tiek skirtis nuo svetainėje pateikiamos
                                informacijos. Visus su šia preke susijusius klausimus galite mums užduoti telefonu
                                860000000 arba el. paštu info@household.lt

                                Jei prekė ekspozicinė, konsultantas su Jumis susisieks aptarti prekės išvaizdą.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex h-full">
            <div class="container mx-auto bg-white">
                <ul class="block w-11/12 my-14 mx-auto" x-data="{selected:null}">
                    <li class="flex align-center flex-col">
                        <h4 @click="selected !== 0 ? selected = 0 : selected = null"
                            class="py-4 border-solid border-2 border-blue-700 cursor-pointer px-5 py-3 bg-white text-blue-700 text-left inline-block hover:opacity-75 hover:shadow hover:-mb-3 rounded-t"><i class="fas fa-plus"></i> Charakteristikos
                            </h4>
                        <div x-show="selected == 0" class="border py-4 px-2">
                            <ul class="ml-4">
                                <li class="border-b-2 border-solid p-2">Modelis: <span class="font-bold">{{ $product['model'] }}</span></li>
                                <li class="border-b-2 border-solid p-2">Tipas: <span class="font-bold">{{ $product['type'] }}</span></li>
                                <li class="border-b-2 border-solid p-2"> Prekės ženklas: <span class="font-bold">{{ $product['product_sign'] }}</span></li>
                                <li class="border-b-2 border-solid p-2">Spalva <i class="text-lg fas fa-info-circle"></i>: <span class="font-bold">{{ $product['color'] }} </span></li>
                                <li class="border-b-2 border-solid p-2"> Energija: <span class="font-bold">{{ $product['energy'] }}</li>
                                @foreach($product->specs as $spec)
                                <li class="border-b-2 border-solid p-2"> {{ $spec->specs_key }}: <span class="font-bold">{{ $spec->value}}</li>
                                @endforeach
                                <li class="border-b-2 border-solid p-2">Garantija <i class="text-lg fas fa-info-circle"></i>: <span class="font-bold">{{ $product['warranty'] }} </span></li>
                            </ul>
                        </div>
                    </li>
                    <li class="flex align-center flex-col">
                        <h4 @click="selected !== 1 ? selected = 1 : selected = null"
                            class="mt-2 py-4 border-solid border-2 border-blue-700 cursor-pointer px-5 py-3 bg-white text-blue-700 text-left inline-block hover:opacity-75 hover:shadow hover:-mb-3"><i class="fas fa-plus"></i> Apie prekę</h4>
                        <p x-show="selected == 1" class="border py-4 px-2">
                            {{ $product['content'] }}
                        </p>
                    </li>
                    <li class="flex align-center flex-col">
                        <h4 @click="selected !== 2 ? selected = 2 : selected = null"
                            :class="{'mt-2 py-4 border-solid border-2 border-blue-700  cursor-pointer px-5 py-3 bg-white text-blue-700 text-left inline-block hover:opacity-75 hover:shadow hover:-mb-3': true, 'rounded-b': selected != 2}"><i class="fas fa-plus"></i> Svarbu</h4>
                        <p x-show="selected == 2" :class="{'border py-4 px-2': true, 'rounded-b': selected == 2}">
                            SVARBI INFORMACIJA
                        </p>
                    </li>
                </ul>
            </div>
        </div>

    </div>

</x-app-layout>

{{-- OWL --}}
<link rel="stylesheet" href="{{ asset('owl/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('owl/owl.theme.default.css') }}">
<script type="text/javascript" src="{{ asset('owl/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('owl/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('owl/owl.carousel.js') }}"></script>


<script>
  $('.owl-carousel').owlCarousel({
    items:5,
    loop:true,
    margin:2,
    merge:true,
    responsive:{
        678:{
            mergeFit:true
        },
        1000:{
            mergeFit:false
        }
    }
});

</script>

