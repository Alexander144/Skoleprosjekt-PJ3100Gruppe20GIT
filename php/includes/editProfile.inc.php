

<?php
include_once 'db_connect.php';
include_once 'psl-config.php';
$studentName = htmlentities($_SESSION['username']);
$user_id = htmlentities($_SESSION['user_id']); 
$profileEditAboutMe;
$error_msg = "";
 if($result = $mysqli->query("SELECT * FROM userprofile WHERE UserID = '$user_id'")){
        if($result->num_rows){
            
            while ($row = $result->fetch_object()) {
                   $profileEditAboutMe = $row->AboutUser;
            }
            $result->free();
        }
    }

if (isset($_POST['profileEditAboutMe'])) {
	    $profileEditAboutMe =  filter_input(INPUT_POST, "profileEditAboutMe", FILTER_DEFAULT);
if (empty($error_msg)) {
       
            //Variabel feil, sjekker username opp mot lokal username før den sender inn dataen
        //Legger til project sitt emne og administrator
        if ($insert_stmt = $mysqli->prepare("UPDATE userprofile SET AboutUser = (?) WHERE UserID = '$user_id'")) {
            $insert_stmt->bind_param('s', $profileEditAboutMe); 
            // Execute the prepared query.
            if (! $insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
            }
        }
        header('Location: /editProfile.php');
}
}?>