<?php include_once 'header.php';
    
 ?>
        <?php if (login_check($mysqli) == true) : ?>
             
            <div id="updateProfile">
            <?php

            $username = htmlentities($_SESSION['username']);
            $user_id = htmlentities($_SESSION['user_id']);
            $email = htmlentities($_SESSION['email']);
               include_once 'includes/editProfile.inc.php';
             ?>
        <div id="profileBasicInfo" class="col">
                
        <h3>Her kan <?php echo $username;?> redigere profilen sin</h3>
            
            <div id="updatePhoto">
                <p>Last opp bilde av deg selv</p>
                
                <?php    
                    //var_dump($profileImage); die;
                    //header("Content-Type: image/jpg");
                    //echo $profileImage; 
                    ?>

                <form action = "editProfile.php" method="post" enctype="multipart/form-data">
                    <input class="updatefield" type="file" name="picture" id="picture"/>
                            
                    <input type = "submit" name = "uploadImg" value = "Upload File"/>
                </form>

                <?php
                    if(isset($_POST['uploadImg'])){
                        $uploadImage= $_FILES['picture']['name'];
                        $uploadImageTmp = $_FILES['picture']['tmp_name'];

                    if ( ! is_dir("images/$user_id/")) {
                        mkdir("images/$user_id/");
                    }
                        move_uploaded_file($uploadImageTmp, $_SESSION['uploadImage'] ="images/$user_id/$uploadImage");

                        echo "<img src='images/$user_id/$uploadImage'/>";
                    }
                ?>
                <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" name="updateProfile_form">

                </form>

            </div><!--end updatePhoto-->
            
            <div id="updatePassword">
                <p>Oppdater passord</p>
                <input id="updatePasswordTxt" type="text" />
            </div><!--end updatePassword-->
            
            <div id="updateEmail">
                <p>Oppdater mailen din</p>
                <input id="updateEmailTxt" name = "updateEmailTxt" type="text" />
            </div><!--end updateEmail-->
        
        </div><!--end profileBasicInfo-->
                
                <div id="" class="col">
                    <h3 id="aboutMe">Informasjon om deg</h3>
                    <textarea cols="60" rows="20" name="profileEditAboutMe" id="profileEditAboutMe"><?php echo $profileEditAboutMe; ?></textarea>
                    
                    <div id="updateGrades">
                        <p id="updateGradesP">Last opp karakterkortet ditt</p>
                        <input class = "updatefield" name="grades" type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" />
                    </div><!--end updateGrades-->


                    <!--Start updateCV-->
                    <div id="updateCV">
                        <p id="updateCVP">Last opp CV</p>
                        <form action = "editProfile.php" method="post" enctype="multipart/form-data">
                            <input class = "updatefield" name="cv" type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" />

                            <input type = "submit" name = "uploadCV" value = "Upload File"/>
                        </form>

                        <?php
                            if(isset($_POST['uploadCV'])){
                                $uploadCV= $_FILES['cv']['name'];
                                $uploadCVTmp = $_FILES['cv']['tmp_name'];

                            if ( ! is_dir("cv_students/$user_id/")) {
                                mkdir("cv_students/$user_id/");
                            }
                                move_uploaded_file($uploadCVTmp, $_SESSION['uploadCV'] ="cv_students/$user_id/$uploadCV");

                                echo "<img src='cv_students/$user_id/$uploadCV'/>";
                            }
                        ?>
                        <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" name="updateProfile_form">

                        </form>
                    </div><!--end updateCV-->
                    
                
                </div><!--end .. -->

            </div><!--end updateProfile-->

        <input id="UpdateBTN" class="col" type="button" name = "upload"
                value="Oppdater profilen din" 
                onclick="return ProfileUpdateForms(
                                this.form,
                                this.form.picture,
                                this.form.profileEditAboutMe,
                                this.form.updateEmailTxt,
                                this.form.grades,
                                this.form.cv);" /> 

            <p id="returnLogin" class="col">Return to <a href="login.php">login page</a></p>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>

<?php include_once 'footer.php'; ?>
    <!--</body>
</html>
