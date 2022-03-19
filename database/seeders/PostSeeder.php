<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    public function run(Faker $faker)
    {

        $content = '<p>' . implode('</p><p>', $faker->paragraphs(4)) . '</p>';

        $data = [
            'title' => $faker->sentence,
            'content' => $content,
            'author_name' => $faker->firstName . ' ' . $faker->lastName
        ];

        DB::table('posts')->insert($data);
    }
}
