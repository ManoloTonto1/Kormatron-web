<?php
// database login gegevens

//// add correct values here
$db_hostname ='localhost';
$db_username ='';
$db_password ='';
$db_database ='';

//maak verbinding
$mysqli = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

// check if connection was made succesfully
if (!$mysqli){
    echo"fout geen connectie met database";
    echo"Error: " . mysqli_connect_error() . "<br/>";
    echo"Errno: " . mysqli_connect_errno() . "<br/>";
    exit;
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>