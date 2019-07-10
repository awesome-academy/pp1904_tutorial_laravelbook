<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentFormRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function newComment(CommentFormRequest $request)
    {
        Comment::createComment($request);

        return redirect()->back()->with('status', 'Your comment has been created!');
    }
}
