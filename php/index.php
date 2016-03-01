<?php include_once 'header.php'; 
include_once 'includes/Index.inc.php';?>
<!-- Entry of body content field for index below -->

  <section id="mainContent"> <!-- start Main Content -->

  <div class="sort-container col"> <!-- start sorting content-->
        <ul>
        
            <li class="sort-workBy sortMenu"><a href="#">Arbeid av</a>
          <ul>
            <li><a href="#">Student</a></li>
            <li><a href="#">Alumni</a></li>
          </ul>
        </li>

        <li class="sort-program sortMenu"><a href="#">Avdeling</a>
          <ul>
            <li><a id="teknologi" href="#">Teknologi/IT</a></li>
            <li><a id="ledelse" href="#">Ledelse</a></li>
            <li><a id="kommunikasjon" href="#">Kommunikasjon</a></li>
            <li><a id="kunstfag" href="#">Kunstfag</a></li>
            <li><a id="filmTVSpill" href="#">Film, TV og Spill</a></li>
          </ul>
        </li>

        <li class="sort-orderBy sortMenu"><a href="#">Rekkefølge</a>
          <ul>
            <li><a href="#">Mest Populære</a></li>
            <li><a href="#">Nyeste</a></li>
          </ul>
        </li>
      </ul>

  </div> <!-- end sorting content -->

  <!-- start projects -->
      <div id="projects">
            <?php $projectBox1; ?>
      </div>

  <!-- end projects -->

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

<!-- End of body content field -->
<?php include_once 'footer.php'; ?>