@php
$categories = App\Models\Category::get();
@endphp

<header class="container-fluid border-bottom sticky-top bg-body shadow-sm">
    <div class="container bg-body">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('frontend/img/logo.png') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
                        <li class="nav-item">
                            <a class="nav-link fw-bold active" aria-current="page" href="{{ url('/') }}">হোম</a>
                        </li>
                        @foreach ($categories as $category)
                            <li class="nav-item">
                                <a class="nav-link fw-bold"
                                    href="{{ route('category', $category->slug) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                        <li class="nav-item">
                            <a class="nav-link fw-bold"
                                href="{{ url('all-news') }}">আপডেট/খবর</a>
                        </li>

                    </ul>
                    {{-- <form action="{{ route('search') }}" method="get" class="d-flex align-items-center">
                        <input class="form-control" name="keyword" type="search" placeholder="Search" aria-label="Search">
                        <i class="fa fa-search"></i>
                    </form> --}}
                    <a href="{{ route('search') }}" class="btn btn-secondary btn-sm">SEARCH</a>
                </div>
            </div>
        </nav>
    </div>
</header>
