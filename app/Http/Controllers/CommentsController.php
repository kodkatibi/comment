<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommentCollection;
use App\Http\Resources\CommentResource;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function index(Request $request)
    {
        $comments = Comment::with('childComments')->whereNull('parent_id')->get();
        return CommentResource::collection($comments);
    }

    public function store(Request $request)
    {
        //
    }
}
