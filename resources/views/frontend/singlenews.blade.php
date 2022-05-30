@extends('frontend.layouts.app')

@section('SEO')
    <title>{{ $news->title }}</title>
    <!-- Facebook & Linkedit Open Graph -->
    <meta property="og:url" content="{{ route('singlenews', $news->slug) }}" />
    <meta property="og:type" content="Job news | চাকরি | চাকরির খবর" />
    <meta property="og:title" content="{{ $news->title }}" />
    <meta property="og:description" content="{{ $news->meta_description ?? '' }}" />
    <meta property="og:image" content="{{asset('storage/news/full/'.$news->thumbnail)}}" />
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@jobnewsbd.net"/>
    <meta property="og:title" content="{{ $news->title }}" />
    <meta property="og:description" content="{{ $news->meta_description ?? '' }}" />
    <meta property="og:image" content="{{asset('storage/news/full/'.$news->thumbnail)}}" />
@endsection

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <h4> {{ $news->title }}</h4>
                    </div>
                    <div class="card-body">
                        <img style="width: 100%;" src="{{ asset('storage/news/full/'.$news->thumbnail) }}"
                            alt="thumbnail">
                        <ul class="author-area d-flex">
                            <li><i class="fa-solid fa-user"></i> {{ $news->user->name ?? 'No User' }}</li>
                            <li><i class="fa-solid fa-archway"></i> {{ $news->category->name ?? 'No Category' }}</li>
                            <li><i class="fa-solid fa-clock"></i>
                                {{ $news->created_at->format('d-M-Y') ?? 'No Time Set' }}</li>
                            <div class="social-share">
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('singlenews', $news->id) }}"
                                    target="_blank"><i style="color: #1877f2" class="fa-brands fa-facebook-f"></i></a>
                                <a href="https://twitter.com/intent/tweet?url={{ route('singlenews', $news->id) }}"
                                    target="_blank"><i style="color: #1da1f2" class="fa-brands fa-twitter"></i></a>
                                <a href="//pinterest.com/pin/create/link/?url={{ route('singlenews', $news->id) }}"
                                    target="_blank"><i style="color: #bd081c" class="fa-brands fa-pinterest"></i></a>
                                <a href="https://www.instagram.com/sharer.php?u={{ route('singlenews', $news->id) }}"
                                    target="_blank"><i style="color: #c32aa3" class="fa-brands fa-instagram"></i></a>
                                <a href="whatsapp://send?text={{ route('singlenews', $news->id) }}" target="_blank"><i
                                        style="color: #25d366" class="fa-brands fa-whatsapp"></i></a>
                                <a href="https://www.linkedin.com/shareArticle?mini={{ route('singlenews', $news->id) }}"
                                    target="_blank"><i style="color: #0a66c2" class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </ul>
                        <p>{!! $news->description !!}</p>
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
                                    <a href="{{ route('category', $category->slug) }}"
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
            {{-- <img src="{{ asset('frontend') }}/img/horizantal-banner.jpg" style="height: 150px" alt=""
                class="mt-3"> --}}
        </div>
    </div>
@endsection
