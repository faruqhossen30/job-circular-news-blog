@extends('frontend.layouts.app')


@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <h4> {{ $allnews->title }}</h4>
                    </div>
                    <div class="card-body">
                        <img style="width: 100%;" src="{{ asset('storage/news/' . $allnews->thumbnail) }}"
                            alt="thumbnail">
                        <p class="mt-2">{!! $allnews->description !!}</p>
                    </div>

                </div>
            </div>
            <div class="col-sm-4">
                <aside>
                    <div class="single-sidebar">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5>Categories</h5>
                            </div>
                            <div class="list-group">
                                @foreach ($categories as $category)
                                    <a href="{{ route('category', $category->id) }}"
                                        class="list-group-item list-group-item-action list-group-item-light">{{ $category->name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="single-sidebar">
                        <div class="card mb-4">
                            <img src="{{ asset('frontend') }}/img/small-ads.webp" alt="">
                        </div>
                    </div>
                </aside>
            </div>
            <img src="{{ asset('frontend') }}/img/horizantal-banner.jpg" style="height: 150px" alt=""
                class="mt-3">
        </div>
    </div>
@endsection
