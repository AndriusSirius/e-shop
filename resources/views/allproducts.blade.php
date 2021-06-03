<x-app-layout>
    <section class="container mx-auto my-40 ">
        <div class="flex flex-wrap justify-start w-2/3 mx-auto ">
            <div class="flex flex-wrap -mx-4 overflow-hidden lg:-mx-2 justify-center">
                <div class="my-4 px-4 w-1/6 overflow-hidden lg:my-2 lg:px-2">
                    <h4>Kaina</h4>
                    <div id="slider-range"></div>
                    <input type="text" id="amount" readonly style="border:0; color:#000000; font-weight:bold;">
                    {{--            <p>Kaina nuo:  <span id="priceValue"></span> </p>--}}
                </div>
                <div class="flex">
                <div class="my-4 px-4 w-1/6 overflow-hidden lg:my-2 lg:px-2">
                    <h4>Gamintojas</h4>
                    <form>
                        <input type="checkbox" id="manufacture1" name="manufacture" value="Bike">
                        <label for="manufacture1"> Samsung</label><br>
                        <input type="checkbox" id="manufacture2" name="vehicle2" value="Car">
                        <label for="manufacture2"> Bosch</label><br>
                        <input type="checkbox" id="manufacture3" name="vehicle3" value="Boat">
                        <label for="manufacture3"> LG </label>
                    </form>
                </div>

                <div class="my-4 px-4 w-1/6 overflow-hidden lg:my-2 lg:px-2">
                    <h4>Tipas</h4>
                    <form>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        <label for="vehicle1"> Šaldytuvas</label><br>
                        <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                        <label for="vehicle2"> Kavos virimo aparatas</label><br>
                        <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                        <label for="vehicle3">{{__('Skalbimo mašina')}}</label>
                    </form>
                </div>

                <div class="my-4 px-4 w-1/6 overflow-hidden lg:my-2 lg:px-2">
                    <h4>Spalva</h4>
                    <form>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        <label for="vehicle1"> Rožinė</label><br>
                        <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                        <label for="vehicle2"> Balta</label><br>
                        <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                        <label for="vehicle3"> Juoda</label>
                    </form>
                </div>

                <div class="my-4 px-4 w-1/6 overflow-hidden lg:my-2 lg:px-2">
                    <h4>Energijos klasė</h4>
                    <form>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        <label for="vehicle1"> 2kw </label><br>
                        <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                        <label for="vehicle2"> 3kw </label><br>
                        <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                        <label for="vehicle3"> 5kw </label>
                    </form>
                </div>
                </div>


            </div>
            @foreach ($product_list as $product_list_item)
                @include('Products.product-list-item')
            @endforeach
        </div>
        @if ($product_list->links())
            <div class="container mx-auto w-2/3">
                {{ $product_list->links() }}
            </div>
        @endif
    </section>
</x-app-layout>
