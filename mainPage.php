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
            <section class="entry" id="<?php echo($i); ?>" itemscope itemtype="http://schema.org/CreativeWork">
                <div class="wrapper">
                    <div class="header-row">
                        <div class="content-name">
                            <span class="name">*****</span>
                        </div>
                        <div class="content">
                            <h3><?php echo($row['restaurantName']); ?></h3>
                            <p>*Description of the restaurant*</p>
                        </div>
                        <div class="apiinplus">
                            <aside class="image-area">
                                *Here : the Instagram pictures*
                            </aside>
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
                                    <span class="value"><img src="" alt="Enveloppe"/></span>
                                </li>
                            </ul>
                        </div>
            		</div>
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

<p>
	<?php
    showRestaurants();
	?>
</p>
	

</section>
	
<section id="screen2"></section>
<section id="screen3"></section>

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