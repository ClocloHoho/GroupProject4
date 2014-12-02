<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Eat in Cork</title>
        <link rel="stylesheet" type="text/css" href="css/main_page.css">
        <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300' rel='stylesheet' type='text/css'>
    </head>

    <body>
    
   <div class="menu-trigger"></div>
	
	<nav id="navbar">
		<ul>
			<li><a href="http://ethercycle.com/stickymenu">HOME</a></li>
		</ul>

		<ul>
			<li><a href="http://www.linkedin.com/company/ethercycle">LOGOUT</a></li>
		</ul>
	</nav>
	
	<section class="app">
	<div class="container">
		<div class="timeline">
			<section class="entry" id="restaurant1" itemscope itemtype="http://schema.org/CreativeWork">
				<div class="wrapper">
					<div class="header-row">
						<div class="content-name">
							<span class="name">*****</span>
						</div>
						<div class="content">
							<h3>*Name of the restaurant*</h3>
							<p>*Description of the restaurant*</p>
						</div>
					<div>
					<aside class="image-area">
						*Here : the Instagram pictures*
					</aside>
					<ul class="interactions">
						<li>
							<span class="name">Where to find us ?</span>
							<span class="value">*The Google Map*</span>
						</li>
						<li>
							<span class="name">Suggestions ?</span>
							<span class="value">*<img src="" alt="Enveloppe"/>*</span>
						</li>
					</ul>
				</div>
			</section>
			
			<section class="entry" id="restaurant2" itemscope itemtype="http://schema.org/CreativeWork">
				<div class="wrapper">
					<div class="header-row">
						<div class="content-name">
							<span class="name">*****</span>
						</div>
						<div class="content">
							<h3>*Name of the restaurant*</h3>
							<p>*Description of the restaurant*</p>
						</div>
					<div>
					<aside class="image-area">
						*Here : the Instagram pictures*
					</aside>
					<ul class="interactions">
						<li>
							<span class="name">Where to find us ?</span>
							<span class="value">*The Google Map*</span>
						</li>
						<li>
							<span class="name">Suggestions ?</span>
							<span class="value">*<img src="" alt="Enveloppe"/>*</span>
						</li>
					</ul>
				</div>
			</section>
			<section class="entry" id="restaurant3" itemscope itemtype="http://schema.org/CreativeWork">
				<div class="wrapper">
					<div class="header-row">
						<div class="content-name">
							<span class="name">*****</span>
						</div>
						<div class="content">
							<h3>*Name of the restaurant*</h3>
							<p>*Description of the restaurant*</p>
						</div>
					</div>
					<aside class="image-area">
						*Here : the Instagram pictures*
					</aside>
					<ul class="interactions">
						<li>
							<span class="name">Where to find us ?</span>
							<span class="value">*The Google Map*</span>
						</li>
						<li>
							<span class="name">Suggestions ?</span>
							<span class="value">*<img src="" alt="Enveloppe"/>*</span>
						</li>
					</ul>
				</div>
			</section>
		</div>
	</div>
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