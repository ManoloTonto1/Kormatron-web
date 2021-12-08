<?php

session_start();

// check if the session var has been set
//// change the var that needs to be checked
if (!isset($_SESSION['username'])) {
    // if not then send the user back to the login
    header("location:../index.php");
    exit;
}
