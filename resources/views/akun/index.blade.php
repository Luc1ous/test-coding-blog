@extends('layouts.dashboard')
@section('content')
  <h2>Akun page</h2>
  <a href="/users/create" class="btn btn-primary">Add Akun</a>
  <div class="card mt-4">
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Username</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($users as $user)
          <tr>
            <td scope="row">{{ $loop->iteration }}</td>
            <td>{{ $user->username }}</td>
            <td class="d-flex">
              <a href="/users/{{ $user->id }}/edit" class="btn btn-warning me-2">Edit</a>
              <form action="/users/{{ $user->id }}" method="POST">
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