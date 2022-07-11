<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Tag;
class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 25; $i++){
            $ran_post = Post::inRandomOrder()->first();
            $ran_tag_id = Tag::inRandomOrder()->first()->id;

            $ran_post->tags()->attach($ran_tag_id);
        }
    }
}
