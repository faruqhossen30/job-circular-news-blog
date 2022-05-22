@extends('frontend.layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <h3> {{ $circulars->title }}</h3>
                    </div>
                    <div class="card-body">
                        <img style="width: 100%;" src="{{ asset('storage/circular/' . $circulars->thumbnail) }}"
                            alt="thumbnail">
                        <p class="mt-2">{!! $circulars->description !!}</p>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Organization name :</strong></td>
                                    <td> : {{ $circulars->organization_name }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Organization Website :</strong></td>
                                    <td> : {{ $circulars->organization_website }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Aplly link </strong></td>
                                    <td><a href="{{ $circulars->apply_link }}" style="text-decoration: none"> : Click for Apply</a></td>
                                </tr>
                                <tr>
                                    <td><strong>Vacancy </strong> </td>
                                    <td> : {{ $circulars->vacancy }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Start Date </strong></td>
                                    <td> : {{ $circulars->start_date->format('d M Y') }}</td>
                                </tr>
                                <tr>
                                    <td><strong>End Date </strong></td>
                                    <td> : {{ $circulars->end_date->format('d M Y') }}</td>
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
