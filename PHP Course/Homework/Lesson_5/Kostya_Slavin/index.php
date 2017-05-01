<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <title>Registration</title>
</head>
<body>
<div class="register"></div>
<div class="container">
  <form class="form-signin" method="post" action="" novalidate>
    <h2 class="form-signin-heading text-center">Please sign in</h2>
      <label for="fname" class="sr-only">First name</label>
        <input type="text" name="fname" id="fname" class="form-control" data-req="required"  placeholder="First name" >
      <label for="lname" class="sr-only">Last name</label>
        <input type="text" name="lname" id="lname" class="form-control" data-req="required"  placeholder="Last name" >
      <label for="email" class="sr-only">Email</label>
        <input type="email" name="email" id="email" class="form-control" data-req="required"  placeholder="Email (example@gmail.com)" >
      <span  id="error block" class="help-block"></span>
      <br>
      <label class="ticket"><i class="fa fa-ticket" aria-hidden="true"></i>Ticket type:</label>
      <div class="radio-inline">
        <label>
          <input type="radio" name="ticket" value="free">free
        </label>
      </div>
      <div class="radio-inline">
        <label>
          <input type="radio" name="ticket" value="standart">standart
        </label>
      </div>
      <div class="radio-inline">
        <label>
          <input type="radio" name="ticket" value="premium">premium
        </label>
      </div>
      <input type="submit" id="register" class="btn btn-lg btn-primary btn-block" value="Sign in">
  </form>
</div>
<div class="success"></div>
<div class="error"></div>
<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>
</html>
