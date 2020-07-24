<div wire:init="loadComingSoonGames">
    <h2 class="text-blue-500 uppercase">Coming soon</h2>

    @forelse($comingSoonGames as $game)
        <x-game-card-small :game="$game"/>
    @empty
        @foreach(range(1,3) as $game)
            <x-game-card-small-skeleton />
        @endforeach
    @endforelse
</div>
