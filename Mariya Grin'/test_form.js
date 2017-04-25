
$(document).ready(function() {
    $('#eml').blur(function() {
        if($(this).val() != '') {
          var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
            if(pattern.test($(this).val())){
                $(this).css({'border' : '1px solid #000000'});
                $('#validemail').text('');
            } else {
                $(this).css({'border' : '1px solid #ff0000'});
                $('#validemail').text('You have entered an invalid email address!');
            }
        } else {
            $(this).css({'border' : '1px solid #ff0000'});
            $('#validemail').text('Enter your email');
        }
    });
});
$(document).ready(function() {
    $('#name').blur(function() {
        if($(this).val() != '') {
          var pattern = /^[а-яА-Яa-zA-Z]+$/g;
            if(pattern.test($(this).val())){
                $(this).css({'border' : '1px solid #000000'});
                $('#validname').text('');
            } else {
                $(this).css({'border' : '1px solid #ff0000'});
                $('#validname').text('You have entered an invalid name!');
            }
        } else {
            $(this).css({'border' : '1px solid #ff0000'});
            $('#validname').text('Enter your name');
        }
    });
});
$(document).ready(function() {
    $('#surname').blur(function() {
        if($(this).val() != '') {
          var pattern = /^[а-яА-Яa-zA-Z]+$/g;
            if(pattern.test($(this).val())){
                $(this).css({'border' : '1px solid #000000'});
                $('#validsurname').text('');
            } else {
                $(this).css({'border' : '1px solid #ff0000'});
                $('#validsurname').text('You have entered an invalid surname!');
            }
        } else {
            $(this).css({'border' : '1px solid #ff0000'});
            $('#validsurname').text('Enter your surname');
        }
    });
});

// $('form').submmit(function(){

// $.ajax({
//   type: "POST",
//   url: "test_email.php",
//   data: "email="+$('#email').val(),
//   success: function(data){
//     if($data == 1){
//        alert('Такой е-mail уже существует');
// };
// });

// return false;

// });
