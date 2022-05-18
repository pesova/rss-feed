<?php

namespace App\Http\Controllers;

use App\Models\FollowingBlog;
use App\Http\Requests\StoreFollowingBlogRequest;
use App\Http\Requests\UpdateFollowingBlogRequest;

class FollowingBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFollowingBlogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFollowingBlogRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FollowingBlog  $followingBlog
     * @return \Illuminate\Http\Response
     */
    public function show(FollowingBlog $followingBlog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FollowingBlog  $followingBlog
     * @return \Illuminate\Http\Response
     */
    public function edit(FollowingBlog $followingBlog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFollowingBlogRequest  $request
     * @param  \App\Models\FollowingBlog  $followingBlog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFollowingBlogRequest $request, FollowingBlog $followingBlog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FollowingBlog  $followingBlog
     * @return \Illuminate\Http\Response
     */
    public function destroy(FollowingBlog $followingBlog)
    {
        //
    }
}
