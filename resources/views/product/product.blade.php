<x-app-layout>
<div class=" py-3 flex justify-between border-solid border-2 border-light-black-500 pb-5">
    <div class="  w-1/3">
        <button class=" font-semibold h-7 p-6 tablinks focus:outline-none  focus:shadow-outline" onClick="openAcc(event, 'aboutProduct')">Apie produktą</button>
        <button class="font-semibold h-7   p-6 tablinks focus:outline-none  focus:shadow-outline" onClick="openAcc(event, 'tech')">Techninės charakteristikos</button>
    </div>
    <div class=" flex  w-1/3">
        <!-- <span  class=" flex flex-end ">Xjievru</span> -->
        <label class=" text-sm font-bold" for="price">{{$product['price']}}€
            <input class=" my-3 mr-3  h-10 w-16 bg-gray-200" min="0" type="number" id="price">
        </label>
        <button class="my-2 bg-blue-600 font-semibold text-white rounded-full  w-32 h-12 hover:bg-blue-600 hover: focus:outline-none  focus:shadow-outline  "> Add to cart</button>
    </div>
</div>
<section class="width-full flex ">
    <div class=" w-6/12 bg-gray-100">
        <div id="aboutProduct" class="tabcontent hidden  mt-5  flex mx-auto w-6/12  ">
            <span class="text-3xl font-bold   ">{{$product['title']}} </span>
            <p class="mt-5 ">Apie Produktą:</p>
            <ul class=" mx-4 my-5 list-disc ">
                {{$product['content']}}
            </ul>
            <p class="pb-2">Turite klausimų? <a class="underline" href="">Kontaktai</a></p>
        </div>

        <div id="tech" class="tabcontent hidden flex mx-auto w-6/12  mt-5  ">
            <span class="text-3xl font-bold ">{{$product['title']}}</span>
            <p class="mt-5 ">Techninės charakteristikos:</p>
            <ul class=" mx-4 my-5 list-disc">
                {{$product['tech_content']}}
            </ul>
            <p class="pb-2">Turite klausimų? <a class="underline" href="">Kontaktai</a></p>
        </div>
    </div>

    <div class=" flex  w-6/12 bg-white-900 block">
        <div class="flex flex-col">
        @foreach($product->images as $img)
            <div class="w-24 h-15 m-5">
                <img class="object-contain w-full  h-full cursor-pointer" src="{{ asset($img->path) }}" alt="Trulli" onclick="myFunction(this);">
            </div>
        @endforeach
        </div>
        <div class="hidden relative m-5">
            <span class="font-bold text-3xl cursor-pointer absolute right-1" onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
            <img class="h-full" id="expandedImg" style="width:100%">
            <div id="imgtext"></div>
        </div>
    </div>

</section>
</x-app-layout>
<script>
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

    function myFunction(imgs) {
        var expandImg = document.getElementById("expandedImg");
        expandImg.src = imgs.src;
        expandImg.parentElement.style.display = "block";
    }
</script>
