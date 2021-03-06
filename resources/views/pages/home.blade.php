@extends('layouts.default')

@section('content')

<div class="box text-center site-intro">
  {!! lang('site_intro') !!}
</div>

@include('layouts.partials.topbanner')

<div class="panel panel-default list-panel home-topic-list">
  <div class="panel-heading">
    <h3 class="panel-title text-center">
      {{ lang('Excellent Topics') }} &nbsp;
      <a href="{{ route('feed') }}" style="color: #E5974E; font-size: 14px;" target="_blank">
         <i class="fa fa-rss"></i>
      </a>
    </h3>

  </div>

  <div class="panel-body">
	@include('topics.partials.topics', ['column' => true])
  </div>

  <div class="panel-footer text-right">

  	<a href="topics?filter=excellent">
  		{{ lang('More Excellent Topics') }}...
  	</a>
  </div>
</div>

@stop
