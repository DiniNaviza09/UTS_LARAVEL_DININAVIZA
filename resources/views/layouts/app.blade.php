<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laravel Modern UI</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body {
            background: #f4f7fb;
            font-family: 'Segoe UI', sans-serif;
        }

        .card-modern {
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        .title-modern {
            font-weight: bold;
            color: #1d3557;
        }

    </style>

</head>

<body>

    {{-- Navbar --}}
    @include('layouts.navigation')

    {{-- Content --}}
    <div class="container py-5">

        @yield('content')

    </div>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>