<?php
    $servername = "localhost";
    $username = "root";
    $password = "mypass";
    $dbname = "kormatron_";

    print_r($_POST); 
    $id = $_SESSION['id'].;
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
      echo "Connection failed";
    }
    
    $query = "
    UPDATE user
    SET password = '".$_POST['new_password'])."'
    WHERE id = '".$id."'
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

?>
