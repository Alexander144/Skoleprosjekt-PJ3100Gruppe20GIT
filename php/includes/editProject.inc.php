<?php

$projectEditInfotext;
$error_msg = "";

 if($result = $mysqli->query("SELECT * FROM project WHERE ProjectID = '$ProjectID'")){
        if($result->num_rows){
            
            while ($row = $result->fetch_object()) {
                $projectEditInfotext = $row->AboutUser;
                $projectInfotext = $profileEditInfotext;                   
            }
            $result->free();
        }
    }

if (isset($_POST['projectEditInfotext'])||isset($_POST['subject'])) {
	    $profileEditAboutMe =  filter_input(INPUT_POST, "profileEditInfotext", FILTER_DEFAULT);
        $updateEmailTxt =  filter_input(INPUT_POST, "subject", FILTER_DEFAULT);
       //var_dump($_SESSION['uploadImage']); die;
        //var_dump($_SESSION['uploadImageTmp']);die;
         /*if($updateEmailTxt == ""){
            $updateEmailTxt = $_SESSION['email'];*/
         }
if (empty($error_msg)) {
       
            //Variabel feil, sjekker username opp mot lokal username før den sender inn dataen
        //Legger til project sitt emne og administrator
        
        if ($insert_stmt = $mysqli->prepare("UPDATE project LEFT JOIN user on userprofile.UserID = user.ID SET AboutUser = (?), Email = (?) WHERE UserID = '$user_id'")) {
            $insert_stmt->bind_param('ss', $profileEditAboutMe, $updateEmailTxt); 
            // Execute the prepared query.
            if (! $insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
            }
            $null = NULL;
            if ($insert_stmt = $mysqli->prepare("UPDATE userprofile LEFT JOIN user on userprofile.UserID = user.ID SET PictureName = (?) WHERE UserID = '$user_id'")) {
            $insert_stmt->bind_param('s', $_SESSION['uploadImage']); 

            /*$fp = fopen("h18.jpg", "r");
            while(!feof($fp)){
                $insert_stmt->send_long_data(0, fread($fp,8192));
            }*/
            if (! $insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
            }
        }
            $_SESSION['email'] = $updateEmailTxt;
            //var_dump($_SESSION['email']); die;
        }
        header('Location: ./editProfile.php');
}
}?>