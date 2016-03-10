

<?php

$peopleInProject = array();
$error_msg = ""; 
$count;
$VideoInProject =  array();
$OwnProject = false;
if($result = $mysqli->query("SELECT ProjectID,Name, Subject, AboutProject FROM project")){
        if($count = $result->num_rows){
            
            while ($row = $result->fetch_object()) {
                if($row->ProjectID == $ID){
                $ProjectID = $row->ProjectID;
                   $Name = $row->Name;
                    $Subject = $row->Subject;
                    $AboutProject = $row->AboutProject;
                    //$peopleInProject[] = $row->Username: 

               }

            }
            $result->free();
        
        }

    } 
if($result2 = $mysqli->query("SELECT Username,ProjectID FROM userinproject left join user on userinproject.UserID = user.ID")){
        if($count2 = $result2->num_rows){
            $peopleInProject = array();
            while ($row2 = $result2->fetch_object()) {
                if($row2->ProjectID == $ProjectID){
                $peopleInProject[] = $row2->Username;
                if($row2->Username == $username){
                $OwnProject = true;
               }
                    
               }


            }
            $result2->free();
        
        }
        
    }
    if($result3 = $mysqli->query("SELECT ProjectID,YoutubeLink FROM videolink")){
        if($count3 = $result3->num_rows){
            
            while ($row3 = $result3->fetch_object()) {
                if($row3->ProjectID == $ProjectID){
               $VideoInProject[] = $row3->YoutubeLink;
                    
               }

            }
            $result3->free();
        
        }

    } 
    if($result4 = $mysqli->query("SELECT ProjectID,File FROM documents")){
        if($count4 = $result4->num_rows){
            
            while ($row4 = $result4->fetch_object()) {
                if($row4->ProjectID == $ProjectID){
                    $projectFile = $row4->File;
                    
               }else{
                    //Se på denne Natalie, den endrer variablen til URL'en til den samme siden.
                    //Gir en falesafe for udefinerte variabler så den reloader siden.
                    $projectFile = "projectPage.php?ID=$ProjectID";
                }

            }
            $result4->free();
        
        }

    } 
    if($result5 = $mysqli->query("SELECT ProjectID,Picture FROM pictures")){
        if($count5 = $result5->num_rows){

            while ($row5 = $result5->fetch_object()) {
                if($row5->ProjectID == $ProjectID){
                    $projectImage = $row5->Picture;

               }else{
                    $projectImage = "projectPage.php?ID=$ProjectID";
                }

            }
            $result5->free();

        }

    }

if (isset($_POST['infotext'])) {
	    $infotext = filter_input(INPUT_POST, 'infotext', FILTER_SANITIZE_STRING);
        die;

if (empty($error_msg)) {
       
        // Insert the new user into the database 
            //Variabel feil, sjekker username opp mot lokal username før den sender inn dataen
     
        header('Location: ./addproject_page.php');
    }

}?>
