<!DOCTYPE html>
<html lang="en">
	
<head>
	<title>AdminLTE 2 | Boxed Layout</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

	{!! Html::style('manage/css/bootstrap.min.css') !!}
	{!! Html::style('manage/css/AdminLTE.min.css') !!}
	{!! Html::style('manage/css/skins/_all-skins.min.css') !!}

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
							<img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
							<span class="hidden-xs">Alexander Pierce</span>
							</a>
							<ul class="dropdown-menu">
							<!-- User image -->
							<li class="user-header">
								<img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

								<p>
								Alexander Pierce - Web Developer
								<small>Member since Nov. 2012</small>
								</p>
							</li>
							<!-- Menu Body -->
							<li class="user-body">
								<div class="row">
								<div class="col-xs-4 text-center">
									<a href="#">Followers</a>
								</div>
								<div class="col-xs-4 text-center">
									<a href="#">Sales</a>
								</div>
								<div class="col-xs-4 text-center">
									<a href="#">Friends</a>
								</div>
								</div>
							</li>
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
						<img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
						<p>Alexander Pierce</p>
						<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
					</div>
				</div>

				<!-- sidebar menu: : style can be found in sidebar.less -->
				<ul class="sidebar-menu">
					<li class="header">MAIN NAVIGATION</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-dashboard"></i> <span>后台首页</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
					</li>
					<li class="treeview active">
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
							<i class="fa fa-th"></i> <span>Widgets</span>
							<span class="pull-right-container">
							<small class="label pull-right bg-green">new</small>
							</span>
						</a>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-pie-chart"></i>
							<span>Charts</span>
							<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
							<li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
							<li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
							<li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-laptop"></i>
							<span>UI Elements</span>
							<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="../UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
							<li><a href="../UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
							<li><a href="../UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
							<li><a href="../UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
							<li><a href="../UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
							<li><a href="../UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-edit"></i> <span>Forms</span>
							<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="../forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
							<li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
							<li><a href="../forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-table"></i> <span>Tables</span>
							<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="../tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
							<li><a href="../tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
						</ul>
					</li>
					<li>
						<a href="../calendar.html">
							<i class="fa fa-calendar"></i> <span>Calendar</span>
							<span class="pull-right-container">
							<small class="label pull-right bg-red">3</small>
							<small class="label pull-right bg-blue">17</small>
							</span>
						</a>
					</li>
					<li>
						<a href="../mailbox/mailbox.html">
							<i class="fa fa-envelope"></i> <span>Mailbox</span>
							<span class="pull-right-container">
							<small class="label pull-right bg-yellow">12</small>
							<small class="label pull-right bg-green">16</small>
							<small class="label pull-right bg-red">5</small>
							</span>
						</a>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-folder"></i> <span>Examples</span>
							<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="../examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
							<li><a href="../examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
							<li><a href="../examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
							<li><a href="../examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
							<li><a href="../examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
							<li><a href="../examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
							<li><a href="../examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
							<li><a href="../examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
							<li><a href="../examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-share"></i> <span>Multilevel</span>
							<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
							<li>
							<a href="#"><i class="fa fa-circle-o"></i> Level One
								<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
								<li>
								<a href="#"><i class="fa fa-circle-o"></i> Level Two
									<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
									<li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
								</ul>
								</li>
							</ul>
							</li>
							<li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
						</ul>
					</li>
					<li><a href="../../documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
					<li class="header">LABELS</li>
					<li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
					<li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
					<li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
				</ul>
			</section>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		{{-- <div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					Boxed Layout
					<small>Blank example to the boxed layout</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
					<li><a href="#">Layout</a></li>
					<li class="active">Boxed</li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="callout callout-info">
					<h4>Tip!</h4>

					<p>Add the layout-boxed class to the body tag to get this layout. The boxed layout is helpful when working on
					large screens because it prevents the site from stretching very wide.</p>
				</div>
				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
					<h3 class="box-title">Title</h3>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
						<i class="fa fa-minus"></i></button>
						<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
						<i class="fa fa-times"></i></button>
					</div>
					</div>
					<div class="box-body">
					Start creating your amazing application!
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
					Footer
					</div>
					<!-- /.box-footer-->
				</div>
				<!-- /.box -->
			</section>
			<!-- /.content -->
		</div> --}}

		@yield('content')

		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Version</b> 2.3.5
			</div>
			<strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
			reserved.
		</footer>
	</div>
	{!! HTML::script('manage/js/jquery-2.2.3.min.js') !!}
	{!! HTML::script('manage/js/bootstrap.min.js') !!}
	{!! HTML::script('manage/js/jquery.slimscroll.min.js') !!}
	{!! HTML::script('manage/js/fastclick.js') !!}
	{!! HTML::script('manage/js/app.min.js') !!}
	{!! HTML::script('manage/js/demo.js') !!}

</body>

</html>
