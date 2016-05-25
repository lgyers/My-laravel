@extends('main')
@section('content')
	{!! Form::open(['url' => 'company/create']) !!}
		<div class="form-group">
			{!! Form::label('title','公司名称') !!}
			{!! Form::text('title','公司名称',['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('content','公司描述:') !!}
			{!! Form::textarea('content','公司描述',['class' => 'form_control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('提交',['class' => 'btn btn-success form-control'])!!}
		</div>
	{!! Form::close() !!}
@stop