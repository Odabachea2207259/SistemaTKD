@php
use App\Http\Controllers\UserController;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title')</title>
</head>
<body id="body" class="relative min-h-screen flex items-center justify-center font-mono bg-opacity-30 transition duration-300 ease-linear">
    <div class="absolute inset-0 bg-[url('/img/wtu.png')] bg-no-repeat bg-center opacity-20 z-1"></div>

    <div class="absolute w-full h-full flex flex-col">
        <div class="w-full">
            <h1 class="text-end leading-none text-[3rem] sm:text-[3rem] lg:text-[6rem]">@yield('subtitle')</h1>
            <h2 class="text-black text-opacity-50 pl-10 text-[1rem] sm:text-[1rem] lg:text-[2.5rem]">@yield('main-section')</h2>
        </div>

        <div id="content" class="relative flex justify-center flex-wrap w-full h-[80%] transition duration-300 ease-linear">
            @yield('content')
        </div>
    </div>

    @extends('sidebar')

    <script src="https://cdn.tailwindcss.com"></script>
    @yield('scripts')
</body>
</html>