<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
	
	<link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"></link>
</head>
<body>
	<div class="c">
		<h1>Зарегестрируйтесь</h1>
		<form action="scripts/reg.php">
			Имя
			<input type="text" name="firstname" class="form__input firstname">
			Фамилия
			<input type="text" name="secondname" class="form__input lastname">
			Адрес почты
			<input id=email type="email" name="email" class="form__input email">
			<div class="email_status"></div>
			Тип билета:<br>
			<input type="radio" id="free" name="type" value="free" checked><label for="free">free</label><br>
			<input type="radio" id="regular" name="type" value="regular" ><label for="regular">regular</label><br>
			<input type="radio" id="premium" name="type" value="premium" ><label for="premium">premium</label>
			<input class="submit_button" type="submit">
			<div class="infobox">
				<!-- some errors -->
			</div>
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>