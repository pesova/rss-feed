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
            <h2 class="mt-8 text-5xl font-bold font-heading text-white">Followed blogs</h2>
        </div>
            <div class="flex flex-wrap -m-6">
                <div class="relative w-full lg:w-1/3 p-6">
                    <div class="relative z-10 bg-gray-700 rounded-lg">

                        <div class="px-14 pb-10"><a class="inline-block pt-4 text-lg text-white hover:text-gray-100 font-bold border-t border-gray-400" href="#">Laravel Daily</a></div>
                    </div>
                </div>
                <div class="relative w-full lg:w-1/3 p-6">
                    <div class="relative z-10 bg-gray-700 rounded-lg">

                        <div class="px-14 pb-10"><a class="inline-block pt-4 text-lg text-white hover:text-gray-100 font-bold border-t border-gray-400" href="#">Laravel Daily</a></div>
                    </div>
                </div>
                <div class="relative w-full lg:w-1/3 p-6">
                    <div class="relative z-10 bg-gray-700 rounded-lg">

                        <div class="px-14 pb-10"><a class="inline-block pt-4 text-lg text-white hover:text-gray-100 font-bold border-t border-gray-400" href="#">Laravel Daily</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>  

    <section class="relative py-20 2xl:py-40 bg-gray-400 overflow-hidden">
        <div class="container px-4 mx-auto">
            <div class="mb-14 text-center">
                <h2 class="mt-8 text-5xl font-bold font-heading text-white">Feeds </h2>
            </div>
            <div class="flex flex-wrap -m-6">
                <div class="relative w-full lg:w-1/3 p-6">
                    <div class="relative z-10 bg-gray-700 rounded-lg">

                        <div class="px-14 pb-10"><a class="inline-block pt-4 text-lg text-white hover:text-gray-100 font-bold border-t border-gray-400" href="#">Laravel Daily</a></div>
                    </div>
                </div>
                <div class="relative w-full lg:w-1/3 p-6">
                    <div class="relative z-10 bg-gray-700 rounded-lg">

                        <div class="px-14 pb-10"><a class="inline-block pt-4 text-lg text-white hover:text-gray-100 font-bold border-t border-gray-400" href="#">Laravel Daily</a></div>
                    </div>
                </div>
                <div class="relative w-full lg:w-1/3 p-6">
                    <div class="relative z-10 bg-gray-700 rounded-lg">

                        <div class="px-14 pb-10"><a class="inline-block pt-4 text-lg text-white hover:text-gray-100 font-bold border-t border-gray-400" href="#">Laravel Daily</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-14 lg:mt-24 text-center">
            <a class="inline-block py-5 px-12 mr-4 bg-blue-500 hover:bg-blue-600 rounded-full text-white font-bold transition duration-200" href="{{ route('following.manage') }}">Manage Feeds</a>
        </div>
    </section>

@endsection