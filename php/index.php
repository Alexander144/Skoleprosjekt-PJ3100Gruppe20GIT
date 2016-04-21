
<?php include_once 'header.php'; 
  
?>
<!-- Entry of body content field for index below -->
<?php if (login_check($mysqli) == true) : ?>

<!-- start projects -->
        
     <?php include_once 'allProjects.php'; ?>

<!-- End of body content field -->


        <!-- Knapp funkjsonen-->
    <?php else : ?>
    <p>
        <span class="error">You are not authorized to access this page.</span> Please <a href="login.php" class="linkerStyle">login</a>.
    </p>
    <?php endif; ?>
    </body>
</html>

<?php include_once 'footer.php'; ?>
