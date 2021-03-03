<x-app-layout>
    <div class="container mx-auto">

        <section class="py-12">
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
                    Vartotojo paskyra
                </h4>
            </div>
            <br>
        </section>

        <div class="flex flex-grow">

            <div class="bg-gray-100 w-1/3 p-6">
                <ul class="-ml-6 pl-6">
                    <li class="tablinks text-lg mb-2 p-1 text-gray-500 font-sans font-semibold cursor-pointer" onClick="openAcc(event, 'user_info')">Paskyros nustatymai</li>
                    <li class="tablinks text-lg mb-2 p-1 text-gray-500 font-sans font-semibold cursor-pointer" onClick="openAcc(event, 'user_address')">Paskyros informacija</li>
                    <li class="tablinks text-lg mb-2 p-1 text-gray-500 font-sans font-semibold cursor-pointer" onClick="openAcc(event, 'user_orders')">Mano užsakymai</li>
                    <hr>
                    <li class="tablinks text-lg mt-2 p-1 text-gray-500 font-sans font-semibold cursor-pointer" onClick="openAcc(event, 'user_settings')">Naujienlaiškio užsakymas</li>
                </ul>
            </div>

            <div class="w-full ml-14">

                <div id="user_info" class="tabcontent active">
                    <div>
                        <h2 class="border-b-2 text-xl p-2 mb-2 text-gray-900 font-sans font-bold">Vartotojo nustatymai</h2>

                        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                    @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                        @livewire('profile.update-profile-information-form')

                        <x-jet-section-border />
                    @endif

                    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                        <div class="mt-10 sm:mt-0">
                            @livewire('profile.update-password-form')
                        </div>

                        <x-jet-section-border />
                    @endif

                    @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                        <div class="mt-10 sm:mt-0">
                            @livewire('profile.two-factor-authentication-form')
                        </div>

                        <x-jet-section-border />
                    @endif

                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.logout-other-browser-sessions-form')
                    </div>

                    @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                        <x-jet-section-border />

                        <div class="mt-10 sm:mt-0">
                            @livewire('profile.delete-user-form')
                        </div>
                    @endif
                    </div>
                    </div>
                </div>

                <div id="user_address" class="tabcontent hidden">
                    <h2 class="border-b-2 text-xl p-2 mb-2 text-gray-900 font-sans font-bold">Vartotojo informacija</h2>
                    <div class="container">
                        <div class="flex flex-wrap">

                            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                                <h3 class="text-lg text-gray-900 font-sans font-semibold">Paskyros informacija</h3>
                                <br>

                                <p class="text-lg text-gray-500 font-sans font-semibold">{{ Auth::user()->name }}</p>
                                <p class="text-lg text-gray-500 font-sans font-semibold">{{ Auth::user()->email }}</p>
                                <p class="text-lg text-gray-500 font-sans font-semibold">{{ Auth::user()->phone_number }}</p>
                                <br>

                                <a href="" class="underline text-blue-700 text-left">Redaguoti</a>
                                <a href="" class="underline text-blue-700 text-right ml-5">Pakeisti slaptažodį</a>

                            </div>

                            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                                <h3 class="text-lg text-gray-900 font-sans font-semibold">Naujienlaiškis</h3>
                                <br>

                                <p class="text-lg text-gray-500 font-sans font-semibold">Jūs nesate užsisake jokio mūsų naujienlaiškio.</p>
                                <br>

                                <a href="" class="underline text-blue-700 text-left">Užsisakyti</a>

                            </div>

                        </div>
                    </div>

                    <br><br>

                    <h2 class="border-b-2 text-xl p-2 mb-2 text-gray-900 font-sans font-bold">Mano adresai</h2>
                    <div class="container">
                        <div class="flex flex-wrap">

                            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                                <h3 class="text-lg text-gray-900 font-sans font-semibold">Adresai</h3>
                                <br>

                                <p class="text-lg text-gray-500 font-sans font-semibold">{{ Auth::user()->country }},</p>
                                <p class="text-lg text-gray-500 font-sans font-semibold">{{ Auth::user()->city }},</p>
                                <p class="text-lg text-gray-500 font-sans font-semibold">{{ Auth::user()->address }},</p>
                                <p class="text-lg text-gray-500 font-sans font-semibold">{{ Auth::user()->post_code}}</p>
                                <br>

                                <a href="" class="underline text-blue-700 text-left">Redaguoti</a>
                                <a href="" class="underline text-blue-700 text-right ml-5">Ištrinti adresą</a>

                            </div>

                        </div>
                    </div>
                </div>

                <div id="user_orders" class="tabcontent hidden">
                    <h2 class="border-b-2 text-xl p-2 mb-2 text-gray-900 font-sans font-bold">Mano užsakymai</h2>
                </div>

                <div id="user_settings" class="tabcontent hidden">
                    <h2 class="border-b-2 text-xl p-2 mb-2 text-gray-900 font-sans font-bold">Adresai</h2>
                </div>

            </div>

        </div>
    </div>
    </div>

    <br><br>

    <div class="bg-gray-100 mt-10">
        <div class="container mx-auto">
            <div class="flex justify-center grid grid-cols-3 gap-4 py-12 px-4 sm:px-6 lg:px-8">

                <div class="sm:px-6 lg:px-8">
                    <p class="font-bold text-lg text-center"><span style="font-size:50px; color:black;">&#9730;</span><br><br>Product support</p>
                    <br>
                    <p class="text-center text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat aliquid tenetur optio neque molestias maxime?</p>
                </div>

                <div class="sm:px-6 lg:px-8">
                    <p class="font-bold text-lg text-center"><span style="font-size:50px; color:black;">&#9729;</span><br><br>Personal account</p>
                    <br>
                    <p class="text-center text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat aliquid tenetur optio neque molestias maxime?</p>
                </div>

                <div class="sm:px-6 lg:px-8">
                    <p class="font-bold text-lg text-center"><span style="font-size:50px; color:black;">&#9993;</span><br><br>Amazing saving</p>
                    <br>
                    <p class="text-center text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat aliquid tenetur optio neque molestias maxime?</p>
                </div>
            </div>
        </div>

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