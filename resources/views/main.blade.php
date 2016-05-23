<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lgyer</title>

	<meta name="description" content="Free Responsive Website Maker. Create awesome mobile-first websites. Easy and fast - No coding!">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">

	{!! Html::style('assets/bootstrap/css/bootstrap.min.css') !!}
	{!! Html::style('assets/animate.css/animate.min.css') !!}
	{!! Html::style('assets/mobirise/css/style.css') !!}
	{!! Html::style('assets/mobirise-gallery/style.css') !!}
	{!! Html::style('assets/mobirise-slider/style.css') !!}
	{!! Html::style('assets/mobirise/css/mbr-additional.css') !!}
</head>
<body>
    @yield('content')

	{!! HTML::script('assets/web/assets/jquery/jquery.min.js') !!}
	{!! HTML::script('assets/bootstrap/js/bootstrap.min.js') !!}
	{!! HTML::script('assets/smooth-scroll/SmoothScroll.js') !!}
	{!! HTML::script('assets/jarallax/jarallax.js') !!}
	{!! HTML::script('assets/masonry/masonry.pkgd.min.js') !!}
	{!! HTML::script('assets/imagesloaded/imagesloaded.pkgd.min.js') !!}
	{!! HTML::script('assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js') !!}
	{!! HTML::script('assets/mobirise/js/script.js') !!}
	{!! HTML::script('assets/mobirise-gallery/script.js') !!}
</body>
</html>