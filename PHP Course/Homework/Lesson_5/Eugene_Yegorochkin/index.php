<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script>
  <link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>
<body>
<div>
	<form method="POST" name="signup" id="signup">
    <h2>Registration Form</h2>
  <span>First name:</span><br>
  <input type="text" id="firstname" name="firstname" placeholder="Your name.." required>
  <br>
  <span>Last name:</span><br>
  <input type="text" id="lastname" name="lastname" placeholder="Your last name.." required>
  <br>
  <span>Email:</span><br>
  <input type="email" id="email" name="email" placeholder="Your email.." required>
  <br>
  <span>Ticket type:</span> 
  <select name="ticket_type" id="ticket_type" id = "defaultSelector" required>
   <option  value="" disabled selected>Select your ticket type</option>
   <option value="free">Free</option>
   <option value="standart">Standart</option>
   <option value="premium">Premium</option>
  </select>
  <br><br>
<img src='captcha.php' id='capcha-image'>
<span>Type the text below:</span>
  <input type="text" name="capcha" placeholder="" required>


    <input type="submit" name="submit" id="submit" value="Submit">
</form>
</div>
<script src="js/myScript.js"></script>
</body>
</html>