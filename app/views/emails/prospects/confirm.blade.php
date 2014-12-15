@extends('templates.email')

@section('additional_css')
	 <link rel="stylesheet" type="text/css" href={{ asset('styles/css/emails/adminnotify.css') }}>
@stop

@section('email_body')

	<div class="row">
		<div class="col-10 centered">

			<p>Hi {{$name}} </p>

			<p>Thank you very much for contacting us through CangoStudios. I'll personally read your message and get back to you as soon as I can.</p>

			<p>Sincerely,<br />
				Can 'Cango' Babaoglu <br />
				Principle
			</p>

		</div>
	</div>
@stop