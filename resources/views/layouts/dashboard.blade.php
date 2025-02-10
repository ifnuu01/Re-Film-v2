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
    <nav class="flex justify-between bg-[#22252F] p-4 items-center fixed w-full z-10 h-20">
        <div class="lg:pl-64" id="logo">
            <svg id="menu-btn" class="w-[24px] fill-[url(#grad1)] inline cursor-pointer animate-bounce mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM64 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L96 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/><defs>
                <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                  <stop offset="0%" style="stop-color:#FC882F;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#2EBCF9;stop-opacity:1" />
                </linearGradient>
              </defs>
            </svg>
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
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <a href="{{route('profile.edit')}}" class="block px-4 py-2 hover:bg-white hover:text-[#2EBCF9]">Settings</a>
                    <button type="submit" class="w-full text-left px-4 py-2 hover:bg-white hover:text-[#2EBCF9]">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    {{-- sidebar --}}
    <div id="sidebar" class="bg-[#22252F] h-full fixed w-60 lg:w-64 top-0 left-0 z-10 hidden lg:block">
        <div class="p-4 border-b border-[#161A20]">
            <a href="{{route('dashboard')}}" class="block py-2 font-bold text-2xl text-transparent bg-clip-text bg-gradient-to-r from-[#FC882F] to-[#2EBCF9]">Dashboard</a>
        </div>
        <div class="flex flex-col p-4 gap-y-2">
            <h2 class="text-lg text-white font-bold mb-2">Main Features</h2>
            <a href="{{route('genres.index')}}" class="flex items-center gap-2 text-white py-2 bg-gradient-to-r from-[#FC882F] to-[#2EBCF9] px-4 rounded hover:border-2 hover:border-solid hover:border-white"><svg class="w-[16px] inline fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M40 48C26.7 48 16 58.7 16 72l0 48c0 13.3 10.7 24 24 24l48 0c13.3 0 24-10.7 24-24l0-48c0-13.3-10.7-24-24-24L40 48zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L192 64zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-288 0zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-288 0zM16 232l0 48c0 13.3 10.7 24 24 24l48 0c13.3 0 24-10.7 24-24l0-48c0-13.3-10.7-24-24-24l-48 0c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24l0 48c0 13.3 10.7 24 24 24l48 0c13.3 0 24-10.7 24-24l0-48c0-13.3-10.7-24-24-24l-48 0z"/></svg><span>Genre</span></a>
            <a href="{{route('films.index')}}" class="flex items-center gap-2 text-white py-2 bg-gradient-to-r from-[#FC882F] to-[#2EBCF9] px-4 rounded hover:border-2 hover:border-solid hover:border-white"><svg class="w-[16px] inline fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M0 128C0 92.7 28.7 64 64 64l256 0c35.3 0 64 28.7 64 64l0 256c0 35.3-28.7 64-64 64L64 448c-35.3 0-64-28.7-64-64L0 128zM559.1 99.8c10.4 5.6 16.9 16.4 16.9 28.2l0 256c0 11.8-6.5 22.6-16.9 28.2s-23 5-32.9-1.6l-96-64L416 337.1l0-17.1 0-128 0-17.1 14.2-9.5 96-64c9.8-6.5 22.4-7.2 32.9-1.6z"/></svg><span>Film</span></a>
            <a href="{{route('casts.index')}}" class="flex items-center gap-2 text-white py-2 bg-gradient-to-r from-[#FC882F] to-[#2EBCF9] px-4 rounded hover:border-2 hover:border-solid hover:border-white"><svg class="w-[16px] inline fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192l42.7 0c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0L21.3 320C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7l42.7 0C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3l-213.3 0zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352l117.3 0C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7l-330.7 0c-14.7 0-26.7-11.9-26.7-26.7z"/></svg><span>Cast</span></a>
            <a href="{{route('actors.index')}}" class="flex items-center gap-2 text-white py-2 bg-gradient-to-r from-[#FC882F] to-[#2EBCF9] px-4 rounded hover:border-2 hover:border-solid hover:border-white"><svg class="w-[16px] inline fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M224 16c-6.7 0-10.8-2.8-15.5-6.1C201.9 5.4 194 0 176 0c-30.5 0-52 43.7-66 89.4C62.7 98.1 32 112.2 32 128c0 14.3 25 27.1 64.6 35.9c-.4 4-.6 8-.6 12.1c0 17 3.3 33.2 9.3 48l-59.9 0C38 224 32 230 32 237.4c0 1.7 .3 3.4 1 5l38.8 96.9C28.2 371.8 0 423.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7c0-58.5-28.2-110.4-71.7-143L415 242.4c.6-1.6 1-3.3 1-5c0-7.4-6-13.4-13.4-13.4l-59.9 0c6-14.8 9.3-31 9.3-48c0-4.1-.2-8.1-.6-12.1C391 155.1 416 142.3 416 128c0-15.8-30.7-29.9-78-38.6C324 43.7 302.5 0 272 0c-18 0-25.9 5.4-32.5 9.9c-4.8 3.3-8.8 6.1-15.5 6.1zm56 208l-12.4 0c-16.5 0-31.1-10.6-36.3-26.2c-2.3-7-12.2-7-14.5 0c-5.2 15.6-19.9 26.2-36.3 26.2L168 224c-22.1 0-40-17.9-40-40l0-14.4c28.2 4.1 61 6.4 96 6.4s67.8-2.3 96-6.4l0 14.4c0 22.1-17.9 40-40 40zm-88 96l16 32L176 480 128 288l64 32zm128-32L272 480 240 352l16-32 64-32z"/></svg><span>Actor</span></a>
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
            containerLogo.classList.toggle('pl-56');
            containerLogo.classList.toggle('lg:pl-64');
            containerLogo.classList.toggle('lg:pl-0');
            sidebar.classList.toggle('lg:block');
            sidebar.classList.toggle('lg:hidden');
            content.classList.toggle('lg:pl-64');
        });
    </script>
</body>
</html>