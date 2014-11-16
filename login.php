<!-- TODO : wrong password message -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Eat in Cork</title>
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    </head>

    <body>
   	<div id="container"> 
   	<h1>Log In</h1>
   	<h2 class="title-xs">Please enter your informations</h2>
   	
   	<form action="tools/login.php" method="post">
   		<label for="userName" class="title-form title-xs">Name</label><input type="text" name="userName" class="input w100">
   		<label for="password" class="title-form title-xs">Password</label><input type="password" name="password" id="password" class="input w100 mt10"></br>
   		<input type="submit" class="button w100 mt10" value="Continue">
   	</form>
	</div>
    </body>
</html>