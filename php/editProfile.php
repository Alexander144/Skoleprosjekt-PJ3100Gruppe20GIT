<?php include_once 'header.php'; ?>
<!-- Entry of body content field for index below -->

  <section id="mainContent"> <!-- start Main Content -->
<!-- start sorting content
  <div class="sort-container col"> 
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

    <div id="profileBasicInfo" class="col col-3">
        <h1><?php echo $studentName?></h1>
        <img id="profilePic" src="img/profilbildeStudent.jpg" alt="Profilbilde av studenten (Mr. Bean)" <?php echo $profileImgEdit?>>
        <form action="includes/upload.php" method="post" enctype="multipart/form-data">
    <p>Last opp nytt profilbilde</p>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
        <div>
            <h1>Andre sider jeg er med på:</h1>
            <ul id="linksForProfile">
            <li><a href="#">Facebook</a></li>
            <li><a href="#">LinkedIn</a></li>
            <li><a href="#">Twitter</a></li>
            </ul>
        </div>
        <br>
        <input id="ProfileBTN" class="buttonDesign" type="button" onclick="alert('Rediger profil')" value="Lagre endringer">
        </div>
        
        <div id ="profileText" class="col col-3">
            <h3 id="AboutMe">Info om meg:</h3>
            <textarea id="editAboutMe" <?php echo $profileEditAboutMe?>></textarea>
        </div>

        <div id="ProfileProjects" class="col col-3" <?php echo $profileProjects?>>
            
            <article class="projectBoxes">
                <h3>Projekt 3</h3>
                <p></p>
            </article>

            <input id="ProfileBTN" class="buttonDesign" type="button" onclick="alert('Legg til Prosjekt')" value="Legg til prosjekt">
        </div>
      
        <div id="ProfilePopular" class="col col-3">
      
      </div>

  <!-- end projects -->

  </section> <!-- end Main Content -->
	</div> <!-- end container -->
<!-- End of body content field -->
<?php include_once 'footer.php'; ?>