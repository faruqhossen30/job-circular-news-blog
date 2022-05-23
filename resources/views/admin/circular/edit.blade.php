@extends('admin.layouts.app')

@section('title')
    Update Circular || Job Circular
@endsection

@section('content')
    <!-- Main content -->
    <div class="content-wrapper">


        <!-- Content area -->
        <div class="content">

            <!-- Form inputs -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Update Circular</h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('circular.update', $circular->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <fieldset class="mb-3">

                            <!-- Form inputs -->
                            <div class="card">
                                <div class="card-header header-elements-inline">
                                    <h5 class="card-title">Create circular </h5>
                                    <div class="header-elements">
                                        <div class="list-icons">
                                            <a class="list-icons-item" data-action="collapse"></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">

                                    <fieldset class="mb-3">
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Title</label>
                                            <div class="col-lg-10">
                                                <input name="title" value="{{ $circular->title }}" type="text"
                                                    class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Description</label>
                                            <div class="col-lg-10">
                                                <textarea name="description" id="summernote">{{ $circular->description }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Category</label>
                                            <div class="col-lg-10">
                                                <select name="category_id" class="form-control">
                                                    <option selected value="" disabled>Select Category</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}" @if ($category->id == $circular->category_id) selected @endif>
                                                            {{ $category->name }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Meta Description</label>
                                            <div class="col-lg-10">
                                                <textarea name="meta_description" rows="3" cols="3" class="form-control" placeholder="Default textarea">
                                                    {{ trim($circular->meta_description) }}
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Meta tag</label>
                                            <div class="col-lg-10">
                                                <select name="meta_keyword[]"
                                                    class="form-control select-multiple-tokenization" multiple="multiple"
                                                    data-fouc>
                                                    @if ($circular->meta_tag && is_array(json_decode($circular->meta_tag)))
                                                        @foreach (json_decode($circular->meta_tag) as $keyword)
                                                            <option value="{{ $keyword }}" selected>{{ $keyword }}
                                                            </option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Default file input</label>
                                            <div class="col-lg-10">
                                                <input name="thumbnail" type="file" class="form-control h-auto">
                                            </div>
                                        </div>
                                        {{-- <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Default file input</label>
                                            <div class="col-lg-10">
                                                <img src="" alt="logo">
                                            </div>
                                        </div> --}}

                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label col-md-2">Stat Date</label>
                                                <div class="col-md-10">
                                                    <input name="start_date" class="form-control" type="date" name="date" value="{{$circular->start_date->format('Y-m-d')}}">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="col-form-label col-md-2">End Date</label>
                                                <div class="col-md-10">
                                                    <input name="end_date" class="form-control" type="date" name="date" value="{{ $circular->end_date->format('Y-m-d') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header header-elements-inline">
                                    <h5 class="card-title">Organization Information</h5>
                                    <div class="header-elements">
                                        <div class="list-icons">
                                            <a class="list-icons-item" data-action="collapse"></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <fieldset class="mb-3">
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Organization Name</label>
                                            <div class="col-lg-10">
                                                <input name="organization_name" type="text" class="form-control" value="{{ $circular->organization_name }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Organization Website</label>
                                            <div class="col-lg-10">
                                                <input name="organization_website" type="text" class="form-control" value="{{ $circular->organization_website }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Apply Link</label>
                                            <div class="col-lg-10">
                                                <input name="apply_link" type="text" class="form-control" value="{{ $circular->apply_link }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-2">Vacancy</label>
                                            <div class="col-lg-10">
                                                <input name="vacancy" type="number" class="form-control" value="{{ $circular->vacancy }}">
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </fieldset>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Update <i
                                    class="icon-paperplane ml-2"></i></button>
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
