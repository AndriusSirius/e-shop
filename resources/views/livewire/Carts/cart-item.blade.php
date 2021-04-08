<div class="flex items-center hover:bg-gray-100 px-4 py-4">
    <div class="flex w-2/5">
        <!-- product -->
        @foreach($cart_item->images as $img)
            <div class="w-20 hidden lg:block md:block">
                <img class="object-contain h-36" src="{{ asset($img->path) }}" alt="">
            </div>
            @break
        @endforeach

        <div class="flex flex-col justify-between ml-4 flex-grow">
            <span class="font-bold lg:text-sm md:text-sm text-xs">{{ $cart_item->products->title}}</span>
            <span
                class="hidden lg:block md:block text-black-700 font-semibold lg:text-sm md:text-sm">{{ $cart_item->products->summary }}</span>
        </div>
    </div>

    <div class="flex justify-center w-1/5">

        <button wire:click="minusQuantity">
            <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512">
                <path
                    d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
            </svg>
        </button>

        <input class="border text-center w-10 m-2 lg:w-14 md:w-14" type="text" wire:model="quantity">

        <button wire:click="plusQuantity">
            <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512">
                <path
                    d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
            </svg>
        </button>
    </div>
    @if($cart_item->discount)
        <span class="text-center w-1/5 font-semibold lg:text-sm md:text-sm text-xs">
            {{($cart_item->products->price)*(100-($cart_item->discount->percentage))/100}} €
        </span>
        <span class="text-center w-1/5 font-semibold lg:text-sm md:text-sm text-xs">
            {{($cart_item->products->price)*(100-($cart_item->discount->percentage))/100*($cart_item->quantity)}} €
        </span>
    @else
        <span class="text-center w-1/5 font-semibold lg:text-sm md:text-sm text-xs">
            {{$cart_item->products->price}} €
        </span>
        <span class="text-center w-1/5 font-semibold lg:text-sm md:text-sm text-xs">
            {{$cart_item->products->price*($cart_item->quantity)}} €
        </span>
    @endif

    <button wire:click="delete()"
            class="font-semibold mr-3 hover:text-red-500 text-gray-500 text-lg border-none">x
    </button>
</div>
