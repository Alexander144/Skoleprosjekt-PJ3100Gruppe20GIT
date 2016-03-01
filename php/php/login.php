<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
include_once 'header.php';

 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?>


        <div id="loginFeide" class="col col-6 login">
            <div class="objectsInDiv">
            <h1>Ansatte og studenter <br> ved Westerdals</h1>
            <input class="buttonDesign" type="button" value="Login med Feide"/>
            </div>
        </div>
        
        <div id="loginOther" class="col col-6 login">
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

                   <input class="buttonDesign "type="button" onclick="location.href='register.php';" value="Registrering" />

                </form>
            </div>
        </div>
  
<?php
        if (login_check($mysqli) == true) {
                        echo '<p>Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']) . '.</p>';
  
            echo '<p>Do you want to change user? <a href="includes/logout.php">Log out</a>.</p>';
        } else {
                        echo '<p>Currently logged ' . $logged . '.</p>';
                }
?>
<?php include_once 'footer.php'; ?>