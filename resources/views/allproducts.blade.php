<x-app-layout>
    <section class="container mx-auto my-40 ">
        <div class="flex flex-wrap justify-start w-2/3 mx-auto ">
            @foreach ($product_list as $product_list_item)
                @include('Products.product-list-item')
            @endforeach
        </div>
        <div class="container mx-auto w-2/3">
            {{ $product_list->links() }}
        </div>
    </section>
</x-app-layout>
