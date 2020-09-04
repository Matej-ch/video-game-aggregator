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


    <x-modal
    title="This modal title" type="warning">

        <x-slot name="trigger"><button @click="on = true">Show Modal</button></x-slot>
        <h2>This is modal body</h2>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aperiam at culpa cupiditate earum eius enim esse explicabo incidunt minima nam nobis quidem recusandae saepe sunt tenetur totam, unde veniam.

    </x-modal>

@endsection
