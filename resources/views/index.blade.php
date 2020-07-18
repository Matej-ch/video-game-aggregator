@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Totally Tubular games</h2>

        <div class="tubular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800 pb-16">
            <div class="game t-8">
                <div class="relative inline-block">
                    <a href=""><img src="" alt="Game image" class="hover:opacity-75 transition ease-in-out duration-150"></a>

                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px;bottom: -20px">
                        <div class="font-semibold-text-xs flex justify-center items-center h-full">
                            99
                        </div>
                    </div>
                </div>

                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8"> Name of the game</a>
                <div class="text-gray-400 mt-1">Platform</div>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row my-10">
            <div class="recently-reviewed  w-full lg:w-3/4 mr-0 lg:mr-32">
                <h2 class="text-blue-500 uppercase">Recently Reviewed</h2>
                <div class="recently-reviewed-container space-y-12 mt-8">
                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href=""><img src="" alt="Game image" class="w-48 hover:opacity-75 transition ease-in-out duration-150"></a>

                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right: -20px;bottom: -20px">
                                <div class="font-semibold-text-xs flex justify-center items-center h-full">
                                    99
                                </div>
                            </div>
                        </div>

                        <div class="ml-6 lg:ml-12">
                            <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4"> Name of the game</a>
                            <div class="text-gray-400 mt-1">Platform</div>
                            <p class="mt-6 text-gray-400 hidden lg:block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A,
                                ab alias dolores eos error facilis fugit id illum minima minus possimus quae quos saepe
                                sapiente tempora totam ullam, veritatis vitae?
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="most-aticipated lg:w-1/4 mt-12 lg:mt-0">
                <h2 class="text-blue-500 uppercase">Most probable to blow your mind</h2>
                <div class="most-anticipated-container space-y-10 mt-8">
                    <div class="game flex">
                        <a href=""><img src="" alt="Game image" class="w-16 hover:opacity-75 transition ease-in-out duration-150"></a>

                        <div class="ml-4">
                            <a href="" class="hover:text-blue-300">Name of game</a>
                            <div class="text-gray-400 text-sm mt-1">Release date</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
