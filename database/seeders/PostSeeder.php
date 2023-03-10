<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) {
        for ($i = 0; $i < 10; $i++) {
            $post = new Post();
            $post->title = $faker->sentence(3); // learn php
            $post->content = $faker->text(400);
            $post->slug = Post::generateSlug($post->title);
            $post->save();
        }
    }
}
