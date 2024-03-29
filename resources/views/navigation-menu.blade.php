<nav x-data="{ open: false }" class="z-40 fixed top-0 flex bg-white flex-col lg:items-center w-full lg:justify-between lg:flex-row border-b ">
    <div class=" flex flex-row justify-between">
        <div class=" sm:justify-center">
            <a href="{{ route('home') }}"><img class="object-contain h-24 m-3 "
                    src="{{ asset('images/Logotipas.png') }}"></a>
        </div>
        <button class="lg:hidden rounded-lg m-8  focus:outline-none focus:shadow-outline" @click="open = !open">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                <path x-show="!open" fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
                <path x-show="open" fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>
    <div :class="{'flex': open, 'hidden': !open}"
        class="z-40 flex-col pb-4 lg:pb-0 hidden lg:flex lg:justify-center lg:flex-row lg:z-auto">
        @include('category.category')
    </div>
    <div class="inline flex justify-start ml-6 lg:mr-6 pb-4 lg:pb-0 ">
        @Auth

            <div id="search" class="inline flex justify-between cursor-pointer hover:bg-gray-50">

                <svg class="w-6 h-6 m-2 font-bold stroke-current text-black" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>

            </div>

            <div class="w-full hidden bg-none" id="search_content">
                <div class="text-black ">
                    <form action="{{ route('search') }} ">
                        <input id="searchfield" type="search" name="search" placeholder="Paieška"
                            class="w-54 h-10 rounded text-grey-800 transition focus:outline-none focus:border-transparent appearance-none leading-normal text-sm lg:text-base"
                            autofocus>
                    </form>
                </div>
            </div>

            @livewire('carts.cart-total')
            <x-jet-dropdown>

                <x-slot name="trigger">
                    <button type="button"
                        class="inline-flex items-center border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                        <svg class="w-6 h-6 m-2 stroke-current text-black" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>

                        <span class="text-black text-base">{{ Auth::user()->name }}</span>

                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <!-- Account Management -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Valdyti paskyra') }}
                    </div>

                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                        {{ __('Profilis') }}
                    </x-jet-dropdown-link>
                    @role('admin')
                    <x-jet-dropdown-link href="{{ route('admin') }}">
                        {{ __('Administratoriaus pultas') }}
                    </x-jet-dropdown-link>
                    @endrole

                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                            {{ __('API Tokens') }}
                        </x-jet-dropdown-link>
                    @endif

                    <div class="border-t border-gray-100"></div>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault()
                                                            this.closest('form').submit()">
                            {{ __('Atsijungti') }}
                        </x-jet-dropdown-link>
                    </form>
                @endAuth
            </x-slot>
        </x-jet-dropdown>
        @guest
            <div id="search" class="inline flex justify-between cursor-pointer hover:bg-gray-50">

                <svg class="w-6 h-6 m-2 font-bold stroke-current text-black" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>

            </div>

            <div class="w-full hidden bg-none" id="search_content">
                <div class="text-black ">
                    <form action="{{ route('search') }} ">
                        <input id="searchfield" type="search" name="search" placeholder="Paieška"
                            class="w-54 h-10 rounded text-grey-800 transition focus:outline-none focus:border-transparent appearance-none leading-normal text-sm lg:text-base"
                            autofocus>
                    </form>
                </div>
            </div>

            <a class="relative" href="{{ route('login') }}">
                <svg class=" w-6 h-6 m-2 stroke-current text-black" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
            </a>
            <a href="{{ route('login') }}">
                <svg class="w-6 h-6 m-2 stroke-current  text-black" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </a>
        @endguest
    </div>
</nav>
