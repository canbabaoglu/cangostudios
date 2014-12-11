@extends('templates.master')

@section('page_title')
	CangoStudios
@stop

@section('additional_css')
	<link rel="stylesheet" type="text/css" href="{{ asset('styles/css/landing.css') }}">
@stop

@section('page_body')
	<div class="row section-row home-row">
		<h2>Home content goes here</h2>	
	</div>

	<div class="row section-row how-row">
		<h2>How content goes here</h2>	
	</div>

	<div class="row section-row work-row">
		<h2>Work content goes here</h2>	
	</div>

	<div class="row section-row packages-row">
		<h2>Packages content goes here</h2>	
	</div>

	<div class="row section-row contact-row">
		<div class="row section-header-row">
			<h1>Contact us</h1>
			<h3>and let's get your project rolling </h3>
		</div>	
	</div>
	
@stop

@section('additional_js_body')
	<script type="text/javascript" src="scripts/header.js"></script>
@stop