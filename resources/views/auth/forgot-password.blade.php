@include('navigation-menu')
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">

        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Pamiršai slaptažodį? Jokių problemų. Tiesiog parašykite savo el. Pašto adresą ir mes jums atsiųsime slaptažodžio nustatymo iš naujo nuorodą, kuri leis jums pasirinkti naują.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('El.paštas') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-blue-700 rounded-full shadow ripple hover:shadow-lg hover:bg-blue-800 focus:outline-none">
                    {{ __('Patvirtinti') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>

    @include('section')
</x-guest-layout>
