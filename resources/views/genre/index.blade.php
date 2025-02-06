@extends('layouts.dashboard')

@section('title', 'Genre')


@section('content')
    <div class="bg-[#22252F] p-4 rounded-lg">
        <div>
            <a href="" class="flex items-center w-fit gap-x-2 bg-[#FC882F] px-4 py-2  rounded text-white hover:border-2 hover:border-solid hover:border-white"><svg class="w-[16px] inline fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z"/></svg><span>Add Genre</span></a>
        </div>
        <div class="mt-4">
            <table class="w-full bg-[#22252F] text-white table-auto">
                <thead class="">
                    <tr class="text-left bg-[#161A20] border-b-2 border-solid border-white">
                        <th class="py-2 px-2">No</th>
                        <th class="py-2 px-2">Name</th>
                        <th class="py-2 px-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-[#161A20]">
                        <td class="py-2 px-2">1</td>
                        <td class="py-2 px-2">Action</td>
                        <td class="py-2 px-2">
                            <a href="" class="text-blue-500">Edit</a>
                            <a href="" class="text-red-500">Delete</a>
                        </td>
                    </tr>
                    <tr class="hover:bg-[#161A20]">
                        <td class="py-2 px-2">2</td>
                        <td class="py-2 px-2">Adventure</td>
                        <td class="py-2 px-2">
                            <a href="" class="text-blue-500">Edit</a>
                            <a href="" class="text-red-500">Delete</a>
                        </td>
                    </tr>
                    <tr class="hover:bg-[#161A20]">
                        <td class="py-2 px-2">3</td>
                        <td class="py-2 px-2">Comedy</td>
                        <td class="py-2 px-2">
                            <a href="" class="text-blue-500">Edit</a>
                            <a href="" class="text-red-500">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection