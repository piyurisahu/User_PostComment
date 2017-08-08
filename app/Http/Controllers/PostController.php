<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //


    public function __construct()
    {
        $this->middleware('auth')->except(['show','index']);
    }

    public function index()
    {

        $posts=Post::all();
        return view('posts.index',compact('posts'));
    }

    public function show(Post $post)
    {


           return view('posts.show',compact('post'));


//        $post = Post::find($id);
//       if($post!=null)
//        return view('posts.show', ['post' => $post ]);
//
//       else
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


        auth()->user()->publish(
            new Post(request(['title','body']))
        );


        return redirect('/');

    }
}
