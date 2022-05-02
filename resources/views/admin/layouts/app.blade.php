<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Blank</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="{{asset('admin')}}/css/bootstrap.min.css" rel="stylesheet" />
   <link href="{{asset('admin')}}/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="{{asset('admin')}}/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="{{asset('admin')}}/css/font-awesome.css" rel="stylesheet" />
   <link href="{{asset('admin')}}/css/style.css" rel="stylesheet" />
   <link href="{{asset('admin')}}/css/style-responsive.css" rel="stylesheet" />
   <link href="{{asset('admin')}}/css/style-default.css" rel="stylesheet" id="style_color" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.0/css/font-awesome.css" integrity="sha512-vTF66+NUFBh1RYzB09CzDYgbCeXhYpaBrydVaSAeYMjlRZ+unsPguBSioDFfMd8n2jYLijqhpJOAhEa0vdcUew==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   @include('admin.layouts.header')
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
        @include('admin.layouts.sidebar')
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->
        @yield('content')
      <!-- END PAGE -->
   </div>
   <!-- END CONTAINER -->

   <!-- BEGIN FOOTER -->
   <div id="footer">
       2022 &copy; Job Circular BD
   </div>
   <!-- END FOOTER -->

   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="{{asset('admin')}}/js/jquery-1.8.3.min.js"></script>
   <script src="{{asset('admin')}}/js/jquery.nicescroll.js" type="text/javascript"></script>
   <script src="{{asset('admin')}}/js/bootstrap.min.js"></script>
   <script src="{{asset('admin')}}/js/jquery.scrollTo.min.js"></script>

   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->

   <!--common script for all pages-->
   <script src="{{asset('admin')}}/js/common-scripts.js"></script>

   <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
