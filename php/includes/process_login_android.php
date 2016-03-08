<?php
include_once 'db_connect.php';
include_once 'functions.php';
 
sec_session_start(); // Function from functions.php for a secure way of starting a php session.
 return 1;
if (isset($_POST['Email'], $_POST['Password'])) {

    $email = $_POST['email'];
    $password = $_POST['p']; // The hashed password.
 
    if (login($email, $password, $mysqli) == true) {
        // Login success 
        
    } else {
        // Login failed 
       
    }
} else {
    // The correct POST variables were not sent to this page. 
   
}