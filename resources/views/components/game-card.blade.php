<div class="game t-8">
    <div class="relative inline-block">
        <a href="{{route('games.show', $game['slug'])}}">
            <img src="{{ $game['coverImageUrl'] }}" alt="{{$game['name']}}" class="hover:opacity-75 transition ease-in-out duration-150">
        </a>

        @if($game['rating'])
            <div id="{{$game['slug']}}" class="absolute w-16 h-16 bg-gray-800 rounded-full text-sm" style="bottom: -20px;right: -20px;">
                @push('scripts')
                    @include('partials/_rating',['slug' => $game['slug'],'rating' => $game['rating'],'event' => null])
                @endpush
            </div>
        @endif

    </div>

    <a href="{{route('games.show', $game['slug'])}}" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8"> {{$game['name']}}</a>
    <div class="text-gray-400 mt-1">
        {{ $game['platforms']  }}
    </div>
</div>
