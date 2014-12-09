<?php
include("init.php");

// if the user isn't an admin, do nothing
if(!$isAdmin){
	header('Location: ../index.php');
}

$insert="INSERT INTO `restaurants` (name, GPSX, GPSY, description, tag)
VALUES
('$_POST[restaurantName]',
  '$_POST[restaurantGPSX]',
  '$_POST[restaurantGPSY]',
  '$_POST[description]',
  '$_POST[tag]')";

if (!mysql_query($insert, $dbhandle))
  {
  die('Error: ' . mysql_error());
  }
header('Location: ../index.php?page=backofficeHomePage');
?>