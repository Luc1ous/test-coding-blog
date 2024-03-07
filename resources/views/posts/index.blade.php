@extends('layouts.dashboard')
@section('content')
    <h2>Posts page</h2>
    <a href="/posts/create" class="btn btn-primary">Create post</a>
    <div class="card mt-4">
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Title</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($posts as $post)
            <tr>
              <td scope="row">{{ $loop->iteration }}</td>
              <td>{{ $post->title }}</td>
              <td class="d-flex">
                <a href="/posts/{{ $post->id }}/edit" class="btn btn-warning me-2">Edit</a>
                <form action="/posts/{{ $post->id }}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
            </tr>
            @empty
              <tr>
                <td colspan="3" class="text-center">Empty posts</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
@endsection