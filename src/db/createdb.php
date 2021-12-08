<?php
// file to create a connection to the database
require_once('connectdb.php');

// query which creates the database
//// add query here
$query = "";

// execute the query and get the result
$result = mysqli_query($mysqli, $query);

// check if a result was received 
if($result) {
    // result was received and query successfully
    //
    //// add do something code here
    //
    exit;
} else {
    // no result was received
    echo 'Oops something went wrong...';
}
?>