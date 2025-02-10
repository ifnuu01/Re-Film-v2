@extends('layouts.dashboard')


@section('title', 'Dashboard')


@section('content')
    <div class="flex flex-col gap-y-4">
        @if (session('status'))
            <div class="bg-green-500 text-white p-4 rounded-lg">
                {{ session('status') }}
            </div>
        @endif
        <h2 class="text-3xl text-white font-bold">Welcome to dashboard</h2>
        <div class="flex items-center gap-x-4 bg-[#22252F] p-4 rounded-lg">
            @if(auth()->user()->profile->photo)
                <img src="{{ asset('storage/' . auth()->user()->profile->photo) }}" alt="avatar" class="w-20 h-20 rounded-full object-cover">
            @else
                <img src="https://ui-avatars.com/api/?name={{auth()->user()->name}}&background=random&color=fff" alt="avatar" class="w-20 h-20 rounded-full">
            @endif
            <div>
                <h2 class="text-white
                text-2xl font-bold">{{auth()->user()->name}}</h2>
                <p class="text-gray-400">{{auth()->user()->email}}</p>
            </div>
        </div>
    </div>
@endsection