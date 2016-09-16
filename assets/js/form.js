// magic.js
$(document).ready(function() {

	// process the form
	$('#contact_form').submit(function(event) {

		/*$('.form-group').removeClass('has-error'); // remove the error class
		$('.help-block').remove(); // remove the error text
*/
		// get the form data
		// there are many ways to get this data using jQuery (you can use the class or id also)
		var formData = {
			'fname' : $('input[name=fname]').val(),
			'lname' : $('input[name=lname]').val(),
			'phone' : $('input[name=phone]').val(),
			'email' : $('input[name=email]').val(),
			'sqft'  : $('select[name=sqft]').val(),

			'services': $('input[name="services[]"]:checked').map(function(){
        		return this.value;
    		}).get(),

			'time': $('input[name="time[]"]:checked').map(function(){
        		return this.value;
    		}).get(),

    		'comments' : $('#textarea').val()

		};

		// process the form
		$.ajax({
			type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
			url 		: 'assets/scripts/process.php', // the url where we want to POST
			data 		: formData, // our data object
			dataType 	: 'json', // what type of data do we expect back from the server
			encode 		:  true,
            success: function(data){

            	if(!data.success){
                
                	$('#contact_form').append('<div class="alert alert-success">' + data.message + '</div>');

                	if(data.errors.fname || data.errors.lname){
                		$('#name-group').append('<div class="alert alert-success">Name is Required</div>');
                	}

                	if(data.errors.email || data.errors.phone){
                		$('#email-group').append('<div class="alert alert-success">Email address is required</div>');
                	}
                	console.log(data);
                } else { 

                	$('#contact_form').append('<div class="alert alert-success">Request Submitted</div>');
                	console.log(data);
                }

                
            }
		})
			// using the done promise callback
			.done(function(data) {
			// log data to the console so we can see
				
			});
		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});

});
