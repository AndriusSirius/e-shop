<section class="container mx-auto  my-7  ">
    <div class="flex flex-wrap justify-between w-2/3 mx-auto ">
        @foreach($product_list as $product_list_item)
            @livewire('product-list-item', compact('product_list_item'), key($product_list_item->id))
        @endforeach
    </div>
</section>
