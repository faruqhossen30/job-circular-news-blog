@extends('admin.layouts.app')

@section('title', 'circular Page');

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <!-- Basic datatable -->
                <div class="card">
                    <div class="card-body">
                        <table class="table datatable-basic">
                            <a href="{{ route('category.create') }}" class="btn btn-primary">Add Category</a>
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Category Name</th>
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
                                        <td>{{ $circular->title }}</td>
                                        <td>{{ $circular->category_id }}</td>
                                        <td>
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
