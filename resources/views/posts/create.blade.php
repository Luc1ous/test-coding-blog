@extends('layouts.dashboard')
@section('content')
    <h2>Create new post</h2>
    <div class="card mt-4">
      <div class="card-body">
        <form action="/posts" method="POST">
          @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" name="title" class="form-control @error('title')
              is-invalid
            @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Content</label>
            <textarea class="form-control @error('content')
              is-invalid
            @enderror" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
            @error('content')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
@endsection