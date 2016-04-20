<?php
include_once 'header.php'; 
$ProjectID = $_SESSION["OwnProjectID"];
?>
    <?php if (login_check($mysqli) == true) : ?>

        <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" name="registration_form">
            
            <!--Start edit project-->
            <div id="" class="addprojectcontainer">
                <?php
                    $username = htmlentities($_SESSION['username']);
                    $user_id = htmlentities($_SESSION['user_id']); 
                    $email = htmlentities($_SESSION['email']);
                    include_once 'includes/editProject.inc.php';
                ?>
                
                <!--<p>Picture:
                        <input class="updatefield" name="picture" id="picture" type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" />
                        <br>
                    </p> -->
                
                <!-- Dette er brukerens profil-->
                <h2>Redigere prosjekt</h2>

                <h4>Navn:
                    <input id="name" class="updatefield editProjInput" type="text" name="name" value=<?php echo $projectName; ?>>
                    <br>
                </h4>

                <h4>Emne:
                        <input id="subject" class="updatefield editProjInput" type="text" name="subject" value=<?php echo $projectSubject; ?>>
                    <br>
                </h4>

                <h4>Om prosjektet:
                    <textarea id="infotextproject" name="infotextproject" rows="20" cols="80" style="width: 415px; height: 136px; margin-top: 15px;; margin-bot: 15px;"><?php echo $projectEditInfotext; ?></textarea>
                </h4>

                <h4>Legg til medstudenter:
                    <input id="addClassmate" class="updatefield editProjInput" type="text" name="AddPeople" id="AddPeople" />
                    <br>
                </h4>

                <h4>Link: (youtube.com/..)
                    <input id="youtubeLink" class="editProjInput" name="link" type="text" id="link" />
                </h4>

    </form>

        
        <!-- upload file -->
        <!-- Dette er de 2 knappene som ligger på toppen av siden for og laste opp filer
            Det under trenger Stilsetting og fiksing av variabler. Rett og slett en ferdigstilling-->

        <h4>Last opp fil:</h4>
        <form action = "editProject_page.php" method="post" enctype="multipart/form-data">

            <input class="smallUploadBtn" type="file" name="file" id="file"/>

            <input type = "submit" name = "uploadFile" class="smallUploadBtn" value = "Laste opp fil"/>

            <?php
                if(isset($_POST['uploadFile'])){
                $uploadFile= $_FILES['file']['name'];
                $uploadFileTmp = $_FILES['file']['tmp_name'];
                    
                if ( ! is_dir("project/$ProjectID/")) {
                 mkdir("project/$ProjectID/");
                }
                move_uploaded_file($uploadFileTmp, $_SESSION['uploadFile'] ="project/$ProjectID/$uploadFile");

                }
            ?> 
        </form> 
        <!--Upload File Done--> 

        <!--Start updatePhoto-->
        <h4>Bilde:</h4>
        <div id="updatePhoto">

            <form action = "editproject_page.php" method="post" enctype="multipart/form-data">
                
                <input class="smallUploadBtn" type="file" name="picture" id="projectPicture" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps"/>
                
                <input class="smallUploadBtn" type="submit" name="uploadProjectImage" value="Last opp bilde"/>

                <?php
                    if(isset($_POST['uploadProjectImage'])){
                        $uploadProjectImage= $_FILES['picture']['name'];
                        $uploadProjectImageTmp = $_FILES['picture']['tmp_name'];

                    if ( ! is_dir("project/$ProjectID/")) {
                        mkdir("project/$ProjectID/");
                    }
                        move_uploaded_file($uploadProjectImageTmp, $_SESSION['uploadProjectImage'] ="project/$ProjectID/$uploadProjectImage");

                        echo "<img src='project/$ProjectID/$uploadProjectImage'/>";
                    }
                ?>
            </form>
        </div><!--end updatePhoto-->

            <!--Update btn-->
                <input class="col" type="button" value="Endre prosjekt" onclick="return ChangeProjectForms(
                    this.form,
                    this.form.name,
                    this.form.subject,
                    this.form.infotextproject,
                    this.form.picture,
                    this.form.link,
                    this.form.AddPeople);" />
            </div><!--End edit project-->



        <p>Return to <a href="login.php" class="linkerStyle">login page</a></p>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="login.php" class="linkerStyle">login</a>
            </p>
            <?php endif; ?>

        <?php include_once 'footer.php'; ?>
