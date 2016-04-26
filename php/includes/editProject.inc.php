<?php


$error_msg = "";
$AddOtherUserID = "";

 if($result = $mysqli->query("SELECT * FROM project WHERE ProjectID = '$ProjectID'")){
        if($result->num_rows){
            
            while ($row = $result->fetch_object()) {
                 $_SESSION['projectName'] = $row->Name;

                $_SESSION['projectSubject'] = $row->Subject;

                
                //$newprojectEdit = $_SESSION['projectEditInfotext'];
                
                $_SESSION['projectEditInfotext'] = $row->AboutProject;
          
                                  
            }
            $result->free();

        }

    }

    //$_SESSION['OldprojectEditInfotext'] = $_SESSION['projectEditInfotext'];
if($result3 = $mysqli->query("SELECT * FROM userinproject left join user on userinproject.UserID = user.ID WHERE ProjectID = '$ProjectID'")){
        if($countID = $result3->num_rows){
            $result4 = $mysqli->query("SELECT * FROM project WHERE ProjectID = '$ProjectID'");
            $row4 = $result4->fetch_object();
            $i = 1;
            while ($row3 = $result3->fetch_object()) {
                if($row4->Creator != $row3->ID){
                $projectUserName[$i] = $row3->Username;
                    $i++;
                }
               
                else{
                    $admin = $row3->Username;
                    
                }
            }
            $projectUserName[0] = $admin;
            $result3->free();
            $result4->free();
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
      

            

if (isset($_POST['name'])||isset($_POST['subject'])||isset($_POST['infotextproject'])||isset($_POST['picture'])||isset($_POST['link'])||isset($_POST['AddPeople'])||isset($_POST['document'])) {
        $profileEditName =  filter_input(INPUT_POST, "name", FILTER_DEFAULT);
        $profileEditSubject =  filter_input(INPUT_POST, "subject", FILTER_DEFAULT);
        $profileEditInfo =  filter_input(INPUT_POST, "infotextproject", FILTER_DEFAULT);
        $profileEditPicture =  filter_input(INPUT_POST, "picture", FILTER_DEFAULT);
        $profileEditLink =  filter_input(INPUT_POST, "link", FILTER_DEFAULT);

        $AddPeople =  filter_input(INPUT_POST, "AddPeople", FILTER_DEFAULT);
        $profileEditAddDocument =  filter_input(INPUT_POST, "document", FILTER_DEFAULT);



      
      
     $_SESSION['projectEditInfotext'] = $_POST['infotextproject'];
      $_SESSION['projectSubject'] = $_POST['subject'];
      $_SESSION['projectName'] = $_POST['name'];
        //if($_SESSION['deleteStudentUsername'] != null && $_SESSION['deleteStudentProjectID']!=null){
           
       //var_dump($_SESSION['uploadImage']); die;
        //var_dump($_SESSION['uploadImageTmp']);die;
         /*if($updateEmailTxt == ""){
            $updateEmailTxt = $_SESSION['email'];*/
if (empty($error_msg)) {
       
        if(isset($_SESSION['deleteStudentFromProject']) == true){
                //echo  $_SESSION['deleteStudentUsername'];
                //echo  $_SESSION['deleteStudentProjectID'];
                //die;
                //var_dump($_SESSION['deleteStudentFromProject']);
            if($insert_stmt = $mysqli->prepare("DELETE userinproject FROM userinproject left join user on userinproject.UserID = user.ID WHERE ProjectID = ? AND Username= ?")){
                $id = 38; $lol = "lol";
                $insert_stmt->bind_param ('is', $_SESSION['deleteStudentProjectID'],$_SESSION['deleteStudentUsername']);
            if (! $insert_stmt->execute()) {
                //header('Location: ../error.php?err=Registration failure: INSERT');
              
             }
              
                 $_SESSION['deleteStudentFromProject'] = false;
                $_SESSION['deleteStudentUsername'] = null;
                $_SESSION['deleteStudentProjectID'] = null;
        // }
 }
}
            //Variabel feil, sjekker username opp mot lokal username før den sender inn dataen
        //Legger til project sitt emne og administrator
        
        $wasError = False;

        if ($insert_stmt = $mysqli->prepare("UPDATE project SET Name = (?), Subject = (?), AboutProject = (?) WHERE ProjectID = '$ProjectID'")) {
            if($_SESSION['projectEditInfotext'] != $_POST['infotextproject'] || $_SESSION['projectSubject'] != $_POST['subject']){
                $profileEditInfo = $_POST['infotextproject'];
                 $profileEditName = $_POST['name'];
                $profileEditSubject = $_POST['subject'];
            }
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

               
        
    }

}?>
