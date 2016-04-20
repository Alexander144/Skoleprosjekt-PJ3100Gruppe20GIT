<div id="sortingMenu" class="sort-container col"> <!-- start sorting content-->
    <ul>
        <li class="sort-workBy sortMenu"><a href="#" <?php $sortProject; ?>>Arbeid av</a>
            <ul>
                <li><a href="allProjects.php" <?php $sortProjectStudent; ?>>Student</a></li>
                <li><a href="allProjects.php" <?php $sortProjectAlumni; ?>>Alumni</a></li>
            </ul>
        </li>

        <li class="sort-program sortMenu" <?php $sortProgram; ?>><a id="avd" href="#">Avdeling</a>
            <ul>
                <li><a id="Teknologi" class="tek" href="?Teknologi">Teknologi/IT</a>                <ul>
                    <li><a id="tekProg" class="tek" href="#" <?php $sortProgramTeknologi; ?>>Programmering</a></li>
                    <li><a id="tekUX" href="#" <?php $sortProgramTeknologi; ?>>Interaktivt Design</a></li>
                    <li><a id="tekSpillProg" href="#" <?php $sortProgramTeknologi; ?>>Spillprogrammering</a></li>
                    <li><a id="tekSpillDesign" href="#" <?php $sortProgramTeknologi; ?>>Spilldesign</a></li>
                    <li><a id="tekIS" href="#" <?php $sortProgramTeknologi; ?>>Intelligente Systemer</a></li>
                </ul></li>
                <li><a id="Ledelse" href="?Ledelse" <?php $sortProgramLedelse; ?>>Ledelse</a></li>
                <li><a id="Kommunikasjon" href="?Kommunikasjon" <?php $sortProgramKommunikasjon; ?>>Kommunikasjon</a></li>
                <li><a id="Kunstfag" href="?Kunstfag" <?php $sortProgramKunstfag; ?>>Kunstfag</a></li>
                <li><a id="FilmTVSpill" href="?FilmTvSpill" <?php $sortProgramFilmTVSpill; ?>>Film, TV og Spill</a></li>
            </ul>
        </li>

        <li class="sort-orderBy sortMenu" <?php $sortBy; ?>><a href="#">Rekkefølge</a>
            <ul>
                <li><a href="?MostPopular" >Mest Populære</a></li>
                <li><a href="?Nyeste">Nyeste</a></li>
            </ul>
        </li>
        
        <div id="searchField">
            <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>"
                method="post"
                name="updateProfile_form">
            <input type="text" name="searchOnUser" id="searchOnUser" placeholder="Søk" />
            <input type="button" class="smallUploadBtn" onclick="SearchOnProfile(this.form,this.form.searchOnUser);" value="Søk etter bruker"/>
            </form>
        </div>
    </ul>
    
</div>

