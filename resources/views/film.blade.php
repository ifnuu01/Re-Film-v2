@extends('layouts.layout-user');

@section('title', 'ReFilm | Film')

@section('content')
<section class="px-4 lg:px-10 grid grid-cols-1 lg:grid-cols-4 gap-4 mt-[150px]">
    <div class="lg:col-span-3 flex flex-col gap-4">
        {{-- image --}}
        <div class="rounded-lg">
            <img src="{{asset('storage/'.$film->photo)}}" class="w-full h-[200px] lg:h-[400px] object-cover object-center rounded-lg" loading="lazy">
        </div>

        {{-- film info mobile --}}
        <div class="lg:hidden">
            <div class="bg-[#22252F] p-4 rounded-lg lg:max-h-[450px] overflow-y-auto">
                <h1 class="text-white text-xl font-semibold">{{$film->title}}</h1>
                <h3 class="text-sm text-[#5C636F]">{{$film->genre->name}} <span class="ml-4">{{$film->updated_at}}</span></h3>
                <p class="text-base text-white mt-4">
                    {{$film->description}}
                </p>
            </div>
            <div class="bg-[#22252F] p-4 rounded-lg lg:max-h-[500px] overflow-y-auto mt-4">
                <h1 class="text-white text-xl font-semibold">Actor</h1>
                <div class="flex flex-wrap gap-4 mt-4">
                    @forelse ($film->actors as $actor)
                    <div class="flex flex-col items-center gap-2 cursor-pointer hover:opacity-80">
                        <img src="{{asset('storage/'.$actor->photo)}}" alt="actor" class="w-20 h-20 object-cover object-center rounded-md">
                        <span class="text-white text-sm">{{$actor->name}}</span>
                    </div>
                    @empty
                    <p class="text-white">No actor</p>
                    @endforelse
                </div>
            </div>
        </div>

        
        {{-- Form Review --}}
        <form action="{{route('review.store', $film)}}" method="POST" class="flex flex-col gap-4 bg-[#22252F] col-span-3 p-4 rounded-lg">
            @csrf
            @method('POST')
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
                    @error('rating')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                <textarea name="content" value="{{ old('content') }}" id="review" cols="30" rows="5" class="bg-[#161A20] border-none text-white p-4 rounded-lg focus:ring-0" placeholder="Write your review here"></textarea>
                @error('content')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
                <button type="submit" class="bg-gradient-to-r from-[#FC882F] to-[#2EBCF9] px-4 py-2 text-white font-bold rounded-lg">Submit</button>
            </div>
        </form>

        {{-- Review --}}
        <div class="col-span-3 flex flex-col gap-y-4">
            @forelse ($film->reviews->sortByDesc('created_at') as $review)
            <div class="bg-[#22252F] p-4 rounded-lg">
                <div class="flex items-center gap-2 mb-4">
                    @for ($i = 1; $i <= 5; $i++)
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 block {{ $i <= $review->rating ? 'text-[#FFCC00]' : 'text-[#22252F]' }}" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 0l2.5 6.5H20l-5 3.5 2 7-6-4-6 4 2-7-5-3.5h7.5L10 0z" clip-rule="evenodd"/>
                        </svg>
                    @endfor
                </div>
                <div class="flex items-center justify-between">
                    <h2 class="text-white text-xl font-semibold">
                        @if($review->user->profile->photo)
                            <img src="{{ asset('storage/' . $review->user->profile->photo) }}" alt="avatar" class="inline mr-4 object-cover w-10 h-10 rounded-full">
                        @else
                            <img src="https://ui-avatars.com/api/?name={{$review->user->name}}&background=random&color=fff" alt="avatar" class="inline mr-4 object-cover w-10 h-10 rounded-full">
                        @endif
                        <span>{{$review->user->name}}</span>
                    </h2>
                    <span class="text-sm text-[#5C636F]">{{$review->created_at}}</span>
                </div>
                <p class="text-white text-base mt-4 max-h-[150px] overflow-y-auto">
                    {{$review->content}}
                </p>
            </div>
            @empty
            <div class="bg-[#22252F] p-4 rounded-lg">
                <p class="text-white text-center">No review</p>
            </div>
            @endforelse
        </div>
    </div>

    {{-- film info desktop --}}
    <div class="hidden lg:block">
        <div class="bg-[#22252F] p-4 rounded-lg lg:max-h-[500px] overflow-y-auto">
            <h1 class="text-white text-xl font-semibold">{{$film->title}}</h1>
            <h3 class="text-sm text-[#5C636F]">{{$film->genre->name}} <span class="ml-4">{{$film->updated_at}}</span></h3>
            <p class="text-base text-white mt-4">
                {{$film->description}}
            </p>
        </div>
        <div class="bg-[#22252F] p-4 rounded-lg lg:max-h-[500px] overflow-y-auto mt-4">
            <h1 class="text-white text-xl font-semibold">Actor</h1>
            <div class="flex flex-wrap gap-4 mt-4">
                @forelse ($film->actors as $actor)
                <div class="flex flex-col items-center gap-2 cursor-pointer hover:opacity-80">
                    <img src="{{asset('storage/'.$actor->photo)}}" alt="actor" class="w-20 h-20 object-cover object-center rounded-md">
                    <span class="text-white text-sm">{{$actor->name}}</span>
                </div>
                @empty
                <p class="text-white">No actor</p>
                @endforelse
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
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
</script>
@endpush