@extends('frontend.layouts.app')

@section('content')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}"><i class="fa fa-home"></i></a></li> >
                            <li aria-current="page">Category</li> >
                            <li aria-current="page">{{ $categories->name }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container mt-2 pt-3">
            <div class="row">
                <!-- Sidebar Start -->
                <!-- Sidebar End -->
                <div class="col-lg-12 col-12">
                    @if (count($allnews) > 0)
                        <!-- Filter Start -->
                        <form action="" method="GET">
                            <div class="row">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex justify-content-between">
                                        <label for="" class="form-label text-secondary fw-bold pt-1"
                                            style="margin-right: 10px;">Sort:
                                        </label>
                                        <select name="sort" class="form-select" onchange="this.form.submit()">
                                            <option value="">Select</option>
                                            <option @if (isset($_GET['sort']) && $_GET['sort'] == 'asc') selected @endif value="asc">Latest
                                            </option>
                                            <option @if (isset($_GET['sort']) && $_GET['sort'] == 'desc') selected @endif value="desc">Old
                                            </option>
                                        </select>
                                    </div>
                                    <div>
                                        <div class="d-flex justify-content-between">
                                            <label for="" class="form-label text-secondary fw-bold pt-1"
                                                style="margin-right: 10px;">Show:
                                            </label>
                                            <select name="count" class="form-select" onchange="this.form.submit()">
                                                <option selected value="">10</option>
                                                <option @if (isset($_GET['count']) && $_GET['count'] == '20') selected @endif value="20">20
                                                </option>
                                                <option @if (isset($_GET['count']) && $_GET['count'] == '30') selected @endif value="30">30
                                                </option>
                                                <option @if (isset($_GET['count']) && $_GET['count'] == '40') selected @endif value="40">40
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row mt-3">
                            @foreach ($allnews as $news)
                                <div class="col-md-4">
                                    <div class="card p-2">
                                        <div class="single-news">
                                            {{-- <img src="{{ asset('frontend') }}/img/tv.jpg" style="width: 100%" alt=""> --}}
                                            <img  src="{{ asset('storage/circular/' . $news->thumbnail) }}"
                                            alt="">
                                            <a href="{{ route('singlenews',$news->id) }}">{{ $news->title }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Pagination -->
                        <div class="row my-3">
                            {{-- {{ $news->links() }} --}}
                        </div>
                    @else
                        <div class="card mb-4">
                            <div class="card-body">
                                No post found in <strong>{{ $categories->name }}</strong> Category
                            </div>
                        </div>
                    @endif
                </div>
            </div>
    </section>
@endsection
