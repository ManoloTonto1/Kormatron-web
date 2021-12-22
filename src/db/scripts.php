<?php

function get_toilets(){
  $servername = "localhost";
  $username = "root";
  $password = "mypass";
  $dbname = "kormatron_";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $query = "
  SELECT DISTINCT toilet.id, toilet.location,toilet.type,toilet.status,toilet_log.time
  FROM toilet
  INNER JOIN toilet_log ON toilet.id=toilet_log.toilet_id
  where toilet_log.worker_id is NULL AND toilet.status='1';
  ";
  $result = $conn->query($query);
  $toilet = $result->fetch_all(MYSQLI_ASSOC);
  return $toilet;
  
  
  $conn->close();

}

function get_queue(){
  
}



?> 
