<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Feed;
use App\Models\FeedItem;
use App\Models\FollowingBlog;
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
        $following_blogs = FollowingBlog::get();
        $feedItems = FeedItem::latest()->paginate(20);
        return view('following_blogs', compact('following_blogs', 'feedItems'));
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
        // dd($request);
        // store feed url

        $feed = \Feeds::make($request->url);
        $feed->set_item_limit(3);
        if ($feed->error()) {
            return back()->with('error', 'Unable verify the feed url');
        }
        // store inside db transaction
        DB::beginTransaction();
        try {
            $saveFeed = Feed::create($request->validated());
            $getFeedItems = $feed->get_items();
            $feedItems = [];
    
            foreach ($getFeedItems as $index => $item) {
                if ($request->frequency && $request->frequency == $index) {
                    break;
                }
                $feedItems[] = [
                    'hash' => $item->get_id(true),
                    'title' => $item->get_title(),
                    'url' => $item->get_link(),
                    'urlToImage' => $feed->get_image_url(),
                    'author' => $item->get_author()->name ?? '',
                    'description' => $item->get_description(),
                ];
            }
            $saveFeed->feedItems()->createMany($feedItems);
            DB::commit();
            return redirect()->route('feed.index')->with('message', 'Feed added successfully');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', 'Something went wrong, please add a lower frequency and try again');
        }

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
        // delete feed and feed items
        $feed->delete();
        return redirect()->route('feed.index')->with('message', 'Feed deleted successfully');

    }

    public function manage(){
        $feeds = Feed::get();
        return view('manage', compact('feeds'));
    }
}
