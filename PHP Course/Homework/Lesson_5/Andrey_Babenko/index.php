<head>
    <title>Registration form</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
    <form method="POST" novalidate>
        <div class="field-block">
            <label for="firstname">First name</label>
            <input type="text" name="firstname" id="firstname" class="field" maxlength="25" required>
            <div class="separator"></div>
        </div>
        <div class="field-block">
            <label for="lastname">Last name</label>
            <input type="text" name="lastname" id="lastname" class="field" maxlength="25" required>
            <div class="separator"></div>
        </div>
        <div class="field-block">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" class="field" maxlength="50" required>
            <div class="separator"></div>
        </div>
        <div class="field-block">
            <label for="ticketType">Ticket type</label>
            <select name="ticketType" id="ticketType" class="field" required>
                <option disabled selected value=""></option>
                <option value="free">Free</option>
                <option value="standart">Standart</option>
                <option value="premium">Premium</option>
            </select>
            <div class="separator"></div>
        </div>
        <button type="submit">Send</button>
        <p class="response-text"></p>
    </form>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/jq.js"></script>
</body>