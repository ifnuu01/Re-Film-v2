<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('script-top')
    <title>@yield('title')</title>
</head>
<body class="bg-[#161A20]">
    
    @include('layouts.navbar-user')

    @yield('content')

    @include('layouts.footer-user')
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        let typed = new Typed('#logo-refilm', {
            strings: ['ReFilm', 'Review Film'],
            typeSpeed: 50,
            backSpeed: 25,
            loop: true
        });

        const search = document.getElementById('search');
        const logoSearch = document.getElementById('logo-search');

        logoSearch.addEventListener('click', () => {
            search.classList.toggle('hidden');
        });

        const menuBtn = document.getElementById('menu-btn');
        const menuAuth = document.getElementById('menu-auth');

        menuBtn.addEventListener('click', () => {
            menuAuth.classList.toggle('hidden');
        });
    </script>
    @stack('scripts');
</body>
</html>