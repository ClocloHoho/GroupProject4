<?php
	if(!$isAdmin){
		header('Location: ../index.php');
	}
?>

<form action="tools/backofficeAddRestaurant.php" method="post" class="loginForm">
    <input type="text" name="restaurantName" placeholder="Restaurant Name" class="loginFormFields">
    <textarea name="description" placeholder="Restaurant description" class="loginFormFields"></textarea>
    <input type="text" name="tag" placeholder="Instagram tag" class="loginFormFields">
	<input type="text" name="restaurantGPSX" placeholder="Restaurant GPS X" class="loginFormFields">
	<input type="text" name="restaurantGPSY" placeholder="Restaurant GPS Y" class="loginFormFields">
	<input type="submit" value="Add" class="loginSubmitButton">
</form>