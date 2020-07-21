<div wire:init="loadTubularGames" class="tubular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800 pb-16 w-full">

    @forelse($tubularGames as $game)
        <div class="game t-8">
            <div class="relative inline-block">
                <a href=""><img src="{{ str_replace('thumb','cover_big',$game['cover']['url'])}}" alt="{{$game['name']}}" class="hover:opacity-75 transition ease-in-out duration-150"></a>

                @if(array_key_exists('rating',$game))
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px;bottom: -20px">
                        <div class="font-semibold-text-xs flex justify-center items-center h-full">
                            {{round($game['rating'],1)}}%
                        </div>
                    </div>
                @endif
            </div>

            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8"> {{$game['name']}}</a>
            <div class="text-gray-400 mt-1">
                @foreach($game['platforms'] as $platform)
                    @if (array_key_exists('abbreviation',$platform))
                        {{ $platform['abbreviation'] }},
                    @endif
                @endforeach
            </div>
        </div>
    @empty
        <div class="spinner mt-8"></div>
    @endforelse
</div>
