@extends('layouts.app')

@section('content')


<div class="container mx-auto px-4">
    <h1 class="text-lg mb-2">Create post</h1>
    <form method="POST" action="/posts" x-data @submit.prevent="$dispatch('recaptcha')">

        @csrf

        <div class="mb-6">
            <label for="title" class="block mb-2 uppercase font-bold text-xs text-gray-700">Title</label>
            <input type="text" class="border border-gray-400 p-2 w-full text-gray-700" name="title" id="title" required>

            @error('title')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="body" class="block mb-2 uppercase font-bold text-xs text-gray-700">Body</label>
            <textarea type="text" class="border border-gray-400 p-2 w-full text-gray-700" name="body" id="body" required></textarea>

            @error('body')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <x-recaptcha />

        <div class="mb-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500" data-sitekey="{{config('services.recaptcha.key')}}" data-callback='onSubmit'>
                Submit
            </button>
        </div>

        <ul>
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            @endif
        </ul>

    </form>
</div>



@endsection
