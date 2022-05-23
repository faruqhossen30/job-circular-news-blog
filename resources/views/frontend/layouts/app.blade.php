<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <title>@yield('title')</title>
</head>

<body class="bg-light">
    <!-- Menu Start -->
    @include('frontend.layouts.menu')
    <!-- Menu End -->
    <!-- Markque Start -->

    <!-- Markque End -->

    @yield('content')

    {{-- Footer --}}
    @include('frontend.layouts.footer')
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('frontend') }}/js/bootstrap.js"></script>
</body>

</html>
