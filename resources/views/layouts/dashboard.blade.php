<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-[#161A20]">
    {{-- Navbar --}}
    <nav class="flex justify-between bg-[#22252F] p-4 items-center fixed w-full z-10 h-18">
        <div class="pl-64" id="logo">
            <svg id="menu-btn" class="w-[24px] fill-[url(#grad1)] inline cursor-pointer animate-bounce mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM64 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L96 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/><defs>
                <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                  <stop offset="0%" style="stop-color:#FC882F;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#2EBCF9;stop-opacity:1" />
                </linearGradient>
              </defs>
            </svg>
            <a href="{{ route('dashboard') }}" class="text-white">Re Film</a>
        </div>
        <div class="relative" x-data="{ open: false }">
            <button @click="open = !open" class="px-4 py-2 bg-[#2EBCF9] text-white font-bold rounded-lg">
                Menu ▼
            </button>

            <!-- Dropdown -->
            <div x-show="open" @click.away="open = false"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-90"
                class="absolute right-0 mt-2 w-48 bg-[#2EBCF9] text-black shadow-lg rounded-lg py-2 text-white">
                
                <a href="#" class="block px-4 py-2 hover:bg-white hover:text-[#2EBCF9]">Profile</a>
                <a href="#" class="block px-4 py-2 hover:bg-white hover:text-[#2EBCF9]">Settings</a>
                <a href="#" class="block px-4 py-2 hover:bg-white hover:text-[#2EBCF9]">Logout</a>
            </div>
        </div>
    </nav>

    {{-- sidebar --}}
    <div id="sidebar" class="bg-[#22252F] h-full fixed w-64 top-0 left-0 z-10">
        <div class="p-4 border-b border-[#161A20]">
            <a href="#" class="block text-white py-2">Dashboard</a>
        </div>
        <div class="flex flex-col p-4 gap-y-2">
            <a href="{{route('genres.index')}}" class="flex items-center gap-2 text-white py-2 bg-gradient-to-r from-[#FC882F] to-[#2EBCF9] px-4 rounded hover:border-2 hover:border-solid hover:border-white"><svg class="w-[16px] inline fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M40 48C26.7 48 16 58.7 16 72l0 48c0 13.3 10.7 24 24 24l48 0c13.3 0 24-10.7 24-24l0-48c0-13.3-10.7-24-24-24L40 48zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L192 64zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-288 0zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-288 0zM16 232l0 48c0 13.3 10.7 24 24 24l48 0c13.3 0 24-10.7 24-24l0-48c0-13.3-10.7-24-24-24l-48 0c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24l0 48c0 13.3 10.7 24 24 24l48 0c13.3 0 24-10.7 24-24l0-48c0-13.3-10.7-24-24-24l-48 0z"/></svg><span>Genre</span></a>
            <a href="{{route('films.index')}}" class="flex items-center gap-2 text-white py-2 bg-gradient-to-r from-[#FC882F] to-[#2EBCF9] px-4 rounded hover:border-2 hover:border-solid hover:border-white"><svg class="w-[16px] inline fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M0 128C0 92.7 28.7 64 64 64l256 0c35.3 0 64 28.7 64 64l0 256c0 35.3-28.7 64-64 64L64 448c-35.3 0-64-28.7-64-64L0 128zM559.1 99.8c10.4 5.6 16.9 16.4 16.9 28.2l0 256c0 11.8-6.5 22.6-16.9 28.2s-23 5-32.9-1.6l-96-64L416 337.1l0-17.1 0-128 0-17.1 14.2-9.5 96-64c9.8-6.5 22.4-7.2 32.9-1.6z"/></svg><span>Film</span></a>
        </div>
    </div>

    {{-- Content --}}
    <section class="pt-20 lg:pl-64" id="content">
        <div class="px-4 py-4">
            <h2 class="font-bold text-white text-2xl mb-4">
                @yield('title')
            </h2>
            @yield('content')
        </div>
    </section>
    <script>
        const menuBtn = document.getElementById('menu-btn');
        const containerLogo = document.getElementById('logo');
        const sidebar = document.getElementById('sidebar');
        const content = document.getElementById('content');

        menuBtn.addEventListener('click', () => {
            sidebar.classList.toggle('hidden');
            containerLogo.classList.toggle('pl-64');
            content.classList.toggle('lg:pl-64');
        });
    </script>
</body>
</html>