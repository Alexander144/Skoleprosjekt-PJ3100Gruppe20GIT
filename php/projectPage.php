<?php include_once 'header.php';
    $ID = (int)$_GET['ID'];
    $projectImage = 'defaultBilde.png';
    $username = htmlentities($_SESSION['username']);
    include_once 'includes/oneProject.inc.php'; /* projectPage.inc.php */
 ?>
    <?php if (login_check($mysqli) == true) : ?>
        <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" name="updateProfile_form">

            <div id="projectPage">
                <?php
            for($i=0; $i<count($VideoInProject); $i++){
            }
             $_SESSION['i'] = null;
            $user_id = htmlentities($_SESSION['user_id']);
            $email = htmlentities($_SESSION['email']);
             
             ?>
                    <div id="projectOne" class="col col-projectOne">


                        <h3 id="prosjektTittel"><?php echo $Name ?></h3>

                        <!--Start show projectImage-->

                        <div id="imgContainer">

                          
                            <?php for($i=0; $i<count($projectImage); $i++){
                                echo '<img src="./' . $projectImage[$i] . '"/>';
                            } ?>

                        
                            <!--Forsøk på å vise fleire bilder i ett prosjekt-->
                            <!--<img id="imgUrlPath" src="./ "/>

                            <script src="js/jquery.js"></script>
                            
                            <script>
                                var imgUrl = <?php //echo json_encode($projectImage); ?>
                                var imgCount = <?php //echo json_encode(count($projectImage)); ?>

                                document.write(imgUrl[0]);
                                document.write(imgCount);
                                
                                var getImgUrlPath = document.getElementById(imgUrlPath);
                                
                                for (var i = 0; i < imgUrl; i++) {
                                    <?php //echo $getImgUrlPath + $projectImage ?>;
                                }
                            </script>-->

                        </div>


                            <!-- Start youtubescript og youtube html-->
                            <div id="yt_api"></div>

                            <div id="youtubeContainer">

                                <div id="youTubeVideo"></div>
                                <!-- <div id="projectPicture" style="height:360px; width:640px; background-color:rgb(20,20,20);"></div>-->


                                <script src="js/jquery.js"></script>

                                <script>
                                    var link = <?php echo json_encode($VideoInProject); ?>;
                                    var linkCount = <?php echo json_encode(count($VideoInProject)); ?>;



                                for (var i = 0; i < linkCount; i++) {
                                    

                                    var ytVid = "ytVid" + i;

                                    $("#youtubeContainer").append('<div><iframe width="560" height="315" src=mySrc frameborder="0" id="ytVid" allowfullscreen></iframe></div>')
                                    $("#youtubeContainer").append('<iframe src="http://www.youtube.com/embed/>' + link[i])

                                    var mySrc = "https://www.youtube.com/embed/" + link[i];

                                    document.getElementById('ytVid').src = mySrc;
                                    
                                    document.getElementById('ytVid').id = "ytVid" + i;

                                    //alert(link[i]);
                                }

                                </script>


                                <!--<div id="commentField">
                                    <p>Kommentarfelt</p>
                                    <div id="commentDiv"></div>
                                </div>-->

                            </div>

                            <!-- end youtubescript og youtube html-->
                        
                        <div id="projectDocument">
                            <h3>Prosjekt Dokumentasjon</h3>   
                                <?php 
                            if($projectFile[0]!=null){
                                for($i=0; $i<count($projectFile); $i++){
                                    
                                    
                                    $fileMinusFilepath = $fileFileName[$i];
                                    $fileNameString = "project/" . $ID . "/";
                                    $trimmed = str_replace($fileNameString, "", $fileMinusFilepath);

                                    echo '<a href="./' . $projectFile[$i] . '"/>' . $trimmed . '</a></br>';
                                    }
                                } ?>
                            
                        </div>
                    </div>
                
                    <div id="projectTwo" class="col col-projectTwo">

                        <div id="emneProject">
                            <h3 id="emneProjectP">Emne:</h3>
                            <?php echo $Subject ?>
                        </div>

                        <div id="studentsProject">
                            <h3 id="studentsProjectP">Studenter:</h3>
                            <p id="getStudentsProject"></p>
                            <?php
                            for($i = 0; $i<count($peopleInProject); $i++){
                               echo $peopleInProject[$i];
                               echo "\r\t";
                        }
                        ?>
                        </div>
                        
                        <div id="tutorProject">
                            <h3 id="tutorProjectP">Veileder/lærer:</h3>
                            <p id="getTutorProject"></p>
                            <?php //echo $projectTutor ?>
                        </div>

                        <div id="projectDesc">
                            <h3 id="projectDescP">Beskrivelse av prosjekt</h3>
                            <p id="getProjectDesc"></p>
                            <?php echo $AboutProject ?>
                        </div>
                        
                        <!-- Like container -->
                        <div id="likeContainerPPage">
                            <div id="likeBtnPPage" class="col col-3 likeBoxes" style="position: relative; top: 0px; z-index: 0; width: 50px; height: 50px; float: right; background-image: url(&quot;heart.png&quot;);">Like</div>
                            <div class="col col-3 likeboxes" style="position: relative; top: 0px; z-index: 0; width: 50px; height: 50px; float: right; left: 0px; background-image: url(&quot;dislikeHeart.png&quot;); display: none;"></div>
                        </div>
                        <p style="text-align: center; font-size: 0.8em; font-style: italic; display: inline;">Likes: 0</p>
                        <!-- Like container end -->

                        
                        

                       <?php  if($OwnProject) { ?>
                        <input id="editProjectBtn" class="buttonDesign" type="button" value="Endre prosjekt" onclick="location.href ='editproject_page.php';" />
                        <?php } ?>
                        <?php endif; ?>

                    </div>

        </form>
        <?php if($OwnProject) : ?>
            <?php $_SESSION["OwnProjectID"] = $ProjectID;
            $OwnProject = false;
        ?>


               <p id="returnLogin" class="col"><!--Return to <a href="login.php" class="linkerStyle">login page</a>--></p>
                <?php else : ?>
                    <p>
                        <span class="error">You are not authorized to access this page.</span> Please <a href="login.php" class="linkerStyle">login</a>.
                    </p> 
                    <?php endif; ?>

                        <?php include_once 'footer.php'; ?>
                            <!--</body>
</html>
