<?php
include_once 'header.php'; 

?>
    <div id="" class="addprojectcontainer">
        <?php if (login_check($mysqli) == true) : ?>
            <p>Welcome
                <?php echo htmlentities($_SESSION['username']); ?>!</p>
            <p>
                Add project!
            </p>
            <!-- Dette er brukerens profil-->

            <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" name="registration_form">


                <?php
            $username = htmlentities($_SESSION['username']);
            $user_id = htmlentities($_SESSION['user_id']); 
            $email = htmlentities($_SESSION['email']);
            include_once 'includes/AddProject.inc.php';
            ?>


                            <p>Name:
                                <input class="updatefield" type="text" name="name" id="name" />
                                <br>
                            </p>

                            <p>Infotext:
                                <textarea id="infotextproject" name="infotextproject" rows="20" cols="80" style="width: 415px; height: 136px; margin-top: 15px;; margin-bot: 15px;"></textarea>

                                <p>Subject:
                                    <input class="updatefield" type="text" name="subject" id="subject" />
                                    <br>
                                </p>

                                <p>AddPeople:
                                    <input class="updatefield" type="text" name="AddPeople" id="AddPeople" />
                                    <br>
                                    <br>
                                </p>


                                <input class="buttonDesign" type="button" value="Add project" onclick="return AddProjectForms(
                                    this.form,
                                   this.form.name,
                                   this.form.subject,
                                   this.form.infotext,
                                   this.form.picture,
                                   this.form.link,
                                   this.form.date);" />

            </form>
            <p>Return to <a href="login.php" class="linkerStyle">login page</a></p>
    </div>
    <?php else : ?>
        <p>
            <span class="error">You are not authorized to access this page.</span> Please <a href="index.php" class="linkerStyle">login</a>.
        </p>
        <?php endif; ?>

            <?php include_once 'footer.php'; ?>
