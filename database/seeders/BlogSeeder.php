<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::factory(1)->create([
            'id' => 100,
            'title' => 'DO YOU WANT TO BECOME A DEVELOPER?',
            'short_desc' => 'Being a developer requires many skills, and there are two major factors in developing a skill: effective practice and support from senior developers.',

            'long_desc' => 'Get a Mentor.
            This is the perfect situation: you start coding and have a developer act as your mentor and tutor. They could be a friend, family member, or just a developer that wants to help you out. You won’t get as much help as with a bootcamp, but having someone to turn to when you hit a roadblock is really useful. Also having someone checking in on you and making sure that you’re putting in the time can help keep you on track.',

            'image_path' => 'pen.jpg',
        ]);

        Blog::factory(1)->create([
            'title' => 'Is Laravel the best framework?',
            'short_desc' => 'Laravel 9 is the latest version of Laravel framework.',
            'long_desc' => 'Laravel 9 is the latest version of Laravel framework. It is a powerful framework for building web applications using PHP. It is a full-stack framework, which means that it can be used to build websites, web apps, or any other type of application. It is a MVC (Model-View-Controller) framework, which means that it can be used to build websites, web apps, or any other type of application. It is a MVC (Model-View-Controller) framework, which means that it can be used to build websites, web apps, or any other type of application.',
            'image_path' => 'laravel.png',
        ]);

        Blog::factory(1)->create([
            'title' => 'How I code for 8 hours without feeling tired.',
            'short_desc' => 'Today I can code 8+ hours without like crap after.',
            'long_desc' => 'Everything starts with a schedule. What, where, and when I do.

                My schedule looks like this:
                
                7 AM to 8:30 AM: Meditation, Sport, Shower.
                
                8:30 AM to 9:00 AM: Breakfast.
                
                9:00 AM to 12:00 PM: My 3 hours programming time.
                
                12:00 PM to 1:00 PM: Lunch and go out walking for 15–20 minutes.
                
                1:00 PM to 6:00/7:00/8:00 PM: My Next hours for coding.
                
                8:00 to 9:00 PM: Family Time, Watch a movie or something.
                
                DO NOT FORGET TO SLEEP 8 HOURS A DAY.
                YOUR BRAIN NEEDS TO COLLECT THE GARBAGE AND RID OF THEM.',

            'image_path' => 'writing.jpeg',
        ]);


    }
}
