@extends('layouts.dashboard')

@section('title', 'Edit Film')

@section('content')
    <form action="{{route('films.update', $film->id)}}" method="POST" class="bg-[#22252F] p-6 rounded-lg lg:min-w-[360px] lg:w-1/2" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-white text-sm font-bold mb-2">Film Title</label>
            <input type="text" name="title" id="title" class="w-full px-3 py-2 bg-[#22252F] text-white rounded-lg focus:outline-none focus:ring focus:border-blue-300 @error('title') border-red-500 @enderror" value="{{ $film->title }}">
            @error('title')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="description" class="block text-white text-sm font-bold mb-2">Film Description</label>
            <textarea name="description" id="description" class="w-full px-3 py-2 bg-[#22252F] text-white rounded-lg focus:outline-none focus:ring focus:border-blue-300 @error('description') border-red-500 @enderror">{{ $film->description }}</textarea>
            @error('description')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="release_year" class="block text-white text-sm font-bold mb-2">Release Date</label>
            <input type="number" name="release_year" id="release_year" class="w-full px-3 py-2 bg-[#22252F] text-white rounded-lg focus:outline-none focus:ring focus:border-blue-300 @error('release_year') border-red-500 @enderror" value="{{ $film->release_year }}" min="1900" max="{{ date('Y') }}" placeholder="YYYY">
            @error('release_year')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="genre_id" class="block text-white text-sm font-bold mb-2">Genre</label>
            <select name="genre_id" id="genre_id" class="w-full px-3 py-2 bg-[#22252F] text-white rounded-lg focus:outline-none focus:ring focus:border-blue-300 @error('genre_id') border-red-500 @enderror">
                <option value="" selected>Select Genre</option>
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}" {{ $film->genre_id == $genre->id ? 'selected' : '' }}>{{ $genre->name }}</option>
                @endforeach
            </select>
            @error('genre_id')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="photo" class="block text-white text-sm font-bold mb-2">Poster Film</label>
            <input type="file" name="photo" id="photo" class="w-full px-3 py-2 bg-[#22252F] text-white rounded-lg border-solid border-[1px] border-[#5C636F]    focus:outline-none focus:ring focus:border-blue-300 @error('poster') border-red-500 @enderror">
            @error('photo')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <button type="submit" class="px-4 py-2 bg-[#2EBCF9] text-white font-bold rounded-lg">Update Film</button>
        </div>
    </form>
@endsection