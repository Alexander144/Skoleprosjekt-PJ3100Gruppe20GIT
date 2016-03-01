<?php include_once 'header.php'; 
    include_once 'includes/Index.inc.php';
    include_once 'menu.php';
?>
<!-- Entry of body content field for index below -->

<section id="mainContent"> <!-- start Main Content -->

<!-- start projects -->
    <div id="projects">
        <?php $projectBox1; ?>
    </div><!-- end projects -->

</section> <!-- end Main Content -->


<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script>
    //Get all projects:
    var allProjects = 12; //Get value here

    for(var i = 0; i < allProjects; i++){
        var $newProject = $("<div>")
            .addClass("col col-3 projectBoxes")
                     
            $("#projects").append($newProject);
        }
</script><!--end script-->
<!-- End of body content field -->

<?php include_once 'footer.php'; ?>
