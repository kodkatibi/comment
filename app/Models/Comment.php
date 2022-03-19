<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    public function childComments()
    {
        return $this->hasMany(self::class, 'parent_id')->orderBy('comments.created_at','desc');
    }

    public function parentComment()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }
}
