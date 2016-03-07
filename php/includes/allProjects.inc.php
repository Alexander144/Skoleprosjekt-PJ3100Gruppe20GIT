

<?php


$error_msg = "";
$count;
$i = 0;
if($result = $mysqli->query("SELECT * FROM project")){
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
if (isset($_POST['infotext'])) {
	    $infotext = filter_input(INPUT_POST, 'infotext', FILTER_SANITIZE_STRING);
        die;

if (empty($error_msg)) {
       
        // Insert the new user into the database 
            //Variabel feil, sjekker username opp mot lokal username før den sender inn dataen
     
        header('Location: ./addproject_page.php');
    }

}?>