<?php
	if(!$isAdmin){
		header('Location: ../index.php');
        die();
	}
?>
<script>
    function checkConfirmPassword() {
        passwordConfirm = document.getElementById("passwordConfirm");
        password = document.getElementById("password");

        if(passwordConfirm.value==password.value){
             document.getElementById("registerFormSubmitButton").disabled=false;
        }else{
            document.getElementById("registerFormSubmitButton").disabled=true;
        }
    }
</script>
<form action="tools/backofficeAddAdmin.php" method="post">
	<input type="text" name="userName" placeholder="Username" class="loginFormFields">
	<input type="email" name="email" placeholder="Email" class="loginFormFields">
    <input type="password" id="password" name="password" placeholder="Password" class="loginFormFields" onchange="checkConfirmPassword()">
    <input type="password" id="passwordConfirm" name="password" placeholder="Confirm password" class="loginFormFields" onchange="checkConfirmPassword()">
	<input type="submit" id="registerFormSubmitButton" value="Add" class="loginSubmitButton" disabled>
</form>