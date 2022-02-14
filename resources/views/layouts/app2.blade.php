<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased bg-gray-100">
        <input type="checkbox" id="menu">
        <div id="sidebar" class="w-64 -left-[100%] fixed sm:left-0 top-0 h-screen bg-gray-600 z-50 transition-[width]" style="left: 0 !important; z-index: 9999 !important;">
            <div id="brand" class="h-[90px] py-4 pr-0 pl-4 text-white">
                <h2 class="flex items-center text-2xl font-bold"><span class="inline-block mr-4"><x-icon.user class="w-8 h-8 text-white" /></span><a href="#">SKCL</a></h2>
            </div>
            <nav id="sidebar-menu" class="mt-1">
                <ul>
                    <li class="w-full mb-2 pl-4"><a class="flex items-center pl-1 block text-white" href="#"><x-icon.home class="inline"></x-icon.home><span class="pl-2">Home</span></a></li>
                    <li class="w-full mb-2 pl-4"><a class="flex items-center pl-1 block text-white" href="#"><x-icon.photograph class="inline"></x-icon.photograph><span class="pl-2">Services</span></a></li>
                    <li class="w-full mb-2 pl-4"><a class="flex items-center pl-1 block text-white" href="#"><x-icon.network class="inline"></x-icon.network><span class="pl-2">Contact</span></a></li>
                    <li class="w-full mb-2 pl-4"><a class="flex items-center pl-1 block text-white" href="#"><x-icon.chart-pie class="inline"></x-icon.chart-pie><span class="pl-2">Views</span></a></li>
                    <li class="w-full mb-2 pl-4"><a class="flex items-center pl-1 block text-white" href="#"><x-icon.trending-up class="inline"></x-icon.trending-up><span class="pl-2">Reports</span></a></li>
                </ul>
            </nav>
        </div>
        <div id="main-container" class="ml-0 sm:ml-64 transition-[margin-left]">
            <header class="flex justify-between fixed left-0 sm:left-64 bg-white w-full sm:w-[calc(100%-256px)] top-0 z-50 p-1 shadow transition-[left]">
                <p>
                    <label for="menu">
                        <x-icon.menu id="menu" class="inline cursor-pointer"></x-icon.menu><span>Welcome</span>
                    </label>
                </p>
                <div class="search-wrapper relative flex items-center sm:w-[400px]">
                    <x-icon.search class="absolute left-[8px]"></x-icon.search>
                    <input class="pl-8 w-full py-1 rounded-full border-gray-300 focus:ring-1 focus:ring-gray-50" type="text" name="search" placeholder="Search...">
                </div>
                <div id="dropdown" class="group relative flex items-center">
                    <h4>Anis</h4>
                    <img class="ml-2 cursor-pointer rounded-full object-cover mr-8" src="https://avatars.githubusercontent.com/u/5952472?v=4" alt="Anisur Rahman" width="30" height="30">
                    <div class="dropdown-content absolute mt-8 top-0 right-0 hidden p-1.5 shadow min-w-[160px] bg-white border h-[80px] z-20 group-hover:block group-hover:cursor-pointer">
                        <p>Profile</p>
                        <p>Logout</p>
                    </div>
                </div>
            </header>
            <main class="mt-12 px-4 py-2 min-h-[calc(100vh)] bg-gray-100">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
