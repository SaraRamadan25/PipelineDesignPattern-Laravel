<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;

class PostController extends Controller
{
    public function index(){

        $posts = Post::allPosts();
        // before making pipeline
/*        $posts = Post::query();*/

/*
        if (request()->has('active')){
            $posts->where('active',request('active'));
        }

        if (request()->has('sort')){
            $posts->orderBy('title',request('sort'));*/


        return view('post.index',compact('posts'));
    }

}
