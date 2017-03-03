@extends('main')
@section('content')
	<h1>公司列表</h1>
	<hr>

	@foreach ($company as $value)
		<div class="mbr-section__container container mbr-section__container--std-top-padding row">
			<div class="col-lg-12">
				<div class="media">
					<a href="/company/{{ $value->com_id }}" class="pull-left">
						<img src="https://itjuzi.com/images/{{ $value->com_logo_archive }}" width="40" height="40" alt="" class="media-object">
					</a>
					<div class="media-body">
						<h4 class="media-heading"> {{ $value->com_name }} </h4>
						<p>{{ $value->com_des }}</p>
					</div>
				</div>
			</div>
		</div>
	@endforeach

	<div class="mbr-box__magnet mbr-box__magnet--center-center">
		{!! $company->render() !!}
	</div>
@stop