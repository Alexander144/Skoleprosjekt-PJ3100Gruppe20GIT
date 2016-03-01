

<?php
include_once 'db_connect.php';
include_once 'psl-config.php';

$error_msg = "";
$ProjectID;
if (isset($_POST['subject'])||isset($_POST['name'])||isset($_POST['infotextproject'])) {
	    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $infotextproject = filter_input(INPUT_POST, 'infotextproject', FILTER_SANITIZE_STRING);
        $AddPeople = filter_input(INPUT_POST, 'AddPeople', FILTER_SANITIZE_STRING);

        $AddUserID = "";
        if($result = $mysqli->query("SELECT * FROM user")){
        if($result->num_rows){
            
            while ($row = $result->fetch_object()) {
                if(!($AddPeople == $username)&&($row->Username == $AddPeople || $AddPeople == ""))
                {
                    $AddOtherUserID = $row->ID;
                    $error_msg = "";
                }
                else{
                    $error_msg = "Add User Not Valid";
                    echo $error_msg;
                }
            }
            $result->free();
        }
    }
if (empty($error_msg)) {
       
            //Variabel feil, sjekker username opp mot lokal username før den sender inn dataen
        //Legger til project sitt emne og administrator
        if ($insert_stmt = $mysqli->prepare("INSERT INTO project(Subject,Name,AboutProject,Creator) VALUES (?,?,?,?)")) {
            $insert_stmt->bind_param('sssi',$subject,$name,$infotextproject, $user_id);
             if (! $insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
            }
        }
       $ProjectID = $mysqli->insert_id;
       $Role = "";
        //Legger til admin i useraccount som viser hvilket prosjekter han er i
        if ($insert_stmt = $mysqli->prepare("INSERT INTO userinproject(ProjectID, UserID, Role) VALUES (?, ?, ?)")) {
            $insert_stmt->bind_param('iis',$ProjectID,$user_id,$Role);
            // Execute the prepared query.
            if (! $insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
            }
        }
        $AddOtherRole = "";
        if ($insert_stmt = $mysqli->prepare("INSERT INTO userinproject(ProjectID, UserID, Role) VALUES (?, ?, ?)")) {
            $insert_stmt->bind_param('iis',$ProjectID,$AddOtherUserID,$AddOtherRole);
            // Execute the prepared query.
            if (! $insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
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
        header('Location: /userinfo_page.php');
}

}?>