@extends('layouts.default')

@section('content')

<h1>Register</h1>

<form method="POST" action="/register">
    @csrf

  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" required>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>

  <div class="mb-3">
    <label for="password" class="form-label">password</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>

  <div class="mb-3">
    <label for="password_confirmation" class="form-label">password confirmation</label>
    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
  </div>
 
<div class="mb-3">
      <button type="submit" class="btn btn-primary">Submit</button>
</div>

  @include('partials.errors')

</form>

@endsection