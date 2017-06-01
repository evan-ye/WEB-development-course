$(document).ready(function() {

$.validator.addMethod(
        "regex",
        function(value, element, regexp) {
            var re = new RegExp(regexp);
            return this.optional(element) || re.test(value);
        },
        "Incorrect input."
    );


	$("#registrationForm").validate({
		rules: {
			firstName: {
				maxlength: 30,
				 regex: "^[A-z]+$",
				required: true
			},
			lastName: {
				maxlength: 30,
				regex: "^[A-z-]+$",
				required: true
			},
			email: {
				maxlength: 50,
				required: true,
				regex: "^([a-z0-9_\.-]+)@([a-z0-9_\.-]+)\.([a-z\.]{2,6})$"
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
 $('form').on('submit', function(event) {
        event.preventDefault();
             if ($('form').valid()) {
            var data = $(this).serialize();
            $.ajax({
             url: 'registrationForm.php',
             data: data,
             success: function(response) {
                 $('.response').html(response);
                 setTimeout(function(){ 
                 	$(".response").remove(); 
                 }, 5000);

             },
             method: 'post'
            });
        }
    });
   
