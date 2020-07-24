<div wire:init="loadMostAnticipatedGames" class="pb-8">
    <h2 class="text-blue-500 uppercase">Most probable to blow your mind</h2>

    @forelse($mostAnticipatedGames as $game)
        <x-game-card-small :game="$game"/>
    @empty
        @foreach(range(1,3) as $game)
            <x-game-card-small-skeleton />
        @endforeach
    @endforelse
</div>
