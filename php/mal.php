<?php include_once 'header.php';
      include_once 'includes/editProfile.inc.php';
 ?>
        <?php if (login_check($mysqli) == true) : ?>
		 <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" 
                method="post" 
                name="updateProfile_form">
          <!-- Knapp funkjsonen-->
            <input id="UpdateBTN" type="button" 
                   value="Update" 
                   onclick="return ProfileUpdateForms(
                                    this.form,
                                   this.form.picture,
                                   this.form.profileEditAboutMe,
                                   this.form.grades,
                                   this.form.cv);" />                    
          
        </form>
            <p>Return to <a href="index.php">login page</a></p>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>
    </body>
</html>