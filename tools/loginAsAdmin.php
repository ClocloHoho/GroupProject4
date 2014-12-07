<?php
include("init.php");

$_SESSION['userID'] = 12;
$_SESSION['userName'] = "admin";
$_SESSION['isAdmin'] = 1;

header('Location: ../index.php?');

?>