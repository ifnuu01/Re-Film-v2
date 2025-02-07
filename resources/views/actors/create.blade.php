@extends('layouts.dashboard')

@section('title', 'Create Actor')


@section('content')
<form action="{{route('actors.store')}}" method="POST" class="bg-[#22252F] p-6 rounded-lg lg:min-w-[360px] lg:w-1/2" enctype="multipart/form-data">
    @csrf
    <div class="mb-4">
        <label for="name" class="block text-white text-sm font-bold mb-2">Actor Name</label>
        <input type="text" name="name" id="name" class="w-full px-3 py-2 bg-[#22252F] text-white rounded-lg focus:outline-none focus:ring focus:border-blue-300 @error('name') border-red-500 @enderror" value="{{ old('name') }}">
        @error('name')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label for="" class="block text-white text-sm font-bold mb-2">Actor Biography</label>
        <textarea name="biography" id="biography" class="w-full px-3 py-2 bg-[#22252F] text-white rounded-lg focus:outline-none focus:ring focus:border-blue-300 @error('biography') border-red-500 @enderror">{{ old('biography') }}</textarea>
        @error('biography')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label for="" class="block text-white text-sm font-bold mb-2">Cast Name</label>
        <select name="cast_id" id="cast_id" class="w-full px-3 py-2 bg-[#22252F] text-white rounded-lg focus:outline-none focus:ring focus:border-blue-300 @error('cast_id') border-red-500 @enderror">
            <option value="">Select Cast</option>
            @foreach ($casts as $cast)
                <option value="{{$cast->id}}">{{$cast->name}}</option>
            @endforeach
        </select>
        @error('cast_id')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label for="" class="block text-white text-sm font-bold mb-2">Film Name</label>
        <select name="film_id" id="film_id" class="w-full px-3 py-2 bg-[#22252F] text-white rounded-lg focus:outline-none focus:ring focus:border-blue-300 @error('film_id') border-red-500 @enderror">
            <option value="">Select Film</option>
            @foreach ($films as $film)
                <option value="{{$film->id}}">{{$film->title}}</option>
            @endforeach
        </select>
        @error('film_id')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label for="photo" class="block text-white text-sm font-bold mb-2">Photo</label>
        <input type="file" name="photo" id="photo" class="w-full px-3 py-2 bg-[#22252F] text-white rounded-lg border-solid border-[1px] border-[#5C636F]    focus:outline-none focus:ring focus:border-blue-300 @error('photo') border-red-500 @enderror">
        @error('photo')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <button type="submit" class="px-4 py-2 bg-[#2EBCF9] text-white font-bold rounded-lg">Create Actor</button>
    </div>
</form>
@endsection