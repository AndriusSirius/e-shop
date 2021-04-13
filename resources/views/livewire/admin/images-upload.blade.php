
    <div class="my-2 px-2 w-full overflow-hidden md:w-1/3 lg:w-1/4">
        <div class="pt-3">

            <input type="file" wire:model="path" id="{{ $input_field_name }}">

            <div wire:loading wire:target="path">Failas keliamas...</div>

            @if ($path)
                <div class=" my-2 relative">
                    {{-- <img src="{{ $path->temporaryUrl() }}" class="max-w-full max-h-44 rounded mx-auto"> --}}
                </div>
            @endif

        </div>
    </div>

