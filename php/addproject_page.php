<?php
include_once 'header.php'; 

?>
    <?php if (login_check($mysqli) == true) : ?>
        <p>Welcome
            <?php echo htmlentities($_SESSION['username']); ?>!</p>
        <p>
            Add project!
        </p>
        <!-- Dette er brukerens profil-->

        <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" name="registration_form">
            
            <div id="" class="addprojectcontainer">
                <?php
            $username = htmlentities($_SESSION['username']);
            $user_id = htmlentities($_SESSION['user_id']); 
            $email = htmlentities($_SESSION['email']);
            include_once 'includes/AddProject.inc.php';
            ?>
                
                        <p>Picture:
                            <input class="updatefield" name="picture" type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" />
                            <br>
                        </p>
                
                        <p>Link:
                            <input class="updatefield" name="link" type="text" id="infotext" />
                            <br>
                            <p>
                
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


                                <input id="UpdateBTN" type="button" value="Add" onclick="return AddProjectForms(
                                    this.form,
                                   this.form.name,
                                   this.form.subject,
                                   this.form.infotext,
                                   this.form.picture,
                                   this.form.link,
                                   this.form.date);" />
            </div>
        </form>
        <p>Return to <a href="login.php">login page</a></p>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
            <?php endif; ?>

                <?php include_once 'footer.php'; ?>
