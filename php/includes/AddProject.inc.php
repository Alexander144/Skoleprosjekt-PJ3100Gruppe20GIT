

<?php

$error_msg = "";
$ProjectID;
$AddOtherUserID;
$Avdeling = "";
if (isset($_POST['subject'])||isset($_POST['name'])||isset($_POST['infotextproject'])||isset($_POST['Avdeling'])) {
        $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $infotextproject = filter_input(INPUT_POST, 'infotextproject', FILTER_DEFAULT);
        $AddPeople = filter_input(INPUT_POST, 'AddPeople', FILTER_SANITIZE_STRING);
        $Avdeling = $_SESSION['Avdeling'];
    
        if($result = $mysqli->query("SELECT * FROM user")){
        if($result->num_rows){
            
            while ($row = $result->fetch_object()) {
               
                if(!($username == $AddPeople||$AddPeople=="")&&$row->Username == $AddPeople)
                {
                    $AddOtherUserID = $row->ID;
                    $error_msg = "";
                    break;

                }
                elseif ($AddPeople=="") {
                    $AddOtherUserID = null;
                    break;
                }
                else{
                    $error_msg = "Add User Not Valid";
                    $AddOtherUserID = null;
                    

                }
            }
            $result->free();
        }
    }

if (empty($error_msg)) {
       
            //Variabel feil, sjekker username opp mot lokal username før den sender inn dataen
        //Legger til project sitt emne og administrator

        if ($insert_stmt = $mysqli->prepare("INSERT INTO project(Subject,Name,AboutProject,Creator,Avdeling) VALUES (?,?,?,?,?)")) {
            $insert_stmt->bind_param('sssis',$subject,$name,$infotextproject, $user_id, $Avdeling);
             if (! $insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT Project');
            }
        }
       $ProjectID = $mysqli->insert_id;
   
       $Role = "";
        //Legger til admin i useraccount som viser hvilket prosjekter han er i
        if ($insert_stmt = $mysqli->prepare("INSERT INTO userinproject(ProjectID, UserID, Role) VALUES (?, ?, ?)")) {
            $insert_stmt->bind_param('iis',$ProjectID,$user_id,$Role);
            // Execute the prepared query.
            if (! $insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT userinproject');
            }
        }
        $AddOtherRole = "";
        if(!($AddOtherUserID == null)){
        if ($insert_stmt = $mysqli->prepare("INSERT INTO userinproject(ProjectID, UserID, Role) VALUES (?, ?, ?)")) {
            $insert_stmt->bind_param('iis',$ProjectID,$AddOtherUserID,$AddOtherRole);
            // Execute the prepared query.
            if (! $insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT userinproject2');
            }
        }
    }
    //legger til prosjektet info, navn, osv
       // if ($insert_stmt = $mysqli->prepare("UPDATE projectinfo SET ProjectName = (?), Info = (?) WHERE project_ProsjectID = '$ProjectID'")) {
         //   $insert_stmt->bind_param('ss',$name,$infotextproject); 
            // Execute the prepared query.
           // if (! $insert_stmt->execute()) {
             //   header('Location: ../error.php?err=Registration failure: INSERT');
            //}
        //}
        //header('Location: ./index.php');

}


}?>
