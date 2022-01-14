<?php
session_start();

    $servername = "localhost";
    $username = "root";
    $password = "mypass";
    $dbname = "kormatron_";
 
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $new_pass = $_POST['new_pass'];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
      echo "Connection failed";
    }
    
    $query = "UPDATE user SET pincode = '$new_pass' WHERE user.first_name = 'shaq' AND user.lastname = 'boktor'";
    echo $conn->query($query);
    if ($conn->query($query) === TRUE) {
      //echo "Record updated successfully";
      echo 'true';
    } else {
      //echo "Error updating record: " . $conn->error;
      echo "false";
    }

    //echo $id;
    $conn->close();
