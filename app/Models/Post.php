<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pipeline\Pipeline;

class Post extends Model
{
    use HasFactory;

    public static function allPosts(){

       return $posts = app(Pipeline::class)
            ->send(Post::query())
            ->through([
                \App\QueryFilters\Active::class,
                \App\QueryFilters\Sort::class,
                \App\QueryFilters\MaxCount::class,
            ])
            ->thenReturn()
            ->paginate(4);
       //paginate override the maxCount
    }
}
