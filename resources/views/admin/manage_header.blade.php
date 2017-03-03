<!DOCTYPE html>
{{--  _
| |    __ _ _   _  ___ _ __
| |   / _` | | | |/ _ \ '__|
| |__| (_| | |_| |  __/ |
|_____\__, |\__, |\___|_|
      |___/ |___/ --}}

<html lang="en">
	
<head>
	<title>AdminLTE 2 | Boxed Layout</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

	{!! Html::style('manage/css/bootstrap.min.css') !!}
	{!! Html::style('manage/css/AdminLTE.min.css') !!}
	{!! Html::style('manage/css/skins/_all-skins.min.css') !!}
	{!! Html::style('manage/css/fonts/fontawesome.css') !!}
	{!! Html::style('manage/css/ionicons/fonts/ionicons.min.css') !!}
	{!! Html::style('assets/sweet-alert/sweetalert.css') !!}

	{!! HTML::script('manage/js/jquery-2.2.3.min.js') !!}

</head>
<body class="hold-transition skin-blue layout-boxed sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<!-- Logo -->
			<a href="../../index2.html" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>A</b>LT</span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b>Admin</b>LTE</span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<!-- User Account: style can be found in dropdown.less -->
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<span class="hidden-xs">{{ Auth::user()->name }}</span>
							</a>
							<ul class="dropdown-menu">
								<!-- Menu Footer-->
								<li class="user-footer">
									<div class="pull-left">
									<a href="#" class="btn btn-default btn-flat">Profile</a>
									</div>
									<div class="pull-right">
									<a href="#" class="btn btn-default btn-flat">Sign out</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</header>

		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel -->
				<div class="user-panel">
					<div class="pull-left image">
						<img src="https://www.itjuzi.com/images/7286474166f0954356770aea6f148e60.jpg" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
						<p>{{ Auth::user()->name }}</p>
						<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
					</div>
				</div>

				<!-- sidebar menu: : style can be found in sidebar.less -->
				<ul class="sidebar-menu">
					<li class="header">MAIN NAVIGATION</li>
					<li class="treeview">
						<a href="{{ URL('admin/') }}">
							<i class="fa fa-dashboard"></i> <span>后台首页</span>
							<span class="pull-right-container">
								{{-- <i class="fa fa-angle-left pull-right"></i> --}}
							</span>
						</a>
					</li>
					<li class="treeview @if ($side_bar == 'company/index') active @endif">
						<a href="#">
							<i class="fa fa-files-o"></i>
							<span>公司管理</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li @if ($side_bar == 'company/index') class="active" @endif><a href="{{ URL::to('admin/company/') }}"><i class="fa fa-circle-o"></i> 国内公司管理</a></li>
							<li><a href="collapsed-sidebar.html"><i class="fa fa-circle-o"></i> 添加公司</a></li>
						</ul>
					</li>
					<li>
						<a href="../widgets.html">
							<i class="fa fa-th"></i> <span>文章管理</span>
							{{-- <span class="pull-right-container">
							<small class="label pull-right bg-green">new</small>
							</span> --}}
						</a>
					</li>
					<li class="treeview @if ($side_bar == 'users/list') active @endif">
						<a href="{{ url('admin/users') }}">
							<i class="fa fa-pie-chart"></i>
							<span>用户管理</span>
							<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							{{-- <li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li> --}}
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-pie-chart"></i>
							<span>角色管理</span>
						</a>
					</li>
				</ul>
			</section>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		@yield('content')

		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Version</b> 2.3.5
			</div>
			<strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
			reserved.
		</footer>
	</div>
	
	{!! HTML::script('manage/js/bootstrap.min.js') !!}
	{!! HTML::script('manage/js/jquery.slimscroll.min.js') !!}
	{!! HTML::script('manage/js/fastclick.js') !!}
	{!! HTML::script('manage/js/app.min.js') !!}
	{!! HTML::script('manage/js/demo.js') !!}
	{!! HTML::script('assets/sweet-alert/sweetalert.min.js') !!}

</body>

</html>
