<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Регистрация</title>
</head>
<body>
	<style type="text/css">
		.msg,
		.email_status{
			padding-top: 25px;
			padding-bottom: 25px;
			color: red;
			opacity: 0;
			transition: opacity ease 300ms;
		}
	</style>
	<form method="POST" action="reg.php">
		Имя:<br>
		<input type="text" id="name" name="name" value=""><br>
		Фамилия:<br>
		<input type="text" id="secondname" name="secondname" value=""><br>
		Почта:<br>
		<input type="email" id="email" name="email" value=""><span id="status" class="email_status"></span><br>
		Тип билета<br>
		<input type="radio" id="free" name="ticket" value="free" checked><label for="free">free</label><br>
		<input type="radio" id="standart" name="ticket" value="standart"><label for="standart">standart</label><br>
		<input type="radio" id="premium" name="ticket" value="premium"><label for="premium">premium</label><br>
		<input class="submit" type="submit">
	</form>
	<div class="msg"></div>
	<script src="jquery-min.js"></script>
	<script src="jquery.ba-throttle-debounce.min.js"></script>
	<script>
		$(function(){
			var regEmail = /^([a-z0-9_\-]+\.)*[a-z0-9_\-]+@[a-z0-9][a-z0-9\-]*[a-z0-9]\.+[a-z]{2,4}$/;
			var confirmedEmail = false;
			var email = function(e){
				if(!regEmail.test($('#email').val())){
					showMSG('Не верный адресс почты');
				}
				else{
					$.post('check.php', {email : $('#email').val()}, function(data) {
						if(data == 'exist'){
							confirmedEmail = false;
							$('.email_status').html('Такой адресс уже есть в базе!');
							$('.email_status').css('opacity','1');
							setTimeout(function() { $('.email_status').css('opacity','0')}, 3000);
						}
						else{
							confirmedEmail = true;
						}
						console.log(data);
					});
				}
			}
			$('#email').keyup($.debounce(700, email));

			$('form').submit(function(e) {
				e.preventDefault();
				if ($('#name').val().length < 2) {
					showMSG('Введите имя');
				}else if($('#secondname').val().length < 2){
					showMSG('Введите фамилию');
				}
				else if(!regEmail.test($('#email').val())){
					showMSG('Не верный адресс почты');
				}
				else if(confirmedEmail){
					data = $('form').serialize();
					$.post('reg.php', data, function(data) {
						data = JSON.parse(data);
						console.log(data);
						if(data.status == false){
							alert(data.msg)
							$('#' + data.field).select();
						}
						else{
							alert(data.msg);
							$('form').trigger('reset');
						}
					});
				}
				else{
					$('.email_status').html('Такой адресс уже есть в базе!');
					$('.email_status').css('opacity','1');
					setTimeout(function() { $('.email_status').css('opacity','0')}, 3000);
				}
			});
			function showMSG(text) {
				$('.msg').html(text);
				$('.msg').css('opacity','1');
				setTimeout(function() { $('.msg').css('opacity','0')}, 3000);
			}
		})
	</script>
</body>
</html>