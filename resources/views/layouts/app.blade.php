<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/main.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <livewire:styles></livewire:styles>
    <title>Video games</title>

    {{ $head ?? '' }}

    <x-social-media-meta-tags
    title="Small Island Developing States Photo Submission"
    description="View the album on Flickr."
    card="summary"
    image=""
    >
    </x-social-media-meta-tags>

</head>

<body class="bg-gray-900 text-white">
    @include('partials/header')
<main class="py-8">
    @yield('content')
</main>


<footer class="border-t border-gray-800">
    <div class="container mx-auto px-4 py-6">
        Powered by <a href="#" class="underline hover:text-gray-400">IGDB API</a>
    </div>
</footer>

    <livewire:scripts></livewire:scripts>
    <script src="/js/app.js"></script>
    @stack('scripts')

</body>
</html>
