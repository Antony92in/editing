<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function store(Request $request)
    {
        

        $post = new Post;

        $post->author = $request->name;

        $post->title = $request->title;

        $post->text = $request->text;

        $post->category = $request->cat;



        $post->save();
    }
}
