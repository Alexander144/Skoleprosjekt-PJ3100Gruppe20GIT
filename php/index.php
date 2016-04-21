
<?php include_once 'header.php'; 

?>

<div id="aboutSiteDiv" class="">
    
    <p id="aboutSiteP">TUNG er en studentportal hvor du som Westerdøling kan laste opp prosjekter du har jobbet med som student. Ved å være registrert kan du med din egne profil se på andre sine prosjekter, 'like' andres prosjekter og legge til prosjekter selv. <b><a href="register.php">Registrer deg som bruker idag!</a></b></p>

</div>
<!-- Entry of body content field for index below -->
<?php if (login_check($mysqli) == true) : ?>

<!-- start projects -->
        
     <?php include_once 'allProjects.php'; ?>

<!-- End of body content field -->


        <!-- Knapp funkjsonen-->
    <?php else : ?>
    <p>
        <!--<span class="error">You are not authorized to access this page.</span> Please <a href="login.php" class="linkerStyle">login</a>.-->
    </p>
    <?php endif; ?>
    </body>
</html>

<?php include_once 'footer.php'; ?>
