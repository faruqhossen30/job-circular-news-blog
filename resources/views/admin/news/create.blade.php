@extends('admin.layouts.app')

@section('title')
   Add News || Job Circular
@endsection

@section('content')
    <!-- Main content -->
    <div class="content-wrapper">


        <!-- Content area -->
        <div class="content">
            <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Form inputs -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Create News </h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <fieldset class="mb-3">
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">News Title</label>
                                <div class="col-lg-10">
                                    <input name="title" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Description</label>
                                <div class="col-lg-10">
                                    <textarea name="description" id="summernote"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Category</label>
                                <div class="col-lg-10">
                                    <select name="category_id" class="form-control">
                                        <option value="">Default select box</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Meta Description</label>
                                <div class="col-lg-10">
                                    <textarea name="meta_description" rows="3" cols="3" class="form-control" placeholder="Default textarea"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Meta tag</label>
                                <div class="col-lg-10">
                                    <select name="meta_keyword[]" class="form-control select-multiple-tokenization"
                                        multiple="multiple" data-fouc>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Default file input</label>
                                <div class="col-lg-10">
                                    <input name="thumbnail" type="file" class="form-control h-auto">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 offset-sm-2">
                                    <label class="col-form-label col-md-2">End Date</label>
                                    <div class="col-md-10">
                                        <input name="end_date" class="form-control" type="date" name="date">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Create Circular <i
                                    class="icon-paperplane ml-2"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /form inputs -->



    </div>
    <!-- /content area -->


    </div>
    <!-- /main content -->
@endsection
@push('script')
    <!-- Theme JS files -->
    <script src="{{ asset('backend') }}/global_assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>
    <script src="{{ asset('backend') }}/global_assets/js/plugins/forms/selects/select2.min.js"></script>

    <script src="assets/js/app.js"></script>
    <script src="{{ asset('backend') }}/global_assets/js/demo_pages/form_select2.js"></script>
    <!-- /theme JS files -->
@endpush
