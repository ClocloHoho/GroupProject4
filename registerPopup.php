<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Eat in Cork</title>
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
        <script src="js/register.js"></script>
    </head>

    <body>
   	<div id="container" class="pt50 pb50"> 
   	<h1>Register</h1>
   	<h2 class="title-xs">Join us for more utilities</h2>
   	
   	<form action="tools/register.php" method="post" class="registerForm">
   		<div class="registerFormLine">
   			<label for="registerFormUsername" class="registerFormLabel title-form title-xs">Name</label>
   			<input type="text" name="userName" id="registerFormUsername" class="registerFormField input w100 mt10" placeholder="Name" onchange="registerFormCheckUsername()" maxlenght="5110">
   		</div>
   		<div class="registerFormLine">
   			<label for="registerFormEmail" class="title-form title-xs registerFormLabel">Email</label>
   			<input type="email" name="email" id="registerFormEmail" class="registerFormField input w100 mt10" placeholder="Email" maxlenght="256" onchange="registerFormCheckConfirmEmail()">
   		</div>
   		<div>
   			<input type="email" name="emailConfirm" id="registerFormEmailConfirm" class="registerFormEmailConfirm input w100 mt10" placeholder="Confirm Email" maxlenght="256" onchange="registerFormCheckConfirmEmail()">
   		</div>
   		<div class="registerFormLine">
   			<label for="registerFormPassword" class="registerFormLabel title-form title-xs">Password</label>
   			<input type="password" name="password" id="registerFormPassword" class="registerFormField input w100 mt10" placeholder="Password" onchange="registerFormCheckConfirmPassword()">
   		</div>
   		<div class="registerFormLine">
   			<input type="password" name="passwordConfirm" id="registerFormPasswordConfirm" class="registerFormPasswordConfirm input w100 mt10" placeholder="Confirm Password" onchange="registerFormCheckConfirmPassword()">
   		</div>
   		<div class="registerFormLine">
            <div class="registerFormSubmitButtonDiv">
                <input type="submit" value="Continue" class="registerFormSubmitButton button w100" id="registerFormSubmitButton" disabled/>
            </div>
            <div class="registerFormSubmitButtonDiv">
                <button type="button" class="registerFormSubmitButton button w100 mt15" onclick="hideRegisterPopup()" disabled>Cancel</button>
            </div>
        </div>
   	</form>
	</div> 
    </body>
</html>