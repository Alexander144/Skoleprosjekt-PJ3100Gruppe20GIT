

<?php

$peopleInProject = array();
$error_msg = ""; 
$count;
$VideoInProject =  array();
$projectImage = array();
$projectFile = array();
$fileFileName = array();
$OwnProject = false;
echo "Bafddsds";
if (isset($_POST['Delete'])) {
    
        header('Location: ./index.php');
        
        die;
if (empty($error_msg)) {
       if($insert_stmt = $mysqli->prepare("DELETE userinproject FROM userinproject left join user on userinproject.UserID = user.ID WHERE ProjectID = ? AND Username= ?")){
               
                $insert_stmt->bind_param ('i',$ID);
            if (! $insert_stmt->execute()) {
                //header('Location: ../error.php?err=Registration failure: INSERT');
              
             }
             $_SESSION['ID'] = null;
        
    }
        // Insert the new user into the database 
        //Variabel feil, sjekker username opp mot lokal username før den sender inn dataen
     
    }
}


?>
