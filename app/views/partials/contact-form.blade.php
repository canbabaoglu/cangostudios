<div class="row form-row">
	{{ Form::open(['route'=>'prospects.store', 'data-ajax'=>'']) }}
		
		{{ Form::text('name', null, ['placeholder'=>'Your full name', 'required'=>'' ]) }}
		{{ Form::email('email', null, ['placeholder'=>'Your email', 'required'=>'']) }}
		{{ Form::input('tel', 'phoneNo', null, ['placeholder'=>'Your phone number', 'required' => '']) }}
		{{ Form::textarea('message', null, ['placeholder'=>'Your message', 'required'=>'']) }}
		{{ Form::submit('Send your message', ['class'=>'send-button'])}}

	{{ Form::close() }}
</div>

<div class="row success-row">
	<i class="fa fa-paper-plane"></i>
	<h2>Your message has been sent!</h2>
	<p>We'll get back to you as soon as we can.</p>
</div>

<div class="row error-row">
	<i class="fa fa-exclamation-circle"></i>
	<h2>Hmmm... There seems to be an error..</h2>
	<p>Could you please refresh the page and try again.</p>
</div>