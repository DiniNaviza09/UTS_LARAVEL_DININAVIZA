@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h1 class="fw-bold">Products</h1>
            <p class="text-muted">
                List all products
            </p>
        </div>

        <a href="{{ route('product.create') }}"
           class="btn btn-primary">
            Add Product
        </a>

    </div>

    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif

    <table class="table table-bordered">

        <thead class="table-dark">

            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Price</th>
            </tr>

        </thead>

        <tbody>

            <tr>
                <td>1</td>
                <td>Laptop</td>
                <td>7000000</td>
            </tr>

        </tbody>

    </table>

</div>

@endsection