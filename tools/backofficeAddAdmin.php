<?php
include("init.php");

// if the user isn't an admin, do nothing
if(!$isAdmin){
	header('Location: ../index.php');
    die();
}


// If one of the fields is missing, no need to go further
if(!(isset($_POST["userName"]) && isset($_POST["password"]) && isset($_POST["email"]))){
    header('Location: ../index.php?page=backofficeAddAdmin');
    die();
}
$password= password_hash($_POST["password"], PASSWORD_DEFAULT);
//If the username is already used, we stop there
$checkUsernameQuery = mysql_query("SELECT * FROM USER WHERE userName='".$_POST["userName"]."'");
$rows = mysql_num_rows($checkUsernameQuery);
if ($rows!=0) {
    header('Location: ../index.php?page=backofficeAddAdmin');
    die();
}

// mysql request
// TODO preven SQL injections
$query='INSERT INTO USERS (password, userName, email, isAdmin) VALUES ("'.
    $password.'", "'.$_POST["userName"].'", "'.$_POST["email"].'", 1)';
$inserts=mysql_query($query);
if(!$inserts)
{
    $message = 'Invalid query:' .mysql_error()."</br>";
    $message .= 'Whole query ' .$query;
    die($message);
    //header('Location: ../index.php?failedRegister=true');
}else{
    header('Location: ../index.php?page=backofficeAddAdmin');
}
?>