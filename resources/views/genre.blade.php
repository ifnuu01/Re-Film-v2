@extends('layouts.layout-user');

@section('title', 'ReFilm | Genre')

@section('content')
<main class="px-4 lg:px-10 grid grid-cols-1 lg:grid-cols-4 gap-4 mt-[140px]">
    <div class="flex gap-x-4 items-center justify-between lg:col-span-4">
        <h1 class="text-white text-2xl font-bold">List Film Genre {{$genre->name}}</h1>
        <a href="{{ route('home') }}" class="bg-[#FC882F] px-4 py-2 rounded-lg hover:opacity-80"><svg class="w-[16px] inline fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M575.8 255.5c0 18-15 32.1-32 32.1l-32 0 .7 160.2c0 2.7-.2 5.4-.5 8.1l0 16.2c0 22.1-17.9 40-40 40l-16 0c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1L416 512l-24 0c-22.1 0-40-17.9-40-40l0-24 0-64c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32 14.3-32 32l0 64 0 24c0 22.1-17.9 40-40 40l-24 0-31.9 0c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2l-16 0c-22.1 0-40-17.9-40-40l0-112c0-.9 0-1.9 .1-2.8l0-69.7-32 0c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg></a>
    </div>
    <div class="lg:col-span-3">
        <div class="bg-[#22252F] p-4 rounded-lg col-span-3">
            <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-x-4">
                @forelse ($genre->films as $film)
                    <a href="{{route('film.show', $film)}}" class="rounded-lg cursor-pointer transform transition-transform duration-300 hover:scale-105">
                        <img src="{{asset('storage/'.$film->photo)}}" alt="" class="w-full h-[150px] md:h-[200px] lg:h-[250px] object-cover rounded-lg">
                        <h3 class="text-white font-semibold text-base mt-2">{{ Str::limit($film->title, 10) }}</h3>
                        <p class="text-[#5C636F] text-sm font-semibold">{{ $film->genre->name }}</p>
                    </a>
                @empty
                    <p class="text-white">No Film</p>
                @endforelse
            </div>
        </div>
    </div>
    <div>
        <div class="bg-[#22252F] p-2 rounded-lg h-fit">
            <h3 class="text-white text-2xl mb-4 font-semibold">List Genre</h3>
            <div class="grid grid-cols-3 lg:grid-cols-3 gap-2">
                @forelse ($genres as $item)
                <a href="{{route('genre.show', $item)}}" class="rounded-lg {{ $genre->id == $item->id ? 'bg-[#FC882F]' : 'bg-[#161A20] hover:bg-[#FC882F]' }} text-center cursor-pointer px-4 py-2 transition-all duration-300 ease-in-out ">
                    <h3 class="text-white font-semibold text-sm">{{ $item->name }}</h3>
                </a>                                    
                @empty
                    <p class="text-white">No Genre</p>
                @endforelse
            </div>
        </div>
    </div>
</main>
@endsection