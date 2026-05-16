<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Panel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background: #f5f7fb;
        }

        .card-soft{
            border: none;
            border-radius: 18px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        }

        .navbar{
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .title{
            font-weight: bold;
            font-size: 28px;
        }
    </style>
</head>

<body>

@include('layouts.navigation')

<div class="container py-4">

    @yield('content')

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>