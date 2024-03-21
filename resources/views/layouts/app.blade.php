<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="flex">
            <div class="bg-gray-200 w-56 h-screen shadow">
                <img src="https://www.bitmapitsolution.com/images/logo/logo.png" alt="" class="p-2 bg-white w-10/12 mt-5 mx-auto rounded-lg shadow">
                <div class="mt-5">
                    <a href="" class="mt-2 text-xl block border-b border-blue-300 p-2 hover:bg-blue-500 hover:text-white">Dashboard</a>
                    <a href="" class="mt-2 text-xl block border-b border-blue-300 p-2 hover:bg-blue-500 hover:text-white">Categories</a>
                    <a href="" class="mt-2 text-xl block border-b border-blue-300 p-2 hover:bg-blue-500 hover:text-white">News</a>
                    <a href="" class="mt-2 text-xl block border-b border-blue-300 p-2 hover:bg-blue-500 hover:text-white">Logout</a>
                </div>
            </div>
            <div class="flex-1 p-4">
                @yield('content')
            </div>
        </div>
    </body>
</html>
