

<?php


$error_msg = "";
$count;


if($result = $mysqli->query("SELECT * FROM project")){
        $i = 0;
        if($count = $result->num_rows){
            
            while ($row = $result->fetch_object()) {
                    $ProjectID[$i] = $row->ProjectID;
                   $Name[$i] = $row->Name;
                    $Subject[$i] = $row->Subject;
                    $AboutProject[$i] = $row->AboutProject;
                   $i++;
            }
            $result->free();
        }
    }
    if($SortByAvdeling == true){
    if($result = $mysqli->query("SELECT * FROM project where Avdeling = '$Avdeling' ORDER BY Date DESC")){
        $i = 0;
        if($count = $result->num_rows){
            
            while ($row = $result->fetch_object()) {
                    $ProjectID[$i] = $row->ProjectID;
                   $Name[$i] = $row->Name;
                    $Subject[$i] = $row->Subject;
                    $AboutProject[$i] = $row->AboutProject;
                   $i++;
            }
            $result->free();
        }
    }
}
if($result2 = $mysqli->query("SELECT * FROM project left join likes on project.ProjectID = likes.ProjectID")){
        $i = 0;
        if($count2 = $result2->num_rows){
            $likeValue = array();
            while ($row2 = $result2->fetch_object()) {
                     if(!(isset( $likeValue[$row2->ProjectID]))){
                             $likeValue[$row2->ProjectID] = null;
                     }
                    if($row2->LikeValue==1){


                        $likeValue[$row2->ProjectID]++;

                    }


                    
                   $i++;
            }
            $result2->free();
        }
    }
    

if (true) {
	   

if (empty($error_msg)) {
       
        // Insert the new user into the database 
            //Variabel feil, sjekker username opp mot lokal username før den sender inn dataen
     
     
       
    }

}?>
