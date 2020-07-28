<header class="border-b border-gray-800 px-6 py-4 flex justify-between items-center">

    <h1 class="font-bold tracking-widest uppercase">
        <img src="" alt="LOGO HERE" class="w-32 flex-none">
    </h1>

    <nav class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-4 py-6">

        <x-nav-link route="games">Games</x-nav-link>
        <x-nav-link route="reviews">Reviews</x-nav-link>
        <x-nav-link route="soon">Comming soon</x-nav-link>
    </nav>

    {{--<nav class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-4 py-6">


        <div class="flex flex-col lg:flex-row items-center">
            <a href="/">
                <img src="" alt="LOGO HERE" class="w-32 flex-none">
            </a>

            <ul class="flex ml-0 lg:ml-16 space-x-8">
                <li><a href="#" class="hover:text-gray-400">Games</a></li>
                <li><a href="#" class="hover:text-gray-400">Reviews</a></li>
                <li><a href="#" class="hover:text-gray-400">Comming soon</a></li>
            </ul>
        </div>

        <div class="flex items-center mt-6 lg:mt-0">
            <div class="relative">
                <input type="text"
                       class="bg-gray-800 text-sm rounded-full w-64 px-3 py-1 focus:outline-none focus:shadow-outline pl-8"
                       placeholder="Search...">
                <div class="absolute top-0 flex items-center h-full ml-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 icon icon-tabler icon-tabler-search" width="24"
                         height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#607D8B" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/>
                        <circle cx="10" cy="10" r="7"/>
                        <line x1="21" y1="21" x2="15" y2="15"/>
                    </svg>
                </div>
            </div>
            <div>
                <div class="ml-6"><a href="#"><img src="" alt="Avatar"></a></div>
            </div>
        </div>


    </nav>--}}

</header>
