<div class="form-group">
    <div class="alert-danger">
        @foreach($errors->all() as $error)
            <ul>
                <li>{{$error}}</li>
            </ul>
        @endforeach
    </div>
</div>