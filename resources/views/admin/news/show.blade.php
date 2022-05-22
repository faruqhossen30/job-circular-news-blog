@extends('admin.layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                   <h2> {{ $news->title }}</h2>
                </div>
                <div class="card-body">
                    <img src="{{ asset('storage/news/' .$news->thumbnail)  }}"
                    style="width: 100px;height:80px" alt="thumbnail">

                    <p class="mt-2">{!! $news->description !!}</p>
                    <h5><strong>End Date :</strong> {{  $news->end_date }}</h5>
                </div>
            </div>
        </div>
    </div>
@endsection
