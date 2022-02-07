<?php
session_start();
    $servername = "localhost";
    $username = "root";
    $password = "mypass";
    $dbname = "kormatron_";

    print_r($_POST); 
    $id = $_POST['id'];
    $user_id = $_SESSION['id'];
    $old_time = $_POST['time'];
    $time = strtotime("now");
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
      echo "Connection failed";
    }
    
    $query1 = "
    UPDATE toilet_log
    SET last_cleaned = '$time'
    WHERE toilet_id='$id' AND worker_id= '$user_id' AND last_cleaned is NULL AND time='$old_time';
    ";
    $query2 = "
    UPDATE toilet
    SET status = '0'
    WHERE id = '$id'
    ";
    if ($conn->query($query1) && $conn->query($query2) === TRUE) {
      //echo "Record updated successfully";
      echo 'true';
    } else {
      echo "Error updating record: " . $conn->error;
      echo "false";
    }

    //echo $id;
    $conn->close();
