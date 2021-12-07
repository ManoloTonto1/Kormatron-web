<?php
//destroy session and redirect to index.php
Session_start();
Session_destroy();
header('Location: index.php' . $_SERVER['HTTP_REFERER']);
?>
