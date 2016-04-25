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
                        include_once 'includes/editProfileAllProject.inc.php';
                 ?>

            <div id="profilContainer">

                <h3 id="studentProjectsH3">Mine Prosjekter:</h3>

                <div id="projects">
                    <?php $projectBox1; ?>
                </div><!--end projects-->

                <a style="width:inherit;" href="addproject_page.php">
                    <input id="addProjBTN2" class="buttonDesign" type="button"value="Legg til ett prosjekt" >
                </a>
            </div><!--end profileContainer-->
        </form>

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
                        "padding-top": "10px",
                        "z-index": "1"
                });
            
            
            $("h1")
                .css({
                    "text-align": "center", 
                    "font-size": "1.3em",
                    "font-weight": "700",
                    "display": "inline",
                    "top": "100px",
                    "border-bottom": "1px solid black"
                   }); 
            
            $("article")
                .css({
                    "margin-top": "10px",
                    "font-size": "1em",
                    "height": "100%",
                    "text-align": "center",
                    "display": "inline",
                    "top": "100px",
            });

            $("p")
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
