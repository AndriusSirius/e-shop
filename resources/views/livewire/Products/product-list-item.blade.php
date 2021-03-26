<div class="my-3 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3 ">
    <!-- Article -->
    <article class="overflow-hidden rounded-lg shadow-lg max-h-full">
        <a href="{{route('product', [$product_list_item->id])}}">
            <img alt="Placeholder" class="block object-contain h-48 w-full"
                 src="{{ asset($product_list_item->images->first()->path) }}">
        </a>
        <div class="flex items-center justify-between leading-tight p-2 md:p-4">
            <div class="mx-auto h-16">
                <h1 class="text-lg text-center">
                    <a class="no-underline hover:underline text-black"
                       href="{{route('product', [$product_list_item->id])}}">
                        {{$product_list_item->title}}
                    </a>

                </h1>
            </div>
        </div>
        <div class="flex justify-center">

            <button wire:click="addToCart({{$product_list_item->id}})"
                    class="bg-white w-64 p-2 hover:bg-blue-500 hover:text-white text-blue-500 border border-2 border-blue-700 transition duration-300 ease-in-out rounded-full text-lg focus:outline-none  focus:shadow-outline font-semibold ">
                <svg class="h-6  inline mx-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                          d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
                Į krepšelį
            </button>

        </div>
        <div class="flex items-center mx-auto h-16 justify-around leading-none p-2 md:p-4">
            @if($discount)
                <p class="text-sm text-gray-600 line-through lg:text-left md:text-center  sm:text-center">
                    {{$price}} €
                </p>
                <p class="font-bold text-lg lg:text-left md:text-center  sm:text-center">
                    <!-- KAINA SU NUOLAIDA -->
                    {{ $priceWithDiscount }} €
                </p>
                <p class="text-xs text-red-500 ">{{ $discount }} %</p>
            @else
                <p class="font-bold text-lg lg:text-right md:text-center  sm:text-center">
                    <!-- KAINA BE NUOLAIDOS -->
                    {{$price}} €
                </p>
            @endif
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
    $('button').click(function(e) {
            $(this).attr("disabled", true);
            var self = this;
            setTimeout(function() {
                // re-enable the submit button after 2 seconds
                $(self).removeAttr("disabled");
            }, 2000);
        });
    </script>
    </article>
</div>
