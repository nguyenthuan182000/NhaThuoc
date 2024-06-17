<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nhà thuốc</title>

    {{-- Boostrap --}}
    <link rel="stylesheet" href="{{ asset('frontend/lib/bootstrap/css/bootstrap.min.css') }}">
    {{-- Semantic --}}
    <link rel="stylesheet" href="{{ asset('frontend/lib/Semantic-UI/semantic.min.css') }}">
    {{-- FontAwesome --}}
    <link rel="stylesheet" href="{{ asset('frontend/lib/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/utilities.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
</head>

<body>
    <div class="wrapper">
        {{-- Start Header --}}
        <header id="header">
            @include('frontend.partials.header')
        </header>
        {{-- End Header --}}

        {{-- Start Nav --}}
        <nav id="navbar">
            @include('frontend.partials.menu')
        </nav>
        {{-- End Nav --}}

        {{-- Start Main --}}
        <main id="main" style="height: 500px; background-color: #b7b3b3">
            @yield('content')
        </main>
        {{-- End Main --}}

        {{-- Start Footer --}}
        <footer id="footer">

        </footer>
        {{-- End Footer --}}
    </div>


    {{-- Boostrap --}}
    <script src="{{ asset('frontend/lib/bootstrap/js/bootstrap.min.js') }}"></script>
    {{-- Semantic --}}
    <script src="{{ asset('frontend/lib/Semantic-UI/semantic.min.js') }}"></script>
    {{-- FontAwesome --}}
    <script src="{{ asset('frontend/lib/fontawesome/js/all.min.js') }}"></script>

    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>
