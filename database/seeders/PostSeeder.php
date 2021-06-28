<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => Str::random(10),
            'summary' => Str::random(40),
            'published' => 1,
            'publishedAt' => date('Y-m-d'),
            'content' => Str::random(70),
        ]);

        DB::table('posts')->insert([
            'title' => Str::random(10),
            'summary' => Str::random(40),
            'published' => 0,
            'publishedAt' => date('Y-m-d'),
            'content' => Str::random(70),
        ]);

        DB::table('posts')->insert([
            'title' => Str::random(10),
            'summary' => Str::random(40),
            'published' => 1,
            'publishedAt' => date('Y-m-d'),
            'content' => Str::random(70),
        ]);

        DB::table('posts')->insert([
            'title' => Str::random(10),
            'summary' => Str::random(40),
            'published' => 1,
            'publishedAt' => date('Y-m-d'),
            'content' => Str::random(70),
        ]);

        DB::table('posts')->insert([
            'title' => Str::random(10),
            'summary' => Str::random(40),
            'published' => 1,
            'publishedAt' => date('Y-m-d'),
            'content' => Str::random(70),
        ]);
    }
}
