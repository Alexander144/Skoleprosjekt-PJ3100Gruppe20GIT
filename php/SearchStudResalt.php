<?php include_once 'header.php';
      include_once 'includes/editProfile.inc.php';
 ?>
        <?php if (login_check($mysqli) == true) : ?>
		 <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>"
                method="post"
                name="updateProfile_form">


            <div id="updateProfile">
                <h3>Søk resultat</h3>
            <?php

            $username = htmlentities($_SESSION['username']);
            $user_id = htmlentities($_SESSION['user_id']);
            $email = htmlentities($_SESSION['email']);

             ?>
                <div id="" class="col col-ProfileStudent">

                    <h3><?php echo $username;?></h3>
                    <p>Bilde av studenten</p>
                    <img src="">
                    <p>Email: <?php echo $email ?> </p>

                    <div id="" class="col col-ProfileStudent">
                    <h3><?php echo $username; ?>'s nyeste projekter</h3>
                    <article class="projectBoxes">
                        <h3>Projekt 1</h3>
                        <p></p>
                        </article>
                    </div>
                </div>
             </div>


     <!--         <div id="updateProfile">
            <?php

            $username = htmlentities($_SESSION['username']);
            $user_id = htmlentities($_SESSION['user_id']);
            $email = htmlentities($_SESSION['email']);

             ?>
                <div id="" class="col col-ProfileStudent">

                    <h3><?php echo $username;?></h3>
                    <p>Bilde av studenten</p>
                    <img src="">
                    <p>Email: <?php echo $email ?> </p>

                    <div id="" class="col col-ProfileStudent">
                    <h3><?php echo $username; ?>'s nyeste projekter</h3>
                    <article class="projectBoxes">
                        <h3>Projekt 1</h3>
                        <p></p>
                        </article>
                    </div>
                </div>
             </div>

           <div id="updateProfile">


            <?php

            $username = htmlentities($_SESSION['username']);
            $user_id = htmlentities($_SESSION['user_id']);
            $email = htmlentities($_SESSION['email']);

             ?>
                <div id="" class="col col-ProfileStudent">
                    <h3><?php echo $username;?></h3>
                    <p>Bilde av studenten</p>
                    <img src="">
                    <p>Email: <?php echo $email ?> </p>
                </div>

                <div id="" class="col col-ProfileStudent">
                    <h3><?php echo $username; ?>'s nyeste projekter</h3>
                    <article class="projectBoxes">
                    <h3>Projekt 1</h3>
                    <p></p>
                    </article>

                </div>

            </div>         -->





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
