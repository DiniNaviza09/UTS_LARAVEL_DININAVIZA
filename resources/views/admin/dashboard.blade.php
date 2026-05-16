@extends('layouts.app')

@section('content')


<div class="card-modern bg-white p-5">

    <h1 class="title-modern mb-3">
        Dashboard Admin
    </h1>

    <p class="text-muted">
        Selamat datang di halaman dashboard Laravel modern.
    </p>

    <div class="row mt-5">

        <div class="col-md-4 mb-4">
            <div class="card-modern bg-primary text-white p-4">
                <h5>Total Users</h5>
                <h2>120</h2>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card-modern bg-success text-white p-4">
                <h5>Total Product</h5>
                <h2>58</h2>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card-modern bg-dark text-white p-4">
                <h5>Total Order</h5>
                <h2>200</h2>
            </div>
        </div>

</div>

@endsection