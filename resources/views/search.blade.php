<x-app-layout>
    <section class="container mx-auto my-40 ">
        <div class="flex flex-wrap justify-start w-2/3 mx-auto ">
            @if ($products_search->isNotEmpty())
                @foreach ($products_search as $product_list_item)
                    <div class="my-3 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3 w-1/3">
                        <article class="overflow-hidden rounded-lg shadow-lg max-h-full">
                                <a href="{{route('product', [$product_list_item->id])}}">
                                    <img alt="Placeholder" class="block object-contain h-48 w-full"
                                         src="{{ asset($product_list_item->images->first()->path) }}">
                                </a>
                            {{--                    <img src="{{$image->path}}">--}}
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
                        </article>
                    </div>
                @endforeach
            @else
                <div>
                    <h2>Rezultatų nerasta. Bandykite kitokią paiešką</h2>
                </div>
            @endif
        </div>
                    @if ($products_search->links())
                        <div class="container mx-auto w-2/3">
                            {{ $products_search->links() }}
                        </div>
                    @endif
    </section>
</x-app-layout>
