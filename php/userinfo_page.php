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

<!-- 
<?php include_once 'header.php';
      include_once 'includes/editProfile.inc.php';
 ?>
        <?php if (login_check($mysqli) == true) : ?>
		 <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" 
                method="post" 
                name="updateProfile_form">
             
            <div id="updateProfile">
            <?php

            $username = htmlentities($_SESSION['username']);
            $user_id = htmlentities($_SESSION['user_id']);
            $email = htmlentities($_SESSION['email']);
             
             ?>
        <div id="profileBasicInfo" class="col col-3">
                
        <h3><?php echo $username;?> !</h3>
        <p>Bilde av studenten <input class="updatefield" type="file"
                            name="picture" 
                            id="picture"/></p>
        <p>Email: <?php echo $email ?> </p>
            
        <input id="UpdateBTN" type="button" 
                value="Oppdater profilen din" 
                onclick="return ProfileUpdateForms(
                                this.form,
                                this.form.picture,
                                this.form.profileEditAboutMe,
                                this.form.grades,
                                this.form.cv);" />  
        
        </div>
                
                <div id="profileText" class="col col-3">
                    <h3 id="aboutMe">Om studenten</h3>
                    <textarea cols="50" rows="10" name="profileEditAboutMe" id="profileEditAboutMe"><?php echo $profileEditAboutMe; ?></textarea>
                    
                <p>Grades: <input class = "updatefield" name="grades" type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" /></p>


                <p>CV: <input class = "updatefield" name="cv" type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" /><p>
                    
                
                </div>
                
            <div id="ProfileProjects" class="col col-3">
            <h3>Mine Projekter:</h3>
            <article class="projectBoxes">
                <h3>Projekt 1</h3>
                <p></p>
            </article>

            <input id="ProfileBTN" class="buttonDesign" type="button" onclick="alert('Legg til Prosjekt')" value="Legg til prosjekt">
        </div>

            </div>

        </form>

            <p id="returnLogin" class="col col-3">Return to <a href="index.php">login page</a></p>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>

<?php include_once 'footer.php'; ?>
    <!--</body>
</html> -->
-->