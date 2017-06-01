<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<form id="signup" method="POST">
		<input type="text" id="name" name="name" placeholder="Name">
		<p class="response-name"></p>
		<input type="text" id="last_name" name="lastname" placeholder="Last Name">
		<p class="response-lastname"></p>
		<input type="email" id="email" name="email" placeholder="Email">
		<p class="response-email"></p>
		<label for="ticket">Type of ticket:</label>
		<select id="ticket" name="ticket" required>
			<option selected value="free">Free</option>
			<option value="standart">Standart</option>
			<option value="premium">Premium</option>
		</select>
		<input id="sbm" type="submit" value="Submit">
		<p class="response"></p>
	</form>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>