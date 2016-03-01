<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tung?</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
    </head>
    <body>

  <div id="container">
  
  <header id="mainPageHeader" class="col">
    <img src="img/WACT_hovedlogo_sort_rgb.png" class="imgLogo">
      <div class="nav">
      <ul>
        <li class="jobs"><a href="#">Jobber</a></li>
        <li class="addJob"><a href="#">Legg til en stilling</a></li>
        <li class="login"><?php if (login_check($mysqli) == true) {
            echo '<a href="includes/logout.php">Logout?</a>';  
        } else {
                    echo '<a href="login.php">Logg inn</a></li>';        
                }
            ?>
<!-- *******************************************************
Lim inn denne koden for velkomst beskjed i php'en;

echo '<p>Hi ' . htmlentities($_SESSION['username']) .  '.</p>';
************************************************************-->
        </li>
        <li><input id="textfield" name="textfield" type="text" placeholder="Søk" />
        <input type="button" onclick="alert('Search & Find!')" value="Søk">
        </li>
      </ul>
          
    </div>
  </header>
