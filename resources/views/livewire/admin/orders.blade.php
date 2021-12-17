<tr>
    @if (!$edit)
        <td class="px-6 py-4 whitespace-nowrap">
            {{ $list->id }}
        </td>

        <td class="px-6 py-4 whitespace-nowraptext-sm text-sm text-gray-900">
            {{ $list->users['name'] }}  {{ $list->users['Lastname'] }}
        </td>

        <td class="px-6 py-4 whitespace-nowraptext-sm text-sm text-gray-900">
             <span class="font-bold">({{ $list->total_cost }})</span>
        </td>

        <td class="px-6 py-4 whitespace-nowraptext-sm text-sm text-gray-900">
            {{ $shipping }}
        </td>

        <td class="px-6 py-4 whitespace-nowraptext-sm font-bold text-sm text-green-600">
            {{ $status }}
        </td>

        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
            {{ $content }}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
            <button wire:click.prevent="showEdit"
                class="bg-blue-300 hover:bg-blue-400 text-green-800 font-bold py-1 px-4 pl-2 rounded-full inline-flex items-center">
                <svg class="fill-current w-4 h-4 mr-2" viewBox="0 0 20 20">
                    <path
                        d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                    </path>
                </svg>
                <span>Redaguoti</span>
            </button>
        </td>
    @elseif($delete)
        <td class="px-6 py-4 align-top bg-red-100">
            {{ $list->id }}
        </td>
        <td colspan="4" class="px-6 py-8 bg-red-100 text-center">
            <h4 class="mb-8 font-bold flex flex-row justify-center">
                <div
                    class="mx-auto flex-shrink-0 flex items-center justify-center h-20 w-20 rounded-full bg-red-300 sm:mx-0 sm:h-10 sm:w-10">
                    <svg class="h-6 w-6 text-red-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"
                        stroke="currentColor" aria-hidden="true">
                        <path
                            d="M18.344,16.174l-7.98-12.856c-0.172-0.288-0.586-0.288-0.758,0L1.627,16.217c0.339-0.543-0.603,0.668,0.384,0.682h15.991C18.893,16.891,18.167,15.961,18.344,16.174 M2.789,16.008l7.196-11.6l7.224,11.6H2.789z M10.455,7.552v3.561c0,0.244-0.199,0.445-0.443,0.445s-0.443-0.201-0.443-0.445V7.552c0-0.245,0.199-0.445,0.443-0.445S10.455,7.307,10.455,7.552M10.012,12.439c-0.733,0-1.33,0.6-1.33,1.336s0.597,1.336,1.33,1.336c0.734,0,1.33-0.6,1.33-1.336S10.746,12.439,10.012,12.439M10.012,14.221c-0.244,0-0.443-0.199-0.443-0.445c0-0.244,0.199-0.445,0.443-0.445s0.443,0.201,0.443,0.445C10.455,14.021,10.256,14.221,10.012,14.221">
                        </path>
                    </svg>
                </div>
                <div class=" ml-4 pt-2">
                    {{ __('Ar tikrai norite ištrinti šį produktą?') }}
                </div>
            </h4>
            <div class="flex flex-row justify-center">
                <button wire:click.prevent="deleteCancel"
                    class="whitespace-nowrap bg-gray-100 hover:bg-gray-400 text-gray-800 font-bold py-1 px-4 pl-2 rounded inline-flex items-center mb-3">
                    <svg class="fill-current w-4 h-4 mr-2" viewBox="0 0 20 20">
                        <path
                            d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z">
                        </path>
                    </svg>
                    <span>Atšaukti</span>
                </button>
                <button wire:click.prevent="deleteConfirm"
                    class="ml-4 whitespace-nowrap bg-red-400 hover:bg-red-600 text-red-900 font-bold py-1 px-4 pl-2 rounded inline-flex items-center mb-3">
                    <svg class="fill-current w-4 h-4 mr-2" viewBox="0 0 20 20">
                        <path
                            d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z">
                        </path>
                    </svg>
                    <span>Ištrinti</span>
                </button>
            </div>
        </td>
    @else
        <td class="px-6 py-4 align-top bg-yellow-50">
            {{ $list->id }}
        </td>
        <td colspan="3" class="px-6 py-4  bg-yellow-50">
            <div class="text-right">

            </div>
            <form action="{{ route('admin') }}" method="POST">
                <div class="w-full h-full">
                    <!-- name -->
                    <div class="my-3">
                        <label class="uppercase ml-2 font-semibold" for="status_{{ $list->id }}"
                            value="__('status*')" >Užsakymo būsena
                        <input class="block rounded-lg mt-1 w-full border-blue-500 border-2" name="status" wire:model="status"
                            id="status_{{ $list->id }}" class="block mt-1 w-full" type="text" required autofocus />
                    </div>

                    <div class="my-3">
                        <label class="uppercase ml-2 font-semibold" for="shipping_{{ $list->id }}"
                            value="__('shipping*')" >Pristatymas
                        <input class="block rounded-lg mt-1 w-full border-blue-500 border-2" name="shipping" wire:model="shipping"
                            id="shipping_{{ $list->id }}" class="block mt-1 w-full" type="text" required autofocus />
                    </div>

                    <div class="my-3">
                        <label class="uppercase ml-2 font-semibold" for="total_{{ $list->id }}"
                            value="__('total*')" >Prekes skaičius
                        <input class="block rounded-lg mt-1 w-full border-blue-500 border-2" name="total" wire:model="total"
                            id="total_{{ $list->id }}" class="block mt-1 w-full" type="number" required autofocus />
                    </div>

                    <div class="my-3">
                        <label class="uppercase ml-2 font-semibold" for="content_{{ $list->id }}"
                            value="__('content*')" >Komentaras
                        <input class="block rounded-lg mt-1 w-full border-blue-500 border-2" name="content" wire:model="content"
                            id="content_{{ $list->id }}" class="block mt-1 w-full" type="text" required autofocus />
                    </div>
                </div>
            </form>
        </td>
        <td class="px-6 py-4 text-right text-sm font-medium align-top bg-yellow-50">
            <button wire:click.prevent="hideEdit"
                class="whitespace-nowrap bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-1 px-4 pl-2 rounded inline-flex items-center mb-3">
                <svg class="fill-current w-4 h-4 mr-2" viewBox="0 0 20 20">
                    <path
                        d="M13.889,11.611c-0.17,0.17-0.443,0.17-0.612,0l-3.189-3.187l-3.363,3.36c-0.171,0.171-0.441,0.171-0.612,0c-0.172-0.169-0.172-0.443,0-0.611l3.667-3.669c0.17-0.17,0.445-0.172,0.614,0l3.496,3.493C14.058,11.167,14.061,11.443,13.889,11.611 M18.25,10c0,4.558-3.693,8.25-8.25,8.25c-4.557,0-8.25-3.692-8.25-8.25c0-4.557,3.693-8.25,8.25-8.25C14.557,1.75,18.25,5.443,18.25,10 M17.383,10c0-4.07-3.312-7.382-7.383-7.382S2.618,5.93,2.618,10S5.93,17.381,10,17.381S17.383,14.07,17.383,10">
                    </path>
                </svg>
                <span>Išjungti redagavimą</span>
            </button>
            <br>
            <button wire:click.prevent="delete"
                class="whitespace-nowrap bg-red-300 hover:bg-red-400 text-red-800 font-bold py-1 px-4 pl-2 rounded inline-flex items-center mb-3">
                <svg class="fill-current w-4 h-4 mr-2" viewBox="0 0 20 20">
                    <path
                        d="M17.114,3.923h-4.589V2.427c0-0.252-0.207-0.459-0.46-0.459H7.935c-0.252,0-0.459,0.207-0.459,0.459v1.496h-4.59c-0.252,0-0.459,0.205-0.459,0.459c0,0.252,0.207,0.459,0.459,0.459h1.51v12.732c0,0.252,0.207,0.459,0.459,0.459h10.29c0.254,0,0.459-0.207,0.459-0.459V4.841h1.511c0.252,0,0.459-0.207,0.459-0.459C17.573,4.127,17.366,3.923,17.114,3.923M8.394,2.886h3.214v0.918H8.394V2.886z M14.686,17.114H5.314V4.841h9.372V17.114z M12.525,7.306v7.344c0,0.252-0.207,0.459-0.46,0.459s-0.458-0.207-0.458-0.459V7.306c0-0.254,0.205-0.459,0.458-0.459S12.525,7.051,12.525,7.306M8.394,7.306v7.344c0,0.252-0.207,0.459-0.459,0.459s-0.459-0.207-0.459-0.459V7.306c0-0.254,0.207-0.459,0.459-0.459S8.394,7.051,8.394,7.306">
                    </path>
                </svg>
                <span>Ištrinti produktą</span>
            </button>
            <br>
            <button wire:click.prevent="saveChanges"
                class="whitespace-nowrap bg-green-300 hover:bg-green-400 text-green-800 font-bold py-1 px-4 pl-2 rounded inline-flex items-center mb-3">
                <svg class="fill-current w-4 h-4 mr-2" viewBox="0 0 20 20">
                    <path
                        d="M17.064,4.656l-2.05-2.035C14.936,2.544,14.831,2.5,14.721,2.5H3.854c-0.229,0-0.417,0.188-0.417,0.417v14.167c0,0.229,0.188,0.417,0.417,0.417h12.917c0.229,0,0.416-0.188,0.416-0.417V4.952C17.188,4.84,17.144,4.733,17.064,4.656M6.354,3.333h7.917V10H6.354V3.333z M16.354,16.667H4.271V3.333h1.25v7.083c0,0.229,0.188,0.417,0.417,0.417h8.75c0.229,0,0.416-0.188,0.416-0.417V3.886l1.25,1.239V16.667z M13.402,4.688v3.958c0,0.229-0.186,0.417-0.417,0.417c-0.229,0-0.417-0.188-0.417-0.417V4.688c0-0.229,0.188-0.417,0.417-0.417C13.217,4.271,13.402,4.458,13.402,4.688">
                    </path>
                </svg>
                <span>Išsaugoti pakeitimus</span>
            </button>
        </td>
    @endif
</tr>
