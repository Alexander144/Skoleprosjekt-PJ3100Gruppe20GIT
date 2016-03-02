

<?php

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

if (isset($_POST['profileEditAboutMe'])||isset($_POST['updateEmailTxt'])) {
	    $profileEditAboutMe =  filter_input(INPUT_POST, "profileEditAboutMe", FILTER_DEFAULT);
        $updateEmailTxt =  filter_input(INPUT_POST, "updateEmailTxt", FILTER_DEFAULT);
         if($updateEmailTxt == ""){
            $updateEmailTxt = $_SESSION['email'];
         }
if (empty($error_msg)) {
       
            //Variabel feil, sjekker username opp mot lokal username før den sender inn dataen
        //Legger til project sitt emne og administrator
        if ($insert_stmt = $mysqli->prepare("UPDATE userprofile LEFT JOIN user on userprofile.UserID = user.ID SET AboutUser = (?), Email = (?) WHERE UserID = '$user_id'")) {
            $insert_stmt->bind_param('ss', $profileEditAboutMe, $updateEmailTxt); 
            // Execute the prepared query.
            if (! $insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
            }

            $_SESSION['email'] = $updateEmailTxt;
            //var_dump($_SESSION['email']); die;
        }
        header('Location: ./editProfile.php');
}
}?>