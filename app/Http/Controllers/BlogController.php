<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBlogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogRequest $request)
    {  
        $request->validated();
        $newImageName = uniqid() . '-' . $request->title . '.' . $request->file('image_path')->extension();
        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->input('title'))));
        $request->file('image_path')->storeAs('public', $newImageName);

        Blog::create([
            'title' => $request->input('title'),
            'short_desc' => $request->input('short_desc'),
            'long_desc' => $request->input('long_desc'),
            'slug' => $slug,
            'image_path' => $newImageName,
        ]);

        return redirect()->route('home')
            ->with('message', 'Your blog has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBlogRequest  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $request->validated();
        $newImageName = uniqid() . '-' . $request->title . '.' . $request->file('image_path')->extension();
        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->input('title'))));
        $request->file('image_path')->storeAs('public', $newImageName);

        $blog->update([
            'title' => $request->input('title'),
            'short_desc' => $request->input('short_desc'),
            'long_desc' => $request->input('long_desc'),
            'slug' => $slug,
            'image_path' => $newImageName,
        ]);

        return redirect()->route('home')
            ->with('message', 'Your blog has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
