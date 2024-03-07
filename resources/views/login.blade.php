@extends('layouts.auth')
@section('content')
<div class="card">
  <div class="card-body">
    <h4>Login</h4>
    @if (session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error : </strong> {{ session('error') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <form action="/login" method="POST">
      @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="text" name="username" class="form-control @error('username')
          is-invalid
        @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
        @error('username')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control @error('password')
        is-invalid
        @enderror" id="exampleInputPassword1">
        @error('password')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
@endsection