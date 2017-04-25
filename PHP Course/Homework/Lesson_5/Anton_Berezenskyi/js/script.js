$(document).ready(function() {
    var regEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	$('#signup').on('submit', function(e){
        e.preventDefault();
        if ($('#name').val().length === 0) {
            $('.response-name').html('Enter Name');
            $('.response-name').show(300);
            setTimeout(function() { $('.response-name').hide(300); }, 3000);
        }
        if ($('#last_name').val().length === 0) {
            $('.response-lastname').html('Enter Last name');
            $('.response-lastname').show(300);
            setTimeout(function() { $('.response-lastname').hide(300); }, 3000);
        }
        if ($('#email').val().length === 0) {
            $('.response-email').html('Enter email');
            $('.response-email').show(300);
            setTimeout(function() { $('.response-email').hide(300); }, 3000);
        } else if (!regEmail.test($('#email').val())) {
            $('.response-email').html('Enter valid email');
            $('.response-email').show(300);
            setTimeout(function() { $('.response-email').hide(300); }, 3000);
        } else {
            $('#sbm').prop('disabled', true);
            var regData = $(this).serialize();
            $('#signup')[0].reset();
            $.ajax({
                url: 'reg.php',
                data: regData,
                method: 'post',
                success: function(response) {
                    $('#sbm').prop('disabled', false);
                    $('.response').html(response);
                }
            });
        }
	});
});