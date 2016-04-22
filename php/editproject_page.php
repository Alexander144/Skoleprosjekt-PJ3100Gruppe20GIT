<?php include_once 'header.php'; $ProjectID = $_SESSION["OwnProjectID"];

?>
    <?php if (login_check($mysqli) == true) : ?>

        <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" name="registration_form">
            
            <!--Start edit project-->
            <div id="editProject" class="col addprojectcontainer">
                <?php
                    $username = htmlentities($_SESSION['username']);
                    $user_id = htmlentities($_SESSION['user_id']); 
                    $email = htmlentities($_SESSION['email']);
                    $deleteprojectUserName;
                                $deleteStudentFromProject = false;
                  
                    include_once 'includes/editProject.inc.php';


                ?>

                <!-- Dette er brukerens profil-->
                <h2>Redigere prosjekt</h2>
                <br>

                <h4>Navn:
                    <input id="name" class="updatefield editProjInput" type="text" name="name" value=<?php echo $projectName; ?>>
                    <br>
                </h4>

                <h4>Emne:
                        <input id="subject" class="updatefield editProjInput" type="text" name="subject" value=<?php echo $projectSubject; ?>>
                    <br><br>
                </h4>
                </form>
                <form action = "editProject_page.php" method="post" enctype="multipart/form-data">
                <h4>Om prosjektet:
                    <textarea id="infotextproject" id ="infotextproject" name="infotextproject"><?php echo $_SESSION['projectEditInfotext']; ?></textarea>
                </h4>
                <?php $_SESSION['i']; ?>
                <h4>Legg til medstudenter:
                    <input id="addClassmate" class="updatefield editProjInput" type="text" name="AddPeople" id="AddPeople" />
                    <input type = "submit" name = "addStudent" class="smallUploadBtn"  value = "Legg til">
                      <?php 
                        
                      $exist = true;
                      for($j = 0; $j<$countID; $j++){
                           echo $projectUserName[$j];
                           echo "            ";
                           if($j != 0){
                   echo "<input type = 'submit' name = 'deleteStudent".$j."' class='smallUploadBtn'  value = 'X'/>";
                            if(isset($_POST["deleteStudent".$j.""])){
                                $deleteprojectUserName = $projectUserName[$j];
                                $deleteStudentFromProject = true;

                                $_SESSION['deleteStudentFromProject'] = true;
                                include_once 'includes/editProject.inc.php';
                            }
                        }

                           if(isset($_POST['addStudent']) && isset($_POST['AddPeople'])){
                              $AddPeople = $_POST['AddPeople']; 
                               //include_once 'includes/editProject.inc.php';
                                if( $AddPeople != $projectUserName[$j]  && $error_msg != ""){
                                    $exist = false;                              
                                }
                                
                                //header("Refresh:0");
                           }
                      }
                      if($exist == false){
                         echo '<script language="javascript">';
                         echo 'alert("User not Exist")';
                        echo '</script>';
                      }
                      else{
                    /*echo "
              <script type=\"text/javascript\">
            window.location.reload(); 
            </script>";
           $_POST['addStudent'] ="";*/
                      }

                      /*if(isset($_POST['addStudent']) && isset($_POST['AddPeople'])&& $_POST['AddPeople'] != $AddPeople){
                        $AddPeople = $_POST['AddPeople'];
                        include_once 'includes/editProject.inc.php';
                        if($AddOtherUserID != null){
                            
                            $j =  $_SESSION['i'];
                       
                            $_SESSION['i']++;
                        }
                        echo $j = $_SESSION['i'];*/
                        
                        
                //}
            
            ?> 
                    <br>
                

                <h4>Link: (youtube.com/..)
                    <input id="youtubeLink" class="editProjInput" name="link" type="text" id="link" />
                    <input type = "submit" name = "uploadVideo" class="smallUploadBtn" value = "Legg til"/>
                    <br><br>
                </h4>
            

        <!-- upload file -->
        <!-- Dette er de 2 knappene som ligger på toppen av siden for og laste opp filer
            Det under trenger Stilsetting og fiksing av variabler. Rett og slett en ferdigstilling-->

        <h4>Last opp fil:</h4>
        <form action = "editProject_page.php" method="post" enctype="multipart/form-data">

            <input class="smallUploadBtn" type="file" name="file" id="file"/></h4>

            <input type = "submit" name = "uploadFile" class="smallUploadBtn" value = "Laste opp fil"/>
            <input type = "submit" name = "deleteFile" class="smallUploadBtn" value = "Slette Alle filer"/>

            <?php

                if(isset($_POST['uploadFile'])){
                $uploadFile= $_FILES['file']['name'];
                $uploadFileTmp = $_FILES['file']['tmp_name'];
                    
                if ( ! is_dir("project/$ProjectID/")) {
                 mkdir("project/$ProjectID/");
                }
                move_uploaded_file($uploadFileTmp, $_SESSION['uploadFile'] ="project/$ProjectID/$uploadFile");

                }
            if(isset($_POST['deleteFile'])){
                $_SESSION['deleteFile'] = "1";
            }
            ?> 
        </form><br>
        <!--end Upload File-->

        <!--Start updatePhoto-->
        <h4>Bilde:</h4>
        <div id="updatePhoto">
            <form action = "editproject_page.php" method="post" enctype="multipart/form-data">
                
                <input class="smallUploadBtn" type="file" name="picture" id="projectPicture" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps"/>
                
                <input class="smallUploadBtn" type="submit" name="uploadProjectImage" value="Last opp bilde"/>
                <input class="smallUploadBtn" type="submit" name="deleteProjectImage" value="Slett Alle Bilder"/>

                <?php
                    
                    if(isset($_POST['uploadProjectImage'])){
                        $uploadProjectImage= $_FILES['picture']['name'];
                        $uploadProjectImageTmp = $_FILES['picture']['tmp_name'];

                    if ( ! is_dir("project/$ProjectID/")) {
                        mkdir("project/$ProjectID/");
                    }
                        move_uploaded_file($uploadProjectImageTmp, $_SESSION['uploadProjectImage'] ="project/$ProjectID/$uploadProjectImage");

                        echo "<img src='project/$ProjectID/$uploadProjectImage'/>";
                        $_SESSION['projectEditInfotext'] = $_POST['infotextproject'];
                    }
                if(isset($_POST['deleteProjectImage'])){
                    $_SESSION['deleteProjectImage'] = "1";
                }
                ?>
            </form>
        </div><!--end updatePhoto-->
        <br><br>

        <!--Update btn-->
        <input class="col buttonDesign" type="button" value="Endre prosjekt" onclick="return ChangeProjectForms(
            this.form,
            this.form.name,
            this.form.subject,
            this.form.infotextproject,
            this.form.picture,
            this.form.link,
            this.form.AddPeople);" /><!--end update btn-->
        </div><!--end edit project-->
        
<br/>  
      

            <a id="tilbakeTilProsjekt" href="projectPage.php?ID=<?php echo $ProjectID ?>">
                <div class="col buttonDesign"><p>tilbake til prosjekt</p></div></a>    

        <!--<p>Return to <a href="login.php" class="linkerStyle">login page</a></p>-->
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="login.php" class="linkerStyle">login</a>
            </p>
            <?php endif; ?>

        <?php include_once 'footer.php'; ?>
