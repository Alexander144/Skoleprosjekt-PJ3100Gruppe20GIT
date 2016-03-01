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
                
        <h3>Velkommen <?php echo $username;?> !</h3>
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
</html>