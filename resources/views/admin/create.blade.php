@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">

    <div class="card card-soft p-4" style="width: 450px;">

        <h2 class="text-center mb-3">Create User</h2>

        <form action="/users" method="POST">

            @csrf

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button class="btn btn-primary w-100">
                Save User
            </button>

        </form>

    </div>

</div>

@endsection