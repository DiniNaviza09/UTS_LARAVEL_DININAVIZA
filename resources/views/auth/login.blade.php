@extends('layouts.app')

@section('content')

<div class="row justify-content-center align-items-center" style="min-height: 80vh;">

    <div class="col-md-5">

        <div class="card-modern bg-white p-5 text-center">

            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                 width="110"
                 class="mb-4">

            <h2 class="title-modern mb-2">Welcome Back</h2>

            <p class="text-muted mb-4">
                Login untuk melanjutkan ke dashboard
            </p>

            <form method="POST" action="/login">
                @csrf

                <div class="mb-3 text-start">
                    <label class="form-label fw-semibold">Email</label>
                    <input type="email"
                           name="email"
                           class="form-control form-control-lg rounded-4"
                           placeholder="Masukkan email">
                </div>

                <div class="mb-4 text-start">
                    <label class="form-label fw-semibold">Password</label>
                    <input type="password"
                           name="password"
                           class="form-control form-control-lg rounded-4"
                           placeholder="Masukkan password">
                </div>

                <button class="btn btn-primary btn-lg w-100 rounded-4 shadow">
                    Login
                </button>

            </form>

        </div>

    </div>

</div>

@endsection