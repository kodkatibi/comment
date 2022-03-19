<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function childComments()
    {
        return $this->hasMany('App\Models\Comment', 'parent_id', 'id');
    }

    public function childOn()
    {

    }

    public function parentComment()
    {
        return $this->belongsTo('App\Models\Comment', 'parent_id', 'id');
    }
}
