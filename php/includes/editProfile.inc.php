

<?php


$YourProjectID = array();
$YourProjectName = array();
$profileEditAboutMe = array();
$YourProjectSubject = array();
$YourProjectAboutProject = array();
$error_msg = "";
 if($result = $mysqli->query("SELECT * FROM userprofile WHERE UserID = '$user_id'")){
        if($result->num_rows){
            
            while ($row = $result->fetch_object()) {
                $profileEditAboutMe = $row->AboutUser;
                $profileAboutUser = $profileEditAboutMe;
                  
                $profileImage = $row->PictureName;
                $gradesName = $row->grades;
                $cvName = $row->CV;
                   
            }
            $result->free();
        }
    }
if($result2 = $mysqli->query("SELECT * FROM project left join userinproject on project.ProjectID = userinproject.ProjectID")){
        if($count2 = $result2->num_rows){
            
            while ($row2 = $result2->fetch_object()) {
                if($row2->UserID == $user_id){
                    $YourProjectID[] = $row2->ProjectID;
                   $YourProjectName[] = $row2->Name;
                    $YourProjectSubject[] = $row2->Subject;
                    $YourProjectAboutProject[] = $row2->AboutProject;
                   }
            }
            $result2->free();
        }
    }
if (isset($_POST['profileEditAboutMe'])||isset($_POST['updateEmailTxt'])) {
	    $profileEditAboutMe =  filter_input(INPUT_POST, "profileEditAboutMe", FILTER_DEFAULT);
        $updateEmailTxt =  filter_input(INPUT_POST, "updateEmailTxt", FILTER_DEFAULT);
       //var_dump($_SESSION['uploadImage']); die;
        //var_dump($_SESSION['uploadImageTmp']);die;
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
            $null = NULL;
            if ($insert_stmt = $mysqli->prepare("UPDATE userprofile LEFT JOIN user on userprofile.UserID = user.ID SET PictureName = (?) WHERE UserID = '$user_id'")) {
            $insert_stmt->bind_param('s', $_SESSION['uploadImage']); 


            if (! $insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
            }
        }
            //Grades
            if ($insert_stmt = $mysqli->prepare("UPDATE userprofile LEFT JOIN user on userprofile.UserID = user.ID SET grades = (?) WHERE UserID = '$user_id'")) {
            $insert_stmt->bind_param('s',  $_SESSION['uploadGrades']);


            if (! $insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
            }
        }
            //CV
            if ($insert_stmt = $mysqli->prepare("UPDATE userprofile LEFT JOIN user on userprofile.UserID = user.ID SET CV = (?) WHERE UserID = '$user_id'")) {
            $insert_stmt->bind_param('s',  $_SESSION['uploadCV']);


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
