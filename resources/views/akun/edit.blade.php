@extends('layouts.dashboard')
@section('content')
  <h2>Edit akun</h2>
  <div class="card mt-4">
    <div class="card-body">
      <form action="/users/{{ $user->id }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Username</label>
          <input type="text" name="username" value="{{ $user->username }}" class="form-control @error('username')
            is-invalid
          @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
          @error('username')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" name="name" value="{{ $user->name }}" class="form-control @error('name')
            is-invalid
          @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
          @error('name')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Role</label>
          <input type="text" name="role" value="{{ $user->role }}" class="form-control @error('role')
            is-invalid
          @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
          @error('role')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
      </form>
    </div>
  </div>
@endsection