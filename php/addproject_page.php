<?php
include_once 'header.php'; 

?>
    <div id="addProject" class="addprojectcontainer">
        <?php if (login_check($mysqli) == true) : ?>
          
            <!-- Dette er brukerens profil-->

            <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" name="registration_form">


                <?php
            $username = htmlentities($_SESSION['username']);
            $user_id = htmlentities($_SESSION['user_id']); 
            $email = htmlentities($_SESSION['email']);
            $Avdeling;
            include_once 'includes/AddProject.inc.php';
            ?>

            <div id="createProjectContainer">
            
                <div id="mainCreateProject">

                    <div id="nameFileCreateProject">
                        <p id="nameProjectCP" class="col-floatleft">Navn på prosjekt</p>
                        <input id="addNameProjectInput" class="addProjInput col-floatleft updatefield" type="text" name="name" id="name" />
                    </div>
                    
                    <div id="description" class="test321">
                        <p id="descProjCP" class="col-floatleft">Beskrivelse av prosjekt</p>
                        <textarea id="infotextproject" name="infotextproject" class="test321"></textarea> <!--  rows="20" cols="90" -->
                    </div>
                    
                    <div id="studyTopic" class="test321">
                        <p id="studyTopicCP" class="col-floatleft">Emne</p>
                        <input id="addTopicInput" class="addProjInput col-floatleft updatefield" type="text" name="subject" id="subject" />
                    </div>
                    
                    <div class="clearfix"></div>
                    
                    <!--<div id="addStudents" class="test321">
                        <p id="addStudentCP" class="col-floatleft">Legg til andre studenter</p>
                        <input id="addStudentInput" class="addProjInput col-floatleft updatefield" type="text" name="AddPeople" id="AddPeople" />
                    </div>-->
                      <div id="Avdeling" class="test321">
                        <p id="Avdeling" class="col-floatleft">Avdeling</p>
                          
                          <select id="Avdeling" class="addProjInput col-floatleft updatefield"  name="Avdeling">
                              
                            <option id="Teknologi" class="addProjInput col-floatleft updatefield" value="Teknologi">Teknologi</option>
                              
                            <option id="Ledelse" class="addProjInput col-floatleft updatefield" value="Ledelse">Ledelse</option>
                              
                            <option id="Kommunikasjon" class="addProjInput col-floatleft updatefield" value="Kommunikasjon">Kommunikasjon</option>
                              
                            <option id="Kunstfag" class="addProjInput col-floatleft updatefield" value="Kunstfag" >Kunstfag</option>
                              
                            <option id="FilmTvSpill" class="addProjInput col-floatleft updatefield" value="FilmTvSpill" >Film/TV/Spill</option>
                              
                       </select>

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
</div>

    <?php else : ?>

            <span class="error"><p>Du må være </span><a href="index.php" class="linkerStyle">logge inn </a>for å kunne legge til et prosjekt!</p>
        <?php endif; ?>

<?php include_once 'footer.php'; ?>

<script src="js/jquery.js"></script>
<script>

        $("#publishBtn").click(function(){
            alert("Prosjektet er lastet opp!");
        });

</script>
        