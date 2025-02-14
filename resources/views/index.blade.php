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
                <form action="#" method="GET">
                    <select name="genre" id="genre" class="text-white text-base font-semibold bg-[#161A20] cursor-pointer border-none outline-none w-full rounded-lg" onchange="this.form.submit()">
                        <option class="text-sm" value="" disabled selected>Select Genre</option>
                        @forelse ($genres as $genre)
                            <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                        @empty
                            <option value="" disabled>No Genre</option>
                        @endforelse
                    </select>

                    <button class="bg-gradient-to-r mt-4 from-[#FC882F] to-[#2EBCF9] w-full py-2 rounded-lg text-white font-semibold">Search</button>
                </form>
            </div>
            <div class="bg-[#22252F] p-4 rounded-lg mt-4 h-fit">
                <h2 class="text-lg text-white font-semibold">List Cast</h2>
                <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-3 gap-4 mt-4">
                    @forelse ($casts as $cast)
                        <a href="">
                            <img src="{{asset('storage/'.$cast->photo)}}" alt="" class="w-full h-[100px] lg:h-[110px] object-cover rounded-lg">
                            <h3 class="text-sm text-white mt-2">{{ $cast->name }}</h3>
                        </a>
                    @empty
                        <p class="text-white">No Cast</p>
                    @endforelse
                </div>
                <div class="w-full flex justify-center mt-4">
                    @if ($casts->hasPages())
                        <div class="flex space-x-2">
                            @if ($casts->previousPageUrl())
                                <a href="{{ $casts->previousPageUrl() }}&casts_page={{ request('casts_page', 1) }}" 
                                    class="bg-gradient-to-r mt-4 mb-4 from-[#FC882F] to-[#2EBCF9] px-8 py-2 rounded-lg text-white font-semibold">
                                    Previous
                                </a>
                            @endif
                            @if ($casts->nextPageUrl())
                                <a href="{{ $casts->nextPageUrl() }}&casts_page={{ request('casts_page', 1) }}" 
                                    class="bg-gradient-to-r mt-4 mb-4 from-[#FC882F] to-[#2EBCF9] px-8 py-2 rounded-lg text-white font-semibold">
                                    Next
                                </a>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
            <div class="bg-[#22252F] p-4 rounded-lg mt-4 h-fit">
                <h2 class="text-lg text-white font-semibold">List Actor</h2>
                <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-3 gap-4 mt-4">
                    @forelse ($actors as $actor)
                        <a href="">
                            <img src="{{ asset('storage/'.$actor->photo) }}" alt="" class="w-full h-[100px] lg:h-[110px] object-cover rounded-lg">
                            <h3 class="text-sm text-white mt-2">{{ $actor->name }}</h3>
                        </a>
                    @empty
                        <p class="text-white">No Actor</p>
                    @endforelse
                </div>
                
                <div class="w-full flex justify-center mt-4">
                    @if ($actors->hasPages())
                        <div class="flex space-x-2">
                            @if ($actors->previousPageUrl())
                                <a href="{{ $actors->previousPageUrl() }}&actors_page={{ request('actors_page', 1) }}" 
                                    class="bg-gradient-to-r mt-4 mb-4 from-[#FC882F] to-[#2EBCF9] px-8 py-2 rounded-lg text-white font-semibold">
                                    Previous
                                </a>
                            @endif
                            @if ($actors->nextPageUrl())
                                <a href="{{ $actors->nextPageUrl() }}&actors_page={{ request('actors_page', 1) }}" 
                                    class="bg-gradient-to-r mt-4 mb-4 from-[#FC882F] to-[#2EBCF9] px-8 py-2 rounded-lg text-white font-semibold">
                                    Next
                                </a>
                            @endif
                        </div>
                    @endif
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