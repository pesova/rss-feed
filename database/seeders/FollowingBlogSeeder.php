<?php

namespace Database\Seeders;

use App\Models\FollowingBlog;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FollowingBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FollowingBlog::truncate();
        $followedBlogs = [
            [
                'blog_name' => 'Laravel Daily',
                'blog_url' => 'https://laraveldaily.com',
            ],
            [
                'blog_name' => 'Medium',
                'blog_url' => 'https://medium.com',
            ],
            [
                'blog_name' => 'DEV Community',
                'blog_url' => 'https://dev.to',
            ],
            [
                'blog_name' => 'Laravel Weekly',
                'blog_url' => 'https://https://laravel.io',
            ],
            [
                'blog_name' => 'HackerNoon',
                'blog_url' => 'https://hackernoon.com',
            ],
            [
                'blog_name' => 'Stack Overflow',
                'blog_url' => 'https://stackoverflow.com/',
            ],
            [
                'blog_name' => 'GeeksforGeeks',
                'blog_url' => 'https://geeksforgeeks.org/',
            ],
            [
                'blog_name' => 'Hacker News',
                'blog_url' => 'https://news.ycombinator.com/',
            ],
        ];

        FollowingBlog::insert($followedBlogs);
    }
}
