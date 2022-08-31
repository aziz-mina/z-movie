<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title') </title>
    <meta content="Z Movie" name="title">
    <meta content="Z Movie is a Web App that have all movies , tv show and actors data" name="description">
    <meta content="Mina Isaac" name="author">
    <meta content="Z Movie , Z-Movie , The Movie" name="keywords">
    <meta content="Z Movie - Home of Movies" property="og:title">
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet" crossorigin="anonymous" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/custom.css">
    <livewire:styles>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</head>
<body class="bg-gray-900 text-white" onload="load()">
    <!-- Page Loader  -->
    <div id="loader">
        <i class="fas fa-play-circle text-orange-500"></i>
        <b class="uppercase font-semibold"> Z Movie </b>
    </div>
    <div class="hidden" id="page_content">
        <nav class="border-b border-gray-800">
            <div class="max-w-6xl mx-auto  px-4">
                <div class="flex justify-between">
                    <div class="flex">
                        <!-- Logo -->
                        <a href="{{ route('movies.index') }}" class="text-xl flex items-center py-5 px-2 hover:text-orange-500 uppercase">
                            <i class="fas fa-play-circle text-orange-500 mx-2"></i> <b> Z Movie</b>
                        </a>
                        <!-- Primary Nav -->
                        <ul class="hidden md:flex items-center flex flex-col md:flex-row  uppercase">
                            <li class="md:ml-16 mt-3 md:mt-0">
                                <a href="{{ route('movies.index') }}" class="hover:text-orange-500 active"><i class="fas fa-film"></i> Movies</a>
                            </li>
                            <li class="md:ml-6 mt-3 md:mt-0">
                                <a href="{{ route('tv.index') }}" class="hover:text-orange-500"><i class="fas fa-tv"></i> TV Shows</a>
                            </li>
                            <li class="md:ml-6 mt-3 md:mt-0">
                                <a href="{{ route('actors.index') }}" class="hover:text-orange-500"><i class="fas fa-users"></i> Actors</a>
                            </li>
                            <li class="md:ml-6 mt-3 md:mt-0">
                                <a href="{{ route('about.index') }}" class="hover:text-orange-500"><i class="fas fa-play-circle"></i> About</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Mobile Nav -->
                    <div class="hidden md:flex items-center space-x-1">
                        <div class="flex flex-col md:flex-row items-center">
                            <livewire:search-dropdown>
                        </div>
                    </div>
                    <!-- Mobile button -->
                    <div class="md:hidden flex items-center" id="mobile-menu-button">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Mobile menu -->
            <div class="hidden md:hidden" id="mobile-menu">
                <div class="flex flex-col md:flex-row items-center py-3">
                    <livewire:search-dropdown>
                </div>
                <a href="{{ route('movies.index') }}" class="block ml-2 py-2 px-3 text-sm text-center text-gray-500 hover:bg-gray-200"> <i class="fas fa-film"></i> Movies</a>
                <a href="{{ route('tv.index') }}" class="block ml-2 py-2 px-3 text-sm  text-center text-gray-500 hover:bg-gray-200"> <i class="fas fa-tv"></i> Tv Shows</a>
                <a href="{{ route('actors.index') }}" class="block ml-2 py-2 px-3 text-sm text-center text-gray-500 hover:bg-gray-200"> <i class="fas fa-users"></i> Actors</a>
                <a href="{{ route('about.index') }}" class="block ml-2 py-2 px-3 text-sm  text-center text-gray-500 hover:bg-gray-200"> <i class="fas fa-play-circle"></i> About</a>
            </div>
        </nav>
        <!-- End Navbar -->

        @yield('content')
        <footer class="border border-t border-gray-800">
            <div class="container mx-auto text-sm px-4 py-6 text-center text-gray-400">
                Made With <i class="fas fa-heart"></i> By <a href="https://www.mina-isaac.com" class="hover:text-gray-300 font-semibold">Mina Isaac </a> With <i class="fab fa-laravel"></i>
            </div>
        </footer>

    </div>

    <livewire:scripts>
    @yield('scripts')
    <script src="/js/main.js"></script>
</body>
</html>
