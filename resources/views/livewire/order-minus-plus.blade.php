<div class="flex items-center mt-2">
    <button wire:click="plusQuantity"
        class="text-gray-500 focus:outline-none focus:text-gray-600">
        <svg class="h-5 w-5" fill="none" stroke-linecap="round"
            stroke-linejoin="round" stroke-width="2"
            viewBox="0 0 24 24" stroke="currentColor">
            <path
                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z">
            </path>
        </svg>
    </button>
    <span
        class="text-black mx-2">{{ $order_item->quantity }}</span>
    <button wire:click="minusQuantity"
        class="text-gray-500 focus:outline-none focus:text-gray-600">
        <svg class="h-5 w-5" fill="none" stroke-linecap="round"
            stroke-linejoin="round" stroke-width="2"
            viewBox="0 0 24 24" stroke="currentColor">
            <path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z">
            </path>
        </svg>
    </button>
</div>
