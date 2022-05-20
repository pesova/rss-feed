@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-5">
        <h3 class="text-3xl font-bold">
            Create Feed
        </h3>
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

<div class="w-4/5 m-auto py-10">
    <form 
        action="{{ route('following.store') }}"
        method="POST"
        enctype="multipart/form-data">
        @csrf

        <input 
            type="text"
            name="url"
            placeholder="Feed url..."
            required
            class="bg-transparent block border-b-2 w-full h-20 text-xl outline-none mb-3">

        <input 
            type="number"
            name="frequency"
            placeholder="Feed polling frequency..."
            class="bg-transparent block border-b-2 w-full h-20 text-lg outline-none">

        <button    
            type="submit"
            class="mt-3 bg-blue-500 text-gray-100 font-bold float-right text-lg py-2 px-4 rounded-xl">
            Submit
        </button>
        
    </form>
</div>

<div class="container py-10 mx-auto">
    <div class="mb-14 text-center">
        <h2 class="mt-2 text-xl font-bold font-heading">Manage Feeds </h2>
    </div>

    <div class="flex flex-wrap -m-6">
        <div class="relative w-full p-6">
            <div class="flex relative z-10 bg-gray-300 rounded-lg">

                <div class="px-3 pb-5">
                    <a class="inline-block pt-4 text-lg hover:text-gray-100 font-bold border-t border-gray-400" href="#">Laravel Daily</a>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque quisquam ullam animi, repellendus rem a molestiae asperiores nisi qui voluptate voluptatem ea odit</p>
                </div>

                <div class="flex p-3">
                    <span class="flex items-center px-2">Edit</span>
                    <span class="flex items-center ">delete</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="header">
    <h1><a href="{{ $permalink }}">{{ $title }}</a></h1>
  </div>

  @foreach ($items as $item)
    <div class="item">
      <h2><a href="{{ $item->get_permalink() }}">{{ $item->get_title() }}</a></h2>
      <p>{{ $item->get_description() }}</p>
      <p><small>Posted on {{ $item->get_date('j F Y | g:i a') }}</small></p>
      <h2>{{ $item->get_enclosures() }}</h2>
      <h2>{{ $item->get_categories() }}</h2>
      <h2>{{ $item->get_author() }}</h2>
      <h2>{{ $item->get_comments() }}</h2>
      <h2>{{ $item->get_guid() }}</h2>
      <h2>{{ $item->get_source() }}</h2>
      <h2>{{ $item->get_content() }}</h2>
      <h2>{{ $item->get_permalink() }}</h2>

    </div>
  @endforeach

@endsection