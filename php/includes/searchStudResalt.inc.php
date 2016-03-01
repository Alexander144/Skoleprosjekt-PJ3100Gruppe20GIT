

<?php


$error_msg = "";
$profileUsername;
$profileEmail;
$textfield = $_SESSION['textfield'];
if (!($textfield == "")) {
	    

if (empty($error_msg)&&!($textfield == "")) {
       if($result = $mysqli->query("SELECT Username,Email FROM user")){
        if($count = $result->num_rows){
            while ($row = $result->fetch_object()) {
                
                if($textfield == $row->Username){
                   $profileUsername = $row->Username;
                   $profileEmail = $row->Email;
                   //header('Location: ./searchStudResalt.php');
               }
            }
            $result->free();
        }
    }
        // Insert the new user into the database 
            //Variabel feil, sjekker username opp mot lokal username før den sender inn dataen
     
    }

}?>