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
if(!($connected && $isAdmin)){
	header('Location: index.php?');
}
?>
<a href="index.php?page=backofficeAddRestaurant"><button>Add restaurant</button></a>
<a href="index.php?page=backofficeModifyRestaurant"><button>Modify restaurant</button></a>
<a href="index.php?page=backofficeAddAdmin"><button>Add admin</button></a>
<a href="index.php?page=backofficeModifyUser"><button>Modify user</button></a>


</div>
</section>
</body>
</html>
