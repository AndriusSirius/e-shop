<nav class="fixed z-50 top-24 my-2 w-full">
    <div x-data="{ show: true }" x-show="show"
         class=" flex justify-between items-center bg-red-500 border border-red-400 px-4 py-3 rounded relative" role="alert">
        <div>
            <h1 class="font-bold text-yellow-700">DĖMESIO!!!</h1>
            <p>TINKLAPIS SKIRTAS MOKYMOSI TIKSLAMS! JOKIŲ PREKIŲ UŽSISAKYTI NEGALITE, UŽ SUMOKĖTAS PREKES PINIGAI NEBUS GRĄŽINAMI!
                DĖKOJAME UŽ SUPRANTIGUMĄ.</p>
        </div>
        <div>
            <button type="button" @click="show = false" class=" text-yellow-700">
                <span class="text-2xl">&times;</span>
            </button>
        </div>
    </div>
</nav>
