<?php
// Функции эмуляции SSI (включение на стороне сервера - Server-Side Includes )
// include "test.php"
// require "test.php"
// include_once "test.php"
// require_once "test.php";

?>
<!doctype html>
<html>

<head>
    <title>My Web Page</title>
    <style>
    	h2 { border-bottom: 2px solid #ccc; padding-bottom: 10px; }
		#banner { border-style:solid !important; border-width: 1px; border-color: #000; min-height: 100px; text-align: center; margin-bottom: 50px; }
		.banner-text,
		.banner-slogan { border: 1px solid #000; margin: 20px auto; width: 50%; position: relative; }
		a {font-weight: bold; color: blue;}
		ul li { color: #000; }
		.red { color: red; }
		.hide { display: none; }
		form label { clear: left; display: block; float: left; width: 110px; margin-right: 20px; }
		form label.error { width: auto; color: red; clear: none; margin-left: 10px; }
		input { float: left; margin-bottom: 10px }
		form div { clear: both; }
		.label { clear: both; font-weight: bold; }
		#gallery { clear: both; }
		div#banner {
			width : 90%;
			height : 300px;
			padding : 20px;
			border : 5px solid black;
			margin: 20px auto;
		}
		#map {
			width: 760px;
			height: 400px;
			margin: 0 auto;
			border: 2px solid blue;
		}
		#removeMarkers {
			float: left;
			padding: 5px;
			width: auto;
			height: 20px;
			border: 2px solid blue;
		}
    </style>
	<link rel="stylesheet" type="text/css" media="all" href="assets/jquery-ui/jquery-ui.min.css">
    <script src="assets/jquery-3.1.1.min.js"></script>
	<script src="assets/jquery.easing.1.3.js"></script>
	<script src="assets/jquery-ui/jquery-ui.min.js"></script>
	<script src="assets/jquery-validation-1.16.0/dist/jquery.validate.min.js"></script>
    <script src="script.js"></script>
</head>

<body>

<h1>Sample form</h1>



<form action="process.php" method="post" name="signup" id="signup">
	<div>
		<label for="username" class="label">Name</label>
		<input name="username" type="text" id="username" size="36" value="default value" defaultValue="default value" class="required" title="Please give us your name.">
		<label for="birthdate" class="label">Birth date</label>
		<input name="birthdate" type="text" id="birthdate" size="36" value="">
		<label for="email" class="label">Email</label>
		<input name="email" type="email" id="email" size="36" value="">
		<label for="password" class="label">Password</label>
		<input name="password" type="password" id="password" size="36" value="">
		<label for="password" class="label">Confirm pass</label>
		<input name="confirm_password" type="password" id="confirm_password" size="36" value="">
	</div>
	<div><div class="label">Hobbies</div>
		<label for="heliskiing">Heli-skiing</label>
		<input type="checkbox" name="hobby" id="heliskiing" value="helisking">
		<label for="pickle">Pickle eating</label>
		<input type="checkbox" name="hobby" id="pickle" value="pickle">
		<label for="walnut">Walnut butter</label>
		<input type="checkbox" name="hobby" id="walnut" value="walnut">
	</div>
	<div>
		<label for="planet" class="label">Planet of Birth</label>
		<select name="planet" id="planet">
			<option>Earth</option>
			<option>Mars</option>
			<option>Alpha Centauri</option>
			<option>You've never heard of it</option>
		</select>
	</div>
	<div class="label">Would you like to receive annoying e-mail from us?</div>
	<div class="indent">
		<label for="yes">Yes</label>
		<input type="radio" name="spam" id="yes" value="yes" checked="checked">
		<label for="definitely">Definitely</label>
		<input type="radio" name="spam" id="definitely" value="definitely">
		<label for="choice">Do I have a choice?</label>
		<input type="radio" name="spam" id="choice" value="choice">
	</div>
	<div>
		<input type="submit" name="submit" id="submit" value="Submit">
		<input type="reset" name="reset" id="reset" value="Reset">
	</div>
</form>
</body>

</html>
