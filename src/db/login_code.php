<?php

    $servername = "localhost";
    $username = "root";
    $password = "mypass";
    $dbname = "kormatron_";

    print_r($_POST); 
    $uName = $_POST['bokkie'];
    $pWord = $_POST['WW'];
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
      echo "Connection failed";
    }
    
    $query = "select * from user where first_name ='$uName' and pincode = '$pWord'";
    if ($conn->query($query)->num_rows == 1) {
        header("location:../mainmenu.php");
    } else {
      print_r($conn->query($query));
      header("location:../../index.php");
    }

    //echo $id;
    $conn->close();
