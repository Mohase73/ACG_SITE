<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Criminalité environnementale">
	<meta name="author" content="Switch Maker">
	<meta name="keywords" content="">
	<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/082c12a54b227be288d41240d/bf1126989d364854cf5719b53.js");</script>
	<title> {{ $titrePage ??  'Criminalité environnementalee'}} </title>
    @include('layouts.head')
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
	<body class="app sidebar-mini">
		<div id="global-loader">
			<img src="{{URL::asset('assets/images/loader.svg')}}" alt="Loader" class="loader-img">
		</div>
		<div class="page">
			<div class="page-main">


				@include('layouts.aside-menu')

				@include('layouts.head')
				<br>
				<div class="app-content">
					<div class="side-app">
						@yield('page-header')
						@yield('content')
					</div>
				</div>
			</div>
			@include('layouts.aside-bar')
			@include('layouts.footer')
		</div>
		@include('layouts.footer-scripts')

		<script src="{{asset('js/axios-test.js')}}"></script>
	</body>
</html>
