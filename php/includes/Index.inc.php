

<?php
include_once 'db_connect.php';
include_once 'psl-config.php';

$error_msg = "";

if (isset($_POST['infotext'])) {
	    $infotext = filter_input(INPUT_POST, 'infotext', FILTER_SANITIZE_STRING);
}
if (empty($error_msg)) {
       
   if($result = $mysqli->query("SELECT * FROM project")){
        if($result->num_rows){
            
            while ($row = $result->fetch_object()) {
                echo $row->ProjectID;
            }
            $result->free();
        }
    }
}?>