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

        $post->game = $request->game;



        $post->save();
    }

    public function update(Request $request)
    {
        $obj = new Post;

        $post = $obj->find($request->id);

        $post->title = $request->title;

        $post->text = $request->text;

        $post->save();
    }

    public function delete(Request $request)
    {
        $obj = new Post;

        $post = $obj->find($request->id);

        $post->delete();
    }
}
