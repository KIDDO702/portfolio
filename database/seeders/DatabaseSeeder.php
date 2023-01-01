<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\BlogComment;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        // Projects::factory(3)->create();
        $blog = Blog::factory()->create([
            'title' => 'Getting started with Bootstrap laravel and JS',
            'about' => 'Getting to know Bootstrap and laravel better',
            'meta' => 'coding',
            'content' => 'Lorem ipsum dolor sit amet,
                          consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ]);
        Listing::factory(8)->create();
        BlogComment::factory(2)->create([
            'blog_id' => $blog->id,
        ]);
    }
}
