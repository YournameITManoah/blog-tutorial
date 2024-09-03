@extends('layouts.default')

@section('content')
<h1>Create Post</h1>
<hr />

<form method="POST" action="/posts">
    @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title" required>
  </div>

  <div class="mb-3">
    <label for="body" class="form-label">body</label>
    <textarea class="form-control" id="body" name="body" required></textarea>
  </div>
 
<div class="mb-3">
      <button type="submit" class="btn btn-primary">Submit</button>
</div>

  @include('partials.errors')

</form>
@endsection