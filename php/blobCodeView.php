<?php
#-------------------------------------------------------------------------------#
#For og kalle på bilder fra databasen bruk kode snutten under                   #
# merk vi må endre på variabelen $id for og få ut ønsket bilde.                 #
#                                                                               #
#<img style="-webkit-user-select: none" src="http://localhost/blobCodeView.php">#
#                                                                               #
#-------------------------------------------------------------------------------#
    include_once 'includes/db_connect.php';
	if (!$mysqli)
		die("Can't connect to MySQL: ".mysqli_connect_error());


	$id=8; #Id på bilde som blir hentet ut.  
	$stmt = $mysqli->prepare("SELECT image FROM images WHERE id=?"); 
	$stmt->bind_param("i", $id);

	$stmt->execute();
	$stmt->store_result();

	$stmt->bind_result($image);
	$stmt->fetch();

	header("Content-Type: image/jpg");#Bilde vil bli lagt ut som JPG med denne koden
    echo $image; ?>
?>