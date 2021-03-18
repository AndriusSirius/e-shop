<section class="container mx-auto  my-7  ">
    <div class="flex flex-wrap justify-between w-2/3 mx-auto ">
{{--        @foreach($products as $product_item)--}}
{{--            {{$product_item}}--}}
{{--            @livewire('product_list_item', ['product_item' => $product_item], key($product_item->id))--}}
{{--        @endforeach--}}
                <!-- END Article -->
    </div>

    <script>
    $('button').click(function(e) {
        $(this).attr("disabled", true);
        var self = this;
        setTimeout(function() {
            $(self).removeAttr("disabled");
        }, 9999);
    });
    </script>
</section>

