@extends('templates.main.home')

@section('header')
	@include('templates.sub-sections.nav.header')
@stop

@section('main-header')
	@include('templates.catechist.baptism-header')
@stop

@section('aside')
	@include('templates.catechist.aside')
@stop

@section('body')
	@include('templates.catechist.baptism-body')
@stop

@section('footer')
	@include('templates.sub-sections.footer.footer')
@stop

@section('scripts')
	@include('templates.main.scripts')
@stop

