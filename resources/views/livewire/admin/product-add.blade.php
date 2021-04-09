<div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4 @if($show) hidden @endif">
    <div class="sm:flex sm:items-start">
        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">

            <h3 class="text-lg py-2 mb-3 leading-6 font-medium text-gray-900">
                Sukurti naują Produktą
            </h3>

            <!-- Name -->
            <div class="mb-3">
                <label class="uppercase ml-2 font-semibold " for="title">Pavadinimas
                    <input wire:model="title" id="title" class="block mt-1 border-blue-500 border-2 rounded-lg w-full" type="text" name="title" required>
                </label>
            </div>

            <!-- summary -->
            <div class="my-3 w-full">
                <label class="uppercase ml-2 font-semibold" for="summary">Aprašymas
                    <input wire:model="summary" id="summary" class="block mt-1 rounded-lg w-full border-blue-500 border-2" type="text" name="summary" required>
                </label>
            </div>

             <!-- model -->
            <div class="my-3">
                <label class="uppercase ml-2 font-semibold" for="model">Modelis
                    <input wire:model="model" id="model" class="block mt-1 rounded-lg w-full border-blue-500 border-2" type="text" name="model" required>
                </label>
            </div>

          <!-- price -->
            <div class="my-3 w-full">
                <label class="uppercase ml-2 font-semibold" for="price">Kaina
                    <input wire:model="price" id="price" class="block mt-1 rounded-lg w-full border-blue-500 border-2" type="number" name="price" required>
                </label>
            </div>

            <!-- quantity -->
            <div class="my-3">
                <label class="uppercase ml-2 font-semibold" for="quantity">Kiekis
                    <input wire:model="quantity" id="quantity" class="block mt-1 rounded-lg w-full border-blue-500 border-2" type="number" name="quantity" required>
                </label>
            </div>

            <!-- type -->
            <div class="my-3 w-full">
                <label class="uppercase ml-2 font-semibold" for="type">Tipas
                    <input wire:model="type" id="type" class="block mt-1 rounded-lg w-full border-blue-500 border-2" type="text" name="type" required>
                </label>
            </div>

            <!-- product_sign -->
            <div class="my-3">
                <label class="uppercase ml-2 font-semibold" for="product_sign">Produkto ženklas
                    <input wire:model="product_sign" id="product_sign" class="block mt-1 rounded-lg w-full border-blue-500 border-2" type="text" name="product_sign" required>
                </label>
            </div>

         <!-- color -->
            <div class="my-3">
                <label class="uppercase ml-2 font-semibold" for="color">Spalva
                    <input wire:model="color" id="color" class="block mt-1 rounded-lg w-full border-blue-500 border-2" type="text" name="color" required>
                </label>
            </div>

            <!-- energy -->
            <div class="my-3">
                <label class="uppercase ml-2 font-semibold" for="energy">Energija
                    <input wire:model="energy" id="energy" class="block rounded-lg mt-1 w-full border-blue-500 border-2" type="text" name="energy" required>
                </label>
            </div>

            <!-- warranty -->
            <div class="my-3">
                <label class="uppercase ml-2 font-semibold" for="warranty">Garantija
                    <input wire:model="warranty" id="warranty" class="block mt-1 rounded-lg w-full border-blue-500 border-2" type="text" name="warranty" required>
                </label>
            </div>

           <!-- content -->
            <div class="mb-3">
                <label class="uppercase ml-2 font-semibold" for="content">tekstas
                    <textarea class="rounded-lg block border-blue-500 border-2" wire:model="content"  id="content" cols="100" rows="10" name="content"></textarea>                </label>
            </div>

        </div>
    </div>
    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
        <button type="button" wire:click.prevent="save()"
            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 pl-2 py-1 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm">
            <svg class="fill-current w-4 h-4 mr-2" viewBox="0 0 20 20">
                <path
                    d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z">
                </path>
            </svg>
            Sukurti
        </button>
        <button type="button" wire:click.prevent="cancelProduktasCreate()"
            class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 pl-2 py-1 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
            <svg class="fill-current w-4 h-4 mr-2" viewBox="0 0 20 20">
                <path
                    d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z">
                </path>
            </svg>
            Atšaukti
        </button>
    </div>
</div>

