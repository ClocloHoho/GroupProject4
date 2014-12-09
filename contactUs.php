<?php session_start() ?>
<!doctype html>
<html lang="en-US">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="robots" content="all,index,follow" />

	<title>Eat in Cork</title>
	<link rel="stylesheet" type="text/css" href="css/contactUs.css" />
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
			<li><a href="#">Logout</a></li>
			<li>
				<form method="get" action="/search" id="search">
  					<input name="q" type="text" size="40" placeholder="Search..." />
				</form>
			</li>
		</ul>
	</nav>

<section id="screen1">

<div class="wrapper">
	<div id="main" class="contact-form"class="clearfix" style="padding:50px 0 0 0;">
		
		<h3>Get in touch</h3>
		<h4>Fill in the form below, and we'll get back to you within 24 hours.</h4>
		<?php
			//init variables
			$cf = array();
			$sr = false;
 
			if(isset($_SESSION['cf_returndata'])){
    			$cf = $_SESSION['cf_returndata'];
    			$sr = true;
			}
		?>
			<!--<ul id="errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
        		<li id="info">There were some problems with your form submission:</li>
   			</ul>
   			<?php 
    			if(isset($cf['errors']) && count($cf['errors']) > 0) :
        		foreach($cf['errors'] as $error) :
    		?>
    		<li>
    			<?php echo $error ?>
    		</li>
   			 <?php
        		endforeach;
    			endif;
    		?>
   			<p id="success" class="<?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">Thanks for your message! We will get back to you ASAP!</p>-->
   			
		<!-- Form -->
		<form id="contact-form" action="index.php?page=process" method="post">
				<label for="name">Name <span class="required">*</span></label>
				<input id="name" name="name" value="" placeholder="Please enter your name" type="text" tabindex="1" required="required" autofocus="autofocus"><br />
				
				<label for="email">Email <span class="required">*</span></label>
        		<input type="email" id="email" name="email" value="" placeholder="Please enter your mail" required="required" />
				
				<label for="enquiry">Enquiry </label>
        			<select id="enquiry" name="enquiry">
            			<option value="general">General</option>
            			<option value="sales">Support</option>
            			<option value="support">Thank you !</option>
        			</select>
			
				 <label for="message">Message <span class="required">*</span></label>
        		<textarea id="message" name="message" placeholder="Include all the details you can" required="required" data-minlength="20"></textarea>
			
			<span id="loading"></span>
        		<input type="submit" value="Send Mail" id="submit-button" />
        	<p id="req-field-desc"><span class="required">*</span> indicates a required field</p>
		</form>

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
<script src="js/scripts.js"></script>
</body>
</html>