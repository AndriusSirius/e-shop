<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kategorijos') }}
        </h2>
    </x-slot>





    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
            @if(session()->get('success'))
                <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-green-700">
                    <span class="text-xl inline-block mr-5 align-middle">
                        <i class="fas fa-bell" ></i>
                    </span>
                            <span class="inline-block align-middle mr-8">
                        <b class="capitalize">{{ session()->get('success') }}</b>
                    </span>
                    <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none">
                        <span>×</span>
                    </button>
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between mb-3">
                        <h3 class=" py-1 ">{{ __('Kategorijų sąrašas') }}</h3>
                        <a href="{{ route('category.create') }}" class="inline-flex items-center px-2 py-1 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                            Pridėti naują kategoriją
                        </a>
                    </div>
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                #
                                            </th><th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Nr
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Pavadinimas
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Nuoroda
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Aprašymas
                                            </th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">Valdymas</span>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach($categories as $category)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    {{ $category->id }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm ">
                                                    {{ $category->nr }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowraptext-sm text-sm text-gray-900">
                                                    {{ $category->pavadinimas }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $category->nuoroda }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $category->aprasymas }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <a href="{{ route('category.edit', $category->id) }}" class="text-indigo-600 hover:text-indigo-900">Redaguoti</a>
                                                    <form action="{{ route('category.destroy', $category->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="ml-4 text-red-600 hover:text-red-900">Trinti</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
