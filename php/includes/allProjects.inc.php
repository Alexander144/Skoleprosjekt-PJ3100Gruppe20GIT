

<?php


$error_msg = "";
$count;
$count3;

if($result = $mysqli->query("SELECT * FROM project ORDER BY Date DESC")){
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
    if($result1 = $mysqli->query("SELECT * FROM project where Avdeling = '$Avdeling' ORDER BY Date DESC")){
        $i = 0;
        if($count = $result1->num_rows){
            
            while ($row1 = $result1->fetch_object()) {
                    $ProjectID[$i] = $row1->ProjectID;
                   $Name[$i] = $row1->Name;
                    $Subject[$i] = $row1->Subject;
                    $AboutProject[$i] = $row1->AboutProject;
                   $i++;
            }
            $result1->free();
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

     if($result3 = $mysqli->query("SELECT * FROM likes where Username = '$username'")){
 
        $i = 0;
        if($count3 = $result3->num_rows){
              
            while ($row3 = $result3->fetch_object()) {
                   $ProjectIDLike[$i] = $row3->ProjectID;

                    
                   $i++;
            }
            $result3->free();
        }
        else{
            $count3 = 0;
            $ProjectIDLike = null;

        }
    }


if (true) {
	   

if (empty($error_msg)) {
       
        // Insert the new user into the database 
            //Variabel feil, sjekker username opp mot lokal username før den sender inn dataen
     
     
       
    }

}?>
