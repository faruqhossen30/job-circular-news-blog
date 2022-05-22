@extends('frontend.layouts.app')

@section('content')
    <section>
        <div class="container mt-2 mb-4">
            <form action="" method="get">
                <div class="row">
                    <div class="row multiple-search-area">
                        <div class="col-xl-8 offset-xl-2 offset-lg-2 col-lg-8">
                            <div class="breadcrumb-search-bar">
                                <form action="#" class="d-flex align-items-center justify-content-center">
                                    <div class="input-group input-group-sm">
                                        <span id="inputGroup-sizing-sm">
                                            <select name="type" class="form-select" id="search-bar">
                                                <option value="circular">Circular</option>
                                                <option value="news">News</option>
                                            </select>
                                        </span>

                                        <input type="search" name="keyword" class="form-control" @isset($_GET['keyword']) value="{{ $_GET['keyword'] }}"  @endisset
                                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        <button class="btn-secondary">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 d-none d-lg-block bg-light mt-3">
                        <div class="card mb-4 ">
                            <div class="card-header ">
                                <h6 class="text-uppercase fw-bold text-center mt-2 text-secondary">ফিল্টার : </h6>
                            </div>
                            <div class="list-group mx-0">
                                @foreach ($categories as $category)
                                    <label class="list-group-item d-flex gap-2">
                                        <input name="category[]" value="{{ $category->id }}" onchange="this.form.submit()"
                                            class="form-check-input flex-shrink-0" type="checkbox"
                                            @if (isset($_GET['category']) && in_array($category->id, $_GET['category'])) checked @endif \>
                                        <span>
                                            {{ $category->name }}
                                        </span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar Start -->
                    <!-- Sidebar End -->
                    <div class="col-lg-9 col-12">
                        @if (count($allnews) > 0)
                            <!-- Filter Start -->
                            <div class="row">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex justify-content-between">
                                        <label for="" class="form-label text-secondary fw-bold pt-1"
                                            style="margin-right: 10px;">Filter:
                                        </label>
                                        <select name="sort" class="form-select" onchange="this.form.submit()">
                                            <option value="" disabled>Select</option>
                                            <option @if (isset($_GET['sort']) && $_GET['sort'] == 'asc') selected @endif value="asc">Latest
                                            </option>
                                            <option @if (isset($_GET['sort']) && $_GET['sort'] == 'desc') selected @endif value="desc">Old
                                            </option>
                                        </select>
                                    </div>
                                    <div class="d-flex">
                                        <label for="" class="form-label text-secondary fw-bold pt-1"
                                            style="margin-right: 10px;">Show:
                                        </label>
                                        <select name="count" class="form-select" onchange="this.form.submit()">
                                            <option selected value="10">10</option>
                                            <option @if (isset($_GET['count']) && $_GET['count'] == '20') selected @endif value="20">20</option>
                                            <option @if (isset($_GET['count']) && $_GET['count'] == '30') selected @endif value="30">30</option>
                                            <option @if (isset($_GET['count']) && $_GET['count'] == '40') selected @endif value="40">40</option>
                                        </select>
                                    </div>
                                </div>
                                @if (isset($_GET['keyword']))
                                    <div class="bg-body mt-3">
                                        <p><strong>Your are Searching: </strong> {{ $_GET['keyword'] }}</p>
                                    </div>
                                @endif
                            </div>
                            <div class="row">
                                @foreach ($allnews as $news)
                                    <div class="col-sm-6 col-md-4 mt-3">
                                        <div class="card">
                                            <img src="{{ asset('storage/news/' . $news->thumbnail) }}"
                                                class="card-img-top">
                                            <div class="card-body">
                                                <a href="{{ route('singlenews', $news->id) }}"
                                                    class="card-text text-decoration-none fw-bold text-secondary">
                                                    {{ $news->title }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="row my-3">
                                    {{ $allnews->links() }}
                                </div>
                            </div>
                        @else
                            <div class="card mt-3">
                                <div class="d-flex justify-content-center no-post-found">
                                    <strong>No Post Found in "{{ $_GET['keyword'] }} "</strong>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </form>
    </section>
@endsection
