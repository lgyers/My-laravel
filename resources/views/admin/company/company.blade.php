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
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">公司列表</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example2" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>公司 ID</th>
									<th>公司名称</th>
									<th>创建时间</th>
									<th>管理员</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($company as $value)
									<tr>
										<td>{{ $value->com_id }}</td>
										<td>{{ $value->com_name }}</td>
										<td>{{ date('Y-m-d',$value->contributor->commit_time) }}</td>
										<td>admin</td>
										<td>
											<a href="{{ URL::to('admin/company/edit/'.$value->com_id) }}" class="btn btn-warning">编辑</a>
											<a data-url="{{URL::to('admin/company/destroy/'.$value->com_id)}}" data-confirm="#delete-modal" class="btn btn-danger">删除</a>
										</td>
									</tr>
								@endforeach
							</tbody>
							<tfoot>
								<tr>
									<th>公司ID</th>
									<th>公司名称</th>
									<th>创建时间</th>
									<th>管理员</th>
									<th>操作</th>
								</tr>
							</tfoot>
						</table>
						<div class="row">
							<div class="col-sm-5">
							</div>
							<div class="col-sm-7">
								{!! $company->render() !!}
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