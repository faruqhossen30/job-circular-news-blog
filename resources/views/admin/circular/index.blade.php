@extends('admin.layouts.app')

@section('title')
    All Circular || Job Circular
@endsection

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <!-- Basic datatable -->
                <div class="card">
                    <div class="card-body">
                        <table class="table datatable-basic">
                            <a href="{{ route('circular.create') }}" class="btn btn-primary">Add Circular</a>
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Circular Title</th>
                                    <th>Image</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($circulars as $key => $circular)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $circular->title }}</td>
                                        <td>
                                            <img src="{{ asset('storage/circular/' .$circular->thumbnail) }}"
                                                style="width: 100px;height:80px" alt="thumbnail">
                                        </td>
                                        <td>
                                        <td>{{ $circular->category_id }}</td>
                                        <td>
                                            <a href="{{ route('circular.show', $circular->id) }}"
                                                class="btn btn-primary">Show</a>
                                            <a href="{{ route('circular.edit', $circular->id) }}"
                                                class="btn btn-primary">Edit</a>

                                            <form action="{{ route('circular.destroy', $circular->id) }}" method="POST"
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
