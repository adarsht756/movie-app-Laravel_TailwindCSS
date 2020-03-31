<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie App</title>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body class="font-sans bg-gray-900 text-white">
<nav class="border-b border-gray-800">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
        <ul class="flex-col flex md:flex-row items-center">
            <li>
                <a href="{{ route('movies.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path
                            d="M9 11.75c-.69 0-1.25.56-1.25 1.25s.56 1.25 1.25 1.25 1.25-.56 1.25-1.25-.56-1.25-1.25-1.25zm6 0c-.69 0-1.25.56-1.25 1.25s.56 1.25 1.25 1.25 1.25-.56 1.25-1.25-.56-1.25-1.25-1.25zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8 0-.29.02-.58.05-.86 2.36-1.05 4.23-2.98 5.21-5.37C11.07 8.33 14.05 10 17.42 10c.78 0 1.53-.09 2.25-.26.21.71.33 1.47.33 2.26 0 4.41-3.59 8-8 8z"/>
                        <path fill="none" d="M0 0h24v24H0z"/>
                    </svg>
                </a>
            </li>
            <li class="md:ml-16">
                <a href="{{ route('movies.index') }}" class="hover:text-gray-300">Movies</a>
            </li>
            <li class="md:ml-6">
                <a href="#" class="hover:text-gray-300">TV shows</a>
            </li>
            <li class="md:ml-6">
                <a href="#" class="hover:text-gray-300">Actors</a>
            </li>
        </ul>
        <div class="flex-col md:flex-row items-center">
            <div class="relative">
                <input type="text" placeholder="Search"
                       class="bg-gray-800 rounded-full w-64 px-4 pl-8 py-1 focus:outline-none text-sm focus:shadow-outline">
                <div class="absolute top-0">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" role="img"
                         xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 512 512"
                         class="fill-current w-4 mt-2 ml-2 text-gray-400">
                        <path fill="currentColor"
                              d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</nav>

@yield('content')
</body>
</html>
