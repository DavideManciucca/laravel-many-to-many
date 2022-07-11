<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use Illuminate\Support\Str;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i = 0; $i < 30; $i++){
            $new_post = new Post();
            $new_post->title = $faker->sentence();
            $new_post->slug = Post::genSlug($new_post->title);
            $new_post->content = $faker->text();
            $new_post->save();

        }
    }
}
