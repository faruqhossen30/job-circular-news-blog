@extends('admin.layouts.app')

@section('title')
    All News || Job Circular
@endsection

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <!-- Basic datatable -->
                <div class="card">
                    <div class="card-body">
                        <table class="table datatable-basic">
                            <a href="{{ route('news.create') }}" class="btn btn-primary">Add News</a>
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>News Title</th>
                                    <th>News Image</th>
                                    <th>News Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allnews as $key => $news)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $news->title }}</td>
                                        <td>
                                            <img src="{{ asset('storage/news/' .$news->thumbnail)  }}"
                                            style="width: 100px;height:80px" alt="thumbnail">
                                        </td>
                                        <td>{{ $news->category_id }}</td>
                                        <td>
                                            <a href="{{ route('news.show', $news->id) }}"
                                                class="btn btn-primary">Show</a>
                                            <a href="{{ route('news.edit', $news->id) }}"
                                                class="btn btn-primary">Edit</a>

                                            <form action="{{ route('news.destroy', $news->id) }}" method="POST"
                                                style="display:inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Are You Sure to Delete?')"
                                                    class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /basic datatable -->
            </div>
        </div>
    </div>
@endsection
