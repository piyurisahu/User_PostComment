


@extends('layouts.masterBlog')


@section('content')

    <div class="col-sm-8 blog-main">
        <h1>Publis  a Post</h1>
        <hr>



        <form method="post" action="/register">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title">name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="form-group">
                <label for="title">email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="title">password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="form-group">
                <label for="password_confirmation">password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>

            <button type="submit" class="btn btn-primary">Publish</button>
        </form>
    </div>

    @include('layouts.errors')

@endsection
