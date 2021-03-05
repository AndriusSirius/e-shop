<x-jet-form-section submit="updateAddress">
    <x-slot name="title">
    {{ __('Adresų redagavimas') }}
    </x-slot>

    <x-slot name="description">
    {{ __('Atsinaujinkite savo adresą') }}
    </x-slot>

    <x-slot name="form">

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="city" value="{{ __('Miestas') }}" />
            <x-jet-input id="city" type="text" class="mt-1 block w-full" wire:model="city"/>
            <x-jet-input-error for="city" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="address" value="{{ __('Rajonas, gatvė, namo numeris.') }}" />
            <x-jet-input id="address" type="text" class="mt-1 block w-full" wire:model="address"/>
            <x-jet-input-error for="address" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="post_code" value="{{ __('Pašto kodas') }}" />
            <x-jet-input id="post_code" type="text" class="mt-1 block w-full" wire:model="post_code"/>
            <x-jet-input-error for="post_code" class="mt-2" />
        </div>

    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">

        <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
            <p class="font-bold">Adresų redagavimas</p>
            <p class="text-sm">{{ __('Sėkmingai išsaugota') }}</p>
        </div>

        </x-jet-action-message>

        <button class="px-4 py-2 mt-2 ml-4 border-2 w-36 text-sm text-center border-blue-700 rounded-full font-bold text-blue-700 px-4 py-3 transition duration-300 ease-in-out hover:bg-blue-500 hover:text-white" wire:loading.attr="disabled" wire:target="photo">
            {{ __('Redaguoti') }}
        </button>
    </x-slot>
</x-jet-form-section>

