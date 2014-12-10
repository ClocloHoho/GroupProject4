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

$name = $_FILES['image']['name'];
//returns size of file in kilobytes and max define maximum size for image upload
$size = $_FILES['image']['size'];
$max_size = '1000000';

$type = $_FILES['image']['type'];
/* Each file you upload is send to a temporary location on the server */
$temp_name = $_FILES['image']['tmp_name'];

//  Creating array with the extensions and validating it later
$allowed =  array('jpg');
$ext = pathinfo($name, PATHINFO_EXTENSION);

if(!in_array($ext,$allowed) ) {
    echo 'Please upload a jpg file';
}




if(isset($name)) {
    if(!empty($name)){

        $location = 'D:\save\doc\Web\GroupProject4\img\\';
        if($size>=$max_size) {
            echo 'Your file is over 1mb';
        }else{

//Uploads the file you uploaded to your chosen directory from the temporary server directory
            if(move_uploaded_file($temp_name, $location.mysql_insert_id().".jpg")){
                header('Location: ../index.php?page=backofficeHomePage');
            }
            else{
                echo 'There was an error uploading the image';
            }
        }
    }
}

?>