<?php

namespace Database\Seeders;

use App\Models\Comment;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        $postId = DB::table('posts')->pluck('id')[0];

        for ($i = 0; $i < 4; $i++) {
            $data = [
                'post_id' => $postId,
                'writer_name' => $faker->name,
                'content' => $faker->text
            ];
            Comment::create($data);
        }

    }
}
