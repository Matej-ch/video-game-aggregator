<div class="flex items-center mt-6 lg:mt-0">
    <div class="relative">
        <input
            wire:model.debounce.300ms="search"
            type="text"
            class="bg-gray-800 text-sm rounded-full focus:outline-none focus:shadow-outline w-64 px-3 pl-8 py-1"
            placeholder="Search...">

        <div wire:loading class="spinner absolute top-0 right-0 mr-4 mt-3" style="position: absolute"></div>

        @if(strlen($search) >=2)
            <div class="absolute bg-gray-800 text-xs rounded w-64 mt-2 z-50">
                @if(count($searchResults) > 0)
                    <ul>
                        @foreach($searchResults as $game)
                            <li class="border-b border-gray-700">
                                <a href="{{ route('games.show',$game['slug']) }}" class="block hover:bg-gray-700 flex items-center px-3 py-3 transition ease-in-out">
                                    @if (isset($game['cover']))
                                        <img src="{{ Str::replaceFirst('thumb','cover_small',$game['cover']['url']) }}" alt="cover" class="w-10">
                                    @else
                                        <img src="" alt="" class="w-10">
                                    @endif

                                    <span class="ml-4">{{ $game['name'] }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <div class="px-3 py-3">No results for {{$search}}</div>
                @endif

            </div>
        @endif

    </div>
</div>
