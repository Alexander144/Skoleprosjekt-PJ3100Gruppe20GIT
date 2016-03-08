

<?php

$peopleInProject = array();
$error_msg = ""; 
$count;
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

if (isset($_POST['infotext'])) {
	    $infotext = filter_input(INPUT_POST, 'infotext', FILTER_SANITIZE_STRING);
        die;

if (empty($error_msg)) {
       
        // Insert the new user into the database 
            //Variabel feil, sjekker username opp mot lokal username før den sender inn dataen
     
        header('Location: ./addproject_page.php');
    }

}?>