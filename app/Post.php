<?php

namespace App;

Use App\Comment;

class Post extends Model
{


    public function comments()
    {
         return $this->hasMany(Comment::class);
    }

}
