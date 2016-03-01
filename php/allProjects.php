 <?php include_once 'header.php';
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
            <?php $projectBox1; ?>

        </div><!--end projects-->
    </section><!--end Main Content-->

    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script>
        //Get all projects:
        var allProjects = 3; //Get value here

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
