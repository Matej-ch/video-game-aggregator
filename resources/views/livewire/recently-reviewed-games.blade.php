<div wire:init="loadRecentGames" class="recently-reviewed  w-full lg:w-3/4 mr-0 lg:mr-32">
    <h2 class="text-blue-500 uppercase">Recently Reviewed</h2>

    @forelse($recentlyReviewedGames as $game)
        <div class="recently-reviewed-container space-y-12 mt-8">
            <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                <div class="relative flex-none">
                    <a href=""><img src="{{ str_replace('thumb','cover_big',$game['cover']['url'])}}" alt="{{$game['name']}}" class="w-48 hover:opacity-75 transition ease-in-out duration-150"></a>

                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right: -20px;bottom: -20px">
                        <div class="font-semibold-text-xs flex justify-center items-center h-full">
                            {{ round($game['rating'],1)}}%
                        </div>
                    </div>
                </div>

                <div class="ml-6 lg:ml-12">
                    <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">{{$game['name']}}</a>
                    <div class="text-gray-400 mt-1">
                        @foreach($game['platforms'] as $platform)
                            @if (array_key_exists('abbreviation',$platform))
                                {{ $platform['abbreviation'] }},
                            @endif
                        @endforeach
                    </div>
                    <p class="mt-6 text-gray-400 hidden lg:block">{{$game['summary']}}
                    </p>
                </div>
            </div>
        </div>
    @empty
        <div class="spinner mt-8"></div>
    @endforelse
</div>
