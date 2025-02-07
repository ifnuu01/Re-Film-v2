@extends('layouts.dashboard')

@section('title', 'Films')


@section('content')
<div class="bg-[#22252F] p-4 rounded-lg">
    @if (session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="bg-red-500 text-white p-4 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif
    <div>
        <a href="{{route('films.create')}}" class="flex items-center w-fit gap-x-2 bg-[#FC882F] px-4 py-2  rounded text-white hover:border-2 hover:border-solid hover:border-white"><svg class="w-[16px] inline fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z"/></svg><span>Add film</span></a>
    </div>
    <div class="mt-4">
        <table class="w-full bg-[#22252F] text-white table-auto">
            <thead class="">
                <tr class="text-left bg-[#161A20] border-b-2 border-solid border-white">
                    <th class="py-2 px-2">No</th>
                    <th class="py-2 px-2">Title</th>
                    <th class="py-2 px-2">Poster</th>
                    <th class="py-2 px-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($films as $key => $film)
                <tr class="hover:bg-[#161A20]">
                    <td class="py-2 px-2">{{ $key + 1 }}</td>
                    <td class="py-2 px-2">{{$film->title}}</td>
                    <td class="py-2 px-2"><img class="rounded" src="{{asset('storage/'.$film->photo)}}" width="60px" alt="{{$film->title}}"></td>
                    <td class="py-2 px-2">
                        <form action="{{route('films.destroy', $film->id)}}" method="POST" class="flex gap-x-2">
                            @method('DELETE')
                            @csrf
                            <a href="{{route('films.show', $film->id)}}" class="flex items-center w-fit bg-[#2EBCF9] px-6  py-2 rounded-full"><svg class="w-[16px] fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336l24 0 0-64-24 0c-13.3 0-24-10.7-24-24s10.7-24 24-24l48 0c13.3 0 24 10.7 24 24l0 88 8 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-80 0c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg></a>
                            <a href="{{route('films.edit', $film->id)}}" class="flex items-center w-fit bg-[#F9E52E] px-6 py-2 rounded-full"><svg class="w-[16px] fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160L0 416c0 53 43 96 96 96l256 0c53 0 96-43 96-96l0-96c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 96c0 17.7-14.3 32-32 32L96 448c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l96 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 64z"/></svg></a>
                            <button type="submit" class="flex items-center w-fit bg-[#FC2F2F] px-6 py-2 rounded-full"><svg class="w-[12px] fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M135.2 17.7L128 32 32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l384 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-96 0-7.2-14.3C307.4 6.8 296.3 0 284.2 0L163.8 0c-12.1 0-23.2 6.8-28.6 17.7zM416 128L32 128 53.2 467c1.6 25.3 22.6 45 47.9 45l245.8 0c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg></button>
                        </form>
                    </td>
                </tr>
                @empty
                    <tr>
                        <td colspan="3" class="py-2 px-2 text-center">No data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
    
@endsection