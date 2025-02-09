<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Register</title>
</head>
<body class="bg-[#22252F]">
    <div class="items-center h-screen flex flex-col justify-center">
        <h2 class="text-center animate-pulse font-bold text-3xl py-2 text-transparent bg-clip-text bg-gradient-to-r from-[#FC882F] to-[#2EBCF9]">Register Into Re Film <br>👋</h2> 
        <form class="bg-[#22252F] shadow-2xl w-full lg:w-2/6 mx-auto py-8 px-4 lg:rounded-lg shadow-lg h-fit flex flex-col items-center" action="{{route('register')}}" method="post">
            @csrf
            <div class="w-80 py-2">
                <label for="name" class="text-white font-bold">Name</label>
                <input type="text" name="name" id="name" class="w-full px-4 py-2 bg-[#161A20] border border-[#2EBCF9] text-white rounded-lg focus:outline-none focus:border-[#FC882F]">
                @error('name')
                    <span class="text-red-500 mt-2">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-80 py-2">
                <label for="email" class="text-white font-bold">Email</label>
                <input type="email" name="email" id="email" class="w-full px-4 py-2 bg-[#161A20] border border-[#2EBCF9] text-white rounded-lg focus:outline-none focus:border-[#FC882F]">
                @error('email')
                    <span class="text-red-500 mt-2">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-80 py-2">
                <label for="password" class="text-white font-bold">Password</label>
                <input type="password" name="password" id="password" class="w-full px-4 py-2 bg-[#161A20] border border-[#2EBCF9] text-white rounded-lg focus:outline-none focus:border-[#FC882F]">
                @error('password')
                    <span class="text-red-500 mt-2">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-80 py-2">
                <label for="password_confirmation" class="text-white font-bold">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="w-full px-4 py-2 bg-[#161A20] border border-[#2EBCF9] text-white rounded-lg focus:outline-none focus:border-[#FC882F]">
                @error('password_confirmation')
                    <span class="text-red-500 mt-2">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-80 py-2">
                <button type="submit" class="w-full shadow-lg px-4 py-2 bg-gradient-to-r from-[#FC882F] to-[#2EBCF9] text-white font-bold rounded-lg">Register</button>
            </div>
        </form>
    </div>
</body>
</html>