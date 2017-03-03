@extends('admin.manage_header')
@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			编辑用户信息
			<small>Blank example to the boxed layout</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">公司管理</a></li>
			<li class="active">国内公司管理</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		{!! Form::open(['route' => 'admin.users.update', 'files' => true]) !!}
			<div class="form-group">
				{!! Form::label('email', 'Email:') !!}
				{!! Form::text('email', $userInfo->email, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('name', 'Name:') !!}
				{!! Form::text('name', $userInfo->name, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('thumbnail', '头像:') !!}
				{!! Form::file('user_logo') !!}
			</div>

			<!-- <div class="form-group">
				{!! Form::label('des', 'Body:') !!}
				{!! Form::textarea('des', $userInfo->email, ['class' => 'form-control']) !!}
			</div> -->

			<div class="form-group">
				{!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}
			</div>
	</section>
	<!-- /.content -->
</div>

@stop