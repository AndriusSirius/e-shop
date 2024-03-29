<footer class="footer bg-black relative pt-1 border-b-2 border-blue-700">

    <div class="w-full">
        <div class="container mx-auto px-6">
            <div class="sm:flex sm:mt-8">
                <div class="mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col lg:flex-row justify-between">
                    <div class="flex flex-col">
                        <span class="font-bold text-gray-100 uppercase mt-4 md:mt-0 mb-2">Klientams</span>
                        <hr>
                        <span class="my-2"><a href="{{route('home')}}" class="text-white py-1 text-md hover:text-white-500">D.U.K</a></span>
                        <span class="my-2"><a href="{{route('home')}}" class="text-white py-1 text-md hover:text-white-500">Pristatymas</a></span>
                        <span class="my-2"><a href="{{route('home')}}" class="text-white py-1 text-md hover:text-white-500">Grąžinomo sąlygos</a></span>


                    </div>
                    <div class="flex flex-col mt-1">
                        <span class="font-bold text-gray-100 uppercase mt-4 md:mt-0 mb-2">INFORMACIJA</span>
                        <hr>
                        <span class="my-2"><a href="{{route('home')}}" class="text-white py-1 text-md hover:text-white-500">Apie mus</a></span>
                        <span class="my-2"><a href="{{route('home')}}" class="text-white py-1 text-md hover:text-white-500">Parduotuvės teisės ir informacija</a></span>
                        <span class="my-2"><a href="{{route('home')}}" class="text-white py-1 text-md hover:text-white-500">Kontakai</a></span>

                    </div>
                    <div class="flex flex-col mt-1">
                        <span class="font-bold text-gray-100 uppercase mt-4 md:mt-0 mb-2">SUSISIEKTI SU MUMIS</span>
                        <hr>
{{--                        <form action="{{route('home')}}" method="POST">--}}
                            <div class="mb-3 mt-3 pt-0 flex flex-row">
                                <input type="text" placeholder="Vardas..." class="px-3 py-3 mr-5 placeholder-gray-400 text-gray-700 relative bg-white bg-white rounded text-sm border border-gray-400 outline-none focus:outline-none focus:shadow-outline w-full" />
                                <input type="mail" placeholder="El.paštas..." class="px-3 py-3 placeholder-gray-400 text-gray-700 relative bg-white bg-white rounded text-sm border border-gray-400 outline-none focus:outline-none focus:shadow-outline w-full" />

                            </div>
                            <label class="block">
                                <textarea class="form-textarea mt-1 rounded block w-full" rows="5" placeholder="Jūsų tekstas..."></textarea>
                            </label>
                            <button class="bg-none mt-3 w-36 p-2 hover:bg-blue-500 hover:text-white text-blue-500 border border-2 border-blue-700 transition duration-300 ease-in-out rounded-full text-lg focus:outline-none  focus:shadow-outline font-semibold">
                                Siųsti
                            </button>
{{--                        </form>--}}
                    </div>


                </div>
            </div>
        </div>
        <div class="container mx-auto px-6">
            <div class="mt-16 border-t-2 border-gray-300 flex flex-col items-center">
                <div class="sm:w-2/3 text-center py-6">
                    <p class="text-sm text-white font-bold mb-2">
                        HouseHold UAB ©
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
