@extends('frontend.layouts.app')

@section('title')
    Home || Job Circular
@endsection

@section('content')
    @include('frontend.layouts.markque')
    <section>
        <div class="container mt-2">
            <div class="row">
                <!-- Sidebar Start -->
                <div class="col-lg-4 d-none d-lg-block bg-light mt-3">
                    <div class="card" style="position: sticky;top:80px">
                        <div class="card-header">
                            <h6 class="text-uppercase fw-bold text-center mt-2 text-secondary">সর্বশেষ আপডেট : </h6>
                        </div>
                        <div class="">
                            <div class="list-group">
                                @php
                                    $latest = collect($allnews);
                                @endphp
                                @foreach ($latest->slice(0, 4) as $news)
                                    <a href="{{ route('singlenews', $news->slug) }}"
                                        class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                                        <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32"
                                            class="rounded-circle flex-shrink-0">
                                        <div class="d-flex gap-2 w-100 justify-content-between">
                                            <div>
                                                <p class="mb-0 opacity-75">{{ $news->title }}</p>
                                            </div>
                                            <small class="opacity-50 text-nowrap">now</small>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar End -->
                <div class="col-lg-8 col-12">
                    <div class="row">
                        @foreach ($circulars as $circular)
                            <div class="col-sm-6 col-md-4 mt-3">
                                <div class="card">
                                    <img src="{{ asset('storage/circular/' . $circular->thumbnail) }}"
                                        class="card-img-top">
                                    <div class="card-body">
                                        <a href="{{ route('singlecircular', $circular->slug) }}"
                                            class="card-text text-decoration-none fw-bold text-secondary">
                                            {{ $circular->title }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row my-3">
                        {{ $circulars->links() }}
                    </div>
                </div>
            </div>
    </section>

    <section>
        <div class="container">
            <div class="card mt-3">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h6 class="text-uppercase fw-bold text-center mt-2 text-secondary">সর্বশেষ আপডেট : </h6>
                        <a href="{{ route('latestNews') }}" class="text-uppercase fw-bold text-center mt-2 text-secondary">More </a>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($allnews as $news)
                    <div class="col-sm-6 col-md-6 col-lg-4 mt-3">
                        <div class="card">
                            <div class="d-flex flex-row">
                                <img src="{{ asset('storage/news/' . $news->thumbnail) }}" class="img-fluid"
                                    style="width: 100px;" alt="">
                                <a href="{{ route('singlenews', $news->slug) }}"
                                    class="p-2 text-decoration-none fw-bold text-secondary">
                                    {{ $news->title }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
