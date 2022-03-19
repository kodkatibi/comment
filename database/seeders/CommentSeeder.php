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

        for ($i = 0; $i < 40; $i++) {

            $rand = rand(1, 30);

            $data = [
                'post_id' => $postId,
                'writer_name' => $faker->name,
                'content' => $faker->text,
                'parent_id' => $rand % 3 == 0 ? $rand : null
            ];

            Comment::create($data);
        }

    }
}
