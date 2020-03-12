<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
    public function index(request $req)
    {
    		$comment = new Comment;

    		if ($req->name == '' || $req->text == '') {
    			return 'Заполните комментарий и никнейм';
    		}
    		else
    		{
    			$comment->post_id = $req->post_id;

    			$comment->author = $req->name;

    			$comment->text = $req->text;

    			$comment->save();

    			return 'Добавлено';
    		}
    }

    public function delete(Request $req)
    {
        $obj = new Comment;

        $comment = $obj->find($req->id);

        $comment->delete();

        return back();
    }
}
