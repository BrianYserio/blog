<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function comment ()
    {
        return $this->hasMany(Comment::class);
    }

    public function author ()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
