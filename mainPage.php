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
                            <h3>*<?php echo($row['restaurantName']); ?>*</h3>
                            <p>*Description of the restaurant*</p>
                        </div>
                        <div>
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
                                    <span class="value">*<img src="" alt="Enveloppe"/>*</span>
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
    <link rel="stylesheet" type="text/css" href="css/menu_fixed.css">
    <link rel="stylesheet" type="text/css" href="css/main_page.css">
    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300' rel='stylesheet' type='text/css'>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
</head>

<body>

<header>
    <div id="background-menu">
        <div id="center">
            <div id="bouton-menu"><a href="#"><img src="../img"/></a></div>
            <nav>
                <ul>
                    <!--First Link-->
                    <li class="other-side smartphones-links">
                        <a href="#">HOME</a></li>
                    </li>
                    <!--End of the first Link-->

                    <!--Second Link-->
                    <li class="other-side smartphones-links">
                        <a href="#">LOG OUT</a>
                    </li>
                    <!--End of the second Link-->
                    <!--Third Link-->
                    <li class="smartphones-links">
                        <div id="wrap">
                            <form action="" autocomplete="on">
                                <input id="search" name="search" type="text" placeholder="RESTAURANT"><input id="search_submit" value="SEARCH" type="submit">
                            </form>
                        </div>
                    </li>
                    <!--End of the third Link-->
                </ul>
            </nav>
        </div>
    </div>
</header>

<section class="app">
    <div class="container">
        <div class="timeline">

<?php
    showRestaurants();
?>

		</div>
	</div>
	</section>
    </body>
</html>