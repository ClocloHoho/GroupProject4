<!DOCTYPE html> 
<html>
<head>
	<title>Eat in Cork</title>
    <link rel= "stylesheet" href="css/about_us.css" type="text/css"/>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>

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
   <!--div container for each persons "about us"-->
    <div class="aboutusGirls">
        <img src="img/clotilde.jpg" alt="Clotilde" height="100" width="100">
      
        <!--div container for name of person"-->
        <div class="name">
            Clotilde Hovine
        </div>
    
        	<h2>DesignerManager</h2>
            	<p>
            	Clotilde is a Designer Manager of Eat in Cork website. 
            	She orginally comes from France. 
            	She came up with the new trendy design. 
            	Her love for food was a great inspiration for her.  
            	</p>
    </div>
    
    <!--div container for each persons "about us"-->
    <div class="aboutusGirls">
        <img src="img/sara.jpg" alt="Sara" height="100" width="100">
    
        <!--div container for name of person"-->
        <div class="name">    
            Sara Magdziak
        </div>
    
        <h2>Designer</h2>
        	<p>
            Sara is a designer of Eat in Cork. 
            She comes from Poland but lives in Ireland for over 10 years now. 
            Her inspiration for design comes from the love of fashion and Cork. 
            </p>
    </div>
    
    <!--div container for each persons "about us"-->
    <div class="aboutusBoys">
        <img src="img/lucien.jpg" alt="Lucien" height="100" width="100">
        
        <!--div container for name of person"-->
        <div class="name">
            Lucien Lopez
        </div>
            
        <h2>Developer</h2>
        	<p>
            Lucien is the main developer of Eat in Cork. 
            He is a French genius when developing applications. 
            He could sit in his room with his dog and code all day.
            </p> 
    </div>
    
    <!--div container for each persons "about us"-->
    <div class="aboutusBoys">
        <img src="img/rokas.jpg" alt="Rokas" height="100" width="100">
        
        <!--div container for name of person"-->
        <div class = "name">
            Rokas Lukosevicius
        </div>
    
        <h2>Developer</h2>
        	<p>
            Rokas is the developer of Eat in Cork. 
            He loves developing new applications and problem solving. 
            He best works at home when his mom makes him lunch and dinner. 
            </p>
    </div>
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
</body>

</html>
