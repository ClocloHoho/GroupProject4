<?php
function showRestaurants()
{
    // Retrieve all restaurants in the database
    $i = -1;
    
    $query = mysql_query("SELECT * FROM RESTAURANTS");
    if($query === FALSE) {
    	die(mysql_error());
    }
    $rows = mysql_num_rows($query);
    if ($rows != 0) {
        while ($row = mysql_fetch_assoc($query)) {
            $i++;
            ?>
            <section id="screen<?php echo($i+1); ?>"><div id="container">
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
				
            	<div id="container">

                        <h1><a href="index.php?page=pageRestaurant&restaurantID=<?php echo($row['restaurantID']); ?>"><?php echo($row['name']); ?></a></h1>
                        
                        <div id="rating">
  
  						<div class="rating">
							<input type="radio" id="star1<?php echo($row['restaurantID']); ?>" name="rating<?php echo($row['restaurantID']); ?>" value="5" <?php if($row['rating']==5){ echo("checked"); } ?>
                                onclick="rate(5,<?php echo($row['restaurantID']); ?>)"/><label for="star1<?php echo($row['restaurantID']); ?>" title="Sucks big time"> </label>
							<input type="radio" id="star2<?php echo($row['restaurantID']); ?>" name="rating<?php echo($row['restaurantID']); ?>" value="4" <?php if($row['rating']==4){ echo("checked"); } ?>
                                   onclick="rate(4,<?php echo($row['restaurantID']); ?>)"/><label for="star2<?php echo($row['restaurantID']); ?>" title="Kinda bad"> </label>
							<input type="radio" id="star3<?php echo($row['restaurantID']); ?>" name="rating<?php echo($row['restaurantID']); ?>" value="3" <?php if($row['rating']==3){ echo("checked"); } ?>
                                   onclick="rate(3,<?php echo($row['restaurantID']); ?>)"/><label for="star3<?php echo($row['restaurantID']); ?>" title="Meh"> </label>
							<input type="radio" id="star4<?php echo($row['restaurantID']); ?>" name="rating<?php echo($row['restaurantID']); ?>" value="2" <?php if($row['rating']==2){ echo("checked"); } ?>
                                   onclick="rate(2,<?php echo($row['restaurantID']); ?>)"/><label for="star4<?php echo($row['restaurantID']); ?>" title="Pretty good"> </label>
    						<input type="radio" id="star5<?php echo($row['restaurantID']); ?>" name="rating<?php echo($row['restaurantID']); ?>" value="1" <?php if($row['rating']==1){ echo("checked"); } ?>
                                   onclick="rate(1,<?php echo($row['restaurantID']); ?>)"/><label for="star5<?php echo($row['restaurantID']); ?>" title="Rocks!"> </label>
						</div>
  
						<!--<strong class="choice"> </strong>-->
						</div>


                        <img src="img/<?php echo($row['restaurantID']); ?>.jpg" alt="Photo Restaurant" id="admin_photo"/>

                        <p><?php echo($row['description']); ?></p>

                        <ul class="interactions">
                            <!--<li>
                                <span class="name">Where to find us ?</span>
                                    <script>
                                        function initialize<?php echo($i); ?>() {
                                            var myLatlng = new google.maps.LatLng(<?php echo($row['GPSX']);?>, <?php echo($row['GPSY']);?>);
                                            var mapCanvas = document.getElementById('map_canvas<?php echo($i); ?>');
                                            var mapOptions = {
                                                center: myLatlng,
                                                zoom: 15,
                                                mapTypeId: google.maps.MapTypeId.ROADMAP
                                            }
                                            var map = new google.maps.Map(mapCanvas, mapOptions)
                                            var marker = new google.maps.Marker({
                                                position: myLatlng,
                                                map: map,
                                                title: "<?php echo($row['restaurantName']); ?>"
                                            });
                                        }
                                        google.maps.event.addDomListener(window, 'load', initialize<?php echo($i); ?>);
                                    </script>
                                	<span class="value"><center>
                                        <div id="map_canvas<?php echo($i); ?>" class="map_canvas"></div>
                                    </center></span>
                            </li>-->
                            <!--<li>
                                <span class="name">Suggestions ?</span>
                                <span class="value" id="mail"><img src="img/email.png" alt="Enveloppe"/></span>
                            </li>-->
                        </ul>
                        </div>
            </div></section>

        <?php
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Eat in Cork</title>
    <link rel="stylesheet" type="text/css" href="css/mainPage.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/rate.js"></script>
</head>

<body>

<!--<section id="screen1">
	<div id="container">-->
	<?php
    showRestaurants();
	?><!--
	</div>
</section>

<section id="screen2"></section>

<section id="screen3"></section>-->

<footer>
	<a href="https://twitter.com/eat_in_cork" class="twitter-follow-button" data-show-count="false" data-size="large">
		Follow @Eat_In_Cork
	</a> 
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	<a href="https://twitter.com/intent/tweet?screen_name=eat_in_cork" class="twitter-mention-button" data-size="large">
		Tweet to @eatincork
	</a> 
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	</br></br>
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

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script>
   $(document).ready(function(){
	   $(window).bind('scroll', function() {
	   var navHeight = $( window ).height() - 70;
			 if ($(window).scrollTop() > navHeight) {
				 $('nav').addClass('fixed');
			 }
			 else {
				 $('nav').removeClass('fixed');
			 }
		});
	});
</script>

    </body>
</html>