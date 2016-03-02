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
             
             ?>
                
        <div id="" class="col col-ProfileStudent">
                
        <h3>Velkommen <?php echo $username;?>!</h3>
        <p>Bilde av studenten</p>
            <img src="">
        <p>Email: <?php echo $email ?> </p>
            
            <a href="#"><p>Karakterkort</p></a>

            <a href="#"><p>CV<p></a>
            
            <a href="editProfile.php"><input id="UpdateBTN" type="button" 
            value="Oppdater profilen din"/>  </a>
        
        </div>
                
                
        <div id="aboutStudent" class="col col-ProfileStudent studentCol">
            <h3 id="aboutStudentH3">Om <?php echo $username; ?></h3>
            <p id="aboutStudentP"><?php echo $username; ?></p>     
        </div>
                                        
                
    </div>
                
        <div id="" class="col col-ProfileStudent">
            <h3>Mine Projekter:</h3>

            <div id="projects">
                <?php $projectBox1; ?>
            </div><!--end projects-->

            <input id="ProfileBTN" class="buttonDesign col" type="button" onclick="alert('Legg til Prosjekt')" value="Legg til et prosjekt">
        </div>

        </form>

    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script><script>
    //Get all projects:
        var allProjects = 2; //Get value here

        for(var i = 0; i < allProjects; i++){
            var $newProject = $("<div>")
                .addClass("col col-3 projectBoxes")

            $("#projects").append($newProject);
        }

    </script><!--end script-->

            <!--<p id="returnLogin" class="col col-3">Return to <a href="index.php">login page</a></p>-->
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>

<?php include_once 'footer.php'; ?>
    <!--</body>
</html> -->
