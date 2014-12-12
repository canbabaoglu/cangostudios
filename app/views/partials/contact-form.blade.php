<div class="row form-row">

	<div class="row section-header-row">	
		<h1>Contact us</h1>
		<h3>and let's get your project rolling </h3>
	</div>

	<div class="row section-content-row">
		<div class="col-6 centered">
			{{ Form::open(['route'=>'prospects.store', 'data-ajax'=>'']) }}
				
				{{ Form::text('name', null, ['placeholder'=>'Your full name', 'required'=>'' ]) }}
				{{ Form::email('email', null, ['placeholder'=>'Your email', 'required'=>'']) }}
				{{ Form::input('tel', 'phoneNo', null, ['placeholder'=>'Your phone number', 'required' => '']) }}
				{{ Form::textarea('message', null, ['placeholder'=>'Your message', 'required'=>'']) }}
				{{ Form::submit('Send your message', ['class'=>'send-button'])}}

			{{ Form::close() }}
		</div>
	</div>
</div>

<div class ="row">
	<div class="col-6 centered">
		<div class="row success-row">
			<h1>Thank you!</h1>
			<i class="fa fa-paper-plane"></i>
			<h2>Your message has been received.</h2>
			<p>We'll get back to you as soon as we can.</p>
		</div>

		<div class="row error-row">
			<h1>Hmmm..</h1>
			<i class="fa fa-exclamation-circle"></i>
			<h2>We were unable to send your message.</h2>
			<p>Could you please refresh the page and try again.</p>
		</div>
	</div>
</div>