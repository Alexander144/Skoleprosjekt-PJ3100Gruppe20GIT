<?php include_once 'header.php'; ?>
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

    <div id="profileBasicInfo" class="col col-3">
        <h1>Studentens navn</h1>
        <img id="profilePic" src="img/profilbildeStudent.jpg" alt="Profilbilde av studenten (Mr. Bean)">
        <div>
            <h1>Andre sider jeg er med på:</h1>
            <ul id="linksForProfile">
            <li><a href="#">Facebook</a></li>
            <li><a href="#">LinkedIn</a></li>
            <li><a href="#">Twitter</a></li>
            </ul>
        </div>
        <br>
        <input id="ProfileBTN" class="buttonDesign" type="button" onclick="alert('Rediger profil')" value="Rediger Profil">
        </div>
        
        <div id ="profileText" class="col col-3">
            <h3 id="AboutMe">Info om meg:</h3>
            <p>Med 17 års fartstid i bransjen har Are vært borti de fleste problemstillinger rundt web og interaktive medier. Han har hatt en finger med i en rekke av landets mest profilerte nettsteder og intranett.
Are Gjertin Urkegjerde Halland
Han har vært en sentral skikkelse i fagmiljøet, og grunnla blant annet det faglige nettverket UXnet. Han er også hjernen bak Netlife Research sin egen “kjernemodell".

Are brenner for å skape gode brukeropplevelser som bygger bro mellom brukerbehov, strategi, innhold og design. Han har spisskompetanse på blant annet konsept, strategi, navigasjon, søk og innhold.

Faglig har han bakgrunn fra medievitenskap hovedfag ved Universitetet i Oslo og informasjonsutdanninga ved Høgskulen i Volda, og har jobbet i Netlife Research siden 2006. Før dette jobbet han som nettjournalist i Norges første internett-portal Origo fra 1995-97 og fra 1998-2006 som informasjonsarkitekt i Neo Interaktiv, Icon Medialab og WM-data UX.</p>
        </div>

        <div id="ProfileProjects" class="col col-3">
            <h1>Mine Projekter:</h1>
            <article class="projectBoxes">
                <h3>Projekt 1</h3>
                <p></p>
            </article>
            <article class="projectBoxes">
                <h3>Projekt 2</h3>
                <p></p>
            </article>
            <article class="projectBoxes">
                <h3>Projekt 3</h3>
                <p></p>
            </article>
            <br>
            <input id="ProfileBTN" class="buttonDesign" type="button" onclick="alert('Legg til Prosjekt')" value="Legg til prosjekt">
        </div>
      
        <div id="ProfilePopular" class="col-3">
      
      </div>

  <!-- end projects -->

  </section> <!-- end Main Content -->
	</div> <!-- end container -->
<!-- End of body content field -->
<?php include_once 'footer.php'; ?>