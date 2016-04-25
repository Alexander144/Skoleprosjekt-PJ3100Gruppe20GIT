<!-- HER STARTER SELVE SIDEN, DET OVER ER BARE FOR HJELP FORELØBI, DET OVER SKAL TAS VEKK -->


<?php include_once 'header.php';
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
                    include_once 'includes/editProfile.inc.php';
             ?>
                
        <h3 id="velkommenProfile">Velkommen <?php echo $username;?>!</h3><!--Welcome-->
    <div id="profilContainer">
                
    <div id="" class="col col-ProfileStudent">
            
            <div class="clearfix"></div>

            <img id="profilePic" src='./<?php echo $profileImage; ?>'/><!--Profile picture-->

            <p>Email: <?php echo $email; ?> </p><!--Email-->
            
            <a href="./<?php echo $gradesFile; ?>" class="linkerStyle"><p>Karakterkort</p></a><!--Grades-->

            <a href="./<?php echo $cvFile; ?>" class="linkerStyle"><p>CV<p></a><!--CV-->
            <a href="editProfile.php"><input class="smallUploadBtn" type="button" value="Oppdater profilen din"/></a><!--Update Btn-->
        
        </div><!--end studentProfil-->

        <div id="aboutStudent" class="col col-ProfileStudent studentCol">
            <h3 id="aboutStudentH3">Om <?php echo $username; ?></h3>
            <p id="aboutStudentP"><?php echo $profileAboutUser; ?></p>     
        </div>

                
        <div id="studentProjectBoxes" class="col-ProfileStudent">
            <h3 id="studentProjectsH3">Mine nyeste Projekter:</h3>

            <div id="projects" class="projectUserBox">
                <?php $projectBox1; ?>
            </div><!--end projects-->
            
            <a style="width:inherit;" href="userinfo_Allpage.php"><input id="seeYourProjecBTN" class="buttonDesign" type="button"value="Se dine prosjekter" ></a>
            
            <div id="addProjectProfile">
            <a style="width:inherit;" href="addproject_page.php"><input id="ProfileBTN" class="buttonDesign" type="button"value="Legg til ett prosjekt" ></a>
            </div>
            
        </div>

        </form>
             
             </div>

    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script><script>
    //Get all projects:
    function SendData(){

                     $.ajax({
                        url: 'projectPage.php',
                        data: 'ID='+$(this).data("ID"),
                        method: 'GET',
                        success: function (data) {
                             window.location.href = this.url;
                            console.log(data);

                         // er er resultatet fra sql-spørringen
                        }
                        });
        }

        var YourProjectID = <?php echo json_encode($YourProjectID); ?>;
        var YourProjectCount = <?php echo json_encode(count($YourProjectName)); ?>; //Get value here
        var YourProjectName = <?php echo json_encode($YourProjectName ); ?>;
        var YourProjectSubject = <?php echo json_encode($YourProjectSubject); ?>;
        var YourProjectAbout = <?php echo json_encode($YourProjectAboutProject); ?>;
        

        for(var i = 0; i < YourProjectCount; i++){

            var $newProject = $("<div>")
                .addClass("col col-3 projectBoxes")

            $("#projects").append($newProject);

               $newProject
                   .html("<h1>" + YourProjectName[i]+ "</h1>" + "<br>" + "<p>" + "Emne: " + YourProjectSubject[i] + "</p>" + "<br>" + "<p>" + YourProjectAbout[i]);

                   $newProject.click(SendData);
                    $newProject.data("ID", YourProjectID[i]);
            
                            $newProject
                    .css({
                        "text-align": "center",
                        "padding-top": "10px"
                });
            
            
            $("#projects h1")
                .css({
                    "text-align": "center", 
                    "font-size": "1em",
                    "font-weight": "700",
                    "display": "inline",
                    "top": "100px",
                    "border-bottom": "1px solid black"
                   }); 
            
            $("#projects p")
                .css({
                    "text-align": "center", 
                    "font-size": "0.8em",
                    "font-style": "italic",
                    "display": "inline"
                   });
        }

    </script><!--end script-->

            <!--<p id="returnLogin" class="col col-3">Return to <a href="index.php">login page</a></p>-->
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="login.php" class="linkerStyle">login</a>.
            </p>
        <?php endif; ?>

<?php include_once 'footer.php'; ?>
    <!--</body>
</html> -->
