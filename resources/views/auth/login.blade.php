<x-guest-layout>
    <div class="container mx-auto">

    <section class="py-12">
        <div class="container mx-auto">
            <div>
                <h4 class="text-2xl font-black text-gray-1000 pb-6 px-6 md:px-12">
                   Vartotojo prisijungimas
                </h4>
            </div>
            <div class="flex flex-wrap px-6 ml-10 mr-10">
                <div class="w-full lg:w-1/2   md:px-4 lg:px-6 py-5">
                    <div class="flex items-center justify-center bg-gray-100 py-12 px-4 sm:px-6 lg:px-8">
                        <div class="max-w-md w-full space-y-8">

                        <h3 class="font-bold text-lg">
                                Registruotiems vartotojams
                            </h3>
                        <p>Jeigu jau esate užsiregistravęs mūsų svetainėje, galite prisijungti:</p>

                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div>
                                <x-jet-label for="email" value="{{ __('El paštas') }}" />
                                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                            </div>

                            <div class="mt-4">
                                <x-jet-label for="password" value="{{ __('Slaptažodis') }}" />
                                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                            </div>

                            <div class="block mt-4">
                                <label for="remember_me" class="flex items-center">
                                    <x-jet-checkbox id="remember_me" name="remember" />
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Prisiminti mane') }}</span>
                                </label>
                            </div>

                            <div class="flex items-center justify-between mt-4">


                                <button
                                    class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-blue-700 rounded-full shadow ripple hover:shadow-lg hover:bg-blue-800 focus:outline-none"
                                >
                                {{ __(' Prisijungti') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                        {{ __('Pamiršote slaptažodį?') }}
                                    </a>
                                @endif

                            </div>
                        </form>

                        </div>
                    </div>

                </div>
                <div class="w-full lg:w-1/2   md:px-4 lg:px-6 py-5">
                    <div class="flex items-center justify-center bg-gray-100 py-12 px-4 sm:px-6 lg:px-8">
                        <div class="px-4 py-4 md:px-10">
                            <h1 class="font-bold text-lg">
                                Naujas vartotojas?
                            </h1>
                            <p class="py-4">
                               Susikurkite naują vartotoją.
                            </p>
                            <ul class="list-disc ml-4">
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
                            </ul>
                            <br>
                            <a href="register"><button
                                    class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-blue-700 rounded-full shadow ripple hover:shadow-lg hover:bg-blue-800 focus:outline-none"
                                >
                                {{ __(' Registruotis') }}
                                </button></a>
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
                <br>
                <p class="font-bold text-lg text-center">Product support</p>
                <br>
                <p class="text-center text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat aliquid tenetur optio neque molestias maxime?</p>
                </div>

                <div class="sm:px-6 lg:px-8">
                <br>
                <p class="font-bold text-lg text-center">Personal account</p>
                <br>
                <p class="text-center text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat aliquid tenetur optio neque molestias maxime?</p>
                </div>

                <div class="sm:px-6 lg:px-8">
                <br>
                <p class="font-bold text-lg text-center">Amazing saving</p>
                <br>
                <p class="text-center text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat aliquid tenetur optio neque molestias maxime?</p>
            </div>
        </div>
    </div>

</x-guest-layout>
