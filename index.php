<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title><?=$mofh['title'];?> - Free Professional Web Hosting</title>
	<meta name="keywords" content="free, web, hosting, web hosting, domain names, web site, search engine optimization, hosting, servers, cpanel hosting, cpanel, free website, reliable hosting, professional hosting">
	<meta name="description" content="<?=$mofh['description'];?>">
	<meta name="author" content="MOFHDevWorld">
	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="5 days">
	<meta name="theme-color" content="#2196F3">
	<meta name="twitter:card" content="summary_large_image">
    <meta property="og:url" content="<?=$mofh['protocol'];?><?=$mofh['domain'];?>">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Free Professional Web Hosting">
	<meta property="og:description" content="<?=$mofh['description'];?>">
	<meta property="og:image" content="<?=$mofh['logo'];?>">
	<meta property="og:locale" content="en_US">
	<link rel="canonical" href="<?=$mofh['protocol'];?><?=$mofh['domain'];?>">
	<link rel='shortcut icon' href="<?=$mofh['favicon'];?>">

    <!-- CSS  -->
    <link href="min/plugin-min.css" type="text/css" rel="stylesheet">
    <link href="min/custom-min.css" type="text/css" rel="stylesheet" >
</head>
<body id="top" class="scrollspy">

<!-- Pre Loader -->
<div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div>

<!--Navigation-->
 <div class="navbar-fixed">
    <nav id="nav_f" class="default_color" role="navigation">
        <div class="container">
            <div class="nav-wrapper">
            <a href="/" id="logo-container" class="brand-logo"><?=$mofh['title'];?></a>
                <ul itemscope itemtype="http://www.schema.org/SiteNavigationElement" class="right hide-on-med-and-down">
                    <li itemprop="name"><a href="free-hosting.php" itemprop="url">Free Hosting</a></li>
                    <li itemprop="name"><a href="premium-hosting.php" itemprop="url">Premium Hosting</a></li>
                    <li itemprop="name"><a href="domain.php" itemprop="url">Domains</a></li>
                    <li itemprop="name"><a href="faq.php" itemprop="url">FAQ</a></li>
                    <li itemprop="name"><a href="#contact" itemprop="url">Contact</a></li>
                </ul>
                <ul itemscope itemtype="http://www.schema.org/SiteNavigationElement" id="nav-mobile" class="side-nav">
                    <li itemprop="name"><a href="free-hosting.php" itemprop="url">Free Hosting</a></li>
                    <li itemprop="name"><a href="premium-hosting.php" itemprop="url">Premium Hosting</a></li>
                    <li itemprop="name"><a href="domain.php" itemprop="url">Domains</a></li>
                    <li itemprop="name"><a href="faq.php" itemprop="url">FAQ</a></li>
                    <li itemprop="name"><a href="#contact" itemprop="url">Contact</a></li>
                </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </div>
    </nav>
</div>

<!--Hero-->
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <h1 class="text_h center header cd-headline letters type">
            <span class="cd-words-wrapper waiting">
                <b class="is-visible">Unlimited</b>
                <b>Professional</b>
                <b>Reliable</b>
            </span>
			            <span>Free Hosting</span>
        </h1>
    </div>
</div>

<!--Intro and service-->
<div id="intro" class="section scrollspy">
    <div class="container">
        <div class="row">
            <div  class="col s12">
                <h2 class="center header text_h2"> Welcome to our <span class="span_h2">free</span> web hosting!</h2>
				<p class="center header text_h5">We are specialists in free hosting services using clustered technology powered by one of the largest hosting organizations on the internet. Sign up here for fast free PHP & MySQL hosting supporting free domains. <br /> <br /> A powerful control panel, VistaPanel, is provided to help you manage your website, packed with hundreds of great features including website building tools, Email, FTP, addon domains and much more. </p>
            </div>

        </div>
    </div>
</div>

<div class="section scrollspy" id="features">
    <div class="container">
        <h2 class="header text_b">Features</h2>
        <div class="row">
          <div  class="col s12 m4 l4">
              <div class="center promo promo-example">
                  <i class="mdi-image-flash-auto"></i>
                  <h5 class="promo-caption">Instant Activation</h5>
                  <p class="light center">We don't want you to wait for hours just to get your free hosting account, we want you to be happy using our free service as soon as possible! So never wait long again to get your free hosting account!</p>
              </div>
          </div>
          <div  class="col s12 m4 l4">
              <div class="center promo promo-example">
                  <i class="mdi-image-flash-on"></i>
                  <h5 class="promo-caption">Fastest Free Hosting</h5>
                  <p class="light center">Our servers will deliver the content of your website to your computer at lightning speed! No more waiting for ages for websites to load!</p>
              </div>
          </div>
          <div class="col s12 m4 l4">
              <div class="center promo promo-example">
                  <i class="mdi-social-group"></i>
                  <h5 class="promo-caption">Support Available 24/7</h5>
                  <p class="light center">Hate of waiting hours and days to get a solution to your problem? We do too! That is why we offer support around the clock, ready to assist you with any issue you might have.</p>
              </div>
          </div>
        </div>
        <div class="row">
          <div  class="col s12 m4 l4">
              <div class="center promo promo-example">
                  <i class="mdi-hardware-security"></i>
                  <h5 class="promo-caption">High Security</h5>
                  <p class="light center">We take security very seriously. We have taken measures such as Firewall Protection to protect your site against malware and anything harmful that could damage your site.</p>
              </div>
          </div>
          <div class="col s12 m4 l4">
              <div class="center promo promo-example">
                  <i class="mdi-hardware-phonelink"></i>
                  <h5 class="promo-caption">Modern Panel Theme</h5>
                  <p class="light center">Our panel uses the latest version of PaperLantern, a modern and responsive theme to suit your needs.</p>
              </div>
          </div>
          <div class="col s12 m4 l4">
              <div class="center promo promo-example">
                  <i class="mdi-action-schedule"></i>
                  <h5 class="promo-caption">99.99% Uptime Guaranteed</h5>
                  <p class="light center">Uptime is our main priority. We use generators as backup power for our servers so we can gurantee 99.9% uptime.</p>
              </div>
          </div>
        </div>
    </div>
</div>

<!--Parallax-->
<div class="parallax-container">
    <div class="parallax"><img src="img/parallax1.png"></div>
</div>

<!--Team-->
<div class="section scrollspy" id="team">
    <div class="container">
        <h2 class="header text_b"> Our Team </h2>
        <div class="row">
            <div class="col s12 m3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/avatar1.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">PCTipsGR <br/>
                            <small><em><a class="red-text text-darken-1" href="#">CEO</a></em></small></span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/joash.c.pereira">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://twitter.com/im_joash">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://plus.google.com/u/0/+JoashPereira">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/joashp">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/avatar2.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">MAHOfficial<br/>
                            <small><em><a class="red-text text-darken-1" href="#">COO</a></em></small>
                        </span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/MuhammadAqibHussainOfficial">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://twitter.com/Aqib2001">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://plus.google.com/+MuhammadAqibHussain2016">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/muhammadaqibhussainofficial/">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/avatar3.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">
                            Arcenas090 <br/>
                            <small><em><a class="red-text text-darken-1" href="#">CMO</a></em></small></span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/Arcenas090">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://twitter.com/Arcenas090">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://plus.google.com/+Arcenas090">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/Arcenas090">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Footer-->
<footer id="contact" class="page-footer default_color scrollspy">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <form class="col s12" action="contact.php" method="post">
                    <div class="row">
                      <h5 class="white-text"> Send us a message </h5>
                        <div class="input-field col s6">
                            <i class="mdi-action-account-circle prefix white-text"></i>
                            <input id="icon_prefix" name="name" type="text" class="validate white-text">
                            <label for="icon_prefix" class="white-text">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="mdi-communication-email prefix white-text"></i>
                            <input id="icon_email" name="email" type="email" class="validate white-text">
                            <label for="icon_email" class="white-text">Email</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="mdi-editor-mode-edit prefix white-text"></i>
                            <textarea id="icon_prefix2" name="message" class="materialize-textarea white-text"></textarea>
                            <label for="icon_prefix2" class="white-text">Your Message</label>
                        </div>
                        <div class="col offset-s7 s5">
                            <button class="btn waves-effect waves-light red darken-1" type="submit">Submit
                                <i class="mdi-content-send right white-text"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text"><?=$mofh['title'];?></h5>
                <ul>
                    <li><a class="white-text" href="<?=$mofh['protocol'];?><?=$mofh['domain'];?>">Home</a></li>
                    <li><a class="white-text" href="free-hosting.php">Free Hosting</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Social</h5>
                <ul>
                    <li>
                        <a class="white-text" href="<?=$mofh['facebook'];?>">
                            <i class="small fa fa-facebook-square white-text"></i> Facebook
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="<?=$mofh['twitter'];?>">
                            <i class="small fa fa-twitter-square white-text"></i> Twitter
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="<?=$mofh['google-plus'];?>">
                            <i class="small fa fa-google-plus-square white-text"></i> Google Plus
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="<?=$mofh['linkedin'];?>">
                            <i class="small fa fa-linkedin-square white-text"></i> Linkedin
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright default_color">
        <div class="container">
            Made with <i class="mdi-action-favorite"></i> by <a class="white-text" href="https://github.com/MOFHDevWorld">MOFHDevWorld</a>
        </div>
    </div>
</footer>


    <!--  Scripts-->
    <script src="min/plugin-min.js"></script>
    <script src="min/custom-min.js"></script>

    </body>
</html>
