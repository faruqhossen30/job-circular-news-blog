@extends('admin.layouts.app')

@section('content')
      <!-- BEGIN PAGE -->
      <div id="main-content">
        <!-- BEGIN PAGE CONTAINER-->
        <div class="container-fluid">
           <!-- BEGIN PAGE HEADER-->
           <div class="row-fluid">
              <div class="span12">
                  <!-- BEGIN THEME CUSTOMIZER-->
                  @include('admin.inc.themecolor')
                  <!-- END THEME CUSTOMIZER-->
                 <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                  <h3 class="page-title">
                    Form Components
                  </h3>
                  <ul class="breadcrumb">
                      <li>
                          <a href="#">Home</a>
                          <span class="divider">/</span>
                      </li>
                      <li>
                          <a href="#">Form Stuff</a>
                          <span class="divider">/</span>
                      </li>
                      <li class="active">
                          Form Components
                      </li>
                      <li class="pull-right search-wrap">
                          <form action="search_result.html" class="hidden-phone">
                              <div class="input-append search-input-area">
                                  <input class="" id="appendedInputButton" type="text">
                                  <button class="btn" type="button"><i class="icon-search"></i> </button>
                              </div>
                          </form>
                      </li>
                  </ul>
                  <!-- END PAGE TITLE & BREADCRUMB-->
              </div>
           </div>
           <!-- END PAGE HEADER-->
           <!-- BEGIN PAGE CONTENT-->
           <div class="row-fluid">
               <div class="span12">
                   <!-- BEGIN SAMPLE FORMPORTLET-->
                   <div class="widget green">
                       <div class="widget-title">
                           <h4><i class="icon-reorder"></i> Sample Form </h4>
                           <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                           </span>
                       </div>
                       <div class="widget-body">
                           <!-- BEGIN FORM-->
                           <form action="#" class="form-horizontal">
                           <div class="control-group">
                               <label class="control-label">Input</label>
                               <div class="controls">
                                   <input type="text" class="span12 " placeholder="Job Titiel" />
                               </div>
                           </div>

                           <div class="control-group">
                            <label class="control-label">CKEditor</label>
                            <div class="controls">
                                <textarea class="span12 ckeditor" name="editor1" rows="6"></textarea>
                            </div>
                        </div>



                           <div class="form-actions">
                               <button type="submit" class="btn btn-success">Submit</button>
                               <button type="button" class="btn">Cancel</button>
                           </div>
                           </form>
                           <!-- END FORM-->
                       </div>
                   </div>
                   <!-- END SAMPLE FORM PORTLET-->
               </div>
           </div>

           <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN  widget-->
                <div class="widget yellow">
                    <div class="widget-title">
                        <h4><i class="icon-reorder"></i> CKEditor</h4>
                    <span class="tools">
                       <a href="javascript:;" class="icon-chevron-down"></a>
                       <a href="javascript:;" class="icon-remove"></a>
                       </span>
                    </div>
                    <div class="widget-body form">
                        <!-- BEGIN FORM-->
                        <form action="#" class="form-horizontal">
                            <div class="control-group">
                                <label class="control-label">CKEditor</label>
                                <div class="controls">
                                    <textarea class="span12 ckeditor" name="editor1" rows="6"></textarea>
                                </div>
                            </div>
                        </form>
                        <!-- END FORM-->
                    </div>
                </div>
                <!-- END EXTRAS widget-->
            </div>
        </div>

        <!-- END PAGE CONTAINER-->
     </div>
     <!-- END PAGE -->
@endsection

@push('style')
<link href="{{asset('admin')}}/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="{{asset('admin')}}/assets/uniform/css/uniform.default.css" />

<link rel="stylesheet" type="text/css" href="{{asset('admin')}}/assets/chosen-bootstrap/chosen/chosen.css" />
<link rel="stylesheet" type="text/css" href="{{asset('admin')}}/assets/jquery-tags-input/jquery.tagsinput.css" />
<link rel="stylesheet" type="text/css" href="{{asset('admin')}}/assets/clockface/css/clockface.css" />
<link rel="stylesheet" type="text/css" href="{{asset('admin')}}/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
<link rel="stylesheet" type="text/css" href="{{asset('admin')}}/assets/bootstrap-datepicker/css/datepicker.css" />
<link rel="stylesheet" type="text/css" href="{{asset('admin')}}/assets/bootstrap-timepicker/compiled/timepicker.css" />
<link rel="stylesheet" type="text/css" href="{{asset('admin')}}/assets/bootstrap-colorpicker/css/colorpicker.css" />
<link rel="stylesheet" href="{{asset('admin')}}/assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
<link rel="stylesheet" type="text/css" href="{{asset('admin')}}/assets/bootstrap-daterangepicker/daterangepicker.css" />

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
@endpush
@push('style')
     <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->

   <script src="{{asset('admin')}}/js/jquery-1.8.2.min.js"></script>
   <script src="j{{asset('admin')}}/s/jquery.nicescroll.js" type="text/javascript"></script>
   <script type="text/javascript" src="{{asset('admin')}}/assets/ckeditor/ckeditor.js"></script>
   <script src="{{asset('admin')}}/assets/bootstrap/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="{{asset('admin')}}/assets/bootstrap/js/bootstrap-fileupload.js"></script>
   <script src="{{asset('admin')}}/js/jquery.blockui.js"></script>

   <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
   <script src="{{asset('admin')}}/js/jQuery.dualListBox-1.3.js" language="javascript" type="text/javascript"></script>


   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->
   <script type="text/javascript" src="{{asset('admin')}}/assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
   <script type="text/javascript" src="{{asset('admin')}}/assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="{{asset('admin')}}/assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="{{asset('admin')}}/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
   <script type="text/javascript" src="{{asset('admin')}}/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
   <script type="text/javascript" src="{{asset('admin')}}/assets/clockface/js/clockface.js"></script>
   <script type="text/javascript" src="{{asset('admin')}}/assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
   <script type="text/javascript" src="{{asset('admin')}}/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript" src="{{asset('admin')}}/assets/bootstrap-daterangepicker/date.js"></script>
   <script type="text/javascript" src="{{asset('admin')}}/assets/bootstrap-daterangepicker/daterangepicker.js"></script>
   <script type="text/javascript" src="{{asset('admin')}}/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
   <script type="text/javascript" src="{{asset('admin')}}/assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
   <script type="text/javascript" src="{{asset('admin')}}/assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
   <script src="{{asset('admin')}}/assets/fancybox/source/jquery.fancybox.pack.js"></script>
   <script src="{{asset('admin')}}/js/jquery.scrollTo.min.js"></script>



   <!--common script for all pages-->
   <script src="{{asset('admin')}}/js/common-scripts.js"></script>

   <!--script for this page-->
   <script src="{{asset('admin')}}/js/form-component.js"></script>
  <!-- END JAVASCRIPTS -->

   <script language="javascript" type="text/javascript">

       $(function() {

           $.configureBoxes();

       });

   </script>
@endpush
