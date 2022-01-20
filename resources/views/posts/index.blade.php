@extends('layout.guest')    

@section('title', 'Posts')

@section('content')    
    <div class="w-full p-8">
        <div class="w-7/12 mx-auto">
            <h1 class="text-4xl font-bold py-4">Blog Posts</h1>
            @foreach ($posts as $item)
            <div class="bg-gray-800 p-4 rounded-lg my-4">
                <img src="{{ asset('/assets/posts/imgs/eximg.jpg') }}" class="rounded-lg" alt="">
                <div class="py-4">
                    <h1 class="text-white text-2xl font-bold mb-4">{{$item->title}}</h1>
                    <p class="text-white">{{$item->summary}}</p>
                    <p class="text-white">{{$item->description}}</p>
                    <div class="my-4">
                        <a href="" class="p-2 rounded bg-white text-gray-800">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


@endsection


