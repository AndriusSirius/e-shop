<x-app-layout>
    <section class="container mx-auto my-28">
        <div class="py-6">
            <nav class="text-black font-bold my-8 ml-5" aria-label="Breadcrumb">
                <ol class="list-none p-0 inline-flex">
                    <li class="flex items-center">
                        <p>Pagrindinis</p>
                        <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <path
                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                        </svg>
                    </li>
                    <li>
                        <p class="text-gray-500" aria-current="page">Valdymas</p>
                    </li>
                </ol>
            </nav>
            <div>
                <h4 class="text-2xl font-medium text-gray-1000 ml-5 p-2 border-l-4 border-solid border-blue-700">
                    Administravimo pultas
                </h4>
            </div>
            <br>
        </div>
        <div class="flex h-full">
            <div class="container mx-auto bg-white">
                <ul class="block w-11/12 my-14 mx-auto" x-data="{selected:null}">
                    <li class="flex align-center flex-col">
                        <h4 @click="selected !== 0 ? selected = 0 : selected = null"
                            class="py-4 border-solid border-2 border-blue-700 cursor-pointer px-5 py-3 bg-white text-blue-700 uppercase font-semibold text-left inline-block hover:opacity-75 hover:shadow hover:-mb-3 rounded-t">
                            <i class="fas fa-sitemap"></i> kategorijų valdymas
                        </h4>
                        <div x-show="selected == 0" class="border py-4 px-2">

                        </div>
                    </li>
                    <li class="flex align-center flex-col">
                        <h4 @click="selected !== 1 ? selected = 1 : selected = null"
                            class="mt-2 py-4 border-solid border-2 border-red-700 cursor-pointer px-5 py-3 bg-white text-red-700 uppercase font-semibold text-left inline-block hover:opacity-75 hover:shadow hover:-mb-3 rounded-t">
                            <i class="fas fa-shopping-bag"></i> produktų valdymas
                        </h4>
                        <div x-show="selected == 1" class="border py-4 px-2">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <div class="flex justify-end">
                                        <a href="#" onclick="Livewire.emit('showProduktasCreate'); return false;"
                                            class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-blue-700 rounded-full shadow ripple hover:shadow-lg hover:bg-blue-800 focus:outline-none mb-6">
                                            Pridėti naują prekę
                                        </a>
                                    </div>
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1">
                                            #
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Pavadinimas
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Modelis
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Aprašymas
                                        </th>
                                        <th scope="col" class="relative px-6 py-3 w-1">
                                            <span class="sr-only">Valdymas</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">

                                    @foreach ($produktai as $produktas)
                                        @livewire('admin.products', compact(['produktas']), key($produktas->id))
                                    @endforeach
                                </tbody>
                            </table>
                            @livewire('admin.product-add', compact('produktas'))
                        </div>
                    </li>
                    <li class="flex align-center flex-col">
                        <h4 @click="selected !== 2 ? selected = 2 : selected = null"
                            :class="{'mt-2 py-4 border-solid border-2 border-yellow-700 cursor-pointer px-5 py-3 bg-white text-yellow-700 uppercase font-semibold text-left inline-block hover:opacity-75 hover:shadow hover:-mb-3': true, 'rounded-b': selected != 2}">
                            <i class="fas fa-user-friends"></i> vartotojų valdymas
                        </h4>
                        <div x-show="selected == 2" :class="{'border py-4 px-2': true, 'rounded-b': selected == 2}">
                        </div>
                    </li>
                    <li class="flex align-center flex-col">
                        <h4 @click="selected !== 3 ? selected = 3 : selected = null"
                            :class="{'mt-2 py-4 border-solid border-2 border-green-700 cursor-pointer px-5 py-3 bg-white text-green-700 uppercase font-semibold text-left inline-block hover:opacity-75 hover:shadow hover:-mb-3': true, 'rounded-b': selected != 3}">
                            <i class="fab fa-shopify"></i> užsakymų valdymas
                        </h4>
                        <div x-show="selected == 3" :class="{'border py-4 px-2': true, 'rounded-b': selected == 3}">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="flex border-t-2 border-solid border-dark">
            <p class="p-4 text-sm text-gray-300 font-semibold">* Lorem, ipsum dolor sit amet consectetur adipisicing
                elit. Deserunt assumenda quia quam labore, consequatur beatae?</p>
        </div>
    </section>
</x-app-layout>
