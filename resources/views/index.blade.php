@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Totally Tubular games</h2>

        <div class="tubular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800 pb-16">

            @foreach($popularGames as $game)
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
            @endforeach

        </div>

        <div class="flex flex-col lg:flex-row my-10">
            <div class="recently-reviewed  w-full lg:w-3/4 mr-0 lg:mr-32">
                <h2 class="text-blue-500 uppercase">Recently Reviewed</h2>

                @foreach($recentlyReviewedGames as $game)
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
                @endforeach
            </div>

            <div class="most-aticipated lg:w-1/4 mt-12 lg:mt-0">
                <h2 class="text-blue-500 uppercase">Most probable to blow your mind</h2>

                @foreach($mostAnticipatedGames as $game)
                    <div class="most-anticipated-container space-y-10 mt-8">
                        <div class="game flex">
                            <a href=""><img src="{{ str_replace('thumb','cover_small',$game['cover']['url'])}}" alt="{{$game['name']}}" class="w-16 hover:opacity-75 transition ease-in-out duration-150"></a>

                            <div class="ml-4">
                                <a href="" class="hover:text-blue-300">{{$game['name']}}</a>
                                <div class="text-gray-400 text-sm mt-1">{{ \Carbon\Carbon::parse($game['first_release_date'])->format('M d, Y')}}</div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <h2 class="text-blue-500 uppercase">Coming soon</h2>

                @foreach($comingSoonGames as $game)
                    @if(array_key_exists('cover',$game))
                        <div class="most-anticipated-container space-y-10 mt-8">
                            <div class="game flex">
                                <a href="">
                                    <img src="{{ str_replace('thumb','cover_small',$game['cover']['url']) }}" alt="{{$game['name']}}" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                                </a>

                                <div class="ml-4">
                                    <a href="" class="hover:text-blue-300">{{$game['name']}}</a>
                                    <div class="text-gray-400 text-sm mt-1">{{ \Carbon\Carbon::parse($game['first_release_date'])->format('M d, Y')}}</div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

@endsection
