@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-3">
        <h2 class="text-6xl">
            Create Blog
        </h2>
    </div>
</div>
 
@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-lg py-4 px-2">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="w-4/5 m-auto pt-20">
    <form 
        action="{{ route('blog.store') }}"
        method="POST"
        enctype="multipart/form-data">
        @csrf

        <input 
            type="text"
            name="title"
            placeholder="Title..."
            required
            class="bg-transparent block border-b-2 w-full h-20 text-4xl outline-none">

        <input 
            type="text"
            name="short_desc"
            placeholder="Short description..."
            required
            class="bg-transparent block border-b-2 w-full h-20 text-4xl outline-none">

        <textarea 
            name="long_desc"
            placeholder="Long Description..."
            required
            class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>

        <div class="bg-grey-lighter pt-2">
            <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                <span class="mt-2 text-base leading-normal">
                    Select a file
                </span>
                <input 
                    type="file"
                    required
                    name="image_path"
                    class="hidden">
            </label>
        </div>

        <button    
            type="submit"
            class="uppercase mt-3 bg-blue-500 text-gray-100 text-lg font-extrabold py-2 px-4 rounded-xl">
            Submit Post
        </button>
    </form>
</div>

@endsection