

<?php


$error_msg = "";
$count;

$likeValue = array();
$likeValue = array_fill_keys(array_values($likeValue), 0);
if($result = $mysqli->query("SELECT * FROM project")){
        $i = 0;
        if($count = $result->num_rows){
            
            while ($row = $result->fetch_object()) {
                    $ProjectID[$i] = $row->ProjectID;
                   $Name[$i] = $row->Name;
                    $Subject[$i] = $row->Subject;
                    $AboutProject[$i] = $row->AboutProject;
                   $i = $i+1;
            }
            $result->free();
        }
    }
if($result2 = $mysqli->query("SELECT * FROM project left join likes on project.ProjectID = likes.ProjectID")){
        $i = 0;
        if($count2 = $result2->num_rows){
            
            while ($row2 = $result2->fetch_object()) {
                    
                    if(!($row2->LikeValue==NULL)){
                        $likeValue[$i]=$likeValue[$i]+1;
                    }
                    else{$likeValue[$i] = 0;}
                   $i = $i+1;
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