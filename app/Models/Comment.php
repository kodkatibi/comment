<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function childComments()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function parentComment()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }
}
