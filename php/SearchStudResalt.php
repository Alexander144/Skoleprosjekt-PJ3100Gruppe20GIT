<?php include_once 'header.php';  
 
 ?>
        <?php if (login_check($mysqli) == true) : ?>
		 <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>"
                method="post"
                name="updateProfile_form">


            <div id="searchProfile">
                
                <h3>Søk resultat</h3>
            <?php

                $profileUsername = $_SESSION['profileUsername'];
                $profileEmail =$_SESSION["profileEmail"];
                $profileAboutUser = $_SESSION["profileAboutUser"];
                $profileImage = $_SESSION["profileOnUser"];
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
                

                    <div id="" class="col col-ProfileStudent">
                    <h3><?php echo $profileUsername; ?>'s nyeste projekter</h3>
                    <article class="projectBoxes">
                        <h3>Projekt 1</h3>
                        <p></p>
                        </article>
                    </div>
             </div>
       
        </form>
            <p>Return to <a href="login.php">login page</a></p>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="login.php">login</a>.
            </p>
        <?php endif; ?>
        <?php include_once 'footer.php' ?>
    </body>
</html>
