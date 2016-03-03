 <?php include_once 'header.php';
        $row;
        include_once 'includes/allProjects.inc.php';
        include_once 'menu.php';
 ?>

<?php if (login_check($mysqli) == true) : ?>
<form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>"
      method="post"
      name="updateProfile_form">
<!-- Entry of body content field for index below -->

    <section id="mainContent"> <!-- start Main Content -->
        <!-- start projects -->
        <div id="projects">
            
            <p id="nameProj"></p>
            <?php 
                 //echo $Name[1];
             ?>
            

        </div><!--end projects-->
        
    </section><!--end Main Content-->

    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script>
        //Get all projects:
        var allProjects = <?php echo $count;?>; //Get value here
        var $projectName = <?php echo json_encode($Name); ?>;
        var $projectSubject = <?php echo json_encode($Subject); ?>;
        var $projectAbout = <?php echo json_encode($AboutProject); ?>;
        var $newProject = $("<div>");
        
        for(var i = 0; i < allProjects; i++){
                
                var $newProject = $("<div>")
                    .addClass("col col-3 projectBoxes")
                     
                $("#projects").append($newProject);
            
               $newProject
                   .html($projectName[i]+"<br>"+$projectSubject[i]+"<br>"+ $projectAbout[i]);
            
                $newProject
                   .css({
                    "text-align": "center", 
                    "font-size": "1.3em",
                    
                   });   
        }
        
        
        
        
        
        /* EN ANNEN VERSJON SOM IKKE HELT FUNKER NÅ
        
         $.each($projectName, function( index, value ) {
            
                var $newName = $("#nameProj");
                
                for (var i = 0; i < $projectName; i ++){
                    
                    var $newP = $("<p>")
                        .addClass("projectNameP")
                        .css({
                        "font-size": "2em",
                        "font-color": "blue"
                        });
                    
                    $newName.append($newP);
                }
                $newName.html($projectName);
            });
        
*/
    </script><!--end script-->
    <!-- End of body content field -->
    
             
    <!-- Knapp funkjsonen-->
    <input id="UpdateBTN" type="button"
           value="Update"
           onclick="return SearchOnProject(
                    this.form,
                    this.form.picture,
                    this.form.profileEditAboutMe,
                    this.form.grades,
                    this.form.cv);" />
    </form>
    <p>Return to <a href="login.php">login page</a></p>
    <?php else : ?>
    <p>
        <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
    </p>
    <?php endif; ?>
    <?php include_once 'footer.php'; ?>
