@extends('layouts.dashboard')
@section('content')
  <h2>Create Akun</h2>
  <div class="card mt-4">
    <div class="card-body">
      <form action="/users" method="POST">
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
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" name="name" class="form-control @error('name')
            is-invalid
          @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
          @error('name')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control @error('password')
            is-invalid
          @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
          @error('password')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Role</label>
          <input type="text" name="role" class="form-control @error('role')
            is-invalid
          @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
          @error('role')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
@endsection