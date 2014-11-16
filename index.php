<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Eat in Cork</title>
        <script language="javascript" type="text/javascript" src="js/global.js"></script>
    	<script src="https://maps.googleapis.com/maps/api/js"></script>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
		<link rel="icon" href="img/favicon.ico" type="image/x-icon">
    </head>

    <body class="loading">
    
    <?php

	// handles database connection and checks if the user is connected
	include("tools/init.php");
	if(!$connected){
    include("registerPopup.php");
	}?>

    <?php
    include("header.php");

    if(isset($_GET["page"])&& file_exists($_GET["page"].".php")){
        $page=$_GET["page"];
    }else{
        $page = "unknown";
    }
    include($page.".php");
    ?>
    
    <div id="preload">
	    <img src="img/bcg_slide-1.jpg">
	    <img src="img/bcg_slide-2.jpg">
	    <img src="img/bcg_slide-3.jpg">
    </div>
    
    <main>
    <section id="slide-1" class="homeSlide"> 
    <div class="bcg" data-center="background-position: 50% 0px;"
        				data-top-bottom="background-position: 50% -100px;"
        				data-anchor-target="#slide-1">
    	<div class="hsContainer">
    		<div class="logo">
    			<img src="img/logo_site.png" alt="Logo" class="logo">
    		</div>
    		<div class="hsContent" data-center="bottom: 200px; opacity: 1"
                					data-top="bottom: 1200px; opacity: 0"
                					data-anchor-target="#slide-1 h2">
    			<div id="header">
    				<h1 class="titre">Eat in Cork</h1>
        			<h2 class="slogan border-box">Find a new place to eat</h2>
    			</div>
				<div class="grid">    
    			<div id="logReg">
    				<div class="Reg">
    					<button class="registerButton button block-right block" onclick="showRegisterPopup()">Register</button>
    				</div>
    				<div class="LogIn">
    					<button class="button block-left block" onclick="showLogin()">Log In</button>
    				</div>
    			</div>
    			</div>
  			</div>
  	  	</div>
  	</div>
  	
    </section>
    
    <div class="content">
    	<section id="slide-2" class="homeSlide">
    		<div class="bcg" data-center="background-position: 50% 0px;"
        					data-top-bottom="background-position: 50% -100px;"
        					data-bottom-top="background-position: 50% 100px;"
        					data-anchor-target="#slide-2">
    			<div class="hsContainer">
    				<div class="hsContent" data-center="opacity: 1"
                							data-center-top="opacity: 0"
                							data--100-bottom="opacity: 0;"
                							data-anchor-target="#slide-2">
    					<h2>Find the restaurant you need</h2>
    				</div>
    			</div>
    		</div>
    	</section>
    	<section id="slide-3" class="homeSlide">
    		<div class="bcg" data-center="background-position: 50% 0px;"
        						data-top-bottom="background-position: 50% -100px;"
        						data-bottom-top="background-position: 50% 100px;"
        						data-anchor-target="#slide-3">
    			<div class="hsContainer">
    				<div class="hsContent" data--50-bottom="opacity: 0;"
                							data--200-bottom="opacity: 1;"
                							data-center="opacity: 1"
                							data-200-top="opacity: 0"
                							data-anchor-target="#slide-3 h2">
    					<h2>Taste, enjoy & rate</h2>
    				</div>
    			</div>
    		</div>
    	</section>
    </div>

    </main>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
    <script src="js/imagesloaded.js"></script>
    <script src="js/enquire.min.js"></script>
    <script src="js/skrollr.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/_main.js"></script>
    </body>
</html>