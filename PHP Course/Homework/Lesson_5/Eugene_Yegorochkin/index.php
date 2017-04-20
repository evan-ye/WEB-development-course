<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script>
	<style type="text/css">
		fieldset {
			width: 360px;
		}
    span, .error {
      color: red;
    }
	</style>
</head>
<body>
	<form method="POST" name="signup" id="signup">
	<fieldset>
    <legend>Registration form:</legend>
  First name:<br>
  <input type="text" id="firstname" name="firstname" required>
  <br>
  Last name:<br>
  <input type="text" id="lastname" name="lastname" required>
  <br>
  Email:<br>
  <input type="email" id="email" name="email" required>
  <br>
  <br>
  Ticket type: 
  <select name="ticket_type" id="ticket_type" required>
   <option value="free">Free</option>
   <option value="standart">Standart</option>
   <option value="premium">Premium</option>
  </select>
  <br><br>
    <input type="submit" name="submit" id="submit" value="Submit">
  </fieldset>
</form>
<script src="js/myScript.js"></script>
</body>
</html>