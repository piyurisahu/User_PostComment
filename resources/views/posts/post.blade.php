<li class="blog-post">

    <h2 class ='blog-post-title'>
    <h3><a href="/posts/{{$post->id}}">
            {{ $post->title}}
        </a>
    </h3>
    </h2>




    <p class="blog-post-meta">
        {{$post->user->name}}
      {{$post->created_at}}
    </p>


    {{ $post->body }}
</li>