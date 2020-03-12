<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\Http\Controllers\Controller;

class ShowController extends Controller
{
    public function index(request $req)
    {
    	$obj = new Post;

    	$posts = $obj->find($req->id);

    	$com = new Comment;

    	$comments = $com->where('post_id', $req->id)->get();



    	return view('post',['post' => $posts, 'comments' => $comments] );
    }
}
