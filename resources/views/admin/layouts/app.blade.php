<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{asset('backend')}}/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="{{asset('backend')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="{{asset('backend')}}/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="{{asset('backend')}}/assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="{{asset('backend')}}/assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="{{asset('backend')}}/assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{asset('backend')}}/global_assets/js/main/jquery.min.js"></script>
	<script src="{{asset('backend')}}/global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="{{asset('backend')}}/global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{asset('backend')}}/global_assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script src="{{asset('backend')}}/global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script src="{{asset('backend')}}/global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="{{asset('backend')}}/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="{{asset('backend')}}/global_assets/js/plugins/ui/moment/moment.min.js"></script>
	<script src="{{asset('backend')}}/global_assets/js/plugins/pickers/daterangepicker.js"></script>

	<script src="{{asset('backend')}}/assets/js/app.js"></script>
	<script src="{{asset('backend')}}/global_assets/js/demo_pages/dashboard.js"></script>
	<!-- /theme JS files -->
	<!-- Stack JS files -->
    @stack('script')
	<!-- /Stack JS files -->
</head>

<body>
	<!-- Main navbar -->
	@include('admin.layouts.navbar')
	<!-- /main navbar -->
	<!-- Page content -->
	<div class="page-content">
		<!-- Main sidebar -->
		@include('admin.layouts.sidebar')
		<!-- /main sidebar -->
		<!-- Main content -->
		<div class="content-wrapper">
			<!-- Content area -->
			@yield('content')
			<!-- /content area -->
			<!-- Footer -->
			@include('admin.layouts.footer')
			<!-- /footer -->
		</div>
		<!-- /main content -->
	</div>
	<!-- /page content -->
</body>
</html>
