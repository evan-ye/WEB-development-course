jQuery(document).ready(function($) {
    // Field on focus
    $('.field').on('focus', function() {
        $(this).siblings('label').animate({
            fontSize: 15,
            top: -25,
        }, 'fast').css("color","#0006f5");
        $(this).siblings('.separator').animate({
            width: '100%',
        }, 'fast');
    });

    // Field on blur
    $('.field').on('blur', function() {
        if (!$(this).val()) {
            $(this).siblings('label').animate({
                fontSize: 20,
                top: 0,
            }, 'fast').css("color","ffffff");
        }
        $(this).siblings('.separator').animate({
            width: 0
        }, 'fast');
    });

    // Form validation
    $.validator.addMethod(
        "regex",
        function(value, element, regexp) {
            var re = new RegExp(regexp);
            return this.optional(element) || re.test(value);
        },
        "Please check your input"
    );

    $('form').validate({
        messages: {firstname: " ", lastname: " ", email: " ", ticketType: " "},
        rules: {
            firstname: {
                regex: "^[A-z\-]+$"
            },
            lastname: {
                regex: "^[A-z\-]+$"
            },
            email: {
                regex: "^([a-z0-9_\.-]+)@([a-z0-9_\.-]+)\.([a-z\.]{2,6})$"
            }
        },
        invalidHandler: function(event, validator) {
            if (validator.errorMap.firstname) {
                $('.response-text').html("Please enter your first name");
            } else if (validator.errorMap.lastname) {
                $('.response-text').html("Please enter your last name");
            } else if (validator.errorMap.email) {
                $('.response-text').html("Please enter your e-mail correctly");
            } else if (validator.errorMap.ticketType) {
                $('.response-text').html("Please choose type of ticket");
            }
        }
    });

    // On submit
    $('form').on('submit', function(event) {
        event.preventDefault();
        $('.field.error').parent().css({borderColor: '#ff5454',});
        $('.field.valid').parent().css({borderColor: '#ffffff',});
        if ($('form').valid()) {
            $('.response-text').html("");
            var data = $(this).serialize();
            $.ajax({
             url: 'registration_form.php',
             data: data,
             success: function(response) {
                 $('.response-text').html(response);
             },
             method: 'post'
            });
        }
    })
});