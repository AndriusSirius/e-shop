{{-- {{$product->cart->quantity}} --}}
<div class="flex justify-center w-1/5">
    <div class=" container my-6">
        <div class="my-2  w-96">
            <button wire:click="minusQuantity"  class="focus:outline-none  focus:shadow-outline inline">
                <svg class="fill-current text-gray-600 w-3 mx-1 focus:outline-none  focus:shadow-outline" viewBox="0 0 448 512">
                    <path
                        d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" />
                </svg>
            </button>
            <input id="quantity" class=" h-10 border  text-center w-14 inline" type="number" min="1" wire:model="quantity">
            <button wire:click="plusQuantity" class="focus:outline-none  focus:shadow-outline">
                <svg class="fill-current text-gray-600 w-3 mx-1 " viewBox="0 0 448 512">
                    <path
                        d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" />
                </svg>
            </button>
            @auth
            <button wire:click="addToCart({{ $product->id }})"
                    class="bg-white w-44 ml-4 p-2 hover:bg-blue-500 hover:text-white text-blue-500 border border-2 border-blue-700 transition duration-300 ease-in-out rounded-full text-lg focus:outline-none  focus:shadow-outline font-semibold ">
                <svg class="h-6  inline mx-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                          d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                Į krepšelį
            </button>
            @else
                <a href="{{route('login')}}">
                    <button
                        class="bg-white ml-12 w-40 p-2 hover:bg-blue-500 hover:text-white text-blue-500 border border-2 border-blue-700 transition duration-300 ease-in-out rounded-full text-lg focus:outline-none  focus:shadow-outline font-semibold ">
                        <svg class="h-6  inline mx-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                                  d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        Į krepšelį
                    </button>
                </a>
            @endauth
        </div>
    </div>
</div>
