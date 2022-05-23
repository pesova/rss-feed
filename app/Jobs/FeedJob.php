<?php

namespace App\Jobs;

use App\Models\Feed;
use DB;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class FeedJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct( )
    {
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $feeds = Feed::all();

        // pull feeds every 10 minutes
        DB::beginTransaction();
        try {

            foreach ($feeds as $feed) {
                $rss_feed = \Feeds::make($feed->url);
                // update or create feed
                $getRssFeedItems = $rss_feed->get_items();
                $feedItems = [];
                Log::info('FeedJob: ' . $feed->url);
        
                foreach ($getRssFeedItems as $index => $item) {
                    if ($feed->frequency && $feed->frequency == $index) {
                        break;
                    }
                    $feedItems[] = [
                        'hash' => $item->get_id(true),
                        'title' => $item->get_title(),
                        'url' => $item->get_link(),
                        'urlToImage' => $rss_feed->get_image_url(),
                        'author' => $item->get_author()->name ?? '',
                        'description' => $item->get_description(),
                    ];

                }

                foreach ($feedItems as $key => $itemfeed) {

                    $checkwhatupdated = $feed->feedItems()->firstOrCreate([
                        'hash' => $feed->feedItems()->where('hash', $itemfeed['hash'])->first()->hash,
                    ], [
                        'hash' => $itemfeed['hash'],
                        'title' => $itemfeed['title'],
                        'url' => $itemfeed['url'],
                        'urlToImage' => $itemfeed['urlToImage'],
                        'author' => $itemfeed['author'],
                        'description' => $itemfeed['description'],
                    ]);
                    Log::info('FeedJob What updated: ' . $checkwhatupdated->title);

                }
                
            }
            DB::commit();
            Log::info('Feed Commmit read successfully');
        } catch (\Exception $e) {
            DB::rollback();
            Log::info('LOG ERROR :' . $e->getMessage());
        }
    }
}
