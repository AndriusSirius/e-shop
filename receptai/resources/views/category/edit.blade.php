<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kategorijos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 ">
                    <h3 class="mb-4">{{ __('kategorijos redagavimas') }}</h3>

                    <form method="POST" action="{{ route('category.update', $category->id) }}">
                        @csrf
                        @method('PUT')

                        <!-- Name -->
                        <div class="mb-3">
                            <x-label for="pavadinimas" :value="__('Pavadinimas')" />

                            <x-input id="pavadinimas" class="block mt-1 w-full" type="text" name="pavadinimas" value="{{ $category->pavadinimas }}" required autofocus />
                        </div>

                        <!-- Nuoroda -->
                        <div class="mb-3">
                            <x-label for="nuoroda" :value="__('Nuoroda')" />

                            <x-input id="nuoroda" class="block mt-1 w-full" type="text" name="nuoroda" value="{{ $category->nuoroda }}" required />
                        </div>

                        <!-- Aprašymas -->
                        <div class="mb-3">
                            <x-label for="aprasymas" :value="__('Aprašymas')" />

                            <x-input id="aprasymas" class="block mt-1 w-full" type="text" name="aprasymas" value="{{ $category->aprasymas }}" />
                        </div>

                        <!-- Numeris -->
                        <div class="mb-3">
                            <x-label for="nr" :value="__('Nr.')" />

                            <x-input id="nr" class="block mt-1 w-full" type="number" name="nr" value="{{ $category->nr }}" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('category.index') }}">
                                {{ __('Atšaukti') }}
                            </a>

                            <x-button class="ml-4">
                                {{ __('Saugoti') }}
                            </x-button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
