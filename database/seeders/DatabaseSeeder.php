<?php

namespace Database\Seeders;

use App\Models\Feed;
use Illuminate\Database\Seeder;
use Database\Seeders\BlogSeeder;
use Database\Seeders\FollowingBlogSeeder;
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
        $this->call(BlogSeeder::class);
        Feed::factory(2)->create();
        $this->call(FollowingBlogSeeder::class);
    }
}
