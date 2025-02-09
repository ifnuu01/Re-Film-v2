<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Login</title>
</head>
<body class="bg-[#22252F]">
    <div class="flex justify-content items-center h-screen">
        <form class="bg-[#161A20] shadow-lg w-full lg:w-2/6 mx-auto py-8 px-4 lg:rounded-lg shadow-lg h-fit flex flex-col items-center" action="{{route('login')}}" method="post">
            <h2 class="text-center animate-pulse font-bold text-3xl py-2 text-transparent bg-clip-text bg-gradient-to-r from-[#FC882F] to-[#2EBCF9]">Login Into Re Film</h2>
            @csrf
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
                <button type="submit" class="w-full px-4 py-2 bg-gradient-to-r from-[#FC882F] to-[#2EBCF9] text-white font-bold rounded-lg">Login</button>
            </div>
        </form>
    </div>
</body>
</html>