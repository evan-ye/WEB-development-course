$(document).ready(function () {

    // http://fancyapps.com/fancybox/3/docs/#api

    // Improving Navigation
/*
    $('a[href^="http://"]').each(function() {
        var href = $(this).attr('href');
        href = href.replace('http://','');
        $(this).after(' (' + href + ')');
    });
*/


    // Opening External Links in a New Window
/*
    var myURL = location.protocol + '//' + location.hostname;
    console.log(location.protocol);
    $('a[href^="http://"]').not('[href^="'+myURL+'"]').attr('target','_blank');
*/


    // Creating New Windows
/*
    $('#banner').click(function(){
        var newWin = open('http://www.google.com/', 'theWin', 'height=400,width=400,left=300,top=300');
        newWin.close();
        // blur()
        // focus()
        // moveBy()
        // moveTo
        // resizeTo()
    });
*/
    // scrollbars  (Chrome and Safari, won’t let you hide scrollbars)
    // toolbar
    // location
    // menubar



    // Enhancing Web Forms

    // Selecting Form Elements

    //var username = $('#username').val();
    // :input
    // :text
    // :password
    // :radio
    // :checkbox
    // :submit
    // :image
    // :reset
    // :button
    // :file
    // :hidden


    // :checked
/*
    $('#signup').submit(function() {
        console.log($('input:checked'));
        return false;
    });
*/


    // :selected
/*
    $('#signup').submit(function() {
        console.log($('select :selected').val());
        return false;
    });
*/


    // Getting and Setting the Value of a Form Element

    //var username = $('#username').val();
    //var fieldValue = $('#email').val('test@example.com');

/*
    $('#signup').submit(function() {
        console.log($('#username').val());
        return false;
    });
*/

    // Determining Whether Buttons and Boxes Are Checked
/*
    $('#signup').submit(function() {
        if ($('#pickle').prop( "checked" )) {
            alert('Pickle checked');
        }
        return false;
    });
*/

/*
    $('#signup').submit(function() {
        if ($('#pickle').is( ":checked" )) {
            alert('Pickle checked');
        }
        return false;
    });
*/


    // Form Events

    // Submit
/*
    $('#signup').submit(function() {
        if ($('#username').val() == '') {
            alert('Please supply a name in the Name field.');
            return false;
        }
    });
*/


    // Focus
/*
    $('#username').focus(function() {
        var field = $(this);
        if (field.val()==field.attr('defaultValue')) {
            field.val('');
        }
    });
*/


    // Blur
/*
    $('#username').blur(function() {
        var fieldValue=$(this).val();
        if (!fieldValue) {
            alert('Please add Name');
        }
    });

*/


    // Click
/*
    $(':radio').click(function() {
        //function will apply to every radio button when clicked
        alert($(this).val());
    });
*/


    // Change
/*
    $('#planet').change(function() {
        if ($(this).val()!='Earth') {
            alert('You are alien');
        }
    });
*/


    // Adding Smarts to Your Forms

/*
    $(document).ready(function() {
        $('#signup :text:first').focus();
    });

*/


    // Disabling fields
/*
    if ($('#planet').val()=='Earth') {
        $('#heliskiing').prop('disabled', true);
    }

    $('#planet').change(function() {
        if ($(this).val()=='Earth') {
            $('#heliskiing').prop('disabled', true);
        }
        else {
            $('#heliskiing').prop('disabled', false);
        }
    });
*/


    // Hiding fields
/*
    if ($('#planet').val()=='Earth') {
        $('#heliskiing').hide();
    }

    $('#planet').change(function() {
        if ($(this).val()=='Earth') {
            $('#heliskiing').hide();
        }
        else {
            $('#heliskiing').show();
        }
    });
*/


    // Stopping Multiple Submissions
/*

    $('#signup').submit(function() {
        var subButton = $(this).find(':submit');
        subButton.prop('disabled', true);
        subButton.val('...sending information');
        return false;
    });

*/

    //Datepicker
    $('#birthdate').datepicker();


    // Form Validation
    $('#signup').validate();

    // Validation Rules
    // required
    // date
    // url
    // email
    // number
    // digits
    // creditcard




}); // document ready end


