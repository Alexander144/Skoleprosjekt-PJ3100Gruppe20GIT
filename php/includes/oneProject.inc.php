

<?php


$error_msg = "";
$count;

if($result = $mysqli->query("SELECT * FROM project")){
        if($count = $result->num_rows){
            
            while ($row = $result->fetch_object()) {
                if($row->ProjectID == 7){
                   $Name = $row->Name;
                    $Subject = $row->Subject;
                    $AboutProject = $row->AboutProject;
               }
            }
            $result->free();
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