{{--  _
| |    __ _ _   _  ___ _ __
| |   / _` | | | |/ _ \ '__|
| |__| (_| | |_| |  __/ |
|_____\__, |\__, |\___|_|
      |___/ |___/ --}}
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lgyer</title>

	<meta name="description" content="Free Responsive Website Maker. Create awesome mobile-first websites. Easy and fast - No coding!">
	<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese"> -->

	{!! Html::style('assets/bootstrap/css/bootstrap.min.css') !!}
	{!! Html::style('assets/animate.css/animate.min.css') !!}
	{!! Html::style('assets/mobirise/css/style.css') !!}
	{!! Html::style('assets/mobirise-gallery/style.css') !!}
	{!! Html::style('assets/mobirise-slider/style.css') !!}
	{!! Html::style('assets/mobirise/css/mbr-additional.css') !!}
</head>
<body>
	<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse" id="ext_menu-9">
	    <div class="mbr-navbar__section mbr-section">
	        <div class="mbr-section__container container">
	            <div class="mbr-navbar__container">
	                <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
	                    <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
	                        <span class="mbr-brand__logo">
	                        	<a href="{!! url('') !!}">{!! Html::image('assets/images/logo.png','',['class'=>'mbr-navbar__brand-img mbr-brand__img']) !!}</a>
	                        </span>
	                        <span class="mbr-brand__name">
	                        	<a class="mbr-brand__name text-white" href="{!! url('') !!}">MOBIRISE</a>
	                        </span>
	                    </span>
	                </div>
	                <div class="mbr-navbar__hamburger mbr-hamburger"><span class="mbr-hamburger__line"></span></div>
	                <div class="mbr-navbar__column mbr-navbar__menu">
	                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
	                        <div class="mbr-navbar__column">
	                            <ul class="mbr-navbar__items mbr-navbar__items--right float-left mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active">
	                            	<li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="{!! url('books') !!}">书单列表</a></li>
	                            	<li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="{!! url('company') !!}">文章列表</a></li>
	                            	<li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="{!! url('aboutus') !!}">联系我们</a></li>
	                            </ul>                            
	                            <ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active">
	                            	@if (Auth::guest())
					                    <li class="mbr-navbar__item"><a class="mbr-buttons__btn btn btn-danger" href="{!! url('login') !!}">登陆</a></li>
		                            	<li class="mbr-navbar__item"><a class="mbr-buttons__btn btn btn-success" href="{!! url('register') !!}">注册</a></li>
				                    @else
				                        <li class="mbr-navbar__item">
				                            <a href="#" class="btn btn-sm animated" data-toggle="dropdown" role="button" aria-expanded="false">
				                                {{ Auth::user()->name }} <span class="caret"></span>
				                            </a>
				                            <ul class="dropdown-menu" role="menu">
				                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
				                            </ul>
				                        </li>
				                    @endif
	                            </ul>
	                        </div>
	                    </nav>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>

	@yield('content')

	<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="contacts1-12" style="background-color: rgb(60, 60, 60);">
	    <div class="mbr-section__container container">
	        <div class="mbr-contacts mbr-contacts--wysiwyg row" style="padding-top: 45px; padding-bottom: 30px;">
	            <div class="col-sm-4">
	                <div>{!! Html::image('assets/images/footer-logo.png','',['class'=>'mbr-contacts__img mbr-contacts__img--left']) !!}</div>
	            </div>
	            <div class="col-sm-8">
	                <div class="row">
	                    <div class="col-sm-4">
	                        <p class="mbr-contacts__text"><strong>地址：</strong><br>
	                        北京海淀区<br>
	                        丹棱街18号创富大厦402</p>
	                    </div>
	                    <div class="col-sm-4">
	                        <p class="mbr-contacts__text"><strong>关于我</strong><br>
	                        Email: support@mobirise.com<br>
	                        Phone: +1 (0) 000 0000 001<br>
	                        Fax: +1 (0) 000 0000 002</p>
	                    </div>
	                    <div class="col-sm-4">
	                    	<p class="mbr-contacts__text"><strong>友情链接</strong></p>
	                    	<ul class="mbr-contacts__list">
	                    		<li><a class="mbr-contacts__link text-gray" href="{!! url('') !!}/"></a></li>
	                    		<li><a class="mbr-contacts__link text-gray" href="{!! url('') !!}/mobirise-free-win.zip">Download for Windows</a></li>
	                    		<li><a class="mbr-contacts__link text-gray" href="{!! url('') !!}/mobirise-free-mac.zip">Download for Mac</a></li>
	                    	</ul>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
	
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