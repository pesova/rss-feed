<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use App\Http\Requests\StoreFeedRequest;
use App\Http\Requests\UpdateFeedRequest;

class FeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('following_blogs');
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
     * @param  \App\Http\Requests\StoreFeedRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFeedRequest $request)
    {
        dd($request);
        // store feed url
        // get feed items and store

        // write a service that gets recents items from feed


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function show(Feed $feed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function edit(Feed $feed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFeedRequest  $request
     * @param  \App\Models\Feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFeedRequest $request, Feed $feed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feed $feed)
    {
        //
    }

    public function manage(){
        $feed = \Feeds::make('http://feeds.bbci.co.uk/news/business/rss.xml');

        $data = array(
            'title'     => $feed->get_title(),
            'permalink' => $feed->get_permalink(),
            'items'     => $feed->get_items(),
          );

          foreach ($data['items'] as $key => $item) {
              dd($item, $item->get_permalink(), $item->get_date(), $item->get_title(), $item->get_description(), $item->get_link(), $item->get_id(true), $feed->get_image_link(), $feed->get_image_title(), $feed->get_image_url());
          }

        // dd($data);
        return view('manage', $data);
    }
}
