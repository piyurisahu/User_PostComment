@extends('layouts.masterBlog')

@section('content')

    @if($post!=null)
    <div class="col-sm-8 blog-main">

        <h1> {{$post->title}} </h1>
        <h5>{{ $post->body }}</h5>

        {{--//<h1>{{ $name }}</h1>--}}


    <hr>

    <div class="comments">

        <ul class="list-group">
        @foreach($post->comments as $comment)

                <li class="list-group-item">
                    <strong>{{ $comment->created_at }}</strong>
                    : {{$comment->body}}
                </li>
        @endforeach
        </ul>
    </div>
    </div>

        @else
        <h1> There are no comment for  post id {{ $id }}</h1>
    @endif

    <hr>
    <div class="card">
        <div class="card-block">
            <form method="POST" action="/posts/{{ $post->id }}/comments">

                {{csrf_field()}}
                <div class="form-group">
                    <textarea name="body" placeholder="Your comment here " class="form-control"></textarea>
                </div>

                <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Comments </button>
                </div>

            </form>
        </div>

        @include('layouts.errors')
        </div>
    </div>

@endsection


