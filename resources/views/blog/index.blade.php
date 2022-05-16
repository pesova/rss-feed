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

{{-- @foreach ($posts as $post) --}}
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://pixabay.com/get/g08147397373abbb2c669f7091f1e6a3da58fc81f683eef2d67b2d99a3cddd04b0837586b997a5b708bbfd4786e74bcc59da099c3c3bcb81074471b03126f9d7172b3002a62977d8ce6dc3e5b982858b6_640.jpg" alt="">
        </div>
        <div>
            <h2 class="text-gray-700 font-bold text-5xl pb-4">
                Title
            </h2>

            <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800">Name</span>, Created on 10-2022
            </span>

            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab culpa tempore non atque officia doloremque odio assumenda placeat numquam praesentium? Placeat eius quo quae sint distinctio ratione explicabo voluptatibus provident.
            </p>

            <a href="/blog/2" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Keep Reading
            </a>
        </div>
    </div>    

@endsection