<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Feed;
use App\Models\FollowingBlog;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Blog::factory(5)->create();
        Feed::factory(2)->create();
        FollowingBlog::factory(1)->create([
            'blog_name' => 'Laravel Daily',
            'blog_url' => 'https://laraveldaily.com',
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
