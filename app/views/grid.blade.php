@extends('templates.master')

@section('page-title')
	Cangrid Visualized
@stop

@section('additional_css')
	<link rel="stylesheet" type="text/css" href="{{ asset('styles/cangrid/css/gridvisualization.css') }}">
@stop

@section('page_body')
	<div class="grid-wrapper">
		<!-- Row 1 -->
		<div class ="row row-one">

			<div class="col-6"> <h2>Col-6</h2> </div>
			<div class="col-6"> <h2>Col-6</h2> </div>

		</div>

		<!-- Row 2 -->
		<div class ="row row-two">
			
			<div class="col-4"> <h2>Col-4</h2> </div>
			<div class="col-4"> <h2>Col-4</h2> </div>
			<div class="col-3"> <h2>Col-3</h2> </div>
			<div class="col-1"> <h2>Col-1</h2> </div>		

		</div>

		<!-- Row 3 -->
		<div class ="row row-three">
			
			<div class="col-3"> <h2>Col-3</h2> </div>
			<div class="col-3"> <h2>Col-3</h2> </div>
			<div class="col-2"> <h2>Col-2</h2> </div>
			<div class="col-2"> <h2>Col-2</h2> </div>
			<div class="col-2"> <h2>Col-2</h2> </div>		

		</div>

		<!-- Row 4 -->
		<div class ="row row-four">
			<div class="col-6 centered"> <h2>Col-6 centered</h2> </div>
		</div>

		<!-- Row 5 -->
		<div class ="row row-four">
			<div class="col-6 forced-width-6"> <h2>Col-6 forced-width-6</h2> </div>
			<div class="col-6 forced-width-6"> <h2>Col-6 forced-width-6</h2> </div>
		</div>

	</div>


@stop