@extends('admin.layouts.app')

@section('title', 'Add circular ')

@section('content')
    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                        <a href="form_inputs.html" class="breadcrumb-item">circular </a>
                        <span class="breadcrumb-item active">Create</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="breadcrumb justify-content-center">
                        <a href="#" class="breadcrumb-elements-item">
                            <i class="icon-comment-discussion mr-2"></i>
                            Support
                        </a>

                        <div class="breadcrumb-elements-item dropdown p-0">
                            <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-gear mr-2"></i>
                                Settings
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                                <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                                <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">
            <form action="{{ route('circular.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
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
                                <div class="col-sm-6">
                                    <label class="col-form-label col-md-2">Stat Date</label>
                                    <div class="col-md-10">
                                        <input name="start_date" class="form-control" type="date" name="date">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="col-form-label col-md-2">Stat Date</label>
                                    <div class="col-md-10">
                                        <input name="end_date" class="form-control" type="date" name="date">
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
                                <label class="col-form-label col-lg-2">organization_name</label>
                                <div class="col-lg-10">
                                    <input name="organization_name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">organization_website</label>
                                <div class="col-lg-10">
                                    <input name="organization_website" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">apply_link</label>
                                <div class="col-lg-10">
                                    <input name="apply_link" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">vacancy</label>
                                <div class="col-lg-10">
                                    <input name="vacancy" type="number" class="form-control">
                                </div>
                            </div>


                        </fieldset>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Create Circular <i class="icon-paperplane ml-2"></i></button>
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
