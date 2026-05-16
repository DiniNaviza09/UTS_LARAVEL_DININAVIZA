@extends('layouts.app')

@section('content')

<div class="card-modern bg-white p-5 rounded-4 shadow-sm">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2 class="title-modern mb-0">
            Data Users
        </h2>

        <a href="/users/create"
           class="btn btn-primary rounded-pill px-4">
            + Tambah User
        </a>

    </div>

    {{-- Table --}}
    <table class="table table-hover align-middle">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
            </tr>
        </thead>

        <tbody>

            @forelse($users as $user)

                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>

            @empty

                <tr>
                    <td colspan="3" class="text-center text-muted">
                        Belum ada data users
                    </td>
                </tr>

            @endforelse

        </tbody>

    </table>

</div>

@endsection