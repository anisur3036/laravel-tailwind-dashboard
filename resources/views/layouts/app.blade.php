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
        <div id="sidebar" class="sidebar">
            <div id="brand" class="fixed sm:left-0 h-14 top-0 w-64 py-4 pr-0 pl-4 text-white shadow">
                <div class="flex items-center justify-between">
                    <a href="#" class="flex items-center font-bold"><x-icon.user class="w-8 h-8 text-white inline" /><h2 class="pl-2 text-2xl">SKCL</h2></a>
                    <button class="close-btn sm:hidden cursor-pointer mr-2"><x-icon.close class="text-white"></x-icon.close></button> 
                </div>
            </div>
            <nav id="sidebar-menu" class="mt-14 mb-8 overflow-y-scroll h-screen pb-14">
                <ul class="pt-2">
                    <li class="w-full mb-4 pl-6 text-sm text-slate-600 overflow-hidden whitespace-nowrap">Dashboard</li>
                    <li class="w-full mb-3 pl-4"><a class="flex items-center pl-1 block text-gray-400 hover:text-white" href="#"><x-icon.home class="inline"></x-icon.home><span class="pl-2">Home</span></a></li>
                    <li class="w-full mb-3 pl-4"><a class="flex items-center pl-1 block text-gray-400 hover:text-white" href="#"><x-icon.photograph class="inline"></x-icon.photograph><span class="pl-2">Services</span></a></li>
                    <li class="pl-4 mb-3">
                        <a href="#" class="flex items-center pl-1 block text-gray-400 hover:text-white">
                            <x-icon.close class="inline"></x-icon.close>
                            <span class="pl-2">dashboard</span>
                        </a>
                    </li>
                    <li class="w-full my-4 pl-6 text-sm text-slate-600 overflow-hidden whitespace-nowrap">Reports</li>
                    <li class="w-full mb-2 pl-4"><a class="flex items-center pl-1 block text-gray-400 hover:text-white" href="#"><x-icon.home class="inline"></x-icon.home><span class="pl-2">Home</span></a></li>
                    <li class="w-full mb-2 pl-4"><a class="flex items-center pl-1 block text-gray-400 hover:text-white" href="#"><x-icon.photograph class="inline"></x-icon.photograph><span class="pl-2">Services</span></a></li>
                    <li class="pl-4 mb-2">
                        <a href="#" class="flex items-center pl-1 block text-gray-400 hover:text-white">
                            <x-icon.close class="inline"></x-icon.close>
                            <span class="pl-2">dashboard</span>
                        </a>
                    </li>
                    <li class="w-full my-4 pl-6 text-sm text-slate-600 overflow-hidden whitespace-nowrap">User</li>
                    <li class="w-full mb-2 pl-4"><a class="flex items-center pl-1 block text-gray-400 hover:text-white" href="#"><x-icon.home class="inline"></x-icon.home><span class="pl-2">Home</span></a></li>
                    <li class="w-full mb-2 pl-4"><a class="flex items-center pl-1 block text-gray-400 hover:text-white" href="#"><x-icon.photograph class="inline"></x-icon.photograph><span class="pl-2">Services</span></a></li>
                    <li class="pl-4 mb-2">
                        <a href="#" class="flex items-center pl-1 block text-gray-400 hover:text-white">
                            <x-icon.close class="inline"></x-icon.close>
                            <span class="pl-2">dashboard</span>
                        </a>
                    </li>
                    <li class="w-full my-4 pl-6 text-sm text-slate-600 overflow-hidden whitespace-nowrap">Control Panel</li>
                    <li class="w-full mb-2 pl-4"><a class="flex items-center pl-1 block text-gray-400 hover:text-white" href="#"><x-icon.home class="inline"></x-icon.home><span class="pl-2">Home</span></a></li>
                    <li class="w-full mb-2 pl-4"><a class="flex items-center pl-1 block text-gray-400 hover:text-white" href="#"><x-icon.photograph class="inline"></x-icon.photograph><span class="pl-2">Services</span></a></li>
                    <li class="pl-4 mb-2">
                        <a href="#" class="flex items-center pl-1 block text-gray-400 hover:text-white">
                            <x-icon.close class="inline"></x-icon.close>
                            <span class="pl-2">dashboard</span>
                        </a>
                    </li>
                    <li class="w-full my-4 pl-6 text-sm text-slate-600 overflow-hidden whitespace-nowrap">Administrator</li>
                    <li class="w-full mb-2 pl-4"><a class="flex items-center pl-1 block text-gray-400 hover:text-white" href="#"><x-icon.home class="inline"></x-icon.home><span class="pl-2">Home</span></a></li>
                    <li class="w-full mb-2 pl-4"><a class="flex items-center pl-1 block text-gray-400 hover:text-white" href="#"><x-icon.photograph class="inline"></x-icon.photograph><span class="pl-2">Services</span></a></li>
                    <li class="pl-4 mb-2">
                        <a href="#" class="flex items-center pl-1 block text-gray-400 hover:text-white">
                            <x-icon.close class="inline"></x-icon.close>
                            <span class="pl-2">dashboard</span>
                        </a>
                    </li>
                    <li class="w-full my-4 pl-6 text-sm text-slate-600 overflow-hidden whitespace-nowrap">Apps</li>
                    <li class="w-full mb-2 pl-4"><a class="flex items-center pl-1 block text-gray-400 hover:text-white" href="#"><x-icon.home class="inline"></x-icon.home><span class="pl-2">Home</span></a></li>
                    <li class="w-full mb-2 pl-4"><a class="flex items-center pl-1 block text-gray-400 hover:text-white" href="#"><x-icon.photograph class="inline"></x-icon.photograph><span class="pl-2">Services</span></a></li>
                    <li class="pl-4 mb-2">
                        <a href="#" class="flex items-center pl-1 block text-gray-400 hover:text-white">
                            <x-icon.close class="inline"></x-icon.close>
                            <span class="pl-2">dashboard</span>
                        </a>
                    </li>
                    {{-- <li class="sidebar-submenu pl-4 mb-2">
                        <a href="#" class="has-sidebar-subitem flex items-center pl-1 mb-2 block text-gray-400 hover:text-white">
                            <x-icon.close class="inline"></x-icon.close>
                            <span class="pl-2 flex-1">account</span>
                            <span class="icon mr-4 transition"><x-icon.chevron-right class="inline"></x-icon.chevron-right></span>
                        </a>
                        <ul class="sidebar-menu-dropdown-content p-0 h-[0] overflow-hidden transition-[height]">
                            <li class="py-1">
                                <a class="pl-10 text-gray-400" href="#">
                                    edit profile
                                </a>
                            </li>
                            <li class="py-1">
                                <a class="pl-10 py-4 text-gray-400" href="#">
                                    account settings
                                </a>
                            </li>
                            <li class="py-1">
                                <a class="pl-10 py-4 text-gray-400" href="#">
                                    billing
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                </ul>
            </nav>
        </div>
        <div id="main-container" class="main-container">
            <header class="flex items-center justify-between fixed left-0 h-14 sm:left-64 bg-white w-full sm:w-[calc(100%-256px)] top-0 z-50 p-2 shadow transition-[left]">
                <div>
                    <button class="menu-btn inline">
                        <x-icon.menu id="menu" class="inline cursor-pointer"></x-icon.menu>
                    </button>
                    <span>Welcome</span>
                </div>
                <div class="relative flex items-center sm:w-[400px]">
                    <x-icon.search class="absolute left-[8px] text-gray-400"></x-icon.search>
                    <input class="pl-8 w-full py-1 rounded-full border-gray-300 focus:ring-1 focus:ring-gray-50" type="text" name="search" placeholder="Search...">
                </div>
                <div id="dropdown" class="group relative flex items-center">
                    <h4 class="hidden sm:block">Anis</h4>
                    <img class="ml-2 cursor-pointer rounded-full object-cover mr-8" src="https://avatars.githubusercontent.com/u/5952472?v=4" alt="Anisur Rahman" width="30" height="30">
                    <div class="dropdown-content absolute mt-8 top-0 right-0 hidden p-1.5 shadow min-w-[160px] bg-white border h-[80px] z-20 group-hover:block group-hover:cursor-pointer">
                        <p>Profile</p>
                        <p>Logout</p>
                    </div>
                </div>
            </header>
            <main class="mt-14 min-h-[calc(100vh)] bg-gray-100">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
