   <?php

   if($result2 = $mysqli->query("SELECT * FROM user")){
        if($result2->num_rows){
            
            while ($row2 = $result2->fetch_object()) {
               
                if(!($username == $AddPeople||$AddPeople=="")&&$row2->Username == $AddPeople)
                {
                    $AddOtherUserID = $row2->ID;
                    //$_SESSION['addStudentToProject'] = true;
                    $error_msg = "";

                    break;

                }
                elseif ($AddPeople=="") {
                    $AddOtherUserID = null;
                   
                    break;
                }
                else{
                    $error_msg = "";
                    $AddOtherUserID = null;
                  
                }
            }
            $result2->free();
        }
    }

    $AddOtherRole = "";
        if( !($AddOtherUserID == "") && $_SESSION['addStudentToProject'] == true){
            $_SESSION['addStudentToProject'] = false;
        if ($insert_stmt = $mysqli->prepare("INSERT INTO userinproject(ProjectID, UserID, Role) VALUES (?, ?, ?)")) {
           //$ProjectID = (int)$ProjectID;
           //$AddOtherUserID = (int)$AddOtherUserID;

           $AddOtherRole = "";
            $AddOtherUserID = 2;
            $ProjectID = $_SESSION['AddStudentProjectID'];
            $insert_stmt->bind_param('iis',$ProjectID,$AddOtherUserID,$AddOtherRole);
                         // Execute the prepared query.
            if (! $insert_stmt->execute()) {
                   
 
            }
            else{
                if($_SESSION['addStudentToProject'] == false){
                $AddOtherUserID = null;
                //$_SESSION['addStudentToProject'] = true;
            
            
             echo '<script>parent.window.location.reload(true);</script>';
           
        }   
            }
           
            $_SESSION['addStudentToProject'] = false;

            //header("Refresh:0");
        }
    }
    ?>