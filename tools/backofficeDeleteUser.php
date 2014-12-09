<?php
include("init.php");

// if the user isn't an admin, do nothing
if(!$isAdmin){
	header('Location: ../index.php');
    die();
}


// If one of the fields is missing, no need to go further
if(!isset($_GET["userID"])){
    header('Location: ../index.php?page=backofficeModifyUser');
    die();
}

$query="DELETE FROM users WHERE userID=".$_GET["userID"]."";
$delete=mysql_query($query);
if(!$delete)
{
    $message = 'Invalid query:' .mysql_error()."</br>";
    $message .= 'Whole query ' .$query;
    die($message);
}else{
    header('Location: ../index.php?page=backofficeModifyUser');
}
?>