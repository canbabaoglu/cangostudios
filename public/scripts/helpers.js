(function() 
{

	// if a form has a data-ajax attribute send the request via ajax
	$('form[data-ajax]').submit(function(event) 
	{
		event.preventDefault();

		var form            = $(this);
		var method          = form.find('input[name="_method"]').val() || 'POST';
		var url             = form.attr('action');
		var data            = form.serialize();
		var successHandler  = form.attr('data-success');
		var errorHandler    = form.attr('data-error');

		// Remove all existing error styles
		cleanErrors(form);

		$.ajax(
		{
			type      : method,
			url       : url,
			data      : data,
			dataType  : 'json',
			success   : contactFormSuccess,
			error     : contactFormError
		});

		// Helper Functions

		function contactFormSuccess(response) 
		{
			
			if (response.type == 'success') 
			{
				hideShow('.form-row', '.success-row', 500 );	
			} 

			if (response.type == 'error') 
			{
				// Name errors
				if (response.errors.name) {
					addError($('input[name="name"]'), deparam(data).name, response.errors.name);
				}
			
				// Email errors
				if (response.errors.email) {
					addError($('input[name="email"]'), deparam(data).email, response.errors.email);
				}
				
				// Phone number errors
				if ( response.errors.phoneNo) {
					addError($('input[name="phoneNo"]'), deparam(data).phoneNo, response.errors.phoneNo);
				}

				// Message errors 
				if ( response.errors.message ) {
					addError($('textarea[name="message"]'), deparam(data).message, response.errors.message); 
				}
			}
		} 

		
		function contactFormError(response) 
		{
			hideShow('.form-row', '.error-row', 500);
		};

		function hideShow(hideDiv, showDiv, duration) 
		{
			$(hideDiv).slideUp(duration);
			$(showDiv).slideDown(duration);	
		}

		function cleanErrors(form) {
			form.find('input').removeClass('error-detected');
			form.find('.error-container').hide();
			form.find('.error-alert-row').hide(); 
		}

		function addError(input, value, message) {
			input.parents('form').find('.error-alert-row').show();
			input.addClass('error-detected');
			input.next().show();
			input.next().find('.error-message').html(message);
			input.val(value);
		}

		function deparam(query) {
		    var pairs, i, keyValuePair, key, value, map = {};
		    // remove leading question mark if its there
		    if (query.slice(0, 1) === '?') {
		        query = query.slice(1);
		    }
		    if (query !== '') {
		        pairs = query.split('&');
		        for (i = 0; i < pairs.length; i += 1) {
		            keyValuePair = pairs[i].split('=');
		            key = decodeURIComponent(keyValuePair[0]);
		            value = (keyValuePair.length > 1) ? decodeURIComponent(keyValuePair[1]) : undefined;
		            map[key] = value;
		        }
		    }
		    return map;
		}

	})


})();