<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body class="bg-[#161A20]">
    
    @include('layouts.navbar-user')

    <main class="px-4 lg:px-10 grid grid-cols-1 lg:grid-cols-4 gap-4 mt-[167px]">
        <div class="lg:col-span-3 flex flex-col gap-4">
            <div class="rounded-lg">
                <img src="{{asset('assets/images/image-2.jpg')}}" class="w-full h-[200px] lg:h-[400px] object-cover rounded-lg">
            </div>
            <form action="" method="get" class="flex flex-col gap-4 bg-[#22252F] p-4 rounded-lg">
                <div class="flex flex-col gap-4">
                    <label for="rating" class="text-white text-xl font-semibold">Rating</label>
                    <div class="flex items-center gap-2">
                        @for ($i = 1; $i <= 5; $i++)
                            <input type="radio" name="rating" value="{{ $i }}" id="rating-{{ $i }}" class="absolute opacity-0 peer" onclick="updateStars({{ $i }})">
                            <label for="rating-{{ $i }}" class="cursor-pointer bg-[#161A20] rounded-lg px-4 py-2  flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 block text-[#22252F]" viewBox="0 0 20 20" fill="currentColor" id="star-{{ $i }}">
                                    <path fill-rule="evenodd" d="M10 0l2.5 6.5H20l-5 3.5 2 7-6-4-6 4 2-7-5-3.5h7.5L10 0z" clip-rule="evenodd"/>
                                </svg>
                            </label>
                        @endfor
                    </div>
                    <textarea name="review" id="review" cols="30" rows="5" class="bg-[#161A20] border-none text-white p-4 rounded-lg focus:ring-0" placeholder="Write your review here"></textarea>
                    <button type="submit" class="bg-gradient-to-r from-[#FC882F] to-[#2EBCF9] px-4 py-2 text-white font-bold rounded-lg">Submit</button>
                </div>
            </form>

            <div class="bg-[#22252F] p-4 rounded-lg">
                <div class="flex items-center justify-between">
                    <h2 class="text-white text-xl font-semibold"><img src="{{asset('assets/images/image-1.jpg')}}" class="inline mr-4 object-cover w-10 h-10 rounded-full" alt="">User</h2>
                    <span class="text-sm text-[#5C636F]">2025-08-25 1:59 PM</span>
                </div>
                <p class="text-white text-base mt-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, fuga voluptatem a reiciendis asperiores quia consequatur ab modi, autem hic porro non nemo esse saepe doloribus ratione minus! Perferendis, ullam?
                    Officiis quas magnam, facere ducimus inventore quisquam sequi perferendis et, at placeat praesentium laboriosam molestias? Molestias error fugit eos expedita veniam accusantium! Veniam quis voluptas eaque minus officiis, hic ipsam.
                    Quasi sed sint minus. Temporibus facilis sequi beatae, adipisci sint sunt, placeat cupiditate eius dolorum ratione tenetur veniam aut voluptate sapiente. Quisquam suscipit, qui iusto veritatis ipsam molestias necessitatibus facere!
                </p>
            </div>
            <div class="bg-[#22252F] p-4 rounded-lg">
                <div class="flex items-center justify-between">
                    <h2 class="text-white text-xl font-semibold"><img src="{{asset('assets/images/image-1.jpg')}}" class="inline mr-4 object-cover w-10 h-10 rounded-full" alt="">User</h2>
                    <span class="text-sm text-[#5C636F]">2025-08-25 1:59 PM</span>
                </div>
                <p class="text-white text-base mt-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, fuga voluptatem a reiciendis asperiores quia consequatur ab modi, autem hic porro non nemo esse saepe doloribus ratione minus! Perferendis, ullam?
                    Officiis quas magnam, facere ducimus inventore quisquam sequi perferendis et, at placeat praesentium laboriosam molestias? Molestias error fugit eos expedita veniam accusantium! Veniam quis voluptas eaque minus officiis, hic ipsam.
                    Quasi sed sint minus. Temporibus facilis sequi beatae, adipisci sint sunt, placeat cupiditate eius dolorum ratione tenetur veniam aut voluptate sapiente. Quisquam suscipit, qui iusto veritatis ipsam molestias necessitatibus facere!
                </p>
            </div>
            <div class="bg-[#22252F] p-4 rounded-lg">
                <div class="flex items-center justify-between">
                    <h2 class="text-white text-xl font-semibold"><img src="{{asset('assets/images/image-1.jpg')}}" class="inline mr-4 object-cover w-10 h-10 rounded-full" alt="">User</h2>
                    <span class="text-sm text-[#5C636F]">2025-08-25 1:59 PM</span>
                </div>
                <p class="text-white text-base mt-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, fuga voluptatem a reiciendis asperiores quia consequatur ab modi, autem hic porro non nemo esse saepe doloribus ratione minus! Perferendis, ullam?
                    Officiis quas magnam, facere ducimus inventore quisquam sequi perferendis et, at placeat praesentium laboriosam molestias? Molestias error fugit eos expedita veniam accusantium! Veniam quis voluptas eaque minus officiis, hic ipsam.
                    Quasi sed sint minus. Temporibus facilis sequi beatae, adipisci sint sunt, placeat cupiditate eius dolorum ratione tenetur veniam aut voluptate sapiente. Quisquam suscipit, qui iusto veritatis ipsam molestias necessitatibus facere!
                </p>
            </div>
        </div>
        
        <div>
            <div class="bg-[#22252F] p-4 rounded-lg">
                <h1 class="text-white text-xl font-semibold">Film Title</h1>
                <h3 class="text-sm text-[#5C636F]">Genre <span class="ml-4">2025-08-25 1:59 PM</span></h3>
                <p class="text-base text-white mt-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum animi, asperiores odio porro error unde alias nostrum esse quasi magnam voluptatibus, a aliquid quas. Nesciunt natus pariatur magnam nostrum atque.Quos ullam odio fugiat libero numquam dolor magni praesentium, corrupti fuga natus doloribus, eveniet tempora deserunt atque! Aspernatur libero quis neque consequatur quam pariatur tenetur voluptas harum, voluptatem magnam enim.
                </p>
        </div>
    </main>

    @include('layouts.footer-user')
    <script>
        function updateStars(rating) {
            for (let i = 1; i <= 5; i++) {
                const star = document.getElementById(`star-${i}`);
                if (i > rating) {
                    star.style.fill = '#22252F';
                } else {
                    star.style.fill = '#FFCC00';
                }
            }
        }

        const search = document.getElementById('search');
        const logoSearch = document.getElementById('logo-search');

        logoSearch.addEventListener('click', () => {
            search.classList.toggle('hidden');
        });

        const menuBtn = document.getElementById('menu-btn');
        const menuAuth = document.getElementById('menu-auth');

        menuBtn.addEventListener('click', () => {
            menuAuth.classList.toggle('hidden');
        });
    </script>
</body>
</html>