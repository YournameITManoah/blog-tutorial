<article class="blog-post">
        <a href="/posts/{{$post->id}}">
        <h2 class="display-5 link-body-emphasis mb-1">{{$post->title}}</h2>
    </a>
        <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}} by {{$post->user->name}}</p>

        <p>{{$post->body}}</p>
      </article>