<?php
include_once 'header.php'; 

?>
    <div id="addProject" class="addprojectcontainer">
        <?php if (login_check($mysqli) == true) : ?>
            <!--<p>Velkommen
                <?php //echo htmlentities($_SESSION['username']); ?>!</p>-->
            <!-- Dette er brukerens profil-->

            <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" name="registration_form">


                <?php
            $username = htmlentities($_SESSION['username']);
            $user_id = htmlentities($_SESSION['user_id']); 
            $email = htmlentities($_SESSION['email']);
            include_once 'includes/AddProject.inc.php';
            ?>

            <div id="createProjectContainer">
            
                <div id="mainCreateProject">

                    <div id="nameFileCreateProject">
                        <p id="nameProjectCP" class="col-floatleft">Navn på prosjekt:</p>
                        <input class="addProjInput updatefield col-floatleft" type="text" name="name" id="name" />
                    </div>
                    
                    <div id="description" class="test321">
                        <p id="descProjCP" class="col-floatleft">Beskrivelse av prosjekt</p>
                        <textarea id="infotextproject" name="infotextproject" class="test321"></textarea> <!--  rows="20" cols="90" -->
                    </div>
                    
                    <div id="studyTopic" class="test321">
                        <p id="studyTopicCP" class="col-floatleft">Emne:</p>
                        <input class="addProjInput updatefield col-floatleft" type="text" name="subject" id="subject" />
                    </div>
                    
                    <div class="clearfix"></div>
                    
                    <div id="addStudents" class="test321">
                        <p id="addStudentCP" class="col-floatleft">Legg til andre studenter:</p>
                        <input class="addProjInput updatefield col-floatleft" type="text" name="AddPeople" id="AddPeople" />
                    </div>
                      <div id="Avdeling" class="test321">
                        <p id="Avdeling" class="col-floatleft">Avdeling:</p>
                        <input class="addProjInput updatefield col-floatleft" type="text" name="Avdeling" id="Avdeling" />
                    </div>
                    
                    <div id="publish" class="test321">
                    <input id="publishBtn" class="buttonDesign test321" type="button" value="Add project" onclick="return AddProjectForms(
                                    this.form,
                                   this.form.name,
                                   this.form.subject,
                                   this.form.infotext,
                                   this.form.picture,
                                   this.form.link,
                                   this.form.date,
                                   this.form.Avdeling);" />
                    </div>

            </form>
                </div>
                
            </div>
<!--
                           <p>Name:
                                <input class="updatefield" type="text" name="name" id="name" />
                                <br>
                            </p>

                            <p>Infotext:
                                <textarea id="infotextproject" name="infotextproject" rows="20" cols="80" style="width: 415px; height: 136px; margin-top: 15px;; margin-bot: 15px;"></textarea>

                                <p>Subject:
                                    <input class="updatefield" type="text" name="subject" id="subject" />
                                    <br>
                                </p>

                                <p>AddPeople:
                                    <input class="updatefield" type="text" name="AddPeople" id="AddPeople" />
                                    <br>
                                    <br>
                                </p>


                                <input class="buttonDesign" type="button" value="Add project" onclick="return AddProjectForms(
                                    this.form,
                                   this.form.name,
                                   this.form.subject,
                                   this.form.infotext,
                                   this.form.picture,
                                   this.form.link,
                                   this.form.date);" />

            </form> -->
            <p>Return to <a href="login.php" class="linkerStyle">login page</a></p>
    </div>

    <?php else : ?>
        <p>
            <span class="error">You are not authorized to access this page.</span> Please <a href="index.php" class="linkerStyle">login</a>.
        </p>
        <?php endif; ?>

            <?php include_once 'footer.php'; ?>

<script src="js/jquery.js"></script>
<script>

        $("#publishBtn").click(function(){
            alert("Prosjektet er lastet opp!");
        });

</script>