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
                    @forelse ($filmsPopuler as $film)
                        <a href="#" class="rounded-lg cursor-pointer">
                            <img src="{{asset('storage/'.$film->photo)}}" alt="" class="w-full h-[150px] md:h-[200px] lg:h-[250px] object-cover rounded-lg">
                            <h3 class="text-white font-semibold text-base mt-2">{{ $film->title }}</h3>
                            <p class="text-[#5C636F] text-sm font-semibold">{{ $film->genre->name }}</p>
                        </a>
                    @empty
                        <p class="text-white">No Film</p>
                    @endforelse
                </div>
            </div>
            <div>
                <h2 class="text-white font-bold text-2xl">Latest Release</h2>
                <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-x-4 mt-4">
                    @forelse ($films as $film)
                        <a href="#" class="rounded-lg cursor-pointer">
                            <img src="{{asset('storage/'.$film->photo)}}" alt="" class="w-full h-[150px] md:h-[200px] lg:h-[250px] object-cover rounded-lg">
                            <h3 class="text-white font-semibold text-base mt-2">{{ $film->title }}</h3>
                            <p class="text-[#5C636F] text-sm font-semibold">{{ $film->genre->name }}</p>
                        </a>
                    @empty
                        <p class="text-white">No Film</p>
                    @endforelse
                </div>
                <div class="w-full flex justify-center">
                    <button class="bg-gradient-to-r mt-4 mb-4 from-[#FC882F] to-[#2EBCF9] px-8 py-2 rounded-lg text-white font-semibold">Next</button>
                </div>
            </div>
        </div>

        <div>
            <div class="bg-[#22252F] p-2 rounded-lg h-fit">
                <h3 class="text-white text-2xl mb-4 font-semibold">List Genre</h3>
                <div class="grid grid-cols-3 lg:grid-cols-3 gap-2">
                    @forelse ($genres as $genre)
                        <a href="#" class="rounded-lg bg-[#161A20] text-center cursor-pointer px-4 py-2 hover:bg-gradient-to-t hover:duration-150 hover:from-[#FC882F] to-[#2EBCF9]">
                            <h3 class="text-white font-semibold text-sm">{{ $genre->name }}</h3>
                        </a>
                    @empty
                        <p class="text-white">No Genre</p>
                    @endforelse
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