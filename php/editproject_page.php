<?php
include_once 'header.php'; 
$ProjectID = $_SESSION["OwnProjectID"];
?>
    <?php if (login_check($mysqli) == true) : ?>
        <p>Welcome
            <?php echo htmlentities($_SESSION['username']); ?>!</p>
        <p>
            Edit project
        </p>
        <!-- Dette er brukerens profil-->

        <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" name="registration_form">
            
            <div id="" class="addprojectcontainer">
                <?php
            $username = htmlentities($_SESSION['username']);
            $user_id = htmlentities($_SESSION['user_id']); 
            $email = htmlentities($_SESSION['email']);
            include_once 'includes/editProject.inc.php';
            ?>
                
                <!--        <p>Picture:
                            <input class="updatefield" name="picture" id="picture" type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" />
                            <br>
                        </p> -->
                
                        <p>Link: (youtube/..)
                            <input class="updatefield" name="link" type="text" id="link" />
                            <br>
                
                    <p>Name:
                        <input id="name" class="updatefield" type="text" name="name" value=<?php echo $projectName; ?>></input>
                        
                        <br>
                    </p>
                    <p>Subject:
                            <input id="subject" class="updatefield" type="text" name="subject" value=<?php echo $projectSubject; ?>></input>

                            <br>
                    <p>Infotext:
                        <textarea id="infotextproject" name="infotextproject" rows="20" cols="80" style="width: 415px; height: 136px; margin-top: 15px;; margin-bot: 15px;"><?php echo $projectEditInfotext; ?></textarea>

                        
                        </p>

                        <p>AddPeople:
                            <input class="updatefield" type="text" name="AddPeople" id="AddPeople" />
                            <br>
                            <br>
                        </p>


                                <input class="buttonDesign" type="button" value="Endre prosjekt" onclick="return ChangeProjectForms(
                                    this.form,
                                   this.form.name,
                                   this.form.subject,
                                   this.form.infotextproject,
                                   this.form.picture,
                                   this.form.link,
                                   this.form.AddPeople);" />
            </div>
        </form>

        
        <!-- upload file -->
        <!-- Dette er de 2 knappene som ligger på toppen av siden for og laste opp filer
            Det under trenger Stilsetting og fiksing av variabler. Rett og slett en ferdigstilling-->
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

        <!-- upload image -->

 <p>
                            Picture:
                            <input class="updatefield" name="picture" id="picture" type="file" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" />
                            <br>

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


        <!--Upload Image Done-->
        <p>Return to <a href="login.php" class="linkerStyle">login page</a></p>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="login.php" class="linkerStyle">login</a>
            </p>
            <?php endif; ?>

                <?php include_once 'footer.php'; ?>
