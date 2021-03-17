<div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
    <div class="flex w-2/5">
        <!-- product -->
        @foreach($cart_item->images as $img)
            <div class="w-20">
                <img class="h-24" src="{{ asset($img->path) }}" alt="">
            </div>
            @break
        @endforeach

        <div class="flex flex-col justify-between ml-4 flex-grow">
            <span class="font-bold text-lg">{{ $cart_item->products->title}}</span>
            <span
                class="text-black-700 text-sm font-semibold">{{ $cart_item->products->summary }}</span>
        </div>
    </div>

    <div class="flex justify-center w-1/5">

        <button wire:click="minusQuantity">
            <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512">
                <path
                    d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
            </svg>
        </button>

        <input class="mx-2 border text-center w-14" type="text" wire:model="quantity">
        <button wire:click="plusQuantity">
            <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512">
                <path
                    d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
            </svg>
        </button>
    </div>
    @foreach($cart_item->discounts as $discount)
        @if(($discount->percentage) > 0)
            @if(now() > $discount->from && now() <= $discount->to)
                <span
                    class="text-center w-1/5 font-semibold text-sm">{{($cart_item->products->price)*(100-($discount->percentage))/100}} €
                                    </span>

            @else
                <span
                    class="text-center w-1/5 font-semibold text-sm">{{$cart_item->products->price}} €
                                    </span>
            @endif
        @else
            <span
                class="text-center w-1/5 font-semibold text-sm">{{$cart_item->products->price}} €
                                    </span>

        @endif
    @endforeach

    @foreach($cart_item->discounts as $discount)
        @if(($discount->percentage) > 0)
            @if(now() > $discount->from && now() <= $discount->to)
                <span
                    class="text-center w-1/5 font-semibold text-sm">{{($cart_item->products->price)*(100-($discount->percentage))/100*($cart_item->quantity)}} €
                                    </span>

            @else
                <span
                    class="text-center w-1/5 font-semibold text-sm">{{$cart_item->products->price*($cart_item->quantity)}} €
                                    </span>
            @endif
        @else
            <span
                class="text-center w-1/5 font-semibold text-sm">{{$cart_item->products->price*($cart_item->quantity)}} €
                                    </span>

        @endif
    @endforeach

    {{--                           <span class="text-center w-1/5 font-semibold text-sm">{{($data->products->price)*(100-($discount->percentage))/100*($data->quantity)}} €</span>--}}

    <button wire:click="delete()"
            class="font-semibold hover:text-red-500 text-gray-500 text-lg border-none">x
    </button>
</div>