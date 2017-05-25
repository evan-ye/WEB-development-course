jQuery(document).ready(function($) {

    // Clear inputs
    $('input').not(':radio').not(':submit').val('');

    // Field on focus
    $('.field').on('focus', function() {
        focusAnimationPermission = false;
        $(this).siblings('label').animate({
            fontSize: 15,
            top: -25,
        }, 'fast');
        $(this).siblings('.separator').animate({
            width: '100%',
        }, 'fast', function () {
            focusAnimationPermission = true;
        });
    });

    // Field on blur
    var blurAnimationPermission = true;
    $('.field').on('blur', function() {
        if (blurAnimationPermission) {
            blurAnimationPermission = false;
            if (!$(this).val()) {
                $(this).siblings('label').animate({
                    fontSize: 20,
                    top: 0,
                }, 'fast');
            }
            $(this).siblings('.separator').animate({
                width: 0
            }, 'fast', function () {
                blurAnimationPermission = true;
            });
        }
    });


    // Error-icon hover
    $('.submit-icon').hover(
        function(){
            if ($(this).hasClass('error-icon')) {
                $(this).siblings('.error-text').fadeIn('fast');
            }
        },
        function(){$(this).siblings('.error-text').fadeOut('fast');}
    );

    // Ticket type checkboxes
    $( function() {
        $(':radio').checkboxradio({
            icon: false
        });
    } );

    // Captcha refresh
    function refreshCaptcha() {
        $('.captcha-image').attr({
            src:'images/get-captcha-image.php?hash='+Math.random()*100000
        });
        $('#check-text-field').val("");
    }

    // Captcha Refresh Icon
    $('.refresh-icon').on('click', function () {
        refreshCaptcha();
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
        messages: {
            firstname: "Can consist only of Latin letters and dashes",
            lastname: "Can consist only of Latin letters and dashes",
            email: "Incorrect e-mail address",
            ticketType: "Please, choose ticket type"},
        rules: {
            firstname: {
                required: true,
                regex: "^[A-z-]+$"
            },
            lastname: {
                required: true,
                regex: "^[A-z-]+$"
            },
            email: {
                required: true,
                regex: "^([a-z0-9_\.-]+)@([a-z0-9_\.-]+)\.([a-z\.]{2,6})$"
            }
        },
        onfocusout: false,
        errorPlacement: function(error, element) {
            element.siblings('.error-text').html(error[0].innerText);
            if (element.hasClass('error')) {
                element.siblings('.submit-icon').removeClass('success-icon').addClass('error-icon');
            } else {
                element.siblings('.submit-icon').removeClass('error-icon').addClass('success-icon');
            }
        },
        success: function (element) {
            element.siblings('.submit-icon').removeClass('error-icon').addClass('success-icon');
        },
        submitHandler: function(form) {
                var $submitButton = $(form).find(':submit');
                $submitButton.prop('disabled', true);
                $submitButton.val('Sending...');
                var data = $(form).serialize();
                $.ajax({
                    url: 'registration_form.php',
                    data: data,
                    success: function(response) {
                        response = jQuery.parseJSON(response);
                        showErrors(response);
                        showResponsText(response);
                        refreshCaptcha();
                        $submitButton.prop('disabled', false);
                    },
                    method: 'post'
                });
        }
    });

    // Show errors after response
    function showErrors(response) {
        for (key in response) {
            if (!response[key]) {
                $("input[name="+key+"]").siblings('.submit-icon').removeClass('success-icon').addClass('error-icon');
                if (key == 'firstname' || key == 'lastname') {
                    $("input[name="+key+"]").siblings('.error-text').text('Can consist only of Latin letters and dashes').fadeIn('fast').delay(3000).fadeOut('fast');
                } else if (key == 'email') {
                    $("input[name="+key+"]").siblings('.error-text').text('Incorrect e-mail address').fadeIn('fast').delay(3000).fadeOut('fast');
                } else if (key == 'ticketType') {
                    $('form>.error-text').text('Please, choose ticket type').fadeIn('fast').delay(3000).fadeOut('fast');
                } else if (key == 'checkText') {
                    $("input[name="+key+"]").siblings('.error-text').text('Incorrect text from image').fadeIn('fast').delay(3000).fadeOut('fast');
                }
            }
        }
    }

    // Show response text
    function showResponsText(response) {
        $('form>.error-text').html(response.responseText);
        if (!response.errors) {
            $('form>.error-text').css('background', 'linear-gradient(140deg, #84bd00, #00bdea, #a265e2)');
        } else {
            $('form>.error-text').css('background', 'linear-gradient(140deg, #e52810, #e56520, #dd6c02)');
        }
        $('form>.error-text').fadeIn('fast').delay(3000).fadeOut('fast');
    }
});