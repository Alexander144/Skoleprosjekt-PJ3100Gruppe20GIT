

<?php
include_once 'db_connect.php';

 if(isset($_GET['Method']) && isset($_GET['ID'])&&isset($_GET['Username'])){
    if($_GET['Method'] == "Insert"){
           $id = (int)$_GET['ID'];
           $username = $_GET['Username'];
           $value = 1;

        if ($insert_stmt = $mysqli->prepare("INSERT INTO likes(ProjectID, LikeValue ,Username) VALUES (?, ?, ?)")) {
            $insert_stmt->bind_param('iis',$id,$value,$username);
            // Execute the prepared query.
            if (! $insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
            }
            
        }
        $insert_stmt->close();
    }

    }

 if(isset($_GET['Method']) &&isset($_GET['ID'])&&isset($_GET['Username'])){
     if($_GET['Method'] == "Delete"){
           $id = (int)$_GET['ID'];
           $username = (string)$_GET['Username'];
           $value = 1; 
            
             if ($delete_stmt = $mysqli->prepare("DELETE FROM likes WHERE ProjectID = ? AND Username = ?")) {
            $delete_stmt->bind_param('is',$id,$username);
            // Execute the prepared query.
            if (! $delete_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
            }  
        }
        $delete_stmt->close();   
    }
}
if (isset($_POST['infotext'])) {
	    $infotext = filter_input(INPUT_POST, 'infotext', FILTER_SANITIZE_STRING);
        die;

if (empty($error_msg)) {
       
        // Insert the new user into the database 
            //Variabel feil, sjekker username opp mot lokal username før den sender inn dataen
     
        //header('Location: ./addproject_page.php');
       
    }

}?>