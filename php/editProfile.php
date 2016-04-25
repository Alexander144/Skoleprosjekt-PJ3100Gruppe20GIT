<?php include_once 'header.php'; ?>

<?php if (login_check($mysqli) == true) : ?>
    

    <div id="updateProfile" class="editProfileClass">

        <?php
            $username = htmlentities($_SESSION['username']);
            $user_id = htmlentities($_SESSION['user_id']);
            $email = htmlentities($_SESSION['email']);
            $_SESSION['uploadCV']="";
         ?>

        <h2 id="editProfileH2">Rediger din profil</h2>

        <!--Start updatePhoto-->
        <div id="updatePhoto">
            <p id="editProfilePicP" class="edProfMainHeading">Last opp bilde av deg selv</p>

            <form action = "editProfile.php" method="post" enctype="multipart/form-data">
                <input class="chooseFile smallUploadBtn" type="file" name="picture" id="picture"/>
                <input class="smallUploadBtn" type = "submit" name = "uploadImg" value = "Last opp bilde"/>
                
                <?php 
                    include_once 'includes/editProfile.inc.php';
                    $trimmedImgPath = "images/" . $user_id . "/";
                    $trimmedImg = str_replace($trimmedImgPath, "", $profileImage);

                    echo $trimmedImg;
                ?>
                
                <img id="ProfileEditImage"src="<?php echo $profileImage?>"/>
                
                <br>
               <!-- <p id="deleteProfPicP" class="edProfUnderHeading">Fjerne eksisterende bilde<p>-->
                <input id="deleteProfPicP" class="deleteFile smallUploadBtn" type = "submit" name = "deleteImg" value = "Slett nåværende bilde"/>
            </form><br><br><br>


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
            else{$_SESSION['uploadImage'] = "";}
                    
            ?>
             </form>
        </div><!--end updatePhoto-->

        <!--updateGrades-->
        <div id="updateGrades">
            <p id="updateProfileGrades" class="edProfMainHeading">Last opp karakterkortet ditt</p>

            <form action = "editProfile.php" method="post"               enctype="multipart/form-data">
                <input id="grades" class="chooseFile smallUploadBtn" name="grades" type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" />
                <input class="uploadFile smallUploadBtn" type = "submit" name = "uploadGrades" value = "Last opp fil"/>
                <?php 
                    include_once 'includes/editProfile.inc.php';
                    $trimmedGradePath = "grades_students/" . $user_id . "/";    
                $trimmedGrade = str_replace($trimmedGradePath, "", $gradesFile);

                    echo $trimmedGrade;
                
                ?>
                <br>

                <!--<p class="edProfUnderHeading">Fjerne eksisterende karakterkort<p/>-->
                <input id="editProfileDeleteGrades" class="deleteFile smallUploadBtn" type = "submit" name = "deleteGrades" value = "Slett nåværende karakterkort"/>
            </form><br><br><br>

            <?php
                if(isset($_POST['uploadGrades'])){
                    $uploadGrades= $_FILES['grades']['name'];
                    $uploadGradesTmp = $_FILES['grades']['tmp_name'];

                if ( ! is_dir("grades_students/$user_id/")) {
                    mkdir("grades_students/$user_id/");
                }
                    move_uploaded_file($uploadGradesTmp, $_SESSION['uploadGrades'] ="grades_students/$user_id/$uploadGrades");

                    echo "<img src='grades_students/$user_id/$uploadGrades'/>";
                }
             else{$_SESSION['uploadGrades'] = "";}
            
            ?>
        </div><!--end updateGrades-->

        <!--Start updateCV-->
        <div id="updateCV">
            <p id="editProfileCV" class="edProfMainHeading">Last opp CV</p>

            <form action = "editProfile.php" method="post" enctype="multipart/form-data">
                <input id="cv" class="chooseFile smallUploadBtn" name="cv" type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps"/>
                <input class="uploadFile smallUploadBtn" type = "submit" name = "uploadCV" value = "Last opp fil"/>
                
                <?php

                    include_once 'includes/editProfile.inc.php';
                    $trimmedCVPath = "cv_students/" . $user_id . "/";
                    $trimmedCV = str_replace($trimmedCVPath, "", $cvFile);

                    echo $trimmedCV;
                
                ?>
                
               <!-- <p class="edProfUnderHeading">Fjerne eksisterende CV</p>-->
                <br>
                <input id="editProfileDeleteCv" class="deleteFile smallUploadBtn" type = "submit" name = "deleteCV" value = "Slett nåværende CV"/>
            </form><br><br><br><br>

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
        </div><!--end updateCV-->

        <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" name="updateProfile_form">
            <div id="updateDescProfileDiv" class="test321">    
            <p id="updateProfileDescP" class="edProfMainHeading">Informasjon om deg</p>
            <textarea name="profileEditAboutMe" id="profileEditAboutMe" class="test321"><?php echo $profileEditAboutMe; ?></textarea>
            </div>
            
            <div id="updateEmailDiv" class="test321">
                
            <p id="updateEmailP" class="marginMobile edProfMainHeading col-floatleft">Oppdater mailen din</p>
            <input id="updateEmailTxt" class="addProfilInput col-floatleft" name = "updateEmailTxt" type="text" />
            </div>
            
            <br>

            <div id="updatePasswordDiv" class="test321">
            <p id="updatePasswordP" class="marginMobile edProfMainHeading col-floatleft">Oppdater passord</p>
            <input id="updatePasswordTxt" class="addProfilInput col-floatleft" type="text" />
            </div>

    </div><!--end updateProfile-->

            <input id="UpdateBTN" class="col buttonDesign" type="button" name = "upload"
                    value="Oppdater profilen din"
                    onclick="return ProfileUpdateForms(
                                    this.form,
                                    this.form.profileEditAboutMe,
                                    this.form.updateEmailTxt);" />
        </form>
         
        <!--<p id="returnLogin" class="col">Return to <a href="login.php">login page</a></p>
        <?php else : ?>            
        <p><span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.</p>
        <?php endif; ?>-->

<?php include_once 'footer.php'; ?>
    <!--</body>
</html>
