<section class="container mx-auto  my-7  ">

   <div class="flex flex-wrap justify-between w-2/3 mx-auto ">


      @foreach($products as $product)
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

         <!-- Article -->
         <article class="overflow-hidden rounded-lg shadow-lg max-h-full">

            <a href="#">

               <img alt="Placeholder" class="block h-auto w-full" src="{{ asset('images/kitchen.jpg') }}">
            </a>

            <div class="flex items-center justify-between leading-tight p-2 md:p-4">
               <div class="mx-auto h-16" >
                  <h1 class="text-lg text-center">
                     <a class="no-underline hover:underline text-black" href="product/{{$product->id}}">
                        {{$product->title}}
                     </a>

                  </h1>
               </div>
            </div>
            <div class=" flex justify-center">
            <button class="  bg-white w-64 p-2 hover:bg-blue-500 hover:text-white text-blue-500 border border-2 border-blue-700 transition duration-300 ease-in-out rounded-full text-lg focus:outline-none  focus:shadow-outline font-semibold "> <svg class="h-6  inline mx-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
               </svg>Į krepšelį</button>
               </div>

            <div class="flex items-center justify-between leading-none p-2 md:p-4">
               <p class=" mx-5 my-2 text-sm   text-gray-600 line-through lg:text-left md:text-center  sm:text-center">pirma kaina€ </p>
               <p class=" mx-5  font-bold text-lg lg:text-left md:text-center  sm:text-center">{{$product->price}} €</p>
            </div>

         </article>
         <!-- END Article -->

      </div>
      @endforeach



   </div>
</section>
