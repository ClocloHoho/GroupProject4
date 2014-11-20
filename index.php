<?php

	// handles database connection and checks if the user is connected
	include("tools/init.php");
	if(!$connected && (!isset($_GET["page"]) || !($_GET["page"]=="registerPopup" || $_GET["page"]=="login"))){
        include("homePageNoLogin.php");
        //include("registerPopup.php");
	}
    else{
        //include("header.php");


        if(isset($_GET["page"])&& file_exists($_GET["page"].".php")){
            $page=$_GET["page"];
        }else{
            $page = "mainPage";
        }
        include($page.".php");
    }
    ?>
