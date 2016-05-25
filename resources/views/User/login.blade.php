@extends('main')
@section('content')
	{!! Form::open(['url' => '/auth/login']) !!}
		<div class="form-group">
			{!! Form::label('email','Email') !!}
			{!! Form::email('email','邮箱',['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password','密码') !!}
			{!! Form::textarea('password','密码',['class' => 'form_control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password','记住我') !!}
			{!! Form::checkbox('remember') !!}
		</div>

		<div class="form-group">
			{!! Form::submit('提交',['class' => 'btn btn-success form-control'])!!}
		</div>
	{!! Form::close() !!}
@stop