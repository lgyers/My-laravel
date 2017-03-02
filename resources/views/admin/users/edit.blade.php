@extends('admin.manage_header')
@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Boxed Layout
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
				{!! Form::text('email', null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('name', 'Name:') !!}
				{!! Form::text('name', null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('thumbnail', 'Thumbnail:') !!}
				{!! Form::file('thumbnail') !!}
			</div>

			<div class="form-group">
				{!! Form::label('des', 'Body:') !!}
				{!! Form::textarea('des', null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
			</div>
	</section>
	<!-- /.content -->
</div>
@include('pjax::pjax')

@stop