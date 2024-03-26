<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="{{asset('mycss/style.css')}}">
    <script src="{{asset('myjs/script.js')}}"></script> --}}
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="bg-blue-600 text-white flex justify-between items-center px-20 py-2">
        <img src="{{asset('logo.png')}}" class="h-20 bg-white" alt="">
        <div class="font-bold">
            <a href="{{route('home')}}" class="mx-2">Home</a>
            <a href="{{route('about')}}" class="mx-2">About</a>
            <a href="{{route('services')}}" class="mx-2">Services</a>
            <a href="{{route('contact')}}" class="mx-2">Contact</a>
            <a href="{{route('login')}}" class="mx-2">Login</a>
        </div>
    </nav>
    @yield('content')
    <footer class="mt-5">
        <div class="bg-blue-600 text-white text-center py-2">
            &copy; {{now()->year}} Bitmap IT Solution
        </div>
    </footer>
</body>
</html>
