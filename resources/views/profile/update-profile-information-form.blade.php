<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Paskyros informacija') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Atnaujinkite savo paskyros informacija, Vartotojo vardą ir El.paštą.') }}
    </x-slot>

    <x-slot name="form">

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Vardas') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="Lastname" value="{{ __('Pavardė') }}" />
            <x-jet-input id="Lastname" type="text" class="mt-1 block w-full" wire:model.defer="state.Lastname" autocomplete="Lastname" />
            <x-jet-input-error for="Lastname" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('El.paštas') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="phone_number" value="{{ __('Telefono numeris') }}" />
            <x-jet-input id="phone_number" type="number" class="mt-1 block w-full" wire:model.defer="state.phone_number" />
            <x-jet-input-error for="phone_number" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">

        <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
            <p class="font-bold">Paskyros informacijos redagavimas</p>
            <p class="text-sm">{{ __('Sėkmingai išsaugota') }}</p>
        </div>

        </x-jet-action-message>

        <button class="px-4 py-2 mt-2 ml-4 border-2 w-36 text-sm text-center border-blue-700 rounded-full font-bold text-blue-700 px-4 py-3 transition duration-300 ease-in-out hover:bg-blue-500 hover:text-white" wire:loading.attr="disabled" wire:target="photo">
            {{ __('Išsaugoti') }}
        </button>
    </x-slot>
</x-jet-form-section>
