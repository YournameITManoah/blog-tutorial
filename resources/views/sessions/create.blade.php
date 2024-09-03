@extends('layouts.default')

@section('content')

<h1>Sign In</h1>

<form method="POST" action="/login">
    @csrf

  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>

  <div class="mb-3">
    <label for="password" class="form-label">password</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>

<div class="mb-3">
      <button type="submit" class="btn btn-primary">Submit</button>
</div>

  @include('partials.errors')

</form>

@endsection