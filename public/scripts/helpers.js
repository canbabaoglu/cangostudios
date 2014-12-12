(function() 
{

	// if a form has a data-ajax attribute send the request via ajax
	$('form[data-ajax]').submit(function(event) 
	{
		event.preventDefault();

		var form = $(this);
		var method = form.find('input[name="_method"]').val() || 'POST';
		var url = form.attr('action');
		var data = form.serialize();

		console.log(data);

		$.ajax(
		{
			type      : method,
			url       : url,
			data      : data,
			dataType  : 'json',
			success   : processJson,
			error     : connectionError
		});

		

		function processJson(response) 
		{
			
			console.log(response.input);

			if (response.type == 'success') 
			{
				hideShow('.form-row', '.success-row', 1000 );	
			} 
			else if (response.type == "error") 
			{
				hideShow('.form-row', '.error-row', 1000);
			}	
		}; 

		
		
		function connectionError(response) 
		{
			hideShow('.form-row', '.error-row', 1000);
		};

		

		function hideShow(hideDiv, showDiv, duration) 
		{
			$(hideDiv).slideUp(duration);
			$(showDiv).slideDown(duration);	
		}

	})


})();