<x-guest-layout>

<div class="w-full text-blue-700 bg-white border-b dark-mode:text-blue-200 dark-mode:bg-blue-800">
        <div x-data="{ open: false }" class="flex flex-col mx-auto md:items-center md:justify-around md:flex-row">
            <div class="p-4 flex flex-row items-left justify-around">
                <img class="ml-16 object-contain h-20 w-full" src="http://127.0.0.1/e-shop/resources/views/images/Logotipas.png">
                <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-center md:flex-row">
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-bold text-black text-base">
                        <span>Buitinė technika</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                        <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-blue-600 dark-mode:focus:bg-blue-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-blue-200 md:mt-0 hover:text-blue-900 focus:text-blue-900 hover:bg-blue-200 focus:bg-blue-200 focus:outline-none focus:shadow-outline" href="#">Link #1</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-blue-600 dark-mode:focus:bg-blue-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-blue-200 md:mt-0 hover:text-blue-900 focus:text-blue-900 hover:bg-blue-200 focus:bg-blue-200 focus:outline-none focus:shadow-outline" href="#">Link #1</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-blue-600 dark-mode:focus:bg-blue-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-blue-200 md:mt-0 hover:text-blue-900 focus:text-blue-900 hover:bg-blue-200 focus:bg-blue-200 focus:outline-none focus:shadow-outline" href="#">Link #1</a>
                        </div>
                    </div>
                </div>
                <a class="px-4 py-2 mt-2 text-sm font-bold text-black text-base" href="#">Pirmas</a>
                <a class="px-4 py-2 mt-2 text-sm font-bold text-black text-base" href="#">Antras</a>
                <a class="px-4 py-2 mt-2 text-sm font-bold text-black text-base" href="#">Trečias</a>
                <a class="px-4 py-2 mt-2 text-sm font-bold text-black text-base" href="#">Ketvirtas</a>
                <a class="px-4 py-2 mt-2 text-sm font-bold text-black text-base" href="#">Penktas</a>
                <a class="px-4 py-2 mt-2 text-sm font-bold text-black text-base" href="#">Šeštas</a>
                <a class="px-4 py-2 mt-2 text-sm font-bold text-black text-base" href="#">Septintas</a>
                <a href="" class="px-4 py-2 mt-2 ml-4 border-2 w-36 text-sm text-center border-blue-700 rounded-full font-bold text-blue-700 px-4 py-3 transition duration-300 ease-in-out hover:bg-blue-500 hover:text-white">
                    Our Deals
                </a>
            </nav>
            <div class="inline mr-16 flex flex-grow pb-4 md:pb-0">
                <svg class="w-6 h-6 m-2 font-bold stroke-current text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <svg class="w-6 h-6 m-2 stroke-current text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <a href="http://127.0.0.1/e-shop/public/login">
                    <svg class="w-6 h-6 m-2 stroke-current text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <section class="py-12">
        <div class="container mx-auto">
            <nav class="text-black font-bold my-8 ml-5" aria-label="Breadcrumb">
                <ol class="list-none p-0 inline-flex">
                    <li class="flex items-center">
                    <a href="#">Pagrindinis</a>
                    <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
                    </li>
                    <li>
                    <a href="#" class="text-gray-500" aria-current="page">Registracija</a>
                    </li>
                </ol>
            </nav>
            <div>
                <h4 class="text-2xl font-black text-gray-1000 ml-5">
                   Vartotojo registracija
                </h4>
            </div>
            <br>
            <div class="flex flex-wrap px-6 ml-10 mr-10">
                <div class="w-full lg:w-1/2   md:px-4 lg:px-6 py-5">
                    <div class="flex items-center justify-center bg-gray-100 rounded py-12 px-4 sm:px-6 lg:px-8">
                        <div class="max-w-md w-full space-y-8">

                        <h1 class="font-bold text-lg">
                                Registracija
                            </h1>

                        <p>Norėdami užsiregistruoti, suveskite savo duomenis:</p>

                        <x-jet-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div>
                                <x-jet-label for="name" value="{{ __('Vardas') }}" />
                                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            </div>

                            <div class="mt-4">
                                <x-jet-label for="email" value="{{ __('El paštas') }}" />
                                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                            </div>

                            <div class="mt-4">
                                <x-jet-label for="password" value="{{ __('Slaptažodis') }}" />
                                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                            </div>

                            <div class="mt-4">
                                <x-jet-label for="password_confirmation" value="{{ __('Patvirtinti slaptažodį') }}" />
                                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                            </div>

                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mt-4">
                                    <x-jet-label for="terms">
                                        <div class="flex items-center">
                                            <x-jet-checkbox name="terms" id="terms"/>

                                            <div class="ml-2">
                                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                ]) !!}
                                            </div>
                                        </div>
                                    </x-jet-label>
                                </div>
                            @endif

                            <div class="flex items-center justify-end mt-4">

                                <button
                                    class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-blue-700 rounded-full shadow ripple hover:shadow-lg hover:bg-blue-800 focus:outline-none"
                                >
                                {{ __(' Registruotis') }}
                                </button>

                            </div>
                        </form>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    </div>

    <div class="bg-gray-100">
        <div class="container mx-auto">
            <div class="flex justify-center grid grid-cols-3 gap-4 py-12 px-4 sm:px-6 lg:px-8">

                <div class="sm:px-6 lg:px-8">
                <p class="font-bold text-lg text-center"><span style="font-size:50px; color:black;">&#9730;</span><br><br>Product support</p>
                <br>
                <p class="text-center text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat aliquid tenetur optio neque molestias maxime?</p>
                </div>

                <div class="sm:px-6 lg:px-8">
                <p class="font-bold text-lg text-center"><span style="font-size:50px; color:black;">&#9729;</span><br><br>Personal account</p>
                <br>
                <p class="text-center text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat aliquid tenetur optio neque molestias maxime?</p>
                </div>

                <div class="sm:px-6 lg:px-8">
                <p class="font-bold text-lg text-center"><span style="font-size:50px; color:black;">&#9993;</span><br><br>Amazing saving</p>
                <br>
                <p class="text-center text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat aliquid tenetur optio neque molestias maxime?</p>
            </div>
        </div>
    </div>

</x-guest-layout>
