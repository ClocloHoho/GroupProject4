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