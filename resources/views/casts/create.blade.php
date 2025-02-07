@extends('layouts.dashboard')

@section('title', 'Create Cast')

@section('content')
    <form action="{{route('casts.store')}}" method="POST" class="bg-[#22252F] p-6 rounded-lg lg:min-w-[360px] lg:w-1/2" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-white text-sm font-bold mb-2">Cast Name</label>
            <input type="text" name="name" id="name" class="w-full px-3 py-2 bg-[#22252F] text-white rounded-lg focus:outline-none focus:ring focus:border-blue-300 @error('name') border-red-500 @enderror" value="{{ old('name') }}">
            @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="" class="block text-white text-sm font-bold mb-2">Cast Biography</label>
            <textarea name="biography" id="biography" class="w-full px-3 py-2 bg-[#22252F] text-white rounded-lg focus:outline-none focus:ring focus:border-blue-300 @error('biography') border-red-500 @enderror">{{ old('biography') }}</textarea>
            @error('biography')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="birth_date" class="block text-white text-sm font-bold mb-2">Date of Birth</label>
            <input type="date" name="birth_date" id="birth_date" class="w-full px-3 py-2 bg-[#22252F] text-white rounded-lg focus:outline-none focus:ring focus:border-blue-300 @error('birth_date') border-red-500 @enderror" value="{{ old('birth_date') }}">
            @error('birth_date')
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
            <button type="submit" class="px-4 py-2 bg-[#2EBCF9] text-white font-bold rounded-lg">Create Cast</button>
        </div>
    </form>
@endsection