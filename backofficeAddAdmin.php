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
    </div>
</section>
</body>
</html>