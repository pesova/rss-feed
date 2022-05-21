<?php

namespace App\Models;

use App\Models\Feed;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FeedItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'hash',
        'title',
        'description',
        'author',
        'url',
        'feed_id',
        'urlToImage',
        'is_read'
    ];

    public function feed()
    {
        return $this->belongsTo(Feed::class);
    }


}
