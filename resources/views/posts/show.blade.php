@extends('layouts.default')

@section('content')

<h1>{{$post->title}}</h1>

<p>
    {{$post->body}}
</p>

<hr>

<div class="comments">
    <ul class="list-group">
    @foreach ($post->comments as $comment)
        <li class="list-group-item">
            <strong>
                {{$comment->created_at->diffForHumans()}} by {{$comment->user->name}}: 
            </strong>
            {{ $comment->body}}
        </li>
    @endforeach
    </ul>
</div>

<hr>

<div class="card">
<div class="card-block">
    <form method="POST" action="/posts/{{$post->id}}/comments">
    @csrf

  <div class="mb-3 mx-3 mt-3">
    <textarea class="form-control" id="body" name="body" placeholder="Your comment here" required></textarea>
  </div>
 
<div class="mb-3 ms-3">
      <button type="submit" class="btn btn-primary">Submit</button>
</div>

  @include('partials.errors')

</form>
</div>
</div>

@endsection