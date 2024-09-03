@extends('layouts.default')

@section('content')
<h3 class="pb-4 mb-4 fst-italic border-bottom">
        Blog Posts
         @if (Auth::check())
      <a class="btn btn-sm btn-outline-secondary ms-3" href="/posts/create">
              New Post
            </a>
@endif
      </h3>
     
      @foreach ($posts as $post)
      @include('posts.post')
      @endforeach

      <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
        <a class="btn btn-outline-secondary rounded-pill disabled" aria-disabled="true">Newer</a>
      </nav>
      @endsection