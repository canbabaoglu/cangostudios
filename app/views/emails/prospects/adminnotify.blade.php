@extends('templates.email')

@section('additional_css')
	 <link rel="stylesheet" type="text/css" href={{ asset('styles/css/emails/adminnotify.css') }}>
@stop

@section('email_body')

	<div class="row">
		<div class="col-10 centered">
			<p>Hi Can, </p>

			<p>There is a new prospect from CangoStudios that needs your attention.</p>

			<p>
				<span class='title'>Name: </span> {{ $name }} <br/>
				<span class='title'>Email: </span> {{ $email }} <br/>
				<span class='title'>PhoneNo: </span> {{ $phoneNo }} <br/>
				<span class='title'>Message: </span> {{ $message_body }} <br/>
			</p>

			<p>
				Go get 'em tiger,<br/>
				Your trusted website.
			</p>
		</div>
	</div>

@stop