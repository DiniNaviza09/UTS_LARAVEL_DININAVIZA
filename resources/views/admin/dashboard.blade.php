@extends('layouts.app')

@section('content')

<div class="card card-soft p-4">

    <h2 class="title">Dashboard</h2>
    <p class="text-muted">Welcome to your admin panel</p>

    <div class="row mt-4">

        <div class="col-md-4">
            <div class="card bg-primary text-white card-soft p-4">
                <h5>Users</h5>
                <h2>120</h2>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-success text-white card-soft p-4">
                <h5>Products</h5>
                <h2>80</h2>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-dark text-white card-soft p-4">
                <h5>Orders</h5>
                <h2>50</h2>
            </div>
        </div>

    </div>

</div>

@endsection