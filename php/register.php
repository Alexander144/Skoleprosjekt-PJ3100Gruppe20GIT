<?php
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
include_once 'header.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Secure Login: Registration Form</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
        <link rel="stylesheet" href="styles/main.css" />
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script>
          $(function() {
            $( document ).tooltip();
          });
        </script>
    </head>
    <body>
        <!-- Registration form to be output if the POST variables are not
        set or if the registration script caused an error. -->
        <div id="registrationPage">
        <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?><!--
        <ul>
            <li>Usernames may contain only digits, upper and lowercase letters and underscores</li>
            <li>Emails must have a valid email format</li>
            <li>Passwords must be at least 6 characters long</li>
            <li>Passwords must contain
                <ul>
                    <li>At least one uppercase letter (A..Z)</li>
                    <li>At least one lowercase letter (a..z)</li>
                    <li>At least one number (0..9)</li>
                </ul>
            </li>
            <li>Your password and confirmation must match exactly</li>
        </ul><br>-->
        <form action = "<?php echo esc_url($_SERVER['PHP_SELF']); ?>"
                method = "post"
                name = "registration_form">

            <div id="registration">
                <h3 id="registerh3">Registrer deg her</h3>
                    <input
                            placeholder="Brukernavn"
                            class = "registerField" 
                            type = "text"
                            name = "username"
                            id = "username"
                            title= "Brukernavn kan bare inneholde tall, små og store bokstaver"/>
                            <br><br>

                    <input
                            placeholder="Epost"
                            class = "registerField"
                            type = "text"
                            name = "email"
                            id = "email"
                            title = "Epost må ha et gyldig epost format"/>
                            <br><br>

                    <input
                            placeholder="Passord"
                            class = "registerField"
                            type = "password"
                            name = "password"
                            id = "password"
                            title="Passordet må inneholde minst et tall, en stor og en liten bokstav"/>
                            <br><br>

                    <input
                            placeholder="Bekreft passord"
                            class = "registerField"
                            type = "password"
                            name = "confirmpwd"
                            id = "confirmpwd" />
                            <br><br>

                            <input
                                id = "registrationBTN"
                                class="buttonDesign registrationBTN"
                                type = "button"
                                value = "Registrer"
                                onclick = "return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd);" />
                <p>Allerede registrert? <a href="login.php">Logg på</a></p>
            </div>
            
        </form>
        </div>
    </body>
</html>

    <?php include_once 'footer.php'; ?>
