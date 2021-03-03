<x-jet-action-section>
    <x-slot name="title">
        {{ __('Ištrinti vartotoją') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Visam laikui pašalinsite savo vartotoją.') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ __('Kai jūsų paskyra bus ištrinta, visi jos ištekliai ir duomenys bus visam laikui ištrinti. Prieš ištrindami savo sąskaitą, atsisiųskite visus duomenis ar informaciją, kurią norite išsaugoti.') }}
        </div>

        <div class="mt-5">
            <button class="px-4 py-2 mt-2 ml-4 border-2 w-36 text-sm text-center border-red-700 rounded-full font-bold text-red-700 px-4 py-3 transition duration-300 ease-in-out hover:bg-red-500 hover:text-white" wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ __('Ištrinti paskyrą') }}
            </button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-jet-dialog-modal wire:model="confirmingUserDeletion">
            <x-slot name="title">
                {{ __('ištrinti paskyrą') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Esate įsitikinęs kad norite panaikinti paskyrą visam laikui?') }}

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-jet-input type="password" class="mt-1 block w-3/4"
                                placeholder="{{ __('Slaptažodis') }}"
                                x-ref="password"
                                wire:model.defer="password"
                                wire:keydown.enter="deleteUser" />

                    <x-jet-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    {{ __('Atšaukti') }}
                </x-jet-secondary-button>

                <button class="px-4 py-2 mt-2 ml-4 border-2 w-36 text-sm text-center border-red-700 rounded-full font-bold text-red-700 px-4 py-3 transition duration-300 ease-in-out hover:bg-red-500 hover:text-white" wire:click="deleteUser" wire:loading.attr="disabled">
                    {{ __('Ištrinti') }}
                </button>
            </x-slot>
        </x-jet-dialog-modal>
    </x-slot>
</x-jet-action-section>
