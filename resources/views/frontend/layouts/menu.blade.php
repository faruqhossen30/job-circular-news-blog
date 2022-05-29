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
                    <a href="{{ route('search') }}" class="btn btn-secondary btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                          </svg>
                        SEARCH</a>
                </div>
            </div>
        </nav>
    </div>
</header>
