<a class="relative" href="{{ route('carts') }}">
    <svg class=" w-6 h-6 m-2 stroke-current text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path strokeLinecap="round" strokeLinejoin="round"  strokeWidth={2} d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
    </svg>
    <span class="z-50 absolute top-0.5 ml-5  lg:top-0.5 lg:ml-5 sm:top-8 md:top-0.5 text-xs inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-red-100 bg-blue-700 rounded-full">
        {{ $cartTotal }}
    </span>
</a>
