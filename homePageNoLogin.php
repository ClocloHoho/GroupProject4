<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Eat in Cork</title>
    <script language="javascript" type="text/javascript" src="js/global.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
</head>

<body class="loading">

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
                                <a href="index.php?page=registerPopup">
                                    <button class="registerButton button block-right block">Register</button>
                                </a>
                            </div>
                            <div class="LogIn">
                                <a href="index.php?page=login">
                                <!--<form action="tools/login.php" method="post" class="block-left block">
                                    <input type="text" name="userName" id="userName" placeholder="Username" class="loginFormFields">
                                    <input type="password" name="password" id="password" placeholder="Password" class="loginFormFields">
                                    <input type="submit" value="Login" class="loginSubmitButton">
                                </form>-->
                                    <button class="button block-left block">Log In</button>
                                </a>
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
<!--FOOTER-->
            <footer>
    <div class="bar">
        <div class="bar-wrap">
            <div class="social">
                <a href="#" class="fb">
                <span data-icon="f" class="icon"><img src="img/facebook.png"/></span>
                <span class="info">
                    <span class="follow"><div class="fb-follow" data-href="https://www.facebook.com/eatincork" data-colorscheme="light" data-layout="button" data-show-faces="true"></div></span>
                </span>
            </a>

            <a href="#" class="tw">
                <span data-icon="T" class="icon"><img src="img/social.png"/></span>
                <span class="info">
                    <span class="follow"><a href="https://twitter.com/eat_in_cork" class="twitter-follow-button" data-show-count="false" data-size="large">
		Follow @Eat_In_Cork
	</a> </span>
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