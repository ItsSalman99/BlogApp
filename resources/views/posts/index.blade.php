@extends('layout.guest')    

@section('title', 'Posts')

@section('content')    
    <div class="w-full p-8">
        <div class="w-7/12 mx-auto">
            <h1 class="text-4xl font-bold py-4">Blog Posts</h1>
            <div>
                <form action="{{ route('search') }}" method="post" class="flex justify-between">
                    @csrf
                    <div class="flex-1">
                        <input type="text" name="search" class="rounded-lg w-full" required placeholder="Search by author or title">
                    </div>
                    <div>
                        <button type="submit" class="bg-gray-800 px-4 py-2 rounded-lg text-white flex justify-between">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <h1 class="font-bold">
                                Search
                            </h1>
                        </button>
                    </div>
                </form>
            </div>
            @forelse ($posts as $item)
            <div class="bg-gray-800 p-4 rounded-lg my-4">
                <img src="{{ asset('/assets/posts/imgs/eximg.jpg') }}" class="rounded-lg" alt="">
                <div class="py-4">
                    <span class="text-sm font-bold bg-white text-gray-800 rounded-lg px-2">Author: {{$item->author->name}}</span>
                    <h1 class="text-white text-2xl font-bold mb-4">{{$item->title}}</h1>
                    <p class="text-white">{{$item->summary}}</p>
                    <p class="text-white">{{$item->description}}</p>
                    <div class="my-4">
                        <a href="" class="p-2 rounded bg-white text-gray-800">Read More</a>
                    </div>
                </div>
            </div>
            @empty
                <div class="bg-gray-800 p-4 rounded-lg my-4">
                    <h1 class="text-xl text-white">No found!</h1>
                </div>
            @endforelse
        </div>
    </div>

@endsection


