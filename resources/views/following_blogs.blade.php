@extends('layouts.app')

@section('content')

@include('partials.message')

    <section class="relative py-20 2xl:py-40 bg-gray-400 overflow-hidden">
        <div class="container px-4 mx-auto">
        <div class="mb-14 text-center">
            <h2 class="mt-8 text-5xl font-bold font-heading text-white">Followed blogs</h2>
        </div>
            <div class="flex flex-wrap -m-6">
                @foreach ($following_blogs as $blog)
                    
                <div class="relative w-full lg:w-1/3 p-6">
                    <div class="relative z-10 bg-gray-700 rounded-lg">
                        <div class="px-14 pb-10"><a class="inline-block pt-4 text-lg text-white hover:text-gray-500 font-bold border-t border-gray-400" href="{{ $blog->blog_url }}">{{ $blog->blog_name }}</a></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>  

    <section class="relative py-20 2xl:py-40 bg-gray-400 overflow-hidden">
        <div class="container px-4 mx-auto">
            <div class="mb-14 text-center">
                <h2 class="mt-8 text-5xl font-bold font-heading text-white"> RSS Feeds </h2>
            </div>
            <div class="flex flex-wrap -m-6">
                @foreach ($feedItems as $item)
                    <div class="relative w-full lg:w-1/3 p-6">
                        <div class="relative z-10 {{ $item->is_read ? 'bg-gray-500' : 'bg-white' }} rounded-lg">

                            <div class="px-3 pb-5">
                                <a class="inline-block pt-4 text-lg hover:text-gray-500 font-bold border-t border-gray-400" href="{{ $item->url }}">{{ $item->title }}</a>
                                <small>{{$item->feed->url }}</small>
                                <p>{!! $item->description !!}</p>
                            </div>
            
                            <div class="flex p-3">
                                <button class="flex items-center px-2">Mark as read</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="mt-14 lg:mt-24 text-center">
            <a class="inline-block py-5 px-12 mr-4 bg-blue-500 hover:bg-blue-600 rounded-full text-white font-bold transition duration-200" href="{{ route('feed.manage') }}">Manage Feeds</a>
        </div>
    </section>

@endsection