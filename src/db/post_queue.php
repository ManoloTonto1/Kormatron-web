<?php
session_start();  
    $servername = "localhost";
    $username = "root";
    $password = "mypass";
    $dbname = "kormatron_";

    print_r($_POST); 
    $id = $_POST['id'];
    $user_id = $_SESSION['id'];
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
      echo "Connection failed";
    }
    
    $query = "
    UPDATE toilet_log
    SET worker_id= '$user_id'
    WHERE toilet_id='$id' AND worker_id IS NULL;
    ";
    if ($conn->query($query) === TRUE) {
      //echo "Record updated successfully";
      echo 'true';
    } else {
      //echo "Error updating record: " . $conn->error;
      echo "false";
    }

    //echo $id;
    $conn->close();
