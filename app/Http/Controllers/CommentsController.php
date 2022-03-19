<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Http\Resources\CommentResource;
use App\Models\Comment;

class CommentsController extends Controller
{
    public function index()
    {
        $comments = Comment::with('childComments')->whereNull('parent_id')->orderBy('created_at','desc')->get();
        return $this->response(CommentResource::collection($comments));
    }

    public function store(CommentRequest $request)
    {
        $data = [
            'post_id' => $request->post,
            'content' => $request->comment,
            'writer_name' => $request->writerName,
            'parent_id'=>$request->parent
        ];

        Comment::create($data);

        return $this->index();

    }
}
