<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentFormRequest;
use App\Comment;

class CommentsController extends Controller
{
    public function newComment(CommentFormRequest $request)
    {
        Comment::createComment($request);

        return redirect()->back()->with('status', 'Your comment has been created!');
    }
}
