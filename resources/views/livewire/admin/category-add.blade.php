<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Kategorijos pridejimas') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Prasome prideti nauja kategorija.') }}
    </x-slot>

    <x-slot name="form">

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="category" value="{{ __('Kategorija') }}" />
            <x-jet-input id="category" type="text" class="mt-1 block w-full" wire:model.defer="state.category" autocomplete="category" />
            <x-jet-input-error for="category" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="subcategory" value="{{ __('Subkategorija') }}" />
            <x-jet-input id="subcategory" type="text" class="mt-1 block w-full" wire:model.defer="state.subcategory" autocomplete="subcategory" />
            <x-jet-input-error for="subcategory" class="mt-2" />
        </div>

        
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">

        <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
            <p class="font-bold">Naujos kategorijos pridejimas</p>
            <p class="text-sm">{{ __('Sėkmingai prideta') }}</p>
        </div>

        </x-jet-action-message>

        <button class="px-4 py-2 mt-2 ml-4 border-2 w-36 text-sm text-center border-blue-700 rounded-full font-bold text-blue-700 px-4 py-3 transition duration-300 ease-in-out hover:bg-blue-500 hover:text-white" wire:loading.attr="disabled" wire:target="photo">
            {{ __('Prideti') }}
        </button>
    </x-slot>
</x-jet-form-section>
