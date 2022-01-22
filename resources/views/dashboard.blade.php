<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-between">
                <div>
                    <h1 class="font-bold text-2xl">Your Posts</h1>
                    <span>Dear, <b class="underline">{{Auth::user()->name}}</b></span>
                </div>
                <div>
                    Total Posts: <b class="underline">{{$posts->count()}}</b>
                </div>
            </div>
            @foreach ($posts as $item)
            <div class="grid grid-flow-col grid-cols-2 gap-4 my-4 py-4 bg-white px-4 rounded-lg">
                <div class="">
                    <img src="{{ asset('assets/posts/imgs/eximg.jpg') }}" class="rounded-lg" alt="">
                </div>
                <div class="">
                    <h1 class="text-4xl font-bold">{{$item->title}}</h1>
                    <p class="font-bold bg-gray-800 text-white px-2 rounded-lg">
                        Author: {{$item->author->name}}
                    </p>
                    <hr class="my-4">
                    <span class="font-bold">Summary</span>
                    <p>{{$item->summary}}</p>
                    <span class="font-bold">Description</span>
                    <p>{{$item->description}}</p>

                    <span class="text-sm font-bold underline">
                        {{date("d M Y - g:i a", strtotime($item->created_at))}}
                    </span>
                    <div class="flex justify-end gap-4 my-4">
                        <div>
                            <a href="" class="flex bg-gray-800 text-white p-2 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                    <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                </svg>
                                Update
                            </a>
                        </div>
                        <div>
                            <a href="" class="flex bg-gray-800 text-white p-2 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                                Delete
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
