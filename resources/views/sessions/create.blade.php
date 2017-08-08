


@extends('layouts.masterBlog')


@section('content')

    <div class="col-md-8">
        <h1>Sign In</h1>


        <form method="post" action="/login">
            {{csrf_field()}}

            <div class="form-group">
                <label for="title">email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="title">password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>


            <button type="submit" class="btn btn-primary">Sign In</button>
            @include('layouts.errors')
        </form>
    </div>



@endsection
