<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function index()
    {
        return view('posts.index');
    }

    public function show(Post $post)
    {

//        $post = Post::find($id);
//       if($post!=null)
//        return view('posts.show', ['post' => $post ]);
//
//       else

           return view('posts.show',compact('post'));
//        return view('posts.show', ['name' => 'James']);
    }

    public function create()
    {
        return view('posts.create');
    }
    public function store()
    {


        $this->validate(request(),[
            'body'=>'required',
            'title'=>'required'
        ]);


    Post::create(request(['title','body']));
        return redirect('/');

    }
}
