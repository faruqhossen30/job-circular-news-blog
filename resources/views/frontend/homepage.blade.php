@extends('frontend.layouts.app')
@section('content')
    <section>
        <div class="container mt-2">
            <div class="row">
                <!-- Sidebar Start -->
                <div class="col-lg-4 d-none d-lg-block bg-light mt-3">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="text-uppercase fw-bold text-center mt-2 text-secondary">সর্বশেষ আপডেট : </h6>
                        </div>
                        <div class="">
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3"
                                    aria-current="true">
                                    <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32"
                                        class="rounded-circle flex-shrink-0">
                                    <div class="d-flex gap-2 w-100 justify-content-between">
                                        <div>
                                            <h6 class="mb-0">List group item heading</h6>
                                            <p class="mb-0 opacity-75">Some placeholder content in a paragraph.</p>
                                        </div>
                                        <small class="opacity-50 text-nowrap">now</small>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3"
                                    aria-current="true">
                                    <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32"
                                        class="rounded-circle flex-shrink-0">
                                    <div class="d-flex gap-2 w-100 justify-content-between">
                                        <div>
                                            <h6 class="mb-0">Another title here</h6>
                                            <p class="mb-0 opacity-75">Some placeholder content in a paragraph that goes a
                                                little longer so it
                                                wraps to a new line.</p>
                                        </div>
                                        <small class="opacity-50 text-nowrap">3d</small>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3"
                                    aria-current="true">
                                    <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32"
                                        class="rounded-circle flex-shrink-0">
                                    <div class="d-flex gap-2 w-100 justify-content-between">
                                        <div>
                                            <h6 class="mb-0">Third heading</h6>
                                            <p class="mb-0 opacity-75">Some placeholder content in a paragraph.</p>
                                        </div>
                                        <small class="opacity-50 text-nowrap">1w</small>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3"
                                    aria-current="true">
                                    <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32"
                                        class="rounded-circle flex-shrink-0">
                                    <div class="d-flex gap-2 w-100 justify-content-between">
                                        <div>
                                            <h6 class="mb-0">Third heading</h6>
                                            <p class="mb-0 opacity-75">Some placeholder content in a paragraph.</p>
                                        </div>
                                        <small class="opacity-50 text-nowrap">1w</small>
                                    </div>
                                </a>
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
                                {{-- <img src="{{ asset('frontend/img/tv.jpg') }}" class="card-img-top"> --}}
                                <img src="{{ asset('storage/circular/'.$circular->thumbnail) }}" class="card-img-top">
                                <div class="card-body">
                                    <a href="#" class="card-text text-decoration-none fw-bold text-secondary">
                                        {{$circular->title}}
                                    </a>
                                </div>
                            </div>
                        </div>

                        @endforeach


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
                        <h6 class="text-uppercase fw-bold text-center mt-2 text-secondary">More </h6>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($circulars as $circular)
                    <div class="col-sm-6 col-md-6 col-lg-4 mt-3">
                        <div class="card">
                            <div class="d-flex flex-row">
                                <img src="{{ asset('frontend/img/tv.jpg') }}" class="img-fluid" style="width: 100px;"
                                    alt="">
                                <a href="#" class="p-2 text-decoration-none fw-bold text-secondary">Lorem ipsum dolor sit
                                    amet
                                    consectetur
                                    adipisicing elit. Voluptas, veritatis.</a>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
