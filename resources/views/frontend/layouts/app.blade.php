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
    <style>
        form {
            position: relative;
        }

        form i {
            position: absolute;
            right: 10px;
            cursor: pointer;
        }

        .no-post-found {
            padding: 95px 0;
        }

        .breadcrumb-search-bar {
            padding: 20px 0;
        }

        .multiple-search-area {
            background: radial-gradient(black, transparent);
            margin: 10px 0;
            padding: 25px 0;
        }

        .breadcrumb-area {
            border-bottom: 2px solid #ddd;
            padding: 20px 0;
            line-height: 1;
        }

        .breadcrumb {
            padding: 0;
            margin-bottom: 0;
        }

        ol.breadcrumb i {
            color: #000;
        }

        ol.breadcrumb li {
            font-size: 15px;
            font-weight: 500;
        }

        .breadcrumb-search-bar button {
            border: 1px solid #ddd;
            padding: 6px 10px;
            border-radius: 0 5px 5px 0;
        }

        .single-news img {
            width: 100%;
            height: 200px;
        }

        .single-news a {
            text-decoration: none;
            padding: 10px 0;
            display: block;
            color: #000;
        }

        ol.breadcrumb.latestNews {
            float: right;
        }

        .card {
            margin-bottom: 20px;
        }

    </style>
    <title>Hello, world!</title>
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
