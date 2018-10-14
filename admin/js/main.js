
$( document ).ready(function() {


	function disabled(target) 
	{

		$('#'+ target ).prop("disabled",true);
	}

	function enabled(target) 
	{

		$('#'+ target ).prop("disabled",false);
	}

	function error_msg(msg) 
	{

		console.log("An error occurred, the files couldn't be sent!" + msg);
	}

	function nope(event) 
	{

		event.preventDefault();
	}

	function ajax_post(data,target,button) 
	{

		disabled(button);

		$.ajax({
			  url: 'http://localhost/stunning_homestay/index.php/ajax/' + target, 
			  type: 'POST',
			  data: data
			  }).done(function(msg)
			  {	
			  	console.log(msg)
			    enabled(button);

			  }).fail(function(msg)
			  {
			      error_msg(msg);
		  });
	}

	function ajax_append(data,target,button,append) 
	{

		disabled(button);

		$.ajax({
			  url: 'http://localhost/stunning_homestay/index.php/ajax/' + target, 
			  type: 'POST',
			  data: data
			  }).done(function(anemities)
			  {	
			  	$('#' + append).append('<div class="col-md-6">' + 
	               '<div class="form-group">' +
			         '<div class="form-check form-check-flat">' +
			            '<label class="form-check-label">' +
			                 '<input type="checkbox" class="form-check-input" name="'+ anemities + '" checked>'  +
			                        anemities  +
			                 '<i class="input-helper"></i></label>' +
			              '</div>'  +                                                              
			           '</div>' +
	                '</div>' 
	                );	

			    enabled(button);

			  }).fail(function(msg)
			  {
			      error_msg(msg);
		  });
	}
	
	$( ".general-form" ).submit(function( event ) 
	{

	  nope(event);
	  ajax_post($('.general-form').serializeArray(),
	  		'insertLodgeData',
	  			'general-submit');
	});


	$( ".amenities-form" ).submit(function( event ) 
	{

	  nope(event);
	  ajax_post($('.amenities-form').serializeArray(),
	  		'insertAmenitiesData',
	  			'amenities-submit');

	  console.log($('.amenities-form').serializeArray());

	});

	$( ".custom-amenities-form" ).submit(function( event ) 
	{

	  nope(event);
	  ajax_append($('.custom-amenities-form').serializeArray(),
	  		'insertCustomAmenitiesData',
	  			'amenities-custom-submit','custom-amenities');	  
	});
   
});