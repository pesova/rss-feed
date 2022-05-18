@extends('layouts.app')


@section('content')

    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Do you want to become a developer?
                </h1>
                <a 
                    href="{{ route('blog.index') }}"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <section class="relative py-20 2xl:py-40 bg-gray-400 overflow-hidden">
        <div class="container px-4 mx-auto">
        <div class="mb-14 text-center">
            <h2 class="mt-8 text-5xl font-bold font-heading text-white">Latest blog</h2>
        </div>
        <div class="flex flex-wrap -m-6">
            @foreach ($blogs as $index => $blog)
            <div class="relative w-full lg:w-1/3 p-6">
                <div class="relative z-10 {{ $index == 1 ? 'lg:mt-24' : '' }} bg-gray-700 rounded-lg">
                    <div class="relative mb-8 h-52">
                    <img class="w-full h-full rounded-lg object-cover object-top" src="/storage/students.jpeg" alt="">
                    <div class="absolute bottom-0 left-0 ml-8 mb-6 px-3 pb-3 pt-1 inline-block bg-white rounded-b-2xl border-t-4 border-blue-500">
                        <p class="text-xl font-bold">{{ \Carbon\Carbon::parse($blog->created_at)->format('d') }}</p>
                        <p class="text-xs uppercase text-gray-300">{{ \Carbon\Carbon::parse($blog->created_at)->format('M') }}</p>
                    </div>
                    </div>
                    <div class="px-14 pb-10"><a class="inline-block pt-4 text-lg text-white hover:text-gray-100 font-bold border-t border-gray-400" href="#">{{ $blog->title }}</a></div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-14 lg:mt-24 text-center"><a class="inline-block py-5 px-12 mr-4 bg-blue-500 hover:bg-blue-600 rounded-full text-white font-bold transition duration-200" href="#">See all</a></div>
        </div>
    </section>


@endsection

