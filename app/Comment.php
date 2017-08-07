<?php

namespace App;

Use App\Post;

class Comment extends Model
{
    //comment->post
    public function post()
    {


        return $this->belongsTo(Post::class);
    }

}
