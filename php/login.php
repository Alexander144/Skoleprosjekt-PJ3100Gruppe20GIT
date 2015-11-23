<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Secure Login: Log In</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
    </head>
    <body>
        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?>
        <div id="loginFeide" class="loginWindow">
            <div class="objectsInDiv">
            <h1>Ansatte og studenter <br> ved Westerdals</h1>
            <input class="buttonDesign" type="button" value="Login med Feide"/>
            </div>
        </div>
        
        <div id="login" class="loginWindow">
            <div class="objectsInDiv">
                <h1>Bedrifter og kunder</h1>
                <form action="includes/process_login.php" method="post" name="login_form">                      
                    Email: <input class="textField" type="text" name="email" />
                <br>
                    Password: <input class="textField" type="password" 
                             name="password" 
                             id="password"/>
                <br>    
                <input class="buttonDesign" type="button" 
                   value="Login" 
                   onclick="formhash(this.form, this.form.password);" /> 
                </form>
            </div>
        </div>
  
<?php
        if (login_check($mysqli) == true) {
                        echo '<p>Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']) . '.</p>';
  
            echo '<p>Do you want to change user? <a href="includes/logout.php">Log out</a>.</p>';
        } else {
                        echo '<p>Currently logged ' . $logged . '.</p>';
                        echo "<p>If you don't have a login, please <a href='register.php'>register</a></p>";
                }
?>
    </body>
</html>