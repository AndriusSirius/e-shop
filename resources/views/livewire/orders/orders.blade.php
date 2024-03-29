{{--<x-app-layout>--}}
{{--    {{$order}}--}}
{{--@empty($order)--}}
{{--    @foreach($order as $one_order)--}}
{{--    @endforeach--}}
{{--@endempty--}}

<div id="summary" class=" mr-2 ml-2 lg-ml-0 lg:mr-7 px-8 py-10 bg-gray-100 sm:w-1/3 md:w-1/3 lg:w-1/4">
    <h1 class="font-semibold text-2xl border-b pb-8">Užsakymo apskaita</h1>
    {{--        <div class="flex justify-between mt-10 mb-5">--}}
    {{--                    <span class="font-semibold text-sm uppercase"> Prekės: {{$one_order->quantity}}</span>--}}
    {{--                    <span class="font-semibold text-sm">Bendra kaina: @livewire('orders.order-price', compact('order'))</span>--}}
    {{--        </div>--}}
    <div>
        <label class="font-medium inline-block mb-3 text-sm uppercase">Pristatymas</label>
        <select class="block p-2 text-gray-600 w-full text-sm">
            <option>Kurjeriu - €3.99</option>
        </select>
    </div>
    <div class="py-10">
        <label for="promo" class="font-semibold inline-block mb-3 text-sm uppercase">Nuolaidos
            kodas</label>
        <input type="text" id="promo" placeholder="Įrašykite nuolaidos kodą" class="p-2 text-sm w-full">
    </div>
    <button
        class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-blue-700 rounded-full shadow ripple hover:shadow-lg hover:bg-blue-800 focus:outline-none">
        Patvirtinti
    </button>
    <div class="border-t mt-8">
        {{--        <div class="flex justify-between font-semibold p-3">--}}
        {{--            <span>PVM mokestis:</span>--}}
        {{--            <span>@livewire('orders.order-price', compact('order'))</span>--}}
        {{--        </div>--}}
        <div class="flex justify-between font-semibold p-3 mb-1">
            <span>Pristatymo mokestis:</span>
            <span>5.68 €</span>
        </div>
        <div class="flex justify-between font-semibold p-3 mb-3">
            <span>Užsakymo kaina:</span>
            <span>@livewire('orders.order-price', compact('order'))</span>
        </div>


        <a href="{{route('order_checkout')}}">
            <button
                class="border-2 text-sm uppercase w-full text-center border-blue-700 rounded-full font-bold text-blue-700 px-4 py-3 transition duration-300 ease-in-out hover:bg-blue-500 hover:text-white">
                pereiti prie apmokėjimo
            </button>
        </a>
    </div>
</div>
