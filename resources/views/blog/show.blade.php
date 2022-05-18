@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $blog->title }}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-500">
        <span class="font-bold italic text-gray-800">{{ $blog->short_desc }}</span>, Created on {{ date('jS M Y', strtotime($blog->updated_at)) }}
    </span>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $blog->long_desc }}
    </p>
</div>

@endsection 