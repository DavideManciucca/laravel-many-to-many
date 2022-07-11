<?php

use Illuminate\Database\Seeder;
use App\Tag;
use Illuminate\Support\Str;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['prova-tag-1','prova-tag-2','prova-tag-3','prova-tag-4'];
        foreach ($data as $tag){
            $new_tag= new Tag();
            $new_tag->name=$tag;
            $new_tag->slug=Str::slug($tag,'-');
            $new_tag->save();
        }
    }
}
