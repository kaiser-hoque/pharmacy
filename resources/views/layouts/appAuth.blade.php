<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

<!--favicon-->
	<link rel="icon" href="{{asset('public/assets/images/favicon-32x32.png')}}" type="image/png"/>

	<!--plugins-->
	<link href="{{asset('public/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
	<link href="{{asset('public/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{asset('public/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{asset('public/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet"/>
	<link href="{{asset('public/assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />

	<!-- loader-->
	<link href="{{asset('public/assets/css/pace.min.css')}}" rel="stylesheet"/>
	<script src="{{asset('public/assets/js/pace.min.js')}}"></script>

	<!-- Bootstrap CSS -->
	<link href="{{asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('public/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{{asset('public/assets/css/app.css')}}" rel="stylesheet">
	<link href="{{asset('public/assets/css/icons.css')}}" rel="stylesheet">

	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{asset('public/assets/css/dark-theme.css')}}"/>
	<link rel="stylesheet" href="{{asset('public/assets/css/semi-dark.css')}}"/>
	<link rel="stylesheet" href="{{asset('public/assets/css/header-colors.css')}}"/>
	<title>Syndron - Bootstrap 5 Admin Dashboard Template</title>
        <!-- Styles -->

    </head>
<body>
	<!--wrapper-->
 @yield('content')
    <!-- end search modal -->

	<!-- Bootstrap JS -->
	<script src="{{asset('public/assets/js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->
	<script src="{{asset('public/assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('public/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{asset('public/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{asset('public/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<script src="{{asset('public/assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
	<script src="{{asset('public/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('public/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>

	<script src="{{asset('public/assets/js/index.js')}}"></script>
	<!--app JS-->
	<script src="{{asset('public/assets/js/app.js')}}"></script>
</body>
</html>
