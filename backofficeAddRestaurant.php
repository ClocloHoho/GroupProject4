<!doctype html>
<html lang="en-US">
<head>

    <title>Admin - Eat in Cork</title>
    <link rel="stylesheet" type="text/css" href="css/backoffice.css" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>
</head>

<body>
<nav>
    <ul>
        <li><a href="index.php?page=mainPage">Home</a></li>
        <li><a href="/tools/logout.php">Logout</a></li>
    </ul>
</nav>
<section id="screen1">
    <div id="bouton">

<?php
	if(!$isAdmin){
		header('Location: ../index.php');
	}
?>

<form action="tools/backofficeAddRestaurant.php" method="post" class="loginForm" enctype="multipart/form-data" id="form">
    <input type="text" name="restaurantName" placeholder="Restaurant Name" class="loginFormFields">
    <textarea name="description" placeholder="Restaurant description" class="loginFormFields"></textarea>
    <input type="text" name="tag" placeholder="Instagram tag" class="loginFormFields">
	<input type="text" name="restaurantGPSX" placeholder="Restaurant GPS X" class="loginFormFields">
	<input type="text" name="restaurantGPSY" placeholder="Restaurant GPS Y" class="loginFormFields">
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
    <input type="file" name="image"/>
	<input type="submit" value="Add" class="loginSubmitButton">
</form>