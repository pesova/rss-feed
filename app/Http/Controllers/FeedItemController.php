<?php

namespace App\Http\Controllers;

use App\Models\FeedItem;
use Illuminate\Http\Request;

class FeedItemController extends Controller
{
    public function markAsRead(Request $request, $id)
    {
        $feedItem = FeedItem::findOrFail($id);
        $feedItem->is_read = true;
        $feedItem->save();
        return response()->json(['success' => true]);
    }
}
