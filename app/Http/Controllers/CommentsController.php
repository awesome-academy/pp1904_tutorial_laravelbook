<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentFormRequest;
use App\Models\Comment;

class CommentsController extends Controller
{
    public function newComment(CommentFormRequest $request)
    {
        // $comment = new Comment([
        //     'post_id' => $request->get('post_id'),
        //     'content' => $request->get('content')
        // ]);

        // $comment->save();
        Comment::newComment($request);

        return redirect()->back()->with('status', 'Your comment has been created!');
    }
}
