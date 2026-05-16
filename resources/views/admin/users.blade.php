@extends('layouts.app')

@section('content')

<div class="card card-soft p-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <div>
            <h2 class="title">Users</h2>
            <p class="text-muted">List all registered users</p>
        </div>

        <a href="/users/create" class="btn btn-primary">
            + Add User
        </a>

    </div>

    <table class="table table-hover align-middle">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

            @foreach($users as $user)

            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>

                    <a href="/users/{{ $user->id }}/edit" class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="/users/{{ $user->id }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-sm">
                            Delete
                        </button>

                    </form>

                </td>
            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection