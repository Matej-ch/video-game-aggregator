@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4" id="app">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Totally Tubular games</h2>

        <livewire:tubular-games></livewire:tubular-games>

        <div class="flex flex-col lg:flex-row my-10">

            <livewire:recently-reviewed-games></livewire:recently-reviewed-games>

            <div class="most-anticipated lg:w-1/4 mt-12 lg:mt-0">

                <livewire:most-anticipated-games></livewire:most-anticipated-games>

                <livewire:coming-soon-games></livewire:coming-soon-games>
            </div>
        </div>
    </div>

@endsection
