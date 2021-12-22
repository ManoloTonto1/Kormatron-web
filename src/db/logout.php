<?php
//destroy session and redirect to index.php
Session_start();
Session_destroy();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../../index.php");
}
?>
