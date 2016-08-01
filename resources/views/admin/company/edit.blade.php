@extends('admin.manage_header')
@section('content')
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				General Form Elements
				<small>Preview</small>
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li><a href="#">Forms</a></li>
				<li class="active">General Elements</li>
			</ol>
		</section>
		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="box box-primary">
						<div class="box-header with-border">
							<h2>编辑公司</h2>
						</div>
						<form role="form" method="POST" action="{{ url('/login') }}">
							{{ csrf_field() }}
							<div class="box-body">
								<div class="form-group">
									<label for="exampleInputEmail1">公司LOGO</label>
									<input type="text" class="form-control" name="com_logo_archive" value="{{ $data->com_logo_archive }}">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">公司名称</label>
									<input type="text" class="form-control" name="com_name" value="{{ $data->com_name }}">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">工商注册全称</label>
									<input type="text" class="form-control" name="com_register_name" value="{{ $data->com_register_name }}">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">地点</label>
									<input type="text" class="form-control" name="com_prov" value="{{ $data->com_prov }}">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">网址</label>
									<input type="text" class="form-control" name="com_url" value="{{ $data->com_url }}">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">成立时间</label>
									<input type="text" class="form-control" name="com_born_year" value="{{ $data->com_born_year }}">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		
	</div>
@stop