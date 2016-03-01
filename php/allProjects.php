<?php include_once 'header.php';
      /*include_once 'includes/editProfile.inc.php';*/
 ?>
        <?php if (login_check($mysqli) == true) : ?>
		 <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" 
                method="post" 
                name="updateProfile_form">
             
             <!-- Entry of body content field for index below -->
             
             <section id="mainContent"> <!-- start Main Content -->
                 <div class="sort-container col"> <!-- start sorting content-->
                    <ul>

                        <li class="sort-workBy sortMenu"><a href="#" <?php $sortProject; ?>>Arbeid av</a>
                      <ul>
                        <li><a href="#" <?php $sortProjectStudent; ?>>Student</a></li>
                        <li><a href="#" <?php $sortProjectAlumni; ?>>Alumni</a></li>
                      </ul>
                    </li>

                    <li class="sort-program sortMenu" <?php $sortProgram; ?>><a href="#">Avdeling</a>
                      <ul>
                        <li><a id="teknologi" href="#" <?php $sortProgramTeknologi; ?>>Teknologi/IT</a></li>
                        <li><a id="ledelse" href="#" <?php $sortProgramLedelse; ?>>Ledelse</a></li>
                        <li><a id="kommunikasjon" href="#" <?php $sortProgramKommunikasjon; ?>>Kommunikasjon</a></li>
                        <li><a id="kunstfag" href="#" <?php $sortProgramKunstfag; ?>>Kunstfag</a></li>
                        <li><a id="filmTVSpill" href="#" <?php $sortProgramFilmTVSpill; ?>>Film, TV og Spill</a></li>
                      </ul>
                    </li>

                    <li class="sort-orderBy sortMenu" <?php $sortBy; ?>><a href="#">Rekkefølge</a>
                      <ul>
                        <li><a href="#" <?php $sortByMostPopular; ?>>Mest Populære</a></li>
                        <li><a href="#" <?php $sortByNewest; ?>>Nyeste</a></li>
                      </ul>
                    </li>
                  </ul>

                 </div> <!-- end sorting content -->

                 <div id="projects"><!-- start projects -->
                     <?php $projectBox1; ?>
                 </div><!--end projects-->

             </section> <!-- end Main Content -->

             <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
             
             <script>
             //Get all projects:
                 var allProjects = 6; //Get value here

                 for(var i = 0; i < allProjects; i++){
                     var $newProject = $("<div>")
                        .addClass("col col-3 projectBoxes")
                     
                     $("#projects").append($newProject);
                 }

             </script><!--end script-->
             <!-- End of body content field -->

             <?php include_once 'footer.php'; ?>
             

             <!-- Knapp funkjsonen-->
             <input id="UpdateBTN" type="button" 
                   value="Update" 
                   onclick="return ProfileUpdateForms(
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
    </body>
</html>