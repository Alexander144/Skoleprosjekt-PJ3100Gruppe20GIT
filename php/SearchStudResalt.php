<?php include_once 'header.php';  
 
 ?>
        <?php if (login_check($mysqli) == true) : ?>
		 <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>"
                method="post"
                name="updateProfile_form">


            <div id="searchProfile" class="col">
                
                <div class="clearfix"></div>
                
                <p id="soesResultat" class="col">Søk resultat</p></div>
            <?php

                $profileUsername = $_SESSION['profileUsername'];
                $profileEmail =$_SESSION["profileEmail"];
                $profileAboutUser = $_SESSION["profileAboutUser"];
                $profileImage = $_SESSION["profileOnUser"];
                $profileID = $_SESSION["profileOnID"];
                include_once 'includes/searchStudResaltProject.inc.php';
                //var_dump($profileImage); die;
           //var_dump($profileUsername); die;
             ?>
                <div id="" class="col col-ProfileStudent">

                    <h3><?php echo $profileUsername; ?></h3>
                    <p>Bilde av studenten</p>

                    <img src='./<?php echo $profileImage; ?>'/>  
                    <img src="">
                    <p>Email: <?php echo $profileEmail; ?> </p>
                    <a href="#"><p>Karakterkort</p></a>
                    <a href="#"><p>CV<p></a>
                    
                </div>
                
                
                <div id="aboutStudent" class="col col-ProfileStudent studentCol">
                    <h3 id="aboutStudentH3">Om <?php echo $profileUsername; ?></h3>
                    <p id="aboutStudentP"><?php echo $profileAboutUser; ?></p>
                    
                
                </div>
                
                <div id="profileProjects" class="col col-ProfileStudent">
                <h3><?php echo $profileUsername; ?>'s nyeste projekter</h3>
                    <div id="projectsProfile"></div>
             </div>
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
                .addClass("col col-3 projectBoxes");

            $("#projectsProfile").append($newProject);

               $newProject
                   .html("<h1>" + YourProjectName[i]+ "</h1>" + "<br>" + "<p>" + "Emne: " + YourProjectSubject[i] + "</p>" + "<br>" + "<p>" + YourProjectAbout[i]);

                   $newProject.click(SendData);
                    $newProject.data("ID", YourProjectID[i]);
            
                $newProject
                    .css({
                        "text-align": "center",
                        "padding-top": "10px"
                });
            
            
            $("#projectsProfile h1")
                .css({
                    "text-align": "center", 
                    "font-size": "1em",
                    "font-weight": "700",
                    "display": "inline",
                    "top": "100px",
                    "border-bottom": "1px solid black"
                   }); 
            
            $("#projectsProfile p")
                .css({
                    "text-align": "center", 
                    "font-size": "0.8em",
                    "font-style": "italic",
                    "display": "inline"
                   }); 
        }

    </script><!--end script-->
        
            <p>Return to <a href="login.php">login page</a></p>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="login.php">login</a>.
            </p>
        <?php endif; ?>
        <?php include_once 'footer.php' ?>
    </body>
</html>
