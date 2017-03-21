$(document).ready(function () {

    //Datepicker
    $('#birthdate').datepicker();


    // Custom rule creation
    jQuery.validator.addMethod("greaterThanZero", function(value, element) {
        return this.optional(element) || (parseFloat(value) > 0);
    }, "* Amount must be greater than zero");


    // Form Validation
    $('#signup').validate({

     // Advanced rules
     /* rules: {
            fieldname : 'validationType'
        } */

        rules: {
            email: 'required',
            birthdate: {
                required: true,
                date: true
            },
            password: {
                required:true,
                rangelength:[8,16],
                greaterThanZero : true
            },
            confirm_password: {
                equalTo:'#password'
            },
            username: {
                remote: 'assets/check_username.php' // Validating with the Server
            }
        }, // end of rules

     // Advanced error messages
     /* messages: {
            fieldname: {
                methodType: 'Error message'
            }
        } */

        messages: {
            email: {
                required: 'Email is required'
            }
        } // end of messages

    }); // end validate()

    // Validation Builtin Rules
    // required
    // date
    // url
    // email
    // number
    // digits
    // creditcard

    // minlength
    // maxlength
    // rangelength : [6,100]
    // min
    // max
    // range:[10, 100]
    // equalTo: '#password'




    // Determining the Size and Position of Page Elements


    // Determining the Height and Width of Elements

    // var winH = $(window).height();
    // var winW = $(window).width();

    // var docH = $(document).height();
    // var docW = $(document).width();

    // var divW = $('#banner').width(); // 300
    // var divH = $('#banner').height(); // 300

    // var divW = $('#banner').innerWidth(); // 340
    // var divH = $('#banner').innerHeight(); // 340

    // var divW = $('#banner').outerWidth(); // 360
    // var divH = $('#banner').outerHeight(); // 360

    // var divW = $('#banner').outerWidth(true); // 400
    // var divH = $('#banner').outerHeight(true); // 400



    // Determining the Position of Elements on a Page

    // var bannerPosition = $('#banner').offset();
    // bannerPosition.top
    // bannerPosition.left

    // var bannerSloganOffset = $('.banner-slogan').offset());
    // var bannerSloganPosition = $('.banner-slogan').position());



    // Determining a Page’s Scrolling Position

    // $(document).scrollTop();
    // $(document).scrollLeft();





    // AJAX = Asynchronous JavaScript and XML

    // Talking to the Web Server

    // 1. Create an instance of the XMLHttpRequest object
    // var newXHR = new XMLHttpRequest();

    // 2. Use the XHR’s open()
    // GET or POST
    // newXHR.open('GET', 'shop.php?productID=34');

    // 3. Set the callback function

    // 4. Send the request.
    // newXHR.send(null); //GET
    // newXHR.send(productID=34); //POST

    // 5. Receive the response
        // status of the request
        // text response
        // XHR object’s responseXML property


}); // document ready end


$(window).resize(function () {
    console.log($(window).width());
});


$(window).on('scroll',function () {
    console.log($(document).scrollTop());
});


