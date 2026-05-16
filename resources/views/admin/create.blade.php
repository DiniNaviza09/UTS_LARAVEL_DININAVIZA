@extends('layouts.app')

@section('content')

<div class="row justify-content-center">

    <div class="col-md-7">

        <div class="card shadow border-0 rounded-4 p-5">

            <h2 class="fw-bold mb-4 text-primary">
                Tambah User
            </h2>

            <form action="{{ route('users.store') }}" method="POST">
                
                @csrf

                {{-- Nama --}}
                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Nama
                    </label>

                    <input 
                        type="text"
                        name="name"
                        class="form-control form-control-lg rounded-4"
                        required
                    >

                </div>

                {{-- Email --}}
                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Email
                    </label>

                    <input 
                        type="email"
                        name="email"
                        class="form-control form-control-lg rounded-4"
                        required
                    >

                </div>

                {{-- Password --}}
                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Password
                    </label>

                    <input 
                        type="password"
                        name="password"
                        class="form-control form-control-lg rounded-4"
                        required
                    >

                </div>

                {{-- Button --}}
                <button class="btn btn-primary btn-lg rounded-pill px-5">
                    Simpan User
                </button>

            </form>

        </div>

    </div>

</div>

@endsection