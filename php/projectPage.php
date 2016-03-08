<?php include_once 'header.php';
      $ID = (int)$_GET['ID'];
      $username = htmlentities($_SESSION['username']);
      include_once 'includes/oneProject.inc.php'; /* projectPage.inc.php */
 ?>
        <?php if (login_check($mysqli) == true) : ?>
		 <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" 
                method="post" 
                name="updateProfile_form">
             
            <div id="projectPage">
            <?php
            for($i=0; $i<count($VideoInProject); $i++){
                echo $VideoInProject[$i];
            }
            
            $user_id = htmlentities($_SESSION['user_id']);
            $email = htmlentities($_SESSION['email']);
             
             ?>
        <div id="projectOne" class="col col-projectOne">
                
        
        <h3>Tittel på prosjekt</h3> <?php echo $Name ?>
            
            <div id="photoProject">
                <img src="#" > <?php// echo $projectPhoto ?>
            </div>
            
            <div id="commentField">
                <p>Kommentarfelt</p>
                <div id="commentDiv"></div>
            </div>
        
        </div>
                
            <div id="projectTwo" class="col col-projectTwo">
                    
                <div id="emneProject">
                    <p id="emneProjectP">Emne:</p><?php echo $Subject ?>
                </div>

                    <div id="studentsProject">
                        <p id="studentsProjectP">Studenter:</p>
                        <p id="getStudentsProject"></p>
                        <?php
                            for($i = 0; $i<count($peopleInProject); $i++){
                               echo $peopleInProject[$i];
                               echo "\r\t";
                        }
                        ?>
                    </div>
                
                <div id="tutorProject">
                    <p id="tutorProjectP">Veileder/lærer:</p>
                    <p id="getTutorProject"></p><?php //echo $projectTutor ?>
                </div>
                
                <div id="projectDesc">
                    <p id="projectDescP">Beskrivelse av prosjekt</p>
                    <p id="getProjectDesc"></p> <?php echo $AboutProject ?>
                </div>
                    
                
                </div>

            </div>

        </form>
        <?php if($OwnProject) : ?>
        <?php $_SESSION["OwnProjectID"] = $ProjectID;
            $OwnProject = false;
        ?>
        <input class="buttonDesign" type="button" value="Endre prosjekt" onclick="location.href ='editproject_page.php';" />
            <?php endif; ?>

            <p id="returnLogin" class="col">Return to <a href="login.php" class="linkerStyle">login page</a></p>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="login.php" class="linkerStyle">login</a>.
            </p>
        <?php endif; ?>

<?php include_once 'footer.php'; ?>
    <!--</body>
</html>
