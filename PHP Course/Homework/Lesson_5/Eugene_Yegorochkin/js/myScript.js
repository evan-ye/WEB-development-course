$(document).ready(function(){

    $("#signup").validate({

       rules:{

            firstname:{
                required: true,
                minlength: 2,
                maxlength: 20,
            },

            lastname:{
                required: true,
                minlength: 2,
                maxlength: 20,
            },

            email:{
                required: true,
                email: true,
            },

            ticket_type:{
                required: true,
                
            },
       },

       messages:{

            firstname:{
                required: " Please provide a first name",
                minlength: " Your first name must consist of at least 2 characters",
                maxlength: " Your first name must consist of at max 20 characters",
            },

            lastname:{
                required: " Please provide a last name",
                minlength: " Your last name must consist of at least 2 characters",
                maxlength: " Your last name must consist of at max 20 characters",
            },

            email:{
                required: " Please provide a email",
            },

            ticket_type:{
                required: " Please choose a ticket type",
            },

       }

    });

});

	$('#signup').submit(function(event){
        event.preventDefault();
        if ($('form').valid()) {
        var data = $(this).serialize();
        console.log(data);
        $.post("process.php", data, function(response){
            alert(response);
        })
      }
    });