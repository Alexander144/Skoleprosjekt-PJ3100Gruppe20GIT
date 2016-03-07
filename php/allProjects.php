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
     function SendData(){
 					 $.ajax({
						url: 'allProjects.php',
						data: $(this).data("ID"),
						method: 'GET',
						success: function (data) {
						 // er er resultatet fra sql-spørringen
						}
						});
        }
        //Get all projects:
        var allProjects = <?php echo $count;?>; //Get value here
        var projectName = <?php echo json_encode($Name); ?>;
        var projectSubject = <?php echo json_encode($Subject); ?>;
        var projectAbout = <?php echo json_encode($AboutProject); ?>;
        var projectID = <?php echo json_encode($ProjectID); ?>;
        var FirstProjectID = <?php echo json_encode($FirstProjectID); ?>;
        var LastProjectID = <?php echo json_encode($LastProjectID); ?>;
        var $newProject = $("<div>");
        var ID;

        for(var i = 0; i < allProjects; i++){
            
                var ID = projectID[i];
            
                
              //ID = projectID[i];
             
			
			
                var $newProject = $("<div>")
                    .addClass("col col-3 projectBoxes");
                    
                $("#projects").append($newProject);

            	
               $newProject
                   .html("<h1>" + projectName[i]+ "</h1>" + "<br>" + "<p>" + "Emne: " + projectSubject[i] + "</p>" + "<br>" + "<p>" + projectAbout[i] + "</p>");
           		

            
                //$newProject.append($ID);
          		
            
            $newProject
                .css({
                    "text-align": "center"
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
            $("p")
                .css({
                    "text-align": "center", 
                    "font-size": "0.8em",
                    "font-style": "italic",
                    "display": "inline"
                   });
                 $newProject.click(SendData);
                	$newProject.data("ID", projectID[i]);
              i++;


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
                    this.form.;" />
    </form>
    <p>Return to <a href="login.php" class="linkerStyle">login page</a></p>
    <?php else : ?>
    <p>
        <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
    </p>
    <?php endif; ?>
    <?php include_once 'footer.php'; ?>
