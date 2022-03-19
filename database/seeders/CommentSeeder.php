<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    public function run()
    {
        $posts = DB::table('posts')->pluck('id');
        foreach ($posts as $post){
            dd($post);
        }
    }
}
