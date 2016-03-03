<?php include_once 'header.php'; ?>

<!--Send profilbildeStudent.jpg til databasen.-->

<?php
    #--------------------------------------------------------------#
    #Ved kjøring av koden under vil du laste opp bilde manIcon.png #
    #Det vil si når vi åpner denne filen i nettleseren vil filen   #
    #bli lastet opp.                                               #
    #                                                              #
    #Vi må lage en variabel for filen som skal bli lastet opp      #
    #--------------------------------------------------------------#
	if (!$mysqli)
		die("Can't connect to MySQL: ".mysqli_connect_error());

	$stmt = $mysqli->prepare("INSERT INTO images (image) VALUES(?)");
	$null = NULL;
	$stmt->bind_param("b", $null);
    
    
    /*Legge til variabel på linjen under for og legge til knapp istedenfor og hente rett fra maskinen*/ 
	$stmt->send_long_data(0, file_get_contents("manIcon.png"));

	$stmt->execute();


?>

<?php include_once 'footer.php'; ?>