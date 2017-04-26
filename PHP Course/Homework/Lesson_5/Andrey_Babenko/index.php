<head>
    <title>Registration form</title>
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
    <form method="post" novalidate>
        <h1>Get a ticket</h1>
        <div class="field-block">
            <label for="firstname">First name</label>
            <input type="text" name="firstname" id="firstname" class="field" maxlength="50">
            <div class="submit-icon"></div>
            <div class="error-text"></div>
            <div class="separator"></div>
        </div>
        <div class="field-block">
            <label for="lastname">Last name</label>
            <input type="text" name="lastname" id="lastname" class="field" maxlength="50" required>
            <div class="submit-icon"></div>
            <div class="error-text"></div>
            <div class="separator"></div>
        </div>
        <div class="field-block">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" class="field" maxlength="50" required>
            <div class="submit-icon"></div>
            <div class="error-text"></div>
            <div class="separator"></div>
        </div>
        <div class="radio-group">
            <label for="ticket-free">Free</label>
            <input type="radio" name="ticketType" id="ticket-free" value="free" required>
            <label for="ticket-standard">Standard</label>
            <input type="radio" name="ticketType" id="ticket-standard" value="standard" required>
            <label for="ticket-premium">Premium</label>
            <input type="radio" name="ticketType" id="ticket-premium" value="premium" required>
            <p class="error-text"></p>
        </div>

        <button type="submit"><span>Send</span></button>
    </form>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/jq.js"></script>
</body>