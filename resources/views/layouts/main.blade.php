<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Trading Room</title>
	<meta name="description" content="Trader Course Dashboard." />
	<meta name="keywords" content="forex, trading, trade, marketing, forex markeging" />
	<meta name="author" content="techiemastermind"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	
	<!-- Morris Charts CSS -->
    <link href="{{ asset('vendors/bower_components/morris.js/morris.css') }}" rel="stylesheet" type="text/css"/>
	
	<!-- Data table CSS -->
	<link href="{{ asset('vendors/bower_components/datatables/media/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>

	<link href="{{ asset('vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css') }}" rel="stylesheet" type="text/css">

	<!-- Bootstrap Dropify CSS -->
	<link href="{{ asset('vendors/bower_components/dropify/dist/css/dropify.min.css')}}" rel="stylesheet" type="text/css"/>
		
	<!-- Custom CSS -->
	<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>

<body>
    <!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- /Preloader -->

    <!-- #Wrap -->
    <div class="wrapper theme-4-active pimary-color-red open-right-sidebar">
		<!-- Top Menu Items -->
		@include('layouts.nav')
		<!-- /Top Menu Items -->

		<!-- Left Sidebar Menu -->
		@include('layouts.left_sidebar')
		<!-- /Left Sidebar Menu -->

		<!-- Right Sidebar Menu -->
		@include('layouts.right_sidebar')
		<!-- /Right Sidebar Menu -->

		<!-- Setting Menu -->

		<!-- /Setting Menu -->

		<!-- Main Content -->
		<div class="page-wrapper">
			
			@yield('content')

			<!-- Footer -->
			@include('layouts.footer')
			<!-- /Footer -->
		</div>
    </div>
    <!-- /#Wrap -->
    <!-- JavaScript -->
	
    <!-- jQuery -->
    <script src="{{ asset('vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('vendors/bower_components/bootstrap-validator/dist/validator.min.js')}}"></script>
    
	<!-- Data table JavaScript -->
	<script src="{{ asset('vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{ asset('assets/js/dataTables-data.js')}}"></script>

	<!-- Gallery JavaScript -->
	<script src="{{ asset('assets/js/isotope.js')}}"></script>
	<script src="{{ asset('assets/js/lightgallery-all.js')}}"></script>
	<script src="{{ asset('assets/js/froogaloop2.min.js')}}"></script>
	<script src="{{ asset('assets/js/gallery-data.js')}}"></script>
	
	<!-- Slimscroll JavaScript -->
	<script src="{{ asset('assets/js/jquery.slimscroll.js')}}"></script>
	
	<!-- simpleWeather JavaScript -->
	<script src="{{ asset('vendors/bower_components/moment/min/moment.min.js')}}"></script>
	<script src="{{ asset('vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js')}}"></script>
	<script src="{{ asset('assets/js/simpleweather-data.js')}}"></script>
	
	<!-- Progressbar Animation JavaScript -->
	<script src="{{ asset('vendors/bower_components/waypoints/lib/jquery.waypoints.min.js')}}"></script>
	<script src="{{ asset('vendors/bower_components/jquery.counterup/jquery.counterup.min.js')}}"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="{{ asset('assets/js/dropdown-bootstrap-extended.js')}}"></script>
	
	<!-- Sparkline JavaScript -->
	<script src="{{ asset('vendors/jquery.sparkline/dist/jquery.sparkline.min.js')}}"></script>
	
	<!-- Owl JavaScript -->
	<script src="{{ asset('vendors/bower_components/owl.carousel/dist/owl.carousel.min.js')}}"></script>
	
	<!-- ChartJS JavaScript -->
	<script src="{{ asset('vendors/chart.js/Chart.min.js')}}"></script>
	
	<!-- Morris Charts JavaScript -->
    <script src="{{ asset('vendors/bower_components/raphael/raphael.min.js')}}"></script>
    <script src="{{ asset('vendors/bower_components/morris.js/morris.min.js')}}"></script>
    <script src="{{ asset('vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>
	
	<!-- Switchery JavaScript -->
	<script src="{{ asset('vendors/bower_components/switchery/dist/switchery.min.js')}}"></script>

	<!-- Bootstrap Daterangepicker JavaScript -->
	<script src="{{ asset('vendors/bower_components/dropify/dist/js/dropify.min.js')}}"></script>

	<!-- Form Flie Upload Data JavaScript -->
	<script src="{{ asset('assets/js/form-file-upload-data.js')}}"></script>
	
	<!-- Init JavaScript -->
	<script src="{{ asset('assets/js/init.js')}}"></script>

	<!-- Custom JavaScript -->
	<script src="{{ asset('assets/js/custom-action.js')}}"></script>
</body>
</html