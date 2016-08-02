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
					@if (Session::has('errors'))
						<div id="errors-message" class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
								&times;
							</button>
							<h4><i class="icon fa fa-ban"></i> 错误提示!</h4>
							@foreach($errors->all() as $error)
								{{$error}}!&nbsp;&nbsp;&nbsp;&nbsp;
							@endforeach
						</div>
					@endif
					<div class="box box-primary">
						<div class="box-header with-border">
							<h2>编辑公司</h2>
						</div>
						<form role="form" method="POST" action="{{ route('admin.company.update', ['id'=>$data->com_id]) }}">
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
									<label for="exampleInputEmail1">公司简介</label>
									<input type="text" class="form-control" name="com_des" value="{{ $data->com_des }}">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">工商注册全称</label>
									<input type="text" class="form-control" name="com_registered_name" value="{{ $data->com_registered_name }}">
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
								<div class="form-group">
									<div class="row">
										<div class="col-md-6">
											<label for="state">行业</label>
											<select class="form-control" name="scope" id="">

												@foreach ($scopes as $value)
													<option value="{{ $value->cat_id }}">{{ $value->cat_name }}</option>
												@endforeach
												
											</select>
										</div>

										<div class="col-md-6">
											<label for="state">子行业</label>
											<select class="form-control" disabled name="" id="">

												@foreach ($scopes as $value)
													<option value="{{ $value->cat_id }}">{{ $value->cat_name }}</option>
												@endforeach
												
											</select>
											<script type="text/javascript">
												$(function () {
													$('select[name=scope]').change(function(){

														if (this.value) {
															$.ajax({
															  url: "",
															  type: "POST",
															  data: {scope_id : this.value },
															  dataType: "html",
															  success:function(msg) {
															  	$('select[name=com_second_scope_id]').prop('disabled', false);
															  	$('select[name=com_second_scope_id]').empty().html(msg);
															  }
															});
														} else {
															$('select[name=com_second_scope_id]').prop('disabled', 'disabled');
														}
													});
												});
											</script>
										</div>
									</div>
								</div>
							</div>
							<div class="box-footer">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		
	</div>
@stop