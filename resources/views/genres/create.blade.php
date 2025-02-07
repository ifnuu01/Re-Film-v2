@extends('layouts.dashboard')

@section('title', 'Create Genre')


@section('content')
    <form action="{{route('genres.store')}}" method="POST" class="bg-[#22252F] p-6 rounded-lg min-w-[360px] w-1/2">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-white text-sm font-bold mb-2">Genre Name</label>
            <input type="text" name="name" id="name" class="w-full px-3 py-2 bg-[#22252F] text-white rounded-lg focus:outline-none focus:ring focus:border-blue-300 @error('name') border-red-500 @enderror" value="{{ old('name') }}">
            @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <button type="submit" class="px-4 py-2 bg-[#2EBCF9] text-white font-bold rounded-lg">Create Genre</button>
        </div>
    </form>
@endsection