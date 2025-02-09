@extends('layouts.dashboard')

@section('title', 'Profile')


@section('content')
    <div class="flex flex-col gap-y-4">
        <div class="flex items-center gap-x-4 bg-[#22252F] p-4 rounded-lg w-fit">
            <img src="https://ui-avatars.com/api/?name={{auth()->user()->name}}&background=random&color=fff" alt="avatar" class="w-20 h-20 rounded-full">
            <div>
                <h2 class="text-white text-2xl font-bold">{{auth()->user()->name}}</h2>
                <p class="text-gray-400">{{auth()->user()->email}}</p>
            </div>
            <form action="#" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="avatar" id="avatar" class="hidden">
                <label for="avatar" class="bg-[#2EBCF9] text-white px-4 py-2 rounded-lg cursor-pointer">Upload Picture</label>
                <button type="submit" class="bg-[#2EBCF9] text-white px-4 py-2 rounded-lg mt-2">Save</button>
            </form>
        </div>
        <div class="bg-[#22252F] p-4 rounded-lg mt-4 lg:min-w-[360px] lg:w-1/2">
            <h2 class="text-white text-md font-bold">Profile Information</h2>
            <p class="text-sm text-[#5C636F]">Update your account's profile information and email address.</p>

            <form action="{{route('profile.update')}}" method="post" class="mt-4">
                @csrf
                @method('PATCH')
                <div class="flex flex-col gap-y-4">
                    <div class="flex flex-col gap-y-2">
                        <label for="name" class="text-white">Name</label>
                        <input type="text" name="name" id="name" value="{{auth()->user()->name}}" class="w-full px-3 py-2 bg-[#22252F] text-white rounded-lg focus:outline-none focus:ring focus:border-blue-300 @error('title') border-red-500 @enderror" value="{{ old('name') }}">
                    </div>
                    <div class="flex flex-col gap-y-2">
                        <label for="email" class="text-white">Email</label>
                        <input type="email" name="email" id="email" value="{{auth()->user()->email}}" class="px-3 py-2 bg-[#22252F] text-white rounded-lg focus:outline-none focus:ring focus:border-blue-300 @error('title') border-red-500 @enderror" value="{{ old('email') }}">
                    </div>
                    <button type="submit" class="bg-[#2EBCF9] text-white px-4 mt-4 py-2 rounded-lg">Save Profile</button>
                </div>
            </form>
        </div>

        <div class="bg-[#22252F] p-4 rounded-lg mt-4 lg:min-w-[360px] lg:w-1/2">
            <h2 class="text-white text-md font-bold">Update Password</h2>
            <p class="text-sm text-[#5C636F]">Ensure your account is using a long, random password to stay secure.</p>

            <form action="{{route('password.update')}}" method="post" class="mt-4">
                @csrf
                @method('PUT')
                <div class="flex flex-col gap-y-4">
                    <div class="flex flex-col gap-y-2">
                        <label for="current_password" class="text-white">Current Password</label>
                        <input type="password" name="current_password" id="current_password" class="w-full px-3 py-2 bg-[#22252F] text-white rounded-lg focus:outline-none focus:ring focus:border-blue-300 @error('title') border-red-500 @enderror" value="{{ old('current_password') }}">
                    </div>
                    <div class="flex flex-col gap-y-2">
                        <label for="password" class="text-white">New Password</label>
                        <input type="password" name="password" id="password" class="px-3 py-2 bg-[#22252F] text-white rounded-lg focus:outline-none focus:ring focus:border-blue-300 @error('title') border-red-500 @enderror" value="{{ old('password') }}">
                    </div>
                    <div class="flex flex-col gap-y-2">
                        <label for="password_confirmation" class="text-white">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="px-3 py-2 bg-[#22252F] text-white rounded-lg focus:outline-none focus:ring focus:border-blue-300 @error('title') border-red-500 @enderror" value="{{ old('password_confirmation') }}">
                    </div>
                    <button type="submit" class="bg-[#2EBCF9] text-white px-4 mt-4 py-2 rounded-lg">Update Password</button>
                </div>
            </form>
        </div>

    </div>
@endsection