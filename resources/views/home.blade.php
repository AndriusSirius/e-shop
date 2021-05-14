<x-app-layout>
    @if ($errors->any())
        <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-red-400">
                    <span class="text-xl inline-block mr-5 align-middle">
                        <i class="fas fa-bell" ></i>
                    </span>
            <span class="inline-block align-middle mr-8">
                        <ul>
                        @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </span>
            <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none">
                <span>×</span>
            </button>
        </div>
    @endif
{{--        <div class="p-8">--}}
{{--            <div class="bg-white flex items-center rounded-full shadow-xl">--}}
{{--                <input class="rounded-l-full w-full py-4 px-6 text-gray-700 leading-tight focus:outline-none" id="search" type="text" placeholder="Search">--}}

{{--                <div class="p-4">--}}
{{--                    <button class="bg-blue-500 text-white rounded-full p-2 hover:bg-blue-400 focus:outline-none w-12 h-12 flex items-center justify-center">--}}
{{--                        icon--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        @include('titulinis.titulinis')
    {{-- @include('Products.home-products') --}}
{{--    @livewire('products.home-products')--}}
{{--    @livewire('admin.show-admin')--}}
</x-app-layout>


