<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Eat in Cork</title>
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    </head>

    <body>
   	<div id="container" class="pt50 pb50"> 
   	<h1>Register</h1>
   	<h2 class="title-xs">Join us for more utilities</h2>
   	
   	<form action="tools/register.php" method="post">
   		<label for="registerFormUsername" class="registerFormLabel title-form title-xs">Name</label>
   		<input type="text" name="userName" class="registerFormField input w100 mt10" placeholder="Name" onchange="registerFormCheckUsername()" maxlenght="5110">
   		<label for="registerFormEmail" class="title-form title-xs registerFormLabel">Email</label>
   		<input type="email" name="email" class="registerFormField input w100" placeholder="Email" maxlenght="256" onchange="registerFormCheckConfirmEmail()">
   		<input type="email" name="emailConfirm" class="registerFormEmailConfirm input w100 mt10" placeholder="Confirm Email" maxlenght="256" onchange="registerFormCheckConfirmEmail()">
   		<label for="registerFormPassword" class="registerFormLabel title-form title-xs">Password</label>
   		<input type="password" name="password" class="registerFormField input w100 mt10" placeholder="Password" onchange="registerFormCheckConfirmPassword()">
   		<input type="password" name="passwordConfirm" class="registerFormPasswordConfirm input w100 mt10" placeholder="Confirm Password" onchange="registerFormCheckConfirmPassword()">
   		<input type="submit" class="button w100" value="Continue">
   	</form>
    <a href="index.php" style="border-bottom:0px;">
   	    <button type="button" class="button w100 mt15">Cancel</button>
    </a>
	</div> 
    </body>
</html>