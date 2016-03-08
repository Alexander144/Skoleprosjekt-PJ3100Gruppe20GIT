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
            $profileAboutUser = $_SESSION["profileAboutUser"];
             
             ?>
        <div id="" class="col col-ProfileStudent">
                
        <h3><?php echo $username;?></h3>
        <p>Bilde av studenten</p>
            <img src="">
        <p>Email: <?php echo $email ?> </p>
            
            <a href="#"><p>Karakterkort</p></a>

            <a href="#"><p>CV<p></a>
        
        </div>
                
        <div id="aboutStudent" class="col col-ProfileStudent studentCol">
            <h3 id="aboutStudentH3">Om <?php echo $username; ?></h3>
            <p id="aboutStudentP"><?php echo $profileAboutUser; ?></p>

                </div>
                
            <div id="" class="col col-ProfileStudent">
            <h3><?php echo $username; ?>'s nyeste projekter</h3>
            <article class="projectBoxes">
                <h3>Projekt 1</h3>
                <p></p>
            </article>
                
            </div>

            </div>

        </form>

            <!--<p id="returnLogin" class="col col-3">Return to <a href="index.php">login page</a></p>-->
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="login.php">login</a>.
            </p>
        <?php endif; ?>

<?php include_once 'footer.php'; ?>
    <!--</body>
</html> -->
