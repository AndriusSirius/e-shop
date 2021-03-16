<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Produkto pridejimas') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Prasome prideti nauja produkta.') }}
    </x-slot>

    <x-slot name="form">

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="title" value="{{ __('Pavadinimas') }}" />
            <x-jet-input id="title" type="text" class="mt-1 block w-full" wire:model.defer="state.title" autocomplete="title" />
            <x-jet-input-error for="title" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="summary" value="{{ __('Santrauka') }}" />
            <x-jet-input id="summary" type="text" class="mt-1 block w-full" wire:model.defer="state.summary" autocomplete="summary" />
            <x-jet-input-error for="summary" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="type" value="{{ __('Tipas') }}" />
            <x-jet-input id="type" type="text" class="mt-1 block w-full" wire:model.defer="state.type" autocomplete="type" />
            <x-jet-input-error for="type" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="price" value="{{ __('Kaina') }}" />
            <x-jet-input id="price" type="text" class="mt-1 block w-full" wire:model.defer="state.price" autocomplete="price" />
            <x-jet-input-error for="price" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="discount" value="{{ __('Nuolaida') }}" />
            <x-jet-input id="discount" type="text" class="mt-1 block w-full" wire:model.defer="state.discount" autocomplete="discount" />
            <x-jet-input-error for="discount" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="quantity" value="{{ __('Kiekis') }}" />
            <x-jet-input id="quantity" type="text" class="mt-1 block w-full" wire:model.defer="state.quantity" autocomplete="quantity" />
            <x-jet-input-error for="quantity" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="content" value="{{ __('Aprašymas') }}" />
            <x-jet-input id="content" type="text" class="mt-1 block w-full" wire:model.defer="state.content" autocomplete="content" />
            <x-jet-input-error for="content" class="mt-2" />
        </div>
        <div class="mb-2"> <span>Noutraukos</span>
            <div class="relative h-40 rounded-lg border-dashed border-2 border-gray-200 bg-white flex justify-center items-center hover:cursor-pointer">
                <div class="absolute">
                    <div class="flex flex-col items-center "> <i class="fa fa-cloud-upload fa-3x text-gray-200"></i> <span class="block text-gray-400 font-normal">Pridekite nuotrauka čia</span> <span class="block text-gray-400 font-normal">arba</span> <span class="block text-blue-400 font-normal">Narsykite failus</span> </div>
                </div> <input type="file" class="h-full w-full opacity-0" name="">
            </div>                            
        </div>

        
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">

        <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
            <p class="font-bold">Naujo produkto pridejimas</p>
            <p class="text-sm">{{ __('Sėkmingai pridetas') }}</p>
        </div>

        </x-jet-action-message>

        <button class="px-4 py-2 mt-2 ml-4 border-2 w-36 text-sm text-center border-blue-700 rounded-full font-bold text-blue-700 px-4 py-3 transition duration-300 ease-in-out hover:bg-blue-500 hover:text-white" wire:loading.attr="disabled" wire:target="photo">
            {{ __('Prideti') }}
        </button>
    </x-slot>
</x-jet-form-section>
