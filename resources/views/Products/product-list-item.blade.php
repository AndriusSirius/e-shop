
<div class="my-3 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3 w-1/3">
    <!-- Article -->
    <article class="overflow-hidden rounded-lg shadow-lg max-h-full">
        <a href="{{route('product', [$product_list_item->id])}}">
            <img alt="Placeholder" class="block object-contain h-48 w-full"
                 src="{{ asset($product_list_item->images->first()->path) }}">
        </a>
        <div class="flex items-center justify-between leading-tight p-2 md:p-4">
            <div class="mx-auto h-24 lg:h-16">
                <h1 class="text-lg text-center">
                    <a class="no-underline hover:underline text-black"
                       href="{{route('product', [$product_list_item->id])}}">
                        {{$product_list_item->title}}
                    </a>

                </h1>
            </div>
        </div>
    @livewire('carts.add-cart-button', compact('product_list_item'), key($product_list_item->id))

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
