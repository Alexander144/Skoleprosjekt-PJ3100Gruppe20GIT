<?php include_once 'header.php'; ?>
<!-- Entry of body content field for index below -->


  <section id="mainCreateProject"> <!-- start Main Content -->
      
      <!-- CP = SHORT FOR CREATE PROJECT -->
      
      <!-- start upload project -->
      <div id="uploadCreateProject" class="col">
        <!-- upload file -->
          <input id="uploadCPBtn" class="upload" type="button" value="Last opp fil" name="Upload Btn" <?php echo $uploadFile; ?> >
          <!-- link to file -->
          <a id="linkCreateProjectFile" class="upload" href="http://www.aftenposten.no"><p>Eller link til andre medier</p></a>
      </div>
      
      <div class="clearfix"></div>
      
      <div id="nameFileCreateProject" class="col">
            <p id="nameProjectCP" class="">Navn på prosjekt:</p>
            <input id="nameProjectCPTxt" class=""type="text" name="Name Project" <?php echo $projectName; ?>>
      </div>
      
      <div class="clearfix"></div>
      
      <div id="description" class="col">
          <p id="descProjCP" class="">Beskrivelse:</p>
          <textarea id="descProjCPTxt" <?php echo $projectDescr; ?>></textarea>
      </div>
      
      <div class="clearfix"></div>
      
      <div id="addStudents" class="col">
          <p id="addStudentCP" class="">Legg til andre studenter:</p>
          <input id="addStudentCPTxt" type="text" name="Add Students" <?php echo $chooseStudent; ?>>
      </div>
      
      <div class="clearfix"></div>
      
      <div id="addTeacher" class="col">
        <p id="addTeacherCP" class="">Legg til lærer:</p>
        <input id="addTeacherCPTxt" type="text" name="Add Teacher" <?php echo $chooseTeacher; ?>>
      </div>
      
      <div class="clearfix"></div>
      
      <div id="studyTopic" class="col">
        <p id="studyTopicCP" class="">Emne:</p>
        <input id="studyTopicCPTxt" class="" type="text" name="Choose Study Topic" <?php echo $chooseTopic; ?>>
      </div>
      
      <div class="clearfix"></div>
      
      <div id="publish" class="col">
          <!-- publish file -->
          <input id="publishCPBtn" class="publishBtn" type="button" value="Publiser" name="Publish Button" <?php echo $uploadProject; ?>>
          <!-- preview file -->
          <input id="previewCPBtn" class="publishBtn" type="button" value="Forhåndsvisning" name="Preview Button" <?php echo $previewFile; ?>>
      </div>

      <!-- end upload project -->

  </section> <!-- end Main Content -->
	</div> <!-- end container -->

<!-- End of body content field -->
<?php include_once 'footer.php'; ?>