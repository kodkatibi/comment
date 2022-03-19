<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function childComments()
    {
        $this->hasMany(Comment::class, 'comment_id');
    }

    public function parentComment()
    {
        $this->belongsTo(Comment::class, 'comment_id');
    }
}
