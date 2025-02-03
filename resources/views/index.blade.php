<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body class="bg-[#161A20]">
    <nav class="flex justify-between items-center py-7 bg-[#22252F] px-10 drop-shadow-lg fixed w-full z-10 top-0">
        <div class="text-[#2EBCF9] font-bold text-4xl animate-bounce cursor-pointer">RE <span class="text-[#FC882F]">FILM</span></div>
        <button id="menu-btn" class="lg:hidden text-white text-3xl z-30 animate-bounce">
            &#9776;
        </button>
        <ul class="lg:flex lg:items-center lg:gap-x-2 bg-[#22252F] lg:bg-transparent lg:relative absolute top-0 right-0 left-0 h-screen lg:h-auto z-10" id="menuUtama">
            <li>
                <a href="index.php" class="transition duration-150 ease-in-out block text-base text-[#161A20] bg-[#F9E52E] px-6 py-2 rounded-full font-bold cursor-pointer mt-20 w-40 text-center mx-auto lg:mt-0 lg:w-auto">List <span>Cast</span></a>
            </li>
            <li>
                <a href="index.php" class="transition duration-150 ease-in-out block text-base text-[#161A20] bg-[#FC882F] px-6 py-2 rounded-full font-bold cursor-pointer mt-2 w-40 text-center mx-auto lg:mt-0 lg:w-auto">List <span>Film</span></a>
            </li>
            <li>
                <a href="index.php"class="transition duration-150 ease-in-out block text-base text-[#161A20] bg-[#2EBCF9] px-6 py-2 rounded-full font-bold cursor-pointer mt-2 w-40 text-center mx-auto lg:mt-0 lg:w-auto">List <span>Genre</span></a>
            </li>
        </ul>
        <ul class="lg:flex lg:items-center lg:gap-x-2 z-20 lg:relative absolute top-60 right-0 left-0 lg:top-0" id="menuAuth">
            <li>
                <a href="" class="text-base text-white bg-[#161A20] px-6 py-2 rounded-full text-center block w-40 mx-auto
                lg:mt-0 lg:w-auto">Login</a>
            </li>
            <li>
                <a href="" class="text-base text-white bg-[#161A20] px-6 py-2 rounded-full text-center block w-40 mx-auto mt-2 lg:mt-0
                lg:w-auto">Register</a>
            </li>
        </ul>
    </nav>


    <section class="flex justify-center items-center px-10 pt-33">
        <img src="Walpaper Laptop.png" alt="" class="w-full h-[350px] lg:h-[500px] object-cover rounded-lg">
    </section>

    <section class="flex flex-col px-10 mt-8">
        <h1 class="text-[#2EBCF9] font-bold text-xl">Review <span class="text-[#FC882F]">Film</span></h1>
        <p class="text-base text-white mt-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem earum harum impedit nam nihil voluptas. Veritatis ratione sapiente expedita qui doloribus dolores, est debitis. Tempora ab voluptatum praesentium deleniti ipsam! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis reprehenderit magnam ducimus ullam eveniet cum dolorem labore accusamus cupiditate fuga enim similique ea quasi odit sint, quidem consequuntur neque repellat?
        </p>
    </section>
    <section class="flex flex-col px-10 mt-8">
        <h1 class="text-[#2EBCF9] font-bold text-xl">List <span class="text-[#FC882F]">Film</span></h1>
        <div class="mt-8 grid grid-cols-2 lg:grid-cols-6 md:grid-cols-4 gap-x-4 gap-y-2">
            <a class="flex flex-col animate-pulse cursor-pointer">
                <img src="download.jpeg" alt="" class="w-[200px] h-[200px] lg:h-[250px] object-cover rounded-lg">
                <p class="text-base font-bold text-white">Saitama</p>
                <p class="text-base font-semibold text-[#5C636F]">Action</p>
            </a>
            <a class="flex flex-col animate-pulse cursor-pointer">
                <img src="download.jpeg" alt="" class="w-[200px] h-[200px] lg:h-[250px] object-cover rounded-lg">
                <p class="text-base font-bold text-white">Saitama</p>
                <p class="text-base font-semibold text-[#5C636F]">Action</p>
            </a>
            <a class="flex flex-col animate-pulse cursor-pointer">
                <img src="download.jpeg" alt="" class="w-[200px] h-[200px] lg:h-[250px] object-cover rounded-lg">
                <p class="text-base font-bold text-white">Saitama</p>
                <p class="text-base font-semibold text-[#5C636F]">Action</p>
            </a>
            <a class="flex flex-col animate-pulse cursor-pointer">
                <img src="download.jpeg" alt="" class="w-[200px] h-[200px] lg:h-[250px] object-cover rounded-lg">
                <p class="text-base font-bold text-white">Saitama</p>
                <p class="text-base font-semibold text-[#5C636F]">Action</p>
            </a>
            <a class="flex flex-col animate-pulse cursor-pointer">
                <img src="download.jpeg" alt="" class="w-[200px] h-[200px] lg:h-[250px] object-cover rounded-lg">
                <p class="text-base font-bold text-white">Saitama</p>
                <p class="text-base font-semibold text-[#5C636F]">Action</p>
            </a>
            <a class="flex flex-col animate-pulse cursor-pointer">
                <img src="download.jpeg" alt="" class="w-[200px] h-[200px] lg:h-[250px] object-cover rounded-lg">
                <p class="text-base font-bold text-white">Saitama</p>
                <p class="text-base font-semibold text-[#5C636F]">Action</p>
            </a>
        </div>
    </section>

    <section class="flex flex-col px-10 mt-8">
        <h1 class="text-[#2EBCF9] font-bold text-xl">List <span class="text-[#FC882F]">Genre</span></h1>
        <div class="flex mt-8 grid grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-x-4 gap-y-2">
            <a href="" class="bg-[#22252F] font-bold text-white text-center rounded-full py-2 px-4">Action</a>
            <a href="" class="bg-[#22252F] font-bold text-white text-center rounded-full py-2 px-4">Action</a>
            <a href="" class="bg-[#22252F] font-bold text-white text-center rounded-full py-2 px-4">Action</a>
            <a href="" class="bg-[#22252F] font-bold text-white text-center rounded-full py-2 px-4">Action</a>
        </div>
    </section>

    <footer class="text-center mt-8 mb-8">
        <p class="text-white text-base">© 2024 Ifnu Umar. All rights reserved.</p>
    </footer>


    <script>
        const hamburger = document.getElementById('menu-btn');
        const menuUtama = document.getElementById('menuUtama');
        const menuAuth = document.getElementById('menuAuth');

        hamburger.addEventListener('click', () => {
            menuUtama.classList.toggle('hidden');
            menuAuth.classList.toggle('hidden');
        });
    </script>
</body>
</html>