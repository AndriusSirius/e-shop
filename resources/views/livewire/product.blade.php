<x-app-layout>
@livewire('header')
    <div class="w-full">
        <div class=" py-3 flex sm:w-full justify-around border-solid border-2 border-light-black-500 pb-5">
            <div class=" flex w-1/3">
                <button class="  font-semibold mx-2 lg:h-20   lg:p-6 md:h-16 md:mx-4 tablinks focus:outline-none  focus:shadow-outline" onClick="openAcc(event, 'aboutProduct') ">Apie produktą</button>
                <button class=" font-semibold lg:h-20   lg:p-6 md:h-16  tablinks focus:outline-none  focus:shadow-outline" onClick="openAcc(event, 'tech')">Techninės charakteristikos</button>
            </div>
            <div class="flex  justify-end w-1/6">
                <button class=" my-4 bg-blue-600 font-semibold text-white rounded-full  w-36 h-12  hover:bg-blue-600 hover: focus:outline-none  focus:shadow-outline  "> Pridėti į krepšelį</button>
            </div>
        </div>
        <section class="width-full flex ">
            <div class=" w-6/12 bg-gray-100">
            
                <div id="aboutProduct" style="display: block;" class="tabcontent flex mx-auto w-6/12 mt-5">
                    <span class="text-3xl font-bold   ">{{$product['title']}} </span>
                    <p class="mt-5 ">Apie Produktą:</p>
                    <ul class=" mx-4 my-5 list-disc ">
                        {{$product['content']}}
                    </ul>
                    <p class="pb-2">Turite klausimų? <a class="underline" href="">Kontaktai</a></p>
                </div>

                <div id="tech" class="tabcontent hidden flex mx-auto w-6/12 mt-5">
                    <span class="text-3xl font-bold ">{{$product['title']}}</span>
                    <p class="mt-5 ">Techninės charakteristikos:</p>
                    <ul class=" mx-4 my-5 list-disc">
                        {{$product['tech_content']}}
                    </ul>
                    <p class="pb-2">Turite klausimų? <a class="underline" href="">Kontaktai</a></p>
                </div>
            </div>

            <div class=" flex  w-6/12 bg-white-900 block">

                <div class="swiper-container max-h-96 ">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        @foreach($product->images as $img)
                        <div class="swiper-slide" w-24 h-15 m-5">
                            <img class="object-contain w-full  h-full cursor-pointer" src="{{ asset($img->path) }}" alt="Trulli" onclick="myFunction(this);">
                        </div>
                        @endforeach

                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <!-- If we need scrollbar -->
                    <div class="swiper-scrollbar"></div>
                </div>
            </div>

    </div>

    </section>

</x-app-layout>

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper-container', {

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });

    function openAcc(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active text-green-500 border-b-4 border-blue-600 p-1", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active text-green-500 border-b-4 border-blue-600 p-1";
    }

</script>
