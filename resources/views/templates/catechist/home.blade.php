@extends('templates.main.home')

@section('header')
	@include('templates.sub-sections.nav.header')
@stop

@section('reception-header-home')
	@include('templates.catechist.header-home')
@stop

@section('aside')
	@include('templates.catechist.aside')
@stop

@section('reception-home-blocks')
	@include('templates.catechist.home-blocks')
@stop

@section('reception-home-statistics')
	@include('templates.catechist.home-statistics')
@stop

@section('footer')
	@include('templates.sub-sections.footer.footer')
@stop

@section('scripts')
	@include('templates.main.scripts')
@stop
