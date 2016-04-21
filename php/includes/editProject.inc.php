<?php

$projectEditInfotext;
$error_msg = "";

 if($result = $mysqli->query("SELECT * FROM project WHERE ProjectID = '$ProjectID'")){
        if($result->num_rows){
            
            while ($row = $result->fetch_object()) {
                $projectName = $row->Name;
                $projectSubject = $row->Subject;
                $projectEditInfotext = $row->AboutProject;
                                  
            }
            $result->free();
        }
    }

if (isset($_POST['name'])||isset($_POST['subject'])||isset($_POST['infotextproject'])||isset($_POST['picture'])||isset($_POST['link'])||isset($_POST['AddPeople'])||isset($_POST['document'])) {
	    $profileEditName =  filter_input(INPUT_POST, "name", FILTER_DEFAULT);
        $profileEditSubject =  filter_input(INPUT_POST, "subject", FILTER_DEFAULT);
        $profileEditInfo =  filter_input(INPUT_POST, "infotextproject", FILTER_DEFAULT);
        $profileEditPicture =  filter_input(INPUT_POST, "picture", FILTER_DEFAULT);
        $profileEditLink =  filter_input(INPUT_POST, "link", FILTER_DEFAULT);
        $profileEditAddPeople =  filter_input(INPUT_POST, "AddPeople", FILTER_DEFAULT);
        $profileEditAddDocument =  filter_input(INPUT_POST, "document", FILTER_DEFAULT);
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
