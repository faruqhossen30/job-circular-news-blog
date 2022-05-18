@extends('admin.layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                   <h2> {{ $circulars->title }}</h2>
                </div>
                <div class="card-body">
                    <img style="width: 100%;" src="{{ asset('storage/circular/' . $circulars->thumbnail) }}" alt="thumbnail">
                    <p class="mt-2">{!! $circulars->description !!}</p>
                    <h5><strong>Start Date :</strong> {{  $circulars->start_date }}</h5>
                    <h5><strong>End Date :</strong> {{  $circulars->end_date }}</h5>
                    <h5><strong>Organization name :</strong> {{  $circulars->organization_name }}</h5>
                    <h5><strong>Organization Website :</strong> {{  $circulars->organization_website }}</h5>
                    <h5><strong>Aplly link : </strong><a href="{{  $circulars->apply_link }}">click for apply</a></h5>
                    <h5><strong>Vacancy : </strong>{{  $circulars->vacancy }}</h5>


                </div>
            </div>
        </div>
    </div>
@endsection
