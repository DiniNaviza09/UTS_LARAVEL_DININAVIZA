@extends('layouts.app')

@section('content')

<div class="container mt-5 d-flex justify-content-center">

    <div class="card shadow-lg border-0 rounded-4"
         style="width: 500px;">

        <div class="card-header bg-primary text-white text-center">

            <h2>Create Product</h2>

        </div>

        <div class="card-body p-4">

            <form action="{{ route('product.store') }}"
                  method="POST">

                @csrf

                <div class="mb-3">

                    <label class="form-label">
                        Product Name
                    </label>

                    <input type="text"
                           name="name"
                           class="form-control"
                           required>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Product Price
                    </label>

                    <input type="number"
                           name="price"
                           class="form-control"
                           required>

                </div>

                <button type="submit"
                        class="btn btn-primary w-100">

                    Save Product

                </button>

            </form>

        </div>

    </div>

</div>

@endsection