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
            <input type="text" name="firstname" id="firstname" class="field" maxlength="50" required>
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
        <h2>Choose ticket type</h2>
        <div class="radio-group">
            <label for="ticket-free">Free</label>
            <input type="radio" name="ticketType" id="ticket-free" value="free" required>
            <label for="ticket-standard">Standard</label>
            <input type="radio" name="ticketType" id="ticket-standard" value="standard" required>
            <label for="ticket-premium">Premium</label>
            <input type="radio" name="ticketType" id="ticket-premium" value="premium" required>
        </div>
        <h2>Choose save option</h2>
        <div class="radio-group save-option">
            <label for="mysql">MySQL</label>
            <input type="radio" name="saveOption" id="mysql" value="MySqlDataBase" checked>
            <label for="file">File</label>
            <input type="radio" name="saveOption" id="file" value="FileDataBase">
            <label for="xml">XML</label>
            <input type="radio" name="saveOption" id="xml" value="XMLDataBase">
        </div>
        <div class="captcha-block">
            <img src="images/get-captcha-image.php" alt="Check Text" class="captcha-image">
            <div class="refresh-icon"></div>
        </div>
        <div class="field-block">
            <label for="check-text-field">Enter text from image</label>
            <input type="text" name="checkText" id="check-text-field" class="field" maxlength="10" required>
            <div class="submit-icon"></div>
            <div class="error-text"></div>
            <div class="separator"></div>
        </div>
        <p class="error-text"></p>
        <button type="submit"><span>Send</span></button>
    </form>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/jq.js"></script>
</body>