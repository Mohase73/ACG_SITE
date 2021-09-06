<!doctype html>
<html lang="en" dir="ltr">

<head>
	<!-- META DATA -->
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Criminalité environnementale">
	<meta name="author" content="Switch Maker">
	<meta name="keywords" content="">
	<title> {{ $titrePage ??  'Criminalité environnementale'}} </title>
	@include('layouts.custom-head')
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
	<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/082c12a54b227be288d41240d/bf1126989d364854cf5719b53.js");</script>
</head>

		<body class="app sidebar-mini">

			<!-- BACKGROUND-IMAGE -->
			<div class="login-img">

				<!-- GLOABAL LOADER -->
				<div id="global-loader">
					<img src="{{URL::asset('assets/images/loader.svg')}}" class="loader-img" alt="Loader">
				</div>
				<!-- End GLOABAL LOADER -->

				<!-- PAGE -->
				<div class="page">
					<div class="">
						<div class="col col-login mx-auto">

							<div class="text-center">

								<img src="{{ asset('images/logo_yelli.png') }}" class="header-brand-img" alt="">

								{{-- <img src="{{URL::asset('assets/images/brand/logo-3.png')}}" class="header-brand-img" alt=""> --}}

							</div>
						</div>
						@yield('content')
					</div>
				</div>
				<!-- END PAGE -->
			</div>
			<!-- BACKGROUND-IMAGE CLOSED -->
			@include('layouts.custom-footer-scripts')
		</body>

		<script src="{{asset('js/axios-test.js')}}"></script>
</html>
