

<?php


$error_msg = "";

$profileUsername = "";
$profileEmail = "";
$searchOnUser = "";
if (isset($_SESSION['searchOnUser'])) { 
  $searchOnUser = $_SESSION['searchOnUser'];
  var_dump($searchOnUser); die;
}
if (empty($error_msg)&&!($searchOnUser == "")) {
       if($result = $mysqli->query("SELECT Username,Email FROM user")){
        if($count = $result->num_rows){
            while ($row = $result->fetch_object()) {
                
                if($searchOnUser == $row->Username){
                   $profileUsername = $row->Username;
                   $profileEmail = $row->Email;
                   //header('Location: ./searchStudResalt.php');
               }
            }
            $result->free();
        }
    }
        // Insert the new user into the database 
            //Variabel feil, sjekker username opp mot lokal username før den sender inn dataen
     

}?>