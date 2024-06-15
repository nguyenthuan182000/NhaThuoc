<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nhà thuốc</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">

    {{-- Boostrap --}}
    <link rel="stylesheet" href="{{ asset('frontend/lib/bootstrap/css/bootstrap.min.css') }}">

    {{-- Semantic --}}
    <link rel="stylesheet" href="{{ asset('frontend/lib/Semantic-UI/semantic.min.css') }}">
</head>

<body>

    {{-- Main --}}
    <div class="wrapper">
        <header id="header">
            @include('frontend.partials.header')
        </header>

        <main>
            @yield('content')
        </main>

        <footer id="footer">

        </footer>
    </div>

    <script src="{{ asset('frontend/js/main.js') }}"></script>
    {{-- Boostrap --}}
    <script src="{{ asset('frontend/lib/bootstrap/js/bootstrap.min.js') }}"></script>

    {{-- Semantic --}}
    <script src="{{ asset('frontend/lib/Semantic-UI/semantic.min.js') }}"></script>
</body>

</html>
