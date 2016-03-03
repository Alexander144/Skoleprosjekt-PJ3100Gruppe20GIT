<?php
#-------------------------------------------------------------------------------#
#For og kalle på bilder fra databasen bruk kode snutten under                   #
# merk vi må endre på variabelen $id for og få ut ønsket bilde.                 #
#                                                                               #
#<img style="-webkit-user-select: none" src="http://localhost/blobCodeView.php">#
#                                                                               #
#-------------------------------------------------------------------------------#
    include_once 'includes/db_connect.php';
    include_once 'includes/editProfile.inc.php';
	if (!$mysqli)
		die("Can't connect to MySQL: ".mysqli_connect_error());

		$result = $mysqli->query("SELECT * FROM userprofile WHERE UserID = '$user_id'");
        $result->num_rows;
            
            while ($row = $result->fetch_object()) {
                                     
                    $profileImage = $row->Picture;
                   
            }
            $result->free();

	header("Content-Type: image/jpg");#Bilde vil bli lagt ut som JPG med denne koden
    echo $profileImage; ?>
?>