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
    <div id="table">

<?php
	if(!$isAdmin){
		header('Location: ../index.php');
	}
?>
<table>
    <?php $query = mysql_query("SELECT * FROM restaurants");
    if($query === FALSE) {
        die(mysql_error());
    }
    $rows = mysql_num_rows($query);
    if ($rows != 0) {
        while ($row = mysql_fetch_assoc($query)) {
            if ($row['userID'] != $_SESSION['userID']) {
                ?>
                <tr>
                    <td><?php echo($row['name']); ?></td>
                    <td><a href="/tools/backofficeDeleteRestaurant.php?restaurantID=<?php echo($row['restaurantID']); ?>">Delete restaurant</a></td>
                </tr>
            <?php
            }
        }
    }?>
</table>
    </div>
</section>
</body>
</html>