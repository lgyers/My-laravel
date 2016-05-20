@extends('main')
@section('content')
	<h1>公司列表</h1>
	<hr>

	@foreach ($company as $value)
		<div class="row">
			<div class="col-xz-4"><img src="http://itjuzi.com/images/{{$value->com_logo_archive}}" alt="{{$value->com_name}}" class="img-circle"></div>
			<div class="col-xz-8"><a target="_black" href="{{ url('company',$value->com_id) }}"><h2> {{$value->com_name}} </h2></a></div>
			<article>
				{{$value->com_des}}
			</article>
		</div>
	@endforeach
@stop