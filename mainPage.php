<?php
function showRestaurants()
{
    // Retrieve all restaurants in the database
    $i = -1;
    $query = mysql_query("SELECT * FROM RESTAURANTS ");
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
                                    <!--<script>
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
                                    </script>-->
                                    <span class="value">
                                        <!--<div id="map_canvas<?php echo($i); ?>" class="map_canvas"></div>-->
                                    </span>
                                </li>
                                <li>
                                    <span class="name">Suggestions ?</span>
                                    <span class="value"><img src="" alt="Enveloppe"/></span>
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
    <link rel="stylesheet" type="text/css" href="css/main_page.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
</head>

<body>

<div class="menu-trigger"></div>
	
	<nav id="navbar">
		<ul>
			<li><a href=""#">HOME</a></li>
		</ul>

		<ul>
			<li><a href="tools/logout.php">LOGOUT</a></li>
		</ul>
	</nav>

<section class="app">
    <div class="container">
        <div class="timeline">

<?php
    showRestaurants();
?>

		</div>
	</div>
	<!--FOOTER-->
            <footer>
               <div class="splitter"></div>
        <ul>
            <li>
        <div class="icon" data-icon="E"></div>
        <div class="text">
            <h4>About</h4>
            <div> <a href="#">Read more</a></div>
        </div>
    </li>
    <li>
        <div class="icon" data-icon="a"></div>
        <div class="text">
            <h4>Terms</h4>
            <div><a href="#">Read more</a></div>
        </div>
    </li>
    <li>
        <div class="icon" data-icon="s"></div>
        <div class="text">
            <h4>The Team</h4>
            <div><a href="#">Read more</a></div>
        </div>
    </li>
        </ul>

    <div class="bar">
        <div class="bar-wrap">
            <div class="social">
                <a href="#" class="fb">
                <span data-icon="f" class="icon"><img src="img/facebook.png"/></span>
                <span class="info">
                    <span class="follow">Become a fan Facebook</span>
                </span>
            </a>

            <a href="#" class="tw">
                <span data-icon="T" class="icon"><img src="img/social.png"/></span>
                <span class="info">
                    <span class="follow">Follow us Twitter</span>
                </span>
            </a>

            <a href="#" class="rss">
                <span data-icon="R" class="icon"><img src="img/rss.png"/></span>
                <span class="info">
                    <span class="follow">Subscribe RSS</span>
                </span>
            </a>
            </div>
            <div class="clear"></div>
            <div class="copyright">&copy;  2014 All Rights Reserved</div>
        </div>
    </div>
            </footer>
	</section>
<script>
	window.onscroll=function(){document.getElementById('navbar').setAttribute('class', (window.pageYOffset>5?'fixednav clearfix':'clearfix'));}
</script>
	
<script>
	(function() {
		var $body = document.body
		, $menu_trigger = $body.getElementsByClassName('menu-trigger')[0];

		if ( typeof $menu_trigger !== 'undefined' ) {
			$menu_trigger.addEventListener('click', function() {
				$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
			});
		}
	}).call(this);
</script>  
    </body>
</html>