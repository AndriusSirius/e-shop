
@foreach($ParentCategories as $category)
    <div @click.away="open = false" class="lg:absolute lg:relative z-50 lg:m-10 " x-data="{ open: false }">
        <button @click="open = !open" class="flex flex-row items-center w-full text-sm focus:outline-none focus:shadow-outline font-bold text-black text-base">
            <span>{{$category->name}}</span>
            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="sm:relative lg:absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-96">
            <div class="mt-4 px-1 py-1 bg-white rounded-md shadow dark-mode:bg-gray-800">
                <div class="grid grid-cols-2 gap-2 lg:z-auto ">
                   @if(count($category->subcategory))
                        @include('category.subcategory',['subcategories' => $category->subcategory])
                    @endif
                </div>
            </div>
        </div>
    </div>
@endforeach
