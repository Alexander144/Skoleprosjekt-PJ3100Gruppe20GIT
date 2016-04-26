<?php


$error_msg = "";
      
     $_SESSION['projectEditInfotext'] = isset($_POST['infotextproject']);
      $_SESSION['projectSubject'] =isset($_POST['subject']);
      $_SESSION['projectName'] = isset($_POST['name']);
        $profileEditName = $_SESSION['projectName'];
        $profileEditSubject = $_SESSION['projectSubject'];
        $profileEditInfo = $_SESSION['projectEditInfotext'];
        //if($_SESSION['deleteStudentUsername'] != null && $_SESSION['deleteStudentProjectID']!=null){
           
       //var_dump($_SESSION['uploadImage']); die;
        //var_dump($_SESSION['uploadImageTmp']);die;
         /*if($updateEmailTxt == ""){
            $updateEmailTxt = $_SESSION['email'];*/
if (empty($error_msg)) {
       
   
            //Variabel feil, sjekker username opp mot lokal username før den sender inn dataen
        //Legger til project sitt emne og administrator
        
       
      
             
 

    
        //Delete Uploaded File
        if(isset($_SESSION['deleteFile'])!= ""){
            $_SESSION['deleteFile'] = "";
            $insert_stmt = $mysqli->prepare("DELETE FROM documents WHERE ProjectID = ?");
                
                $insert_stmt->bind_param ('i', $ProjectID);
            if (! $insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
            }
        }
       
        
        //Upload file
        if(isset($_SESSION['uploadFile'])){
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
}
        //Delete Uploaded projectimage
        if(isset($_SESSION['deleteProjectImage'])!= ""){
            $_SESSION['deleteProjectImage'] = "";
            $insert_stmt = $mysqli->prepare("DELETE FROM pictures WHERE ProjectID = ?");
                
                $insert_stmt->bind_param ('i', $ProjectID);
            if (! $insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
            }
        }
    if(isset($_SESSION['uploadProjectImage'])){
    //Upload projectimage
    if($_SESSION['uploadProjectImage']!=""){
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
}



}

           
        
?>
