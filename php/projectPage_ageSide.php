<?php include_once 'header.php';
      $ID = (int)$_GET['ID'];
      include_once 'includes/oneProject.inc.php'; /* projectPage.inc.php */
 ?>
    <?php if (login_check($mysqli) == true) : ?>
        <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" name="updateProfile_form">

            <div id="projectPage">
                <?php
            
            $username = htmlentities($_SESSION['username']);
            $user_id = htmlentities($_SESSION['user_id']);
            $email = htmlentities($_SESSION['email']);
             
             ?>
                    <div id="projectOne" class="col col-projectOne">


                        <h3>Tittel på prosjekt</h3>
                        <?php echo $Name ?>

                            <div id="photoProject">
                                <img src="#">
                                <?php// echo $projectPhoto ?>
                            </div>
                            <div id="yt_api"></div>

                            <div id="youtubeContainer">
                                <header>
                                    <h1>snoop container</h1>
                                    <p>Mauris in pretium felis, sit amet tempor nulla. Proin elementum metus velit, placerat vehicula leo rutrum ac. Donec vel mi ornare, posuere ligula nec, suscipit augue. Curabitur sagittis, mauris eget tincidunt sodales, est orci aliquam metus, et porta urna mi vitae ante.</p>
                                </header>
                                <div id="youTubeVideo"></div>
                                <div id="projectPicture" style="height:360px; width:640px; background-color:rgb(20,20,20);"></div>
                            </div>

                            <script src="js/jquery.js"></script>
                            <script src="js/youTube.js"></script>


                            <div id="commentField">
                                <p>Kommentarfelt</p>
                                <div id="commentDiv"></div>
                            </div>

                    </div>

                    <div id="projectTwo" class="col col-projectTwo">

                        <div id="emneProject">
                            <p id="emneProjectP">Emne:</p>
                            <?php echo $Subject ?>
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
                            <p id="getTutorProject"></p>
                            <?php //echo $projectTutor ?>
                        </div>

                        <div id="projectDesc">
                            <p id="projectDescP">Beskrivelse av prosjekt</p>
                            <p id="getProjectDesc"></p>
                            <?php echo $AboutProject ?>
                        </div>


                    </div>

            </div>

        </form>


        <p id="returnLogin" class="col">Return to <a href="index.php">login page</a></p>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="login.php">login</a>.
            </p>
            <?php endif; ?>

                <?php include_once 'footer.php'; ?>
                    <!--</body>
</html>