<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/main.css">
    <title>Video games</title>
</head>

<body class="bg-gray-900 text-white">
    <header class="border-b border-gray-800">
        <nav class="container mx-auto flex items-center justify-between px-4 py-6">
            <div class="flex items-center">
                <a href="/">
                    <img src="" alt="LOGO HERE" class="w-32 flex-none">
                </a>

                <ul class="flex ml-16 space-x-8">
                    <li><a href="#" class="hover:text-gray-400">Games</a></li>
                    <li><a href="#" class="hover:text-gray-400">Reviews</a></li>
                    <li><a href="#" class="hover:text-gray-400">Comming soon</a></li>
                </ul>
            </div>

            <div class="flex items-center">
                <div class="relative">
                    <input type="text" class="bg-gray-800 text-sm rounded-full w-64 px-3 py-1 focus:outline-none focus:shadow-outline pl-8" placeholder="Search...">
                    <div class="absolute top-0 flex items-center h-full ml-2">
                        <svg class="fill-current w-6" viewBox="0 0 91.06 103.612"><g data-name="Calque 2">
                                <path d="M52 68.76a29 29 0 01-3-.15 28.35 28.35 0 112.95.15zM34.83 19.34a27.06 27.06 0 1019.84-5.94 27.09 27.09 0 00-19.84 5.94z"/>
                                <path d="M52 62.63a22.69 22.69 0 01-2.31-.12A22.3 22.3 0 0137.83 23 22.3 22.3 0 1152 62.63zm-.1-43.23a20.83 20.83 0 00-13.2 4.69 21 21 0 1013.2-4.69zM4.6 82.89h-.48a4.59 4.59 0 01-2.43-8.12l25.54-20.82.86 1.05L2.56 75.8a3.22 3.22 0 104.06 5L32.16 60l.84 1.06-25.52 20.8a4.55 4.55 0 01-2.88 1.03zM86 35a.69.69 0 01-.12-1.36l4.37-.78a.68.68 0 01.24 1.35l-4.36.79zM82.82 25.3a.69.69 0 01-.31-1.3l4-2a.68.68 0 01.62 1.22l-4 2a.68.68 0 01-.31.08zM77 16.91a.69.69 0 01-.47-1.18l3.22-3a.69.69 0 01.94 1l-3.22 3a.68.68 0 01-.47.18zM69 10.54a.69.69 0 01-.59-1l2.19-3.87a.68.68 0 111.19.68l-2.21 3.84a.68.68 0 01-.58.35zM59.49 6.73h-.16a.69.69 0 01-.51-.82l1-4.32a.69.69 0 011.33.32l-1 4.32a.69.69 0 01-.66.5zM49.3 5.8a.68.68 0 01-.68-.64L48.36.73a.68.68 0 111.37-.08L50 5.07a.68.68 0 01-.64.72zM39.28 7.82a.68.68 0 01-.64-.45l-1.52-4.16a.68.68 0 111.29-.47l1.51 4.16a.69.69 0 01-.64.92z"/>
                            </g>
                        </svg>
                    </div>
                </div>
                <div>
                    <div class="ml-6"><a href="#"><img src="" alt="Avatar"></a></div>
                </div>
            </div>
        </nav>
    </header>

<main class="py-8">
    @yield('content')
</main>


<footer class="border-t border-gray-800">
    <div class="container mx-auto px-4 py-6">
        Powered by <a href="#" class="underline hover:text-gray-400">IGDB API</a>
    </div>
</footer>
</body>
</html>
