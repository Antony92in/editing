<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class FindController extends Controller
{
	public function index(Request $req)
	{
		$post = new Post;

		$posts = $post->where('title', 'like', '%'.$req->title.'%')->get();

		if ($req->title == '') {
			return 'Empty Request';
		}
		elseif (count($posts) < 1) {
			return 'Not found';
		}
		else{
			return view('search', ['posts' => $posts]);
		}


	}


	public function cat(Request $req)
	{
		$post = new Post;

		$posts = $post->where([ ['category','=', $req->cat], ['game','=', $req->game] ])->get();

		if (count($posts) < 1) {
			return 'Not found';
		}else{
			return view('search', ['posts' => $posts]);
		}

		
	}
}
