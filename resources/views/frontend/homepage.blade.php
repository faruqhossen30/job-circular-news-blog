@extends('frontend.layouts.app')

@section('SEO')
    <title>Home || Job Circular</title>
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
                            <h6 class="text-uppercase fw-bold text-center mt-2 text-secondary">সর্বশেষ আপডেট :</h6>
                        </div>
                        <div class="">
                            <div class="list-group">
                                @php
                                    $latest = collect($allnews);
                                @endphp
                                @foreach ($latest->slice(0, 4) as $news)
                                    <a href="{{ route('singlenews', $news->slug) }}"
                                        class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                                          </svg>
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
                                    {{-- <img src="{{ asset('storage/circular/' . $circular->thumbnail) }}" class="card-img-top"> --}}
                                    <img src="{{asset('storage/circular/medium/'.$circular->thumbnail)}}" class="card-img-top" alt="{{$circular->title}}">
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
                                <img src="{{ asset('storage/news/medium/' . $news->thumbnail) }}" class="img-fluid"
                                    style="width: 100px;" alt="{{ $news->title }}">
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
