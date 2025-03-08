<nav class="flex justify-between items-center bg-[#161A20] px-4 lg:px-10 drop-shadow-lg fixed w-full z-10 top-0 h-24 ">
    <a href="/" class="flex items-center"><div class="text-transparent bg-clip-text bg-gradient-to-r from-[#FC882F] to-[#2EBCF9] text-3xl font-bold" id="logo-refilm"></div>
    </a>
    <ul class="flex gap-x-4 justify-center items-center">
        <svg id="logo-search" class="w-[24px] fill-[url(#grad1)] inline cursor-pointer animate-bounce mr-2"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/><defs>
            <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
              <stop offset="0%" style="stop-color:#FC882F;stop-opacity:1" />
              <stop offset="100%" style="stop-color:#2EBCF9;stop-opacity:1" />
            </linearGradient>
          </defs></svg>
        <form action="{{route('film.search')}}" method="GET" id="search" class="absolute hidden flex mx-auto right-0 left-0 items-center justify-center top-28 w-80 lg:w-1/2">
            <input type="text" name="search" class="bg-[#22252F] text-white px-4 py-2 rounded-l w-full border-none outline-none" placeholder="Search">
            <button type="submit" class="bg-gradient-to-r from-[#FC882F] to-[#2EBCF9] px-4 py-2 rounded-r text-white font-semibold">Search</button>
        </form>
        <div class="lg:hidden" id="logo">
            <svg id="menu-btn" class="w-[24px] fill-[url(#grad1)] inline cursor-pointer animate-bounce mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM64 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L96 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/><defs>
                <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" style="stop-color:#FC882F;stop-opacity:1" />
                  <stop offset="100%" style="stop-color:#2EBCF9;stop-opacity:1" />
                </linearGradient>
              </defs>
            </svg>
        </div>
        <div id="menu-auth" class="absolute right-4 rounded top-28 flex-col lg:flex-row gap-y-8 bg-[#161A20] lg:bg-transparent lg:relative lg:top-0 lg:right-0 lg:px-0 lg:py-0 px-4 py-4 flex lg:items-center justify-center gap-x-4 hidden lg:flex" id="menuAuth">
            @auth
            @if(auth()->user()->isAdmin())
                <li>
                    <a href="{{ route('dashboard') }}" class="bg-gradient-to-r from-[#FC882F] to-[#2EBCF9] px-4 py-2 text-white font-semibold rounded">Dashboard</a>
                </li>
            @endif
                <li>
                    <a href="{{ route('profile.edit') }}" class="bored-solid border-2 border-[#22252F] px-4 py-2 text-transparent bg-clip-text bg-gradient-to-r from-[#FC882F] to-[#2EBCF9] font-semibold rounded">Settings</a>
                </li>
                <li>
                    <a href="{{ route('logout') }}" class="bg-gradient-to-r from-[#FC882F] to-[#2EBCF9] px-4 py-2 text-white font-semibold rounded"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                </li>
            @else
                <li>
                    <a href="{{ route('register') }}" class="bg-gradient-to-r from-[#FC882F] to-[#2EBCF9] px-4 py-2 text-white font-semibold rounded">Register</a>
                </li>
                <li>
                    <a href="{{ route('login') }}" class="bored-solid border-2 border-[#22252F] px-4 py-2 text-transparent bg-clip-text bg-gradient-to-r from-[#FC882F] to-[#2EBCF9] font-semibold rounded">Login</a>
                </li>
            @endauth
        </div>
    </ul>
</nav>