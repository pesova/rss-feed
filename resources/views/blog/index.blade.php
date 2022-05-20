@extends('layouts.app')

@section('content')

@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif

    <section class="relative py-20 2xl:py-40 bg-gray-400 overflow-hidden">
        <div class="container px-4 mx-auto">
            <div class="mb-14 text-center">
                <h2 class="mt-8 text-5xl font-bold font-heading text-white"> Blog Posts</h2>
            </div>
            <div class="flex flex-wrap -m-6">
                @foreach ($blogs as $blog)
                    <div class="relative w-full lg:w-1/3 p-6">
                        <div class="relative z-10 bg-gray-700 rounded-lg">
                            <div class="relative mb-8 h-52">
                                <img class="w-full h-full rounded-lg object-cover object-top" src="/storage/{{ $blog->image_path }}" alt="">
                                <div class="absolute bottom-0 left-0 ml-8 mb-6 px-3 pb-3 pt-1 inline-block bg-white rounded-b-2xl border-t-4 border-blue-500">
                                    <p class="text-xl font-bold">{{ \Carbon\Carbon::parse($blog->created_at)->format('d') }}</p>
                                    <p class="text-xs uppercase text-gray-300">{{ \Carbon\Carbon::parse($blog->created_at)->format('M') }}</p>
                                </div>
                            </div>
                            <div class="px-14 pb-10">
                                <a class="inline-block pt-4 text-lg text-white hover:text-gray-100 font-bold border-t border-gray-400" href="{{ route('blog.show', $blog->id) }}">{{ $blog->title }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </section>

@endsection