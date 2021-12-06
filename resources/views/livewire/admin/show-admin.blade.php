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
        <div class="flex flex-wrap overflow-hidden sm:-mx-1">

            <div class="border-b-2 w-full overflow-hidden sm:my-1 sm:px-1">
                <h2 class="font-semibold uppercase text-blue-700 text-lg"><i class="fab fa-shopify"></i> Produktų
                    valdymas</h2>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <div class="flex justify-end">
                            <a href="#" onclick="Livewire.emit('showProduktasCreate'); return false;"
                                class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-blue-700 rounded-full shadow ripple hover:shadow-lg hover:bg-blue-800 focus:outline-none mb-6">
                                Pridėti naują prekę
                            </a>
                        </div>
                        @livewire('admin.product-add')

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
                                Kiekis
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
                <div class="m-4">
                    {{ $produktai->links() }}
                </div>
            </div>

            <div class="border-b-2 mt-2 w-full overflow-hidden sm:my-1 sm:px-1">
                <h2 class="mb-6 font-semibold uppercase text-yellow-700 text-lg"><i class="fas fa-code-branch"></i>
                    Kategorijų valdymas</h2>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <div class="flex justify-end">
                            <a href="#" onclick="Livewire.emit('showKategorijaCreate'); return false;"
                                class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-blue-700 rounded-full shadow ripple hover:shadow-lg hover:bg-blue-800 focus:outline-none mb-6">
                                Pridėti naują kategorija
                            </a>
                        </div>
                        @livewire('admin.add-category')
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
                                Link
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Valdymas
                            </th>
                        </tr>
                    </thead>
                    <h1 class="uppercase text-3xl text-red-500">nebaigta Dalis</h1>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($kategorijos as $kategorija)
                            @livewire('admin.categories', compact(['kategorija']), key($kategorija->id))
                        @endforeach
                    </tbody>
                </table>
            </div>


            <div class="border-b-2 mt-2 w-full overflow-hidden sm:my-1 sm:px-1">
                <h2 class="mb-6 font-semibold uppercase text-pink-700 text-lg"><i class="fas fa-percentage"></i>
                    Nuolaidų valdymas</h2>
                <h1 class="uppercase text-3xl text-red-500">nėra pridėjimo Dalies</h1>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1">
                                #
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Produktas
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Procentas
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nuo Iki
                            </th>
                            <th scope="col" class="relative px-6 py-3 w-1">
                                <span class="sr-only">Valdymas</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($nuolaidos as $nuolaida)
                            @livewire('admin.discounts', compact(['nuolaida']), key($nuolaida->id))
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="border-b-2 mt-2  w-full overflow-hidden sm:my-1 sm:px-1">
                <h2 class="mb-6 font-semibold uppercase text-blue-900 text-lg"><i class="fas fa-users"></i> Vartotojų
                    valdymas</h2>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1">
                                #
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Vardas Pavardė
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Miestas
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                El.paštas
                            </th>
                            <th scope="col" class="relative px-6 py-3 w-1">
                                <span class="sr-only">Valdymas</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($vartotojai as $user)
                            @livewire('admin.users', compact(['user']), key($user->id))
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="border-b-2 mt-2  w-full overflow-hidden sm:my-1 sm:px-1">
                <h2 class="mb-6 font-semibold uppercase text-green-700 text-lg"><i class="fas fa-shopping-cart"></i>
                    Užsakymų
                    valdymas</h2>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1">
                                #
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Vardas Pavardė
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Prekės pavadinimas
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Pristatymas
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Užsakymo būsena
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Komentaras
                            </th>
                            <th scope="col" class="relative px-6 py-3 w-1">
                                <span class="sr-only">Valdymas</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($orderList as $list)
                            @livewire('admin.orders', compact(['list']), key($list->id))
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </section>
</x-app-layout>
