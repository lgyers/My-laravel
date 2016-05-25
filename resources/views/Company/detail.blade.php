@extends('main')
@section('content')
	<article class="mbr-section__container container mbr-section__container--std-top-padding">
        <h2 class="post-title pad">
            <a href="/company/{{ $com_info->com_id }}" rel="bookmark"> {{ $com_info->com_name }}</a>
        </h2>
        <div class="post-inner">
            <div class="post-content pad">
                <div class="entry custome">
                    {{ $com_info->com_des }}
                </div>
            </div>
        </div>
    </article>
@stop