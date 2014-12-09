<?php
include("init.php");

// if the user isn't an admin, do nothing
if(!$isAdmin){
	header('Location: ../index.php');
    die();
}


// If one of the fields is missing, no need to go further
if(!isset($_GET["restaurantID"])){
    header('Location: ../index.php?page=backofficeModifyRestaurant');
    die();
}

$query="DELETE FROM restaurants WHERE restaurantID=".$_GET["restaurantID"]."";
$delete=mysql_query($query);
if(!$delete)
{
    $message = 'Invalid query:' .mysql_error()."</br>";
    $message .= 'Whole query ' .$query;
    die($message);
}else{
    header('Location: ../index.php?page=backofficeModifyRestaurant');
}
?>