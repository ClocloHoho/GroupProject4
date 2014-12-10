
<?php
if(!isset($_GET["restaurantID"])){
    header('Location: index.php');
    die();
}

$queryGetRestaurant = mysql_query("SELECT * FROM restaurants WHERE restaurantID=".$_GET["restaurantID"]);
if($query === FALSE) {
    die(mysql_error());
}
$numRows = mysql_num_rows($queryGetRestaurant);
if ($numRows<1) {
    header('Location: index.php');
    die();
}
$restaurant=mysql_fetch_assoc($queryGetRestaurant);
?>

<!doctype html>
<html lang="en-US">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="robots" content="all,index,follow" />

	<title>Eat in Cork</title>
	<link rel="stylesheet" type="text/css" href="css/pageRestaurant.css" />
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
	<script type='text/javascript' src='http://code.jquery.com/jquery-git.js'></script>
    <script src="js/rate.js"></script>

</head>

<body>
	<nav>
		<ul>
			<li><a href="index.php?page=mainPage">Home</a></li>
			<li><a href="index.php?page=aboutSite">About</a></li>
			<li><a href="index.php?page=aboutUs">Team</a></li>
			<li><a href="index.php?page=contactUs">Contact</a></li>
			<li><a href="/tools/logout.php">Logout</a></li>
			<li>
                <form method="post" action="index.php?page=searchPage" id="search">
                    <input name="search" type="text" size="40" placeholder="Search..." />
                </form>
			</li>
		</ul>
	</nav>

<section id="screen1">

<div id="container">

    <h1><?php echo($restaurant['name']); ?></h1>

    <div id="rating">

        <div class="rating">
            <input type="radio" id="star1<?php echo($restaurant['restaurantID']); ?>" name="rating<?php echo($restaurant['restaurantID']); ?>" value="5" <?php if($restaurant['rating']==5){ echo("checked"); } ?>
                   onclick="rate(5,<?php echo($restaurant['restaurantID']); ?>)"/><label for="star1<?php echo($restaurant['restaurantID']); ?>" title="Sucks big time"> </label>
            <input type="radio" id="star2<?php echo($restaurant['restaurantID']); ?>" name="rating<?php echo($restaurant['restaurantID']); ?>" value="4" <?php if($restaurant['rating']==4){ echo("checked"); } ?>
                   onclick="rate(4,<?php echo($restaurant['restaurantID']); ?>)"/><label for="star2<?php echo($restaurant['restaurantID']); ?>" title="Kinda bad"> </label>
            <input type="radio" id="star3<?php echo($restaurant['restaurantID']); ?>" name="rating<?php echo($restaurant['restaurantID']); ?>" value="3" <?php if($restaurant['rating']==3){ echo("checked"); } ?>
                   onclick="rate(3,<?php echo($restaurant['restaurantID']); ?>)"/><label for="star3<?php echo($restaurant['restaurantID']); ?>" title="Meh"> </label>
            <input type="radio" id="star4<?php echo($restaurant['restaurantID']); ?>" name="rating<?php echo($restaurant['restaurantID']); ?>" value="2" <?php if($restaurant['rating']==2){ echo("checked"); } ?>
                   onclick="rate(2,<?php echo($restaurant['restaurantID']); ?>)"/><label for="star4<?php echo($restaurant['restaurantID']); ?>" title="Pretty good"> </label>
            <input type="radio" id="star5<?php echo($restaurant['restaurantID']); ?>" name="rating<?php echo($restaurant['restaurantID']); ?>" value="1" <?php if($restaurant['rating']==1){ echo("checked"); } ?>
                   onclick="rate(1,<?php echo($restaurant['restaurantID']); ?>)"/><label for="star5<?php echo($restaurant['restaurantID']); ?>" title="Rocks!"> </label>
        </div>

        <!--<strong class="choice"> </strong>-->
    </div>

    <div class="imgDiv">
        <img src="img/<?php echo($restaurant['restaurantID']); ?>.jpg" alt="Photo Restaurant" id="admin_photo" onclick="printNextImage()"/>
        <center><button id="nextImageText" onclick="printNextImage()">Next image</button></center>
    </div>

    <p><?php echo($restaurant['description']); ?></p>

    <ul class="interactions">
        <li>
            <span class="name">Where to find us?</span>
            <span class="value">
                <script>
                    function initialize() {
                        var myLatlng = new google.maps.LatLng(<?php echo($restaurant['GPSX']);?>, <?php echo($restaurant['GPSY']);?>);
                        var mapCanvas = document.getElementById('map_canvas');
                        var mapOptions = {
                            center: myLatlng,
                            zoom: 15,
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        }
                        var map = new google.maps.Map(mapCanvas, mapOptions)
                        var marker = new google.maps.Marker({
                            position: myLatlng,
                            map: map,
                            title: "<?php echo($restaurant['name']); ?>"
                        });
                    }
                    google.maps.event.addDomListener(window, 'load', initialize);
                </script>
                <center>
                    <div id="map_canvas" class="map_canvas"></div>
                </center>
            </span>
        </li>
        <li>
            <span class="name">Suggestions ?</span>
            <span class="value"><a href="index.php?page=contactUs"><img src="img/email.png" alt="Enveloppe"/></a></span>
        </li>
    </ul>

</div>

</section>

    <section id="rssFeed">

        <div id="feedTitle"><h4>Cork's Most Popular Caffes</h4></div>

        <?php

        $html = "";
        $url = "http://cork.gaycities.com/restaurants/rss.xml";

        $xml = simplexml_load_file($url);
        for ($i = 0; $i < 7; $i++) {

            if ($i == 1) {
                $i = $i + 3;
            }

            $title = $xml->channel->item[$i]->title;
            $link = $xml->channel->item[$i]->link;
            $description = $xml->channel->item[$i]->description;
            $pubDate = $xml->channel->item[$i]->pubDate;
            $category = $xml->channel->item[$i]->category;

            $html .= "<a href='$link' id='titleStyleRSS'><h3>$title</h3></a>";
            $html .= "<div id='descriptionStyleRSS'>$description </div>";
            $html .= "<div id='pubStyleRSS'>Publication Date:$pubDate<hr />";

        }
        echo $html;
        ?>
    </section>
<footer>
	<a href="https://twitter.com/eat_in_cork" class="twitter-follow-button" data-show-count="false" data-size="large">
		Follow @Eat_In_Cork
	</a> 
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	<a href="https://twitter.com/intent/tweet?screen_name=eat_in_cork" class="twitter-mention-button" data-size="large">
		Tweet to @eatincork
	</a> 
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	<br></br>
	<div class="fb-follow" data-href="https://www.facebook.com/eatincork" data-width="178px" data-height="28px" data-colorscheme="light" data-layout="button" data-show-faces="true"></div>
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
  			var js, fjs = d.getElementsByTagName(s)[0];
  			if (d.getElementById(id)) return;
  			js = d.createElement(s); js.id = id;
  			js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<div id="terms"><a href="index.php?page=terms">Terms & Conditions</a></div>
</footer>
    <script src="js/diaporama.js"></script>
    <?php if($restaurant[tag]!==""){?>
        <script>loadInstagram("<?php echo($restaurant[tag]); ?>");</script>
    <?php } ?>
</body>
</html>