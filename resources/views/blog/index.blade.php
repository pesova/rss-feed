@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-3 border-b border-gray-200">
        <h1 class="text-6xl">
            Followed Blogs
        </h1>
    </div>
</div>

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
            <h2 class="mt-8 text-5xl font-bold font-heading text-white">Latest blog</h2>
        </div>
        <div class="flex flex-wrap -m-6">
            <div class="relative w-full lg:w-1/3 p-6">
            <div class="relative z-10 bg-gray-700 rounded-lg">
                <div class="relative mb-8 h-52">
                <img class="w-full h-full rounded-lg object-cover object-top" src="/storage/students.jpeg" alt="">
                <div class="absolute bottom-0 left-0 ml-8 mb-6 px-3 pb-3 pt-1 inline-block bg-white rounded-b-2xl border-t-4 border-blue-500">
                    <p class="text-xl font-bold">30</p>
                    <p class="text-xs uppercase text-gray-300">Feb</p>
                </div>
                </div>
                <div class="px-14 pb-10"><a class="inline-block pt-4 text-lg text-white hover:text-gray-100 font-bold border-t border-gray-400" href="#">Is remote work working? A one year check-in</a></div>
            </div>
            </div>
            <div class="relative w-full lg:w-1/3 p-6">
            <div class="relative z-10 lg:mt-24 bg-gray-700 rounded-lg">
                <div class="relative mb-8 h-52">
                <img class="w-full h-full rounded-lg object-cover" src="/storage/writing.jpeg" alt="">
                <div class="absolute bottom-0 left-0 ml-8 mb-6 px-3 pb-3 pt-1 inline-block bg-white rounded-b-2xl border-t-4 border-blue-500">
                    <p class="text-xl font-bold">29</p>
                    <p class="text-xs uppercase text-gray-300">Feb</p>
                </div>
                </div>
                <div class="px-14 pb-10"><a class="inline-block pt-4 text-lg text-white hover:text-gray-100 font-bold border-t border-gray-400" href="#">10 ways to keep your remote teams engaged</a></div>
            </div>
            </div>
            <div class="relative w-full lg:w-1/3 p-6">
            <div class="relative z-10 bg-gray-700 rounded-lg">
                <div class="relative mb-8 h-52">
                <img class="mb-8 w-full h-52 rounded-lg object-cover" src="/storage/office.jpg" alt="">
                <div class="absolute bottom-0 left-0 ml-8 mb-6 px-3 pb-3 pt-1 inline-block bg-white rounded-b-2xl border-t-4 border-blue-500">
                    <p class="text-xl font-bold">25</p>
                    <p class="text-xs uppercase text-gray-300">Feb</p>
                </div>
                </div>
                <div class="px-14 pb-10"><a class="inline-block pt-4 text-lg text-white hover:text-gray-100 font-bold border-t border-gray-400" href="#">How to make a concept map (+Examples)</a></div>
            </div>
            <img class="hidden lg:block absolute top-0 right-0 -mr-32 mt-24" src="zospace-assets/lines/right-line.svg" alt="">
            </div>
        </div>
        <div class="mt-14 lg:mt-24 text-center"><a class="inline-block py-5 px-12 mr-4 bg-blue-500 hover:bg-blue-600 rounded-full text-white font-bold transition duration-200" href="#">See all</a></div>
        </div>
    </section>  

@endsection