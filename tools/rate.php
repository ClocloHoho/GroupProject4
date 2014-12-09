<?php
include("init.php");
$oldRating=0;
//TODO inform the user request failed

// If one of the fields is missing, no need to go further
if(!(isset($_SESSION['userID']) && isset($_GET["restaurantID"]) && isset($_GET["rating"]))){
	header('Location: ../index.php?failedRating=true');
	die();
}

$queryCheckIfAlreadyRated = "SELECT individualRatingID, rating FROM individualratings WHERE ratingIdUser=".$_SESSION['userID'].
    " AND ratingIdRestaurant=".$_GET["restaurantID"];
$resultCheckIfAlreadyRated = mysql_query($queryCheckIfAlreadyRated);
$rowsCheckIfAlreadyRated = mysql_num_rows($resultCheckIfAlreadyRated);
if ($rowsCheckIfAlreadyRated!=0)
{
    $oldRatingRow=mysql_fetch_assoc($resultCheckIfAlreadyRated);
    $oldRating=$oldRatingRow['rating'];
    $differenceRating=$_GET["rating"]-$oldRating;
    $queryUpdateindividualRatings='UPDATE individualratings SET rating = '.$_GET["rating"].
        ' WHERE individualRatingID = '.$oldRatingRow['individualRatingID'];
    $resultUpdateindividualRatings=mysql_query($queryUpdateindividualRatings);
    if (!$resultUpdateindividualRatings) {
        $message = 'Invalid query:' . mysql_error() . "</br>";
        $message .= 'Whole query ' . $queryUpdateindividualRatings;
        die($message);
    } else {
    }
    $queryUpdateRestaurantRating='UPDATE restaurants SET totalRating = totalRating + '.$differenceRating.
        ', rating= ((totalRating)/(numberRatings)) WHERE restaurantID = \''.$_GET["restaurantID"].'\'';
    $resultUpdateRestaurantRating=mysql_query($queryUpdateRestaurantRating);
    if(!$resultUpdateRestaurantRating)
    {
        $message = 'Invalid query:' .mysql_error()."</br>";
        $message .= 'Whole query ' .$queryUpdateRestaurantRating;
        die($message);
        //header('Location: ../index.php?failedRegister=true');
    }

}else {
    $query = 'INSERT INTO individualratings(ratingIdUser, ratingIdRestaurant, rating) VALUES ("' .
        $_SESSION['userID'] . '", "' . $_GET["restaurantID"] . '", "' . $_GET["rating"] . '")';
    $inserts = mysql_query($query);
    if (!$inserts) {
        $message = 'Invalid query:' . mysql_error() . "</br>";
        $message .= 'Whole query ' . $query;
        die($message);
    }
    $queryUpdateRestaurantRating='UPDATE restaurants SET totalRating = totalRating + '.$_GET["rating"].
        ', numberRatings = numberRatings +1, rating= ((totalRating)/(numberRatings)) WHERE restaurantID = \''.
        $_GET["restaurantID"].'\'';
    $resultUpdateRestaurantRating=mysql_query($queryUpdateRestaurantRating);
    if(!$resultUpdateRestaurantRating)
    {
        $message = 'Invalid query:' .mysql_error()."</br>";
        $message .= 'Whole query ' .$queryUpdateRestaurantRating;
        die($message);
        //header('Location: ../index.php?failedRegister=true');
    }
}
?>