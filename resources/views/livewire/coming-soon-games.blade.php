<div wire:init="loadComingSoonGames">
    <h2 class="text-blue-500 uppercase">Coming soon</h2>

    @forelse($comingSoonGames as $game)

        <div class="most-anticipated-container space-y-10 mt-8">
            <div class="game flex">
                <a href="">
                    <img src="{{ $game['coverImageUrl'] }}" alt="{{$game['name']}}" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                </a>

                <div class="ml-4">
                    <a href="" class="hover:text-blue-300">{{$game['name']}}</a>
                    <div class="text-gray-400 text-sm mt-1">{{ $game['releaseDate'] }}</div>
                </div>
            </div>
        </div>

    @empty
        @foreach(range(1,3) as $game)
            <div class="most-anticipated-container space-y-10 mt-8">
                <div class="game flex">
                    <div class="bg-gray-800 w-16 h-20 flex-none"></div>

                    <div class="ml-4">
                        <div class="rounded leading-tight bg-gray-700 text-transparent">game title is here</div>
                        <div class="rounded leading-tight text-sm mt-2 bg-gray-700 inline-block text-transparent">date is here</div>
                    </div>
                </div>
            </div>
        @endforeach
    @endforelse
</div>
