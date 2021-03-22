{{--<x-app-layout>--}}
<div id="summary" class="px-8 py-10 bg-gray-100 sm:w-1/3 md:w-1/3 lg:w-1/4">
    <h1 class="font-semibold text-2xl border-b pb-8">Užsakymo apskaita</h1>
    <div class="flex justify-between mt-10 mb-5">
        <span class="font-semibold text-sm uppercase">Prekės:</span>
        <span class="font-semibold text-sm">Kaina be PVM: 590€</span>
    </div>
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
        <div class="flex justify-between font-semibold p-3">
            <span>PVM mokestis:</span>
            <span>€10</span>
        </div>
        <div class="flex justify-between font-semibold p-3 mb-1">
            <span>Pristatymo mokestis:</span>
            <span>€3.99</span>
        </div>
        @foreach($order as $order_list)
            @livewire('order-price', compact('order_list'))
        @endforeach

{{--@if($discount)--}}
{{--    <p class="text-sm text-gray-600 line-through lg:text-left md:text-center  sm:text-center">--}}
{{--        {{$price}} €--}}
{{--    </p>--}}
{{--    <p class="font-bold text-lg lg:text-left md:text-center  sm:text-center">--}}
{{--        <!-- KAINA SU NUOLAIDA -->--}}
{{--        {{ $priceWithDiscount }} €--}}
{{--    </p>--}}
{{--    <p class="text-xs text-red-500 ">{{ $discount }} %</p>--}}
{{--@else--}}
{{--    <p class="font-bold text-lg lg:text-right md:text-center  sm:text-center">--}}
{{--        <!-- KAINA BE NUOLAIDOS -->--}}
{{--        {{$price}} €--}}
{{--    </p>--}}
{{--@endif--}}
{{--            {{$order}}--}}


{{--</x-app-layout>--}}
{{--<x-app-layout>--}}
{{--    @livewire('header')--}}

{{--    @livewire('order-checkout')--}}

{{--    @include('section')--}}

{{--</x-app-layout>--}}
