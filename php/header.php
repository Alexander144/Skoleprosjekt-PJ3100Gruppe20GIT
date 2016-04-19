<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
include_once 'includes/searchStudResalt.inc.php';

 
//sec_session_start();
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
        <link rel="stylesheet" type="text/css" href="css/mobil.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
        <script src="https://use.typekit.net/zjw7zcq.js"></script>
        <!--favicon-->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <!--End favicon-->
<script>try{Typekit.load({ async: true });}catch(e){}</script>
    </head>
    <body>

  <div id="container">
<!--
      <div id="searchHead" class="col">

      <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>"
                method="post"
                name="updateProfile_form">
            <input type="text" name="searchOnUser" id="searchOnUser" placeholder="Søk" />
          
          <input type="button" id="UpdateBTN" onclick="SearchOnProfile(this.form,this.form.searchOnUser);" value="Søk etter bruker"/>
         </form>

          
        </div>
      
    
      
    <header id="mainPageHeader" class="col">
      <a id="headerLogo" href="index.php"><img src="img/WACT_hovedlogo_sort_rgb.png" class="imgLogo"></a>
        
      <div id="navWeb" class="nav">
        -->
    <header id="mainPageHeader" class="col nav">
      <a id="title" href="index.php"><h2>TUNG?</h2></a>
      <!--<a href="index.php"><img src="img/WACT_hovedlogo_sort_rgb.png" class="imgLogo"></a>-->
      <div class="nav">
      <ul>
        <li id="jobs" class="li-border navHoverEffect"><a href="#">Jobber</a></li>
        <li id="addJob" class="li-border navHoverEffect"><a href="addproject_page.php"> Legg til et prosjekt </a></li>
        <li id="profileLink" class="li-border navHoverEffect"><?php if (login_check($mysqli) == true) { echo '<a href="userinfo_page.php">Profil</a>';
            
        } else{
            echo 'Profil';
            }
              ?>
        </li>
        <li id="loginLogout" class="li-border navHoverEffect">
        <?php if (login_check($mysqli) == true) {
            echo '<a href="includes/logout.php">Logout?</a>';  
        } else {
                    echo '<a href="login.php">Logg inn</a></li>';        
                }
            ?>
<!-- *******************************************************
Lim inn denne koden for velkomst beskjed i php'en;

echo '<p>Hi ' . htmlentities($_SESSION['username']) .  '.</p>';
************************************************************-->  
        </form>
          </li>
      </ul>  
    </div>
    <a href="index.php"><img id="blackWLogo" src="img/WACT_hovedlogo_sort_rgb.png" class="imgLogo">
  </header>
        
    <div class="clearfix"></div>


  <?php include_once 'menu.php'; ?>
