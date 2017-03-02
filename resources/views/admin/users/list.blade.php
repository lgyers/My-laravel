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
		<div class="row">
			<div class="col-xs-12">
				@if (Session::has('success'))
					<div id="success-message" class="alert alert-success alert-dismissible" style="background-color: #24ce7b !important;">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> 成功提示!</h4>
						{{Session::get('success')}}
					</div>
				@else
					<div id="errors-message" class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
							&times;
						</button>
						<h4><i class="icon fa fa-ban"></i> 错误提示!</h4>
						{{Session::get('error')}}
					</div>
				@endif
				
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">公司列表</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example2" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>用户名</th>
									<th>真实姓名</th>
									<th>邮箱</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($users as $value)
									<tr>
										<td>{{ $value->id }}</td>
										<td>{{ $value->name }}</td>
										<td></td>
										<td>{{ $value->email }}</td>
										<td>
											<a href="{{ URL::to('admin/users/edit/'.$value->id) }}" class="btn btn-warning">编辑</a>
											<a data-url="{{URL::to('admin/users/destroy/'.$value->id)}}" data-confirm="#delete-modal" class="btn btn-danger">删除</a>
										</td>
									</tr>
								@endforeach
							</tbody>
							<tfoot>
								<tr>
									<th>ID</th>
									<th>用户名</th>
									<th>真实姓名</th>
									<th>邮箱</th>
									<th>操作</th>
								</tr>
							</tfoot>
						</table>
						<div class="row">
							<div class="col-sm-5">
							</div>
							<div class="col-sm-7">
								{!! $users->render() !!}
							</div>
						</div>
					</div>
					<!-- /.box-body -->
				</div>
			</div>
		</div>
	</section>
	<!-- /.content -->
</div>
@include('pjax::pjax')

<script>
	$(document).ready(function() {
		$('a[data-confirm]').click(function(ev) {

			var href = $(this).attr('data-url');
			var btn = $(this);
			swal({
				title: "Are you sure?",
				text: "确定删除此公司?不可挽回",
				type: "warning",
				showCancelButton: true,
				confirmButtonClass: "btn-danger",
				confirmButtonText: "Yes, delete it!",
				closeOnConfirm: false
				}, function (isConfirm) {
					if (!isConfirm) return;
					$.ajax({
						url: href,
						type: 'GET',
						dataType: 'html',
						success: function() {
							swal("Done!", "It was succesfully deleted!", "success");
							btn.closest('tr').remove();
						},
						error: function() {
							swal("Error deleting!", "Please try again", "error");
						}
					})
			});
		});
	});
</script>
@stop