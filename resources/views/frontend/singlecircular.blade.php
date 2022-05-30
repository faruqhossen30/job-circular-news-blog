@extends('frontend.layouts.app')

@section('title')
    Job Circular || Job Circular
@endsection
@section('SEO')
    <title>{{ $circular->title }}</title>
    <!-- Facebook & Linkedit Open Graph -->
    <meta property="og:url" content="{{ route('singlecircular', $circular->slug) }}" />
    <meta property="og:type" content="Job Circular | চাকরি | চাকরির খবর" />
    <meta property="og:title" content="{{ $circular->title }}" />
    <meta property="og:description" content="{{ $circular->meta_description ?? '' }}" />
    <meta property="og:image" content="{{asset('storage/circular/full/'.$circular->thumbnail)}}" />
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@jobcircularbd.net"/>
    <meta property="og:title" content="{{ $circular->title }}" />
    <meta property="og:description" content="{{ $circular->meta_description ?? '' }}" />
    <meta property="og:image" content="{{asset('storage/circular/full/'.$circular->thumbnail)}}" />
@endsection


@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <h3> {{ $circular->title }}</h3>
                    </div>
                    <div class="card-body">
                        <img style="width: 100%;" src="{{asset('storage/circular/medium/'.$circular->thumbnail)}}"
                            alt="{{$circular->title}}">
                        <ul class="author-area d-flex">
                            <li><i class="fa-solid fa-user"></i> Admin</li>
                            <li><i class="fa-solid fa-archway"></i> {{ $singlecircular->category->name ?? 'No Category' }}
                            </li>
                            <li><i class="fa-solid fa-clock"></i>
                                {{ $singlecircular->category->created_at ?? 'No Time Set' }}</li>
                            <div class="social-share">
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('singlecircular', $circular->id) }}"
                                    target="_blank"><i style="color: #1877f2" class="fa-brands fa-facebook-f"></i></a>
                                <a href="https://twitter.com/intent/tweet?url={{ route('singlecircular', $circular->id) }}"
                                    target="_blank"><i style="color: #25d366" class="fa-brands fa-twitter"></i></a>
                                <a href="//pinterest.com/pin/create/link/?url={{ route('singlecircular', $circular->id) }}"
                                    target="_blank"><i style="color: #bd081c" class="fa-brands fa-pinterest"></i></a>
                                <a href="https://www.instagram.com/sharer.php?u={{ route('singlecircular', $circular->id) }}"
                                    target="_blank"><i style="color: #c32aa3" class="fa-brands fa-instagram"></i></a>
                                <a href="whatsapp://send?text={{ route('singlecircular', $circular->id) }}" target="_blank"><i
                                        style="color: #25d366" class="fa-brands fa-whatsapp"></i></a>
                                <a href="https://www.linkedin.com/shareArticle?mini={{ route('singlecircular', $circular->id) }}"
                                    target="_blank"><i style="color: #0a66c2" class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </ul>
                        {!! $circular->description !!}

                        <table class="table table-bordered my-2">
                            <thead>
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Organization name :</strong></td>
                                    <td> : {{ $circular->organization_name }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Organization Website :</strong></td>
                                    <td> : {{ $circular->organization_website }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Aplly link/Details </strong></td>
                                    <td><a href="{{ $circular->apply_link }}" style="text-decoration: none"> : Click for
                                            Apply</a></td>
                                </tr>
                                <tr>
                                    <td><strong>Vacancy </strong> </td>
                                    <td> : {{ $circular->vacancy }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Start Date </strong></td>
                                    <td> : {{ optional($circular->start_date)->format('d M Y') }}</td>
                                </tr>
                                <tr>
                                    <td><strong>End Date </strong></td>
                                    <td> : {{ optional($circular->end_date)->format('d M Y') }}</td>
                                </tr>
                            </tbody>
                        </table>

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
