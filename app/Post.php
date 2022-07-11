<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Post extends Model
{

    public function tags(){
        return $this->belongsToMany('App\Tag');
    }


    protected $fillable=[
        'title',
        'slug',
        'content'
    ];


    public static function genSlug($title){
        $slug = Str::slug($title,'-');
        $slug_base = $slug;
        $post_presente = Post::where('slug',$slug)->first();
        $c = 1;

        while($post_presente){
            $slug = $slug_base . '-' . $c;
            $c++;
            $post_presente = Post::where('slug',$slug)->first();
        }

        return $slug;
    }
}
