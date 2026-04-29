<!DOCTYPE html>
<html class="no-js">

<head>
	<title>Afric Consulting Group</title>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/font-awesome5.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/shop.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/custom.css">

    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.css' rel='stylesheet' />
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/locales-all.min.js"></script>
  @livewireStyles

   <style>
   .fc .fc-bg-event {
       background: darkred;
   }
   </style>

<!-- Alpine v2 -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<!-- Alpine v3 -->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


	<script src="js/vendor/modernizr-custom.js"></script>

	{{--  <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/082c12a54b227be288d41240d/ca51500c854ff0ca570a2a7b1.js");</script>  --}}
    <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/4d152c1b56bc6e9ebb0dadd98/c1aca7adc1d0b8c2d2133c7af.js");</script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>

<body>

	<div class="preloader">
		<div class="preloader_image pulse"></div>
	</div>
    @include('modals.register-modal')
    @include('modals.contact-modal')
    @include('modals.any-modal')
    @include('modals.login-modal')
	<div id="canvas">
		<div id="box_wrapper">
			@include('partials.topline')
			@include('partials.header')
            @yield('banner')
            @yield('content')
            @include('partials.footer')
		</div>
	</div>
	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script>
		(function($){
			$window = $(window);
			$window.on('load', function(){
				if($('#partners-carousel').length && !$('#partners-carousel').hasClass('owl-loaded')) {
					$('#partners-carousel').addClass('owl-carousel top-right-nav').owlCarousel({
						loop: true,
						autoplay: true,
						margin: 30,
						nav: true,
						dots: false,
						navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
						responsive: {
							0:    { items: 1 },
							767:  { items: 2 },
							1200: { items: 4 }
						}
					});
				}
			});
		})(jQuery);
	</script>

    {{-- @livewire('livewire-ui-modal') --}}

    {{--  @livewireUIScripts  --}}

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</body>
</html>
