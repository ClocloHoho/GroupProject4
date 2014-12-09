<!DOCTYPE html> 
<html>
<head>
	<title>Eat in Cork</title>
    <link rel= "stylesheet" href="css/aboutSite.css" type="text/css"/>
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
				<form method="get" action="/search" id="search">
  					<input name="q" type="text" size="40" placeholder="Search..." />
				</form>
			</li>
		</ul>
	</nav> 
<section id="screen1">
<div id="text">
    <h1> Feeling Hungry ? Look no further</h1>

    <h2>History of the webiste</h2>
	<p>The website was created by Web Development Year 3  students for a group project in Cork Institute of Technology. Four students got together and shared their amazing ideas to design and develop Eat in Cok website. </p>
   	<h2>The purpose</h2>
   	<p>Eat in Cork provides restaurant reviews for hungry customers ! If you are happy with your dinner, say it to the world ! We’ll help you with that ! Just select the stars and leave a comment to help other hungry customers find their perfect restaurant!</p>
    <h2>Cork City</h2>
    <p>Since the City was founded by St Finbarr over 1,000 years ago it has grown from a trading merchant city to a cosmopolitan vibrant 21st century city of today.
The city, situated on the banks of the river Lee, is home to 123,000 people. There is 25,000students from 2 main third level education institutes - University College Cork and Cork Institute of Technology. It is located on the South West coast of Ireland and is the 2nd largest city in the Republic of Ireland. The area of the city is 3,731 hectares.
Enough space to place a lot of delicious restaurants !</p>

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