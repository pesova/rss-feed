<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\FeedItemController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    $blogs = Blog::limit(3)->get();
    return view('home', compact('blogs'));
})->name('home');

Route::resource('blog', BlogController::class);

Route::get('following/manage', [FeedController::class, 'manage'])->name('feed.manage');
Route::get('following', [FeedController::class, 'index'])->name('following');
Route::resource('feed', FeedController::class);

Route::post('feeditem/{id}', [FeedItemController::class, 'markAsRead'])->name('feeditem.markread');

Route::get('/call-artisan', function(){
    $feed_schedule = Artisan::call('schedule:run');
    $work_feed = Artisan::call('queue:listen');

    return '<h1>Feeds updated</h1>';
});
