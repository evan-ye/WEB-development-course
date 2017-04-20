$(document).ready(function() {
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
