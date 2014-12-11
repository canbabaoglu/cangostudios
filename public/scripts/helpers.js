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
			console.log(response);
			/*
			if (response.type == "success") 
			{
				hideShow('.form-row', 'success-row' );	
			} 
			else if (response.type == "error") 
			{
				hideShow('.form-row', '.error-row');
			}
			*/	
		}; 

		
		
		function connectionError(response) 
		{
			console.log(response);
			//hideShow('.form-row', '.error-row');
		};

		

		function hideShow(hideDiv, showDiv) 
		{
			$(hideDiv).fadeOut(1000);
			
			setTimeout( function()
			{
				$(showDiv).fadeIn(1000);
			},1000);
		}

	})


})();