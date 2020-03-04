<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Controllers\Controller;

class ShowController extends Controller
{
    public function index(request $req)
    {
    	$obj = new Post;

    	$posts = $obj->find($req->id);

    	return view('post', [ 'post' => $posts]);
    }
}
