<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Secure Login: Protected Page</title>
        <link rel="stylesheet" href="css/main.css" />
        <script type="text/JavaScript" src="js/forms.js"></script>
    </head>
    <body>
        <?php if (login_check($mysqli) == true) : ?>
            <p>Welcome <?php echo htmlentities($_SESSION['username']); ?>!</p>
            <p>
               	Dette er bruker profilen din!
            </p>
	<!-- Dette er brukerens profil-->
		
		 <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" 
                method="post" 
                name="registration_form">
            <div id="registration">
            Username: <?php
            $username = htmlentities($_SESSION['username']);
            $user_id = htmlentities($_SESSION['user_id']);
            echo $username;
            echo $user_id;
            include_once 'includes/Update.inc.php';
             ?>
            <p>Email: <?php 
            $email = htmlentities($_SESSION['email']);
            echo $email ?>
            <p>Picture: <input class="updatefield" type="file"
                             name="picture" 
                             id="picture"/><br></p>
	        <p>Infotext: <input class="updatefield" type="text"
                             name="infotext" 
                             id="infotext"/><br><br></p>

            <p>Grades: <input class = "updatefield" name="grades" type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" /><br></p>


            <p>CV: <input class = "updatefield" name="cv" type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" /><br><p>
            <input id="UpdateBTN" type="button" 
                   value="Update" 
                   onclick="return ProfileUpdateForms(
                                    this.form,
                                   this.form.picture,
                                   this.form.infotext,
                                   this.form.grades,
                                   this.form.cv);" />                    
            </div>
        </form>
            <p>Return to <a href="index.php">login page</a></p>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>
    </body>
</html>