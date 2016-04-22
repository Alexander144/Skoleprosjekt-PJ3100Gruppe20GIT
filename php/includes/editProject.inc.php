<?php


$error_msg = "";
$AddOtherUserID = "";

 if($result = $mysqli->query("SELECT * FROM project WHERE ProjectID = '$ProjectID'")){
        if($result->num_rows){
            
            while ($row = $result->fetch_object()) {
                $projectName = $row->Name;
                $projectSubject = $row->Subject;
                $oldprojectEdit = $_SESSION['OldprojectEditInfotext'];
                $newprojectEdit = $_SESSION['projectEditInfotext'];
                
                $_SESSION['projectEditInfotext'] = $row->AboutProject;
          
                                  
            }
            $result->free();

        }

    }

    //$_SESSION['OldprojectEditInfotext'] = $_SESSION['projectEditInfotext'];
 if($result3 = $mysqli->query("SELECT * FROM userinproject left join user on userinproject.UserID = user.ID WHERE ProjectID = '$ProjectID'")){
        if($countID = $result3->num_rows){
            
            while ($row3 = $result3->fetch_object()) {
                $projectUserName[] = $row3->Username;
            }
            $result3->free();
        }
    }


    if(isset($AddPeople) ){
        if($result2 = $mysqli->query("SELECT * FROM user")){
        if($result2->num_rows){
            
            while ($row2 = $result2->fetch_object()) {
               
                if(!($username == $AddPeople||$AddPeople=="")&&$row2->Username == $AddPeople)
                {
                    $AddOtherUserID = $row2->ID;
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
            $result2->free();
        }
    }
}
 if(isset($deleteprojectUserName)){
   
            if($deleteStudentFromProject==true){
            
            if($insert_stmt = $mysqli->prepare("DELETE FROM userinproject left join user on userinproject.UserID = user.ID WHERE ProjectID = ?, Username= ?")){
                $id = 38; $lol = "lol";
                $insert_stmt->bind_param ('is', $ProjectID,$deleteprojectUserName);
            if (! $insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
             }
         }
     }
}
            

if (isset($_POST['name'])||isset($_POST['subject'])||isset($_POST['infotextproject'])||isset($_POST['picture'])||isset($_POST['link'])||isset($_POST['AddPeople'])||isset($_POST['document'])) {
        $profileEditName =  filter_input(INPUT_POST, "name", FILTER_DEFAULT);
        $profileEditSubject =  filter_input(INPUT_POST, "subject", FILTER_DEFAULT);
        $profileEditInfo =  filter_input(INPUT_POST, "infotextproject", FILTER_DEFAULT);
        $profileEditPicture =  filter_input(INPUT_POST, "picture", FILTER_DEFAULT);
        $profileEditLink =  filter_input(INPUT_POST, "link", FILTER_DEFAULT);

        $AddPeople =  filter_input(INPUT_POST, "AddPeople", FILTER_DEFAULT);
        $profileEditAddDocument =  filter_input(INPUT_POST, "document", FILTER_DEFAULT);



        if($result2 = $mysqli->query("SELECT * FROM user")){
        if($result2->num_rows){
            
            while ($row2 = $result2->fetch_object()) {
               
                if(!($username == $AddPeople||$AddPeople=="")&&$row2->Username == $AddPeople)
                {
                    $AddOtherUserID = $row2->ID;
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
            $result2->free();
        }
    }

      
        

       //var_dump($_SESSION['uploadImage']); die;
        //var_dump($_SESSION['uploadImageTmp']);die;
         /*if($updateEmailTxt == ""){
            $updateEmailTxt = $_SESSION['email'];*/
if (empty($error_msg)) {
       
            //Variabel feil, sjekker username opp mot lokal username før den sender inn dataen
        //Legger til project sitt emne og administrator
        
        $wasError = False;

        if ($insert_stmt = $mysqli->prepare("UPDATE project SET Name = (?), Subject = (?), AboutProject = (?) WHERE ProjectID = '$ProjectID'")) {

            $insert_stmt->bind_param('sss', $profileEditName, $profileEditSubject,$profileEditInfo); 
            // Execute the prepared query.
            if (! $insert_stmt->execute()) {
                $wasError = True;
            }

        }
             $AddOtherRole = "";
        if(!($AddOtherUserID == null)){
        if ($insert_stmt = $mysqli->prepare("INSERT INTO userinproject(ProjectID, UserID, Role) VALUES (?, ?, ?)")) {
           $ProjectID = (int)$ProjectID;
           $AddOtherUserID = (int)$AddOtherUserID;
           $AddOtherRole = "";
           
            $insert_stmt->bind_param('iis',$ProjectID,$AddOtherUserID,$AddOtherRole);
            // Execute the prepared query.
            if (! $insert_stmt->execute()) {
                echo '<script language="javascript">';
                echo 'alert("User are allready in this project")';
                echo '</script>';
                //header('Location: ../error.php?err=Registration failure: INSERT userinproject2');
            }
        }
    }


        //Youtube link
        if(! ($_POST['link']=="" )){
         if ($insert_stmt = $mysqli->prepare("INSERT INTO videolink(ProjectID,YoutubeLink) VALUES (?, ?)")) {
                $insert_stmt->bind_param('is',$ProjectID ,$profileEditLink);
                // Execute the prepared query.
                if (! $insert_stmt->execute()) {
                    $wasError = True;
                }
            }
        }

        //Delete Uploaded File
        if(($_SESSION['deleteFile'])!= ""){
            $_SESSION['deleteFile'] = "";
            $insert_stmt = $mysqli->prepare("DELETE FROM documents WHERE ProjectID = ?");
                
                $insert_stmt->bind_param ('i', $ProjectID);
            if (! $insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
            }
        }
       
        
        //Upload file
        if($_SESSION['uploadFile']!=""){
        if ($insert_stmt = $mysqli->prepare("INSERT INTO documents(ProjectID, File) VALUES (?, ?)")){
               $ProjectID = (int)$ProjectID;
                $insert_stmt->bind_param('is',$ProjectID, $_SESSION['uploadFile']);
             // Execute the prepared query.
            if (! $insert_stmt->execute()) {
                $wasError = True;
                }
            else{
                $_SESSION['uploadFile'] = "";
            }
            }
        }

        //Delete Uploaded projectimage
        if(($_SESSION['deleteProjectImage'])!= ""){
            $_SESSION['deleteProjectImage'] = "";
            $insert_stmt = $mysqli->prepare("DELETE FROM pictures WHERE ProjectID = ?");
                
                $insert_stmt->bind_param ('i', $ProjectID);
            if (! $insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
            }
        }
    
    //Upload projectimage
    if(($_SESSION['uploadProjectImage'])!=""){
            if ($insert_stmt = $mysqli->prepare("INSERT INTO pictures(ProjectID, Picture) VALUES (?, ?)")){
                $insert_stmt->bind_param('is',$ProjectID, $_SESSION['uploadProjectImage']);
             // Execute the prepared query.
                if (! $insert_stmt->execute()) {
                    $wasError = True;
                }
                else{
                $_SESSION['uploadProjectImage'] = "";
            }
            }
        }


/*if($wasError){header('Location: ../error.php?err=Registration failure: INSERT');}
    else {header('Location: ./editproject_page.php');}*/



           
        
    }

}?>
