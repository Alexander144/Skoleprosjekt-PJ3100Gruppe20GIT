

<?php


$error_msg = "";
if($result = $mysqli->query("SELECT * FROM project left join userinproject on project.ProjectID = userinproject.ProjectID ORDER BY Date desc limit 4")){
        if($count = $result->num_rows){
            
            while ($row = $result->fetch_object()) {
                if($row->UserID == $profileID){
                    $YourProjectID[] = $row->ProjectID;
                   $YourProjectName[] = $row->Name;
                    $YourProjectSubject[] = $row->Subject;
                    $YourProjectAboutProject[] = $row->AboutProject;
                   }
            }
            $result->free();
        }
    }

if (isset($_SESSION['searchOnUser'])) { 
 

if (empty($error_msg)) {
    
        }
        // Insert the new user into the database 
            //Variabel feil, sjekker username opp mot lokal username før den sender inn dataen

}?>