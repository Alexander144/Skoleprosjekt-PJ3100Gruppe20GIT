

<?php
sec_session_start();

$error_msg = "";

$searchOnUser = "";

if (isset($_POST['searchOnUser'])) { 
  $searchOnUser = filter_input(INPUT_POST, 'searchOnUser', FILTER_SANITIZE_STRING);
  
if (empty($error_msg)&&!($searchOnUser == "")) {
       if($result = $mysqli->query("SELECT Username,Email,Picture, AboutUser, CV FROM user left join userprofile on user.ID = userprofile.UserID")){
        if($count = $result->num_rows){
            while ($row = $result->fetch_object()) {
                
                if($searchOnUser == $row->Username){
                   $_SESSION["profileUsername"] = $row->Username;
                   $_SESSION["profileEmail"] = $row->Email;
                   $_SESSION["profileAboutUser"] = $row->AboutUser;

                   
                   $result->free();
                   header('Location: ./searchStudResalt.php');
               }
            }
        }
        
    }
        // Insert the new user into the database 
            //Variabel feil, sjekker username opp mot lokal username før den sender inn dataen
     
    }
    echo "User do not exist";

}?>