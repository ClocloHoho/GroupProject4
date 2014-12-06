<?php
function showRestaurants()
{
    // Retrieve all restaurants in the database
    $i = -1;
    
    $query = mysql_query("SELECT * FROM RESTAURANTS");
    if($query === FALSE) {
    	die(mysql_error()); // TODO: better error handling
    }
    $rows = mysql_num_rows($query);
    if ($rows != 0) {
        while ($row = mysql_fetch_assoc($query)) {
            $i++;
            ?>
            <section id="<?php echo($i); ?>">
            	<nav>
					<ul>
						<li><a href="index.php?page=mainPage">Home</a></li>
						<li><a href="index.php?page=aboutSite">About</a></li>
						<li><a href="index.php?page=aboutUs">Team</a></li>
						<li><a href="index.php?page=contactUs">Contact</a></li>
						<li><a href="#">Logout</a></li>
						<li>
							<form method="get" action="/search" id="search">
  								<input name="q" type="text" size="40" placeholder="Search..." />
							</form>
						</li>
					</ul>
				</nav>
				
            	<div id="container">

                        <h1><a href="index.php?page=pageRestaurant"><?php echo($row['restaurantName']); ?></a></h1>
                        
                        <div id="rating">
  
  						<div class="rating">
							<input type="radio" id="star1" name="rating" value="5" /><label for="star1" title="Sucks big time"> </label>
							<input type="radio" id="star2" name="rating" value="4" /><label for="star2" title="Kinda bad"> </label>
							<input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh"> </label>
							<input type="radio" id="star4" name="rating" value="2" /><label for="star4" title="Pretty good"> </label>
    						<input type="radio" id="star5" name="rating" value="1" /><label for="star5" title="Rocks!"> </label>
						</div>
  
						<!--<strong class="choice"> </strong>-->
						</div>

<script>
            
$(':radio').change(
  function(){
    $('.choice').text( this.value + ' stars' );
      var ratingNum = this.value;
	  console.log(ratingNum);
      
  } 
)
</script>

<img src="img/restaurant1_insta.jpg" alt="Photo Restaurant" id="admin_photo"/>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                        <ul class="interactions">
                            <li>
                                <span class="name">Where to find us ?</span>
                                    <script>
                                        function initialize<?php echo($i); ?>() {
                                            var myLatlng = new google.maps.LatLng(<?php echo($row['restaurantGPSX']);?>, <?php echo($row['restaurantGPSY']);?>);
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
                                	<span class="value">
                                        <div id="map_canvas<?php echo($i); ?>" class="map_canvas"></div>
                                    </span>
                            </li>
                            <li>
                                <span class="name">Suggestions ?</span>
                                <span class="value" id="mail"><img src="img/email.png" alt="Enveloppe"/></span>
                            </li>
                        </ul>
                        </div>
            </section>

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
</head>

<body>

<section id="screen1">
	<div id="container">
	<?php
    showRestaurants();
	?>
	</div>
</section>
	
<section id="screen2"></section>

<section id="screen3"></section>

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