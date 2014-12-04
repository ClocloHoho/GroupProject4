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
			<li><a href="mainPage.php">Home</a></li>
			<li><a href="aboutSite.html">About</a></li>
			<li><a href="aboutUs.html">Team</a></li>
			<li><a href="contactUs.php">Contact</a></li>
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
		<div id="main" style="padding:50px 0 0 0;">
		
		<!-- Form -->
		<form id="contact-form" action="/" method="post">
			<h3>Get in touch</h3>
			<h4>Fill in the form below, and we'll get back to you within 24 hours.</h4>
			<div>
				<label>
					<span>Name *</span>
					<input placeholder="Please enter your name" type="text" tabindex="1" required autofocus>
				</label>
			</div>
			<div>
				<label>
					<span>Email *</span>
					<input placeholder="Please enter your email address" type="email" tabindex="2" required>
				</label>
			</div>
			<div>
				<label for="enquiry">
					<span>Enquiry *</span>
        			<select id="enquiry" name="enquiry">
            			<option value="general">General</option>
            			<option value="sales">Support</option>
            			<option value="support">Thank you !</option>
        			</select>
        		</label>
			</div>
			<div>
				<label>
					<span>Message *</span>
					<textarea placeholder="Include all the details you can" tabindex="5" required></textarea>
				</label>
			</div>
			<div>
				<button name="submit" type="submit" id="contact-submit">Send Email</button>
			</div>
		</form>
		<!-- /Form -->
		
		</div>
	</div>
</section>
<script src="js/scripts.js"></script>
</body>
</html>