$(document).ready(function() {
	//$("#commentForm").validate();
	$.validator.addMethod("regx", function(value, element, regexpr) {          
    return regexpr.test(value);
}, "Please enter a valid email.");

	$("#registrationForm").validate({
		rules: {
			firstName: {
				maxlength: 30,
				required: true
			},
			lastName: {
				maxlength: 30,
				required: true
			},
			email: {
				maxlength: 50,
				required: true
			},
			ticketType: {
				required: true
			}
		},
		messages: {
			firstName: {
				required: "First name is required."
			},
			lastName: {
				required: "Last name is required."
			},
			email: {
				required: "Email is required."
			}
		}

		
	});
});
