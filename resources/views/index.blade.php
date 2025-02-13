<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body class="bg-[#161A20]">
    
    @include('layouts.navbar-user')

    <main class="px-4 lg:px-10 grid grid-cols-1 lg:grid-cols-4 gap-4 mt-[167px]">
        <div class="lg:col-span-3 flex flex-col gap-4">
            <div class="rounded-lg">
                <img src="{{asset('assets/images/image-2.jpg')}}" alt="" class="w-full h-[200px] lg:h-[250px] lg:h-[380px] object-cover rounded-lg">
            </div>
            <div>
                <h2 class="text-white font-bold text-2xl">Populer</h2>
                <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-x-4 mt-4">
                    <a href="#" class="rounded-lg cursor-pointer">
                        <img src="{{asset('assets/images/image-1.jpg')}}" alt="" class="w-full h-[150px] md:h-[200px] lg:h-[250px] object-cover rounded-lg">
                        <h3 class="text-white font-semibold text-base mt-2">Judul</h3>
                        <p class="text-[#5C636F] text-sm font-semibold">Genre</p>
                    </a>
                    <a href="#" class="rounded-lg cursor-pointer">
                        <img src="{{asset('assets/images/image-2.jpg')}}" alt="" class="w-full h-[150px] md:h-[200px] lg:h-[250px] object-cover rounded-lg">
                        <h3 class="text-white font-semibold text-base mt-2">Judul</h3>
                        <p class="text-[#5C636F] text-sm font-semibold">Genre</p>
                    </a>
                    <a href="#" class="rounded-lg cursor-pointer">
                        <img src="{{asset('assets/images/image-2.jpg')}}" alt="" class="w-full h-[150px] md:h-[200px] lg:h-[250px] object-cover rounded-lg">
                        <h3 class="text-white font-semibold text-base mt-2">Judul</h3>
                        <p class="text-[#5C636F] text-sm font-semibold">Genre</p>
                    </a>
                    <a href="#" class="rounded-lg cursor-pointer">
                        <img src="{{asset('assets/images/image-2.jpg')}}" alt="" class="w-full h-[150px] md:h-[200px] lg:h-[250px] object-cover rounded-lg">
                        <h3 class="text-white font-semibold text-base mt-2">Judul</h3>
                        <p class="text-[#5C636F] text-sm font-semibold">Genre</p>
                    </a>
                    <a href="#" class="rounded-lg cursor-pointer">
                        <img src="{{asset('assets/images/image-2.jpg')}}" alt="" class="w-full h-[150px] md:h-[200px] lg:h-[250px] object-cover rounded-lg">
                        <h3 class="text-white font-semibold text-base mt-2">Judul</h3>
                        <p class="text-[#5C636F] text-sm font-semibold">Genre</p>
                    </a>
                </div>
            </div>
            <div>
                <h2 class="text-white font-bold text-2xl">Latest Release</h2>
                <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-x-4 mt-4">
                    <a href="#" class="rounded-lg cursor-pointer">
                        <img src="{{asset('assets/images/image-1.jpg')}}" alt="" class="w-full h-[150px] md:h-[200px] lg:h-[250px] object-cover rounded-lg">
                        <h3 class="text-white font-semibold text-base mt-2">Judul</h3>
                        <p class="text-[#5C636F] text-sm font-semibold">Genre</p>
                    </a>
                    <a href="#" class="rounded-lg cursor-pointer">
                        <img src="{{asset('assets/images/image-1.jpg')}}" alt="" class="w-full h-[150px] md:h-[200px] lg:h-[250px] object-cover rounded-lg">
                        <h3 class="text-white font-semibold text-base mt-2">Judul</h3>
                        <p class="text-[#5C636F] text-sm font-semibold">Genre</p>
                    </a>
                    <a href="#" class="rounded-lg cursor-pointer">
                        <img src="{{asset('assets/images/image-1.jpg')}}" alt="" class="w-full h-[150px] md:h-[200px] lg:h-[250px] object-cover rounded-lg">
                        <h3 class="text-white font-semibold text-base mt-2">Judul</h3>
                        <p class="text-[#5C636F] text-sm font-semibold">Genre</p>
                    </a>
                    <a href="#" class="rounded-lg cursor-pointer">
                        <img src="{{asset('assets/images/image-2.jpg')}}" alt="" class="w-full h-[150px] md:h-[200px] lg:h-[250px] object-cover rounded-lg">
                        <h3 class="text-white font-semibold text-base mt-2">Judul</h3>
                        <p class="text-[#5C636F] text-sm font-semibold">Genre</p>
                    </a>
                    <a href="#" class="rounded-lg cursor-pointer">
                        <img src="{{asset('assets/images/image-2.jpg')}}" alt="" class="w-full h-[150px] md:h-[200px] lg:h-[250px] object-cover rounded-lg">
                        <h3 class="text-white font-semibold text-base mt-2">Judul</h3>
                        <p class="text-[#5C636F] text-sm font-semibold">Genre</p>
                    </a>
                    <a href="#" class="rounded-lg cursor-pointer">
                        <img src="{{asset('assets/images/image-2.jpg')}}" alt="" class="w-full h-[150px] md:h-[200px] lg:h-[250px] object-cover rounded-lg">
                        <h3 class="text-white font-semibold text-base mt-2">Judul</h3>
                        <p class="text-[#5C636F] text-sm font-semibold">Genre</p>
                    </a>
                    <a href="#" class="rounded-lg cursor-pointer">
                        <img src="{{asset('assets/images/image-2.jpg')}}" alt="" class="w-full h-[150px] md:h-[200px] lg:h-[250px] object-cover rounded-lg">
                        <h3 class="text-white font-semibold text-base mt-2">Judul</h3>
                        <p class="text-[#5C636F] text-sm font-semibold">Genre</p>
                    </a>
                    <a href="#" class="rounded-lg cursor-pointer">
                        <img src="{{asset('assets/images/image-2.jpg')}}" alt="" class="w-full h-[150px] md:h-[200px] lg:h-[250px] object-cover rounded-lg">
                        <h3 class="text-white font-semibold text-base mt-2">Judul</h3>
                        <p class="text-[#5C636F] text-sm font-semibold">Genre</p>
                    </a>
                    <a href="#" class="rounded-lg cursor-pointer">
                        <img src="{{asset('assets/images/image-2.jpg')}}" alt="" class="w-full h-[150px] md:h-[200px] lg:h-[250px] object-cover rounded-lg">
                        <h3 class="text-white font-semibold text-base mt-2">Judul</h3>
                        <p class="text-[#5C636F] text-sm font-semibold">Genre</p>
                    </a>
                    <a href="#" class="rounded-lg cursor-pointer">
                        <img src="{{asset('assets/images/image-2.jpg')}}" alt="" class="w-full h-[150px] md:h-[200px] lg:h-[250px] object-cover rounded-lg">
                        <h3 class="text-white font-semibold text-base mt-2">Judul</h3>
                        <p class="text-[#5C636F] text-sm font-semibold">Genre</p>
                    </a>
                </div>
                <div class="w-full flex justify-center">
                    <button class="bg-gradient-to-r mt-4 mb-4 from-[#FC882F] to-[#2EBCF9] px-8 py-2 rounded-lg text-white font-semibold">Next</button>
                </div>
            </div>
        </div>

        <div>
            <div class="bg-[#22252F] p-2 rounded-lg h-fit">
                <form action="">
                    <select name="genre" id="genre" class="text-white text-base font-semibold bg-[#161A20] cursor-pointer border-none outline-none w-full rounded-lg">
                        <option class="text-sm" value="" disabled selected>Select Genre</option>
                        <option class="text-sm" value="action">Action</option>
                        <option class="text-sm" value="comedy">Comedy</option>
                        <option class="text-sm" value="drama">Drama</option>
                        <option class="text-sm" value="horror">Horror</option>
                        <option class="text-sm" value="romance">Romance</option>
                        <option class="text-sm" value="sci-fi">Sci-Fi</option>
                    </select>
                </form>
            </div>
            <div class="bg-[#22252F] p-4 rounded-lg mt-4 h-fit">
                <h2 class="text-lg text-white font-semibold">List Cast</h2>
                <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-3 gap-4 mt-4">
                    <a href="">
                        <img src="{{asset('assets/images/image-1.jpg')}}" alt="" class="w-full h-[100px] lg:h-[110px] object-cover rounded-lg">
                        <h3 class="text-sm text-white mt-2">Name</h3>
                    </a>
                    <a href="">
                        <img src="{{asset('assets/images/image-1.jpg')}}" alt="" class="w-full h-[100px] lg:h-[110px] object-cover rounded-lg">
                        <h3 class="text-sm text-white mt-2">Name</h3>
                    </a>
                    <a href="">
                        <img src="{{asset('assets/images/image-1.jpg')}}" alt="" class="w-full h-[100px] lg:h-[110px] object-cover rounded-lg">
                        <h3 class="text-sm text-white mt-2">Name</h3>
                    </a>
                    <a href="">
                        <img src="{{asset('assets/images/image-1.jpg')}}" alt="" class="w-full h-[100px] lg:h-[110px] object-cover rounded-lg">
                        <h3 class="text-sm text-white mt-2">Name</h3>
                    </a>
                    <a href="">
                        <img src="{{asset('assets/images/image-1.jpg')}}" alt="" class="w-full h-[100px] lg:h-[110px] object-cover rounded-lg">
                        <h3 class="text-sm text-white mt-2">Name</h3>
                    </a>
                    <a href="">
                        <img src="{{asset('assets/images/image-1.jpg')}}" alt="" class="w-full h-[100px] lg:h-[110px] object-cover rounded-lg">
                        <h3 class="text-sm text-white mt-2">Name</h3>
                    </a>
                    <a href="">
                        <img src="{{asset('assets/images/image-1.jpg')}}" alt="" class="w-full h-[100px] lg:h-[110px] object-cover rounded-lg">
                        <h3 class="text-sm text-white mt-2">Name</h3>
                    </a>
                    <a href="">
                        <img src="{{asset('assets/images/image-1.jpg')}}" alt="" class="w-full h-[100px] lg:h-[110px] object-cover rounded-lg">
                        <h3 class="text-sm text-white mt-2">Name</h3>
                    </a>
                    <a href="">
                        <img src="{{asset('assets/images/image-1.jpg')}}" alt="" class="w-full h-[100px] lg:h-[110px] object-cover rounded-lg">
                        <h3 class="text-sm text-white mt-2">Name</h3>
                    </a>
                </div>
                <div class="w-full flex justify-center">
                    <button class="bg-gradient-to-r mt-4 from-[#FC882F] to-[#2EBCF9] px-8 py-2 rounded-lg text-white font-semibold">Next</button>
                </div>
            </div>
            <div class="bg-[#22252F] p-4 rounded-lg mt-4 h-fit">
                <h2 class="text-lg text-white font-semibold">List Actor</h2>
                <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-3 gap-4 mt-4">
                    <a href="">
                        <img src="{{asset('assets/images/image-1.jpg')}}" alt="" class="w-full h-[100px] lg:h-[110px] object-cover rounded-lg">
                        <h3 class="text-sm text-white mt-2">Name</h3>
                    </a>
                    <a href="">
                        <img src="{{asset('assets/images/image-1.jpg')}}" alt="" class="w-full h-[100px] lg:h-[110px] object-cover rounded-lg">
                        <h3 class="text-sm text-white mt-2">Name</h3>
                    </a>
                    <a href="">
                        <img src="{{asset('assets/images/image-1.jpg')}}" alt="" class="w-full h-[100px] lg:h-[110px] object-cover rounded-lg">
                        <h3 class="text-sm text-white mt-2">Name</h3>
                    </a>
                    <a href="">
                        <img src="{{asset('assets/images/image-1.jpg')}}" alt="" class="w-full h-[100px] lg:h-[110px] object-cover rounded-lg">
                        <h3 class="text-sm text-white mt-2">Name</h3>
                    </a>
                    <a href="">
                        <img src="{{asset('assets/images/image-1.jpg')}}" alt="" class="w-full h-[100px] lg:h-[110px] object-cover rounded-lg">
                        <h3 class="text-sm text-white mt-2">Name</h3>
                    </a>
                    <a href="">
                        <img src="{{asset('assets/images/image-1.jpg')}}" alt="" class="w-full h-[100px] lg:h-[110px] object-cover rounded-lg">
                        <h3 class="text-sm text-white mt-2">Name</h3>
                    </a>
                    <a href="">
                        <img src="{{asset('assets/images/image-1.jpg')}}" alt="" class="w-full h-[100px] lg:h-[110px] object-cover rounded-lg">
                        <h3 class="text-sm text-white mt-2">Name</h3>
                    </a>
                    <a href="">
                        <img src="{{asset('assets/images/image-1.jpg')}}" alt="" class="w-full h-[100px] lg:h-[110px] object-cover rounded-lg">
                        <h3 class="text-sm text-white mt-2">Name</h3>
                    </a>
                    <a href="">
                        <img src="{{asset('assets/images/image-1.jpg')}}" alt="" class="w-full h-[100px] lg:h-[110px] object-cover rounded-lg">
                        <h3 class="text-sm text-white mt-2">Name</h3>
                    </a>
                </div>
                <div class="w-full flex justify-center">
                    <button class="bg-gradient-to-r mt-4 from-[#FC882F] to-[#2EBCF9] px-8 py-2 rounded-lg text-white font-semibold">Next</button>
                </div>
            </div>
        </div>
    </main>

    @include('layouts.footer-user')

    <script>
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
</body>
</html>