<?php include_once 'header.php'; ?>
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

  <!-- start projects -->

    <article class="col col-3 projectBoxes" <?php $projectBox1; ?>>
      <h3>Prosjekt 1</h3>
      <p></p>
    </article>

    <article class="col col-3 projectBoxes" <?php $projectBox2; ?>>
      <h3>Prosjekt 2</h3>
      <p></p>
    </article>

    <article class="col col-3 projectBoxes" <?php $projectBox3; ?>>
      <h3>Prosjekt 3</h3>
      <p></p>
    </article>

    <article class="col col-3 projectBoxes" <?php $projectBox4; ?>>
      <h3>Prosjekt 4</h3>
      <p></p>
    </article>
      
    <article class="col col-3 projectBoxes" <?php $projectBox5; ?>>
      <h3>Prosjekt 5</h3>
      <p></p>
    </article>
      
    <article class="col col-3 projectBoxes" <?php $projectBox6; ?>>
      <h3>Prosjekt 6</h3>
      <p></p>
    </article>
      
    <article class="col col-3 projectBoxes" <?php $projectBox7; ?>>
      <h3>Prosjekt 7</h3>
      <p></p>
    </article>
      
    <article class="col col-3 projectBoxes" <?php $projectBox8; ?>>
      <h3>Prosjekt 8</h3>
      <p></p>
    </article>

  <!-- end projects -->

  </section> <!-- end Main Content -->
	</div> <!-- end container -->
<!-- End of body content field -->
<?php include_once 'footer.php'; ?>