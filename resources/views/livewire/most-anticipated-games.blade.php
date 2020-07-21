<div wire:init="loadMostAnticipatedGames" class="pb-8">
    <h2 class="text-blue-500 uppercase">Most probable to blow your mind</h2>

    @forelse($mostAnticipatedGames as $game)
        <div class="most-anticipated-container space-y-10 mt-8">
            <div class="game flex">
                <a href=""><img src="{{ str_replace('thumb','cover_small',$game['cover']['url'])}}" alt="{{$game['name']}}" class="w-16 hover:opacity-75 transition ease-in-out duration-150"></a>

                <div class="ml-4">
                    <a href="" class="hover:text-blue-300">{{$game['name']}}</a>
                    <div class="text-gray-400 text-sm mt-1">{{ \Carbon\Carbon::parse($game['first_release_date'])->format('M d, Y')}}</div>
                </div>
            </div>
        </div>
    @empty
        <div class="spinner mt-8"></div>
    @endforelse
</div>
