<form class="mt-8 lg:w-3/4">
    <div class="mt-8">
        <h4 class="text-sm text-gray-500 font-medium">Papildomas komentaras</h4>
        <div class="mt-6 flex">
            <label class="block flex-1">
                <textarea type="text" name="content" wire:model="content"
                    class="form-input mt-1 block w-full text-gray-700" placeholder="Komentaras"></textarea>
            </label>
        </div>
    </div>
    <div>
        <h4 class="text-sm text-gray-500 font-medium">Pristatymo metodas</h4>
        <div class="mt-6">
            <button
                class="flex items-center justify-between w-full bg-white rounded-md border-2 border-blue-500 p-4 focus:outline-none"
                checked>

                <label class="flex items-center">
                    <input type="radio" class="form-radio h-5 w-5 text-blue-600" name="shipping" wire:model="shipping"
                        value="Kurjeriu" autofocus>
                    <span class="ml-2 text-sm text-gray-700">Kurjeriu</span>
                </label>

                <span class="text-gray-600 text-sm">3.99€</span>
            </button>
        </div>
    </div>

    <div class="border-t-2 mt-6">
        <div class="flex items-center justify-between mt-8">
            <button
                class="flex items-center text-gray-700 text-sm font-medium rounded hover:underline focus:outline-none">
                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                </svg>
                <span class="mx-2">Grįžti atgal</span>
            </button>
            <button wire:click.prevent="save()"
                class="bg-white w-56 p-2 hover:bg-blue-500 hover:text-white text-blue-500 border border-2 border-blue-700 transition duration-300 ease-in-out rounded-full text-lg focus:outline-none  focus:shadow-outline font-semibold">
                <span>Apmokėti</span>
            </button>
        </div>
    </div>
</form>
