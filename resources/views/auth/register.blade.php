@include('navigation-menu')

<x-guest-layout>
    <section class="py-6">
        <div class="container mx-auto">
            <nav class="text-black font-bold my-8 ml-5" aria-label="Breadcrumb">
                <ol class="list-none p-0 inline-flex">
                    <li class="flex items-center">
                        <p>Pagrindinis</p>
                        <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                        </svg>
                    </li>
                    <li>
                        <p class="text-gray-500" aria-current="page">Registracija</p>
                    </li>
                </ol>
            </nav>
            <div>
            <h4 class="text-2xl font-medium text-gray-1000 ml-5">
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
                                    <x-jet-label for="Lastname" value="{{ __('Pavardė') }}" />
                                    <x-jet-input id="Lastname" class="block mt-1 w-full" type="text" name="Lastname" :value="old('Lastname')" required autofocus autocomplete="Lastname" />
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

                                <br><br>

                                <h2>Jūsų Adresas:</h2>
                                <hr>

                                <div class="mt-4">
                                    <x-jet-label for="city" value="{{ __('Miestas') }}" />
                                    <x-jet-input id="city" class="block mt-1 w-full" type="text" name="city" required autocomplete="city" />
                                </div>

                                <div class="mt-4">
                                    <x-jet-label for="address" value="{{ __('Rajonas, gatvė, namo(buto) numeris') }}" />
                                    <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" required autocomplete="address" />
                                </div>

                                <div class="mt-4">
                                    <x-jet-label for="phone_number" value="{{ __('Telefono numeris') }}" />
                                    <x-jet-input id="phone_number" class="block mt-1 w-full" type="number" name="phone_number" required autocomplete="phone_number" />
                                </div>

                                <div class="mt-4">
                                    <x-jet-label for="post_code" value="{{ __('Pašto kodas') }}" />
                                    <x-jet-input id="post_code" class="block mt-1 w-full" type="text" name="post_code" required autocomplete="post_code" />
                                </div>

                                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mt-4">
                                    <x-jet-label for="terms">
                                        <div class="flex items-center">
                                            <x-jet-checkbox name="terms" id="terms" />

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

                                    <button class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-blue-700 rounded-full shadow ripple hover:shadow-lg hover:bg-blue-800 focus:outline-none">
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

    @include('section')

</x-guest-layout>
