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
        var $newProject = $("<div>");
        
          /* for(var i = 0; i < allProjects; i++){
                
                var $newProject = $("<div>")
                    .addClass("col col-3 projectBoxes")
                
                     
                $("#projects").append($newProject);
                
            }
        
        for (var $i = 0; $i < $projectName.length; $i++) {
            
            var div = document.getElementById("projects")
                div.innerHTML = div.innerHTML + $projectName.indexOf($projectName[$i]) + " " + $projectName[$i] + "  ";
                div.style.backgroundColor = "blue";
        }
        */
          $.each($projectName, function( index, value ) {
            
                var $newName = $("#nameProj");
                
                for (var i = 0; i < $allProjects; i ++){
                    
                    $newProject
                        .addClass("projectNameP")
                        .css({
                        "font-size": "2em",
                        "font-color": "blue"
                        });
                    
                    $newName.append($newP);
                }
              
                $newName.html($projectName);
            });
        
        // LARS KODE //
/*        
        
    function addDivs() {
    var number = document.getElementById("newDiv").value;
    var container = document.getElementById("container");

    while (container.hasChildNodes()) {
        container.removeChild(container.lastChild);
    }

    for (i = 0; i < number; i++) {
        var input = document.createElement("div");
        container.appendChild(input);
    }
    
}

//---setting all css on a button click
$(document).ready(function () {

    $("button").click(function () {
        
        $("div").each(function(i, elem){
            $(elem).append($("<span>"+(i+1)+"</span>"));
        });
        
        $("span").css(
            {
                "text-align": "center",
                "margin": "40px",
                "color": "yellow",
                "font-weight": "bold",
            }
        );

        //css for untouched divs
        $("div").css({
            "background-color": "aqua",
            "height": "100px",
            "width": "100px",
            "float": "left",
            "margin": "20px",
            "opacity": "0.5",
        });

        //opacity change on hover
        $("div").hover(function () {
            $(this).css({
                "opacity": "1"
            });

        }, function () {
            $(this).css({
                "opacity": "0.5"
            });
        });

        // changing color on next, this and previous div
        $("div").click(function () {

            $(this).css({
                "background-color": "pink",
            });
            $(this).next().css({
                "background-color": "pink",
            });
            $(this).prev().css({
                "background-color": "pink",
            });
        });

        //on doubleclick changes all divs colour except the doubleclicked
        $("div").dblclick(function () {

            $(this).siblings().css({
                "background-color": "pink",
            });

            $(this).css({
                "background-color": "aqua",
            });

        });
    });
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
    <p>Return to <a href="index.php">login page</a></p>
    <?php else : ?>
    <p>
        <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
    </p>
    <?php endif; ?>
    <?php include_once 'footer.php'; ?>