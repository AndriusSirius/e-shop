<x-app-layout>
    <div class="container mx-auto">

        <section class="py-6">
            <nav class="text-black font-bold my-8 ml-5" aria-label="Breadcrumb">
                <ol class="list-none p-0 inline-flex">
                    <li class="flex items-center">
                        <p>Pagrindinis</p>
                        <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                        </svg>
                    </li>
                    <li>
                        <p class="text-gray-500" aria-current="page">Paskyra</p>
                    </li>
                </ol>
            </nav>
            <div>
                <h4 class="text-2xl font-medium text-gray-1000 ml-5">
                    Administratoriaus paskyra
                </h4>
            </div>
            <br>
        </section>

        <div class="flex flex-grow">

            <div class="bg-gray-100 w-1/3 p-6">
                <ul class="-ml-6 pl-6">
                    <li class="tablinks text-lg mb-2 p-1 text-gray-500 font-sans font-semibold cursor-pointer" onClick="openAcc(event, 'user_info')">Paskyros nustatymai</li>
                    <li class="tablinks text-lg mb-2 p-1 text-gray-500 font-sans font-semibold cursor-pointer" onClick="openAcc(event, 'product_add')">Prekiu pridejimas</li>
                    <li class="tablinks text-lg mb-2 p-1 text-gray-500 font-sans font-semibold cursor-pointer" onClick="openAcc(event, 'category_add')">Kategoriju pridejimas</li>

                </ul>
            </div>

            <div class="w-full ml-14">

                <div id="user_info" class="tabcontent active">
                    <div>
                        <h2 class="border-b-2 text-xl p-2 mb-2 text-gray-900 font-sans font-bold">Vartotojo nustatymai</h2>

                        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                                <div class="mt-10 sm:mt-0">
                                </div>
                                <x-jet-section-border />
                            @endif
                        </div>
                    </div>
                </div>

                <div id="product_add" class="tabcontent hidden">
                    <h2 class="border-b-2 text-xl p-2 mb-2 text-gray-900 font-sans font-bold">Prideti produkta</h2>
                    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                        <div class="mt-10 sm:mt-0">
                            @include('profile.admin.product-add')
                        </div>

                        <x-jet-section-border />

                    </div>
                    <br><br>
                </div>

                <div id="category_add" class="tabcontent hidden">
                    <h2 class="border-b-2 text-xl p-2 mb-2 text-gray-900 font-sans font-bold">Prideti kategorija</h2>
                    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                        <div class="mt-10 sm:mt-0">
                            @include('profile.admin.category-add')
                        </div>
                        <x-jet-section-border />
                        <br><br>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>

    @include('section')

        <script>
            function openAcc(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active text-gray-900 border-l-4 border-blue-600 p-1", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active text-gray-900 border-l-4 border-blue-600 p-1";
            }
        </script>
</x-app-layout>
