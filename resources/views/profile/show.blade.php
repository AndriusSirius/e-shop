<x-app-layout>
    <div class="container mx-auto">

        <section class="py-12">
            <nav class="text-black font-bold my-8 ml-5" aria-label="Breadcrumb">
                <ol class="list-none p-0 inline-flex">
                    <li class="flex items-center">
                    <a href="#">Pagrindinis</a>
                    <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
                    </li>
                    <li>
                    <a href="#" class="text-gray-500" aria-current="page">Paskyra</a>
                    </li>
                </ol>
            </nav>
            <div>
                <h4 class="text-2xl font-black text-gray-1000 ml-5">
                Vartotojo paskyra
                </h4>
            </div>
            <br>
        </section>

    <div class="flex flex-grow">

        <div class="bg-gray-100 w-1/3 p-6">
            <ul class="border-l-4 border-blue-700 -ml-6 pl-6 mb-2">
                <li class="text-lg font-black text-gray-1000">Vartotojo valdymas</li>
            </ul>
            <ul class="-ml-6 pl-6">
                <li class="text-lg font-black text-gray-500 mb-2">Vartotojo informacija</li>
                <li class="text-lg font-black text-gray-500 mb-2">Adresas</li>
                <hr>
                <li class="text-lg font-black text-gray-500 mb-2 mt-2">Nustatymai</li>
                <li class="text-lg font-black text-gray-500 mb-2">Redagavimas</li>
            </ul>
        </div>

        <div class="bg-gray-100 w-full ml-10 p-6">
        Nepabaigta vieta.
        </div>
    
    </div>
    <div>
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
</x-app-layout>
