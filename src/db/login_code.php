<?php
    Session_start();

    $servername = "localhost";
    $username = "root";
    $password = "mypass";
    $dbname = "kormatron_";

    print_r($_POST); 
    $uName = $_POST['username'];
    $pWord = $_POST['password'];
    $lang = $_POST['lang'];
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
      echo "Connection failed";
    }
    
    $query = "select * from user where first_name ='$uName' and pincode = '$pWord'";
    print_r($conn->query($query)->fetch_assoc()); 
    $result = $conn->query($query)->fetch_assoc();
    if ($result['pincode'] === $pWord) {
      session_start();
      echo 'true';
      $_SESSION['first_name'] = $result['first_name'];
      $_SESSION['last_name'] = $result['last_name'];
      $_SESSION['id'] = $result['id'];
      $_SESSION['language'] = $lang;
      $conn->close();
    } 
    else {
      echo 'false';
    }

  
