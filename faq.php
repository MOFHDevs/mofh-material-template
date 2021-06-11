<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>FAQ's - <?=$mofh['title'];?></title>
	<meta name="keywords" content="free, web, hosting, web hosting, faq, web site, search engine optimization, hosting, servers, faqs, frequently, asked, questions, frequently asked questions, availability, created, page">
	<meta name="description" content="Frequently Asked Questions of <?=$mofh['title'];?> that will answer your many questions about our hosting.">
	<meta name="author" content="MOFHDevWorld">
	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="5 days">
	<meta name="theme-color" content="#2196F3">
	<meta name="twitter:card" content="summary_large_image">
    <meta property="og:url" content="<?=$mofh['protocol'];?><?=$mofh['domain'];?>/faq.php">
	<meta property="og:type" content="website">
	<meta property="og:title" content="FAQ's - Free Professional Web Hosting">
	<meta property="og:description" content="Frequently Asked Questions of <?=$mofh['title'];?> that will answer your many questions about our hosting.">
	<meta property="og:image" content="<?=$mofh['logo'];?>">
	<meta property="og:locale" content="en_US">
	<link rel="canonical" href="<?=$mofh['protocol'];?><?=$mofh['domain'];?>/faq.php">
	<link rel='shortcut icon' href="<?=$mofh['favicon'];?>">

    <!-- CSS  -->
    <link href="min/plugin-min.css" type="text/css" rel="stylesheet">
    <link href="min/custom-min.css" type="text/css" rel="stylesheet">
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
            <a href="/" id="logo-container" class="brand-logo"><?=$mofh['title'];?></a><br>
                <ul itemscope itemtype="http://www.schema.org/SiteNavigationElement" class="right hide-on-med-and-down">
                    <li itemprop="name"><a href="signup.php" itemprop="url">Signup</a></li>
                    <li itemprop="name"><a href="login.php" itemprop="url">Login</a></li>
                    <li itemprop="name"><a href="premium-hosting.php" itemprop="url">Premium Hosting</a></li>
                    <li itemprop="name"><a href="domain.php" itemprop="url">Domains</a></li>
                    <li itemprop="name"><a href="faq.php" itemprop="url">FAQ</a></li>
                    <li itemprop="name"><a href="#contact" itemprop="url">Contact</a></li>
                </ul>
                <ul itemscope itemtype="http://www.schema.org/SiteNavigationElement" id="nav-mobile" class="side-nav">
                    <li itemprop="name"><a href="signup.php" itemprop="url">Signup</a></li>
                    <li itemprop="name"><a href="login.php" itemprop="url">Login</a></li>
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

<!-- Hero -->
<div class="section no-pad-bot" id="faq-banner">
<div class="container">
        <h1 class="center-align">
            <span style="color:#fff">FAQ's</span></h1>
			<h4 class="center-align">
			<span style="color:#fff">Common questions before registration</span></h4>

		</div>
    </div>
</div>
<div class="section scrollspy" id="faq">
<div class="container">
        <h2 class="header text_b center">Frequently Asked Questions!</h2>
		 <ul class="collapsible popout">
    <li>
      <div class="collapsible-header"><span style="color: #2196f3;"><i class="mdi-navigation-chevron-right"></i>Is your hosting really free?</span></div>
      <div class="collapsible-body" id="dm-faq-cb"><span>Yes, you can host your website without having to pay forever.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><span style="color: #2196f3;"><i class="mdi-navigation-chevron-right"></i>Do I get a free subdomain?</span></div>
      <div class="collapsible-body" id="dm-faq-cb"><span>Yes, you can get a free subdomain like yourname.<?=$mofh['domain'];?> for free!.</span></div>
    </li>
	<li>
      <div class="collapsible-header"><span style="color: #2196f3;"><i class="mdi-navigation-chevron-right"></i>How long does it takes to setup my account?</span></div>
      <div class="collapsible-body" id="dm-faq-cb"><span>Forget about waiting lists, <?=$mofh['title'];?> accounts are automatically created in minutes.</span></div>
    </li>
	<li>
      <div class="collapsible-header"><span style="color: #2196f3;"><i class="mdi-navigation-chevron-right"></i>Can I host my own domains?</span></div>
      <div class="collapsible-body" id="dm-faq-cb"><span>Yes, you can easily host your own domain name registered elsewhere on <?=$mofh['title'];?>.</span></div>
    </li>
	<li>
      <div class="collapsible-header"><span style="color: #2196f3;"><i class="mdi-navigation-chevron-right"></i>For how long is the free hosting valid?</span></div>
      <div class="collapsible-body" id="dm-faq-cb"><span><?=$mofh['title'];?> is free forever! There is no time limit for free hosting. You can sign up whenever you want and use it for as long as you want! Some people have been hosting their websites with us for years, without ever paying anything!.</span></div>
    </li>
	<li>
      <div class="collapsible-header"><span style="color: #2196f3;"><i class="mdi-navigation-chevron-right"></i>Will you put ads on my site?</span></div>
      <div class="collapsible-body" id="dm-faq-cb"><span>Never! We make enough using the ads on our main site and control panel to cover the costs.</span></div>
    </li>
	<li>
      <div class="collapsible-header"><span style="color: #2196f3;"><i class="mdi-navigation-chevron-right"></i>Why do you provide free hosting?</span></div>
      <div class="collapsible-body" id="dm-faq-cb"><span><?=$mofh['title'];?> provides free hosting, because we believe everyone should have the opportunity to build a presence online. Regardless of who you are, where you are and what your budget is, we believe you should be able to have a website.</span></div>
    </li>
	<li>
      <div class="collapsible-header"><span style="color: #2196f3;"><i class="mdi-navigation-chevron-right"></i>Is <?=$mofh['title'];?> a demo, trial or sample for premium hosting?</span></div>
      <div class="collapsible-body" id="dm-faq-cb"><span>Absolutely not! <?=$mofh['title'];?> is fully featured, completely free website hosting. We provide offers for alternative, paid services for people looking for more, but <?=$mofh['title'];?> is not sample for these third party offers.</span></div>
    </li>

  </ul>
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
                    <li><a class="white-text" href="signup.php" >Signup</a></li>
                    <li><a class="white-text" href="login.php" >Login</a></li>
                    <li><a class="white-text" href="premium-hosting.php" >Premium Hosting</a></li>
                    <li><a class="white-text" href="domain.php" >Domains</a></li>
                    <li><a class="white-text" href="faq.php" >FAQ</a></li>
                    <li><a class="white-text" href="#contact" >Contact</a></li>
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
    &copy; <?php echo date("Y"); ?> <a href="index.php" id="logo-container" class="white-text"><?=$mofh['title'];?></a>. All rights reserved.
       Powered by <a class="white-text" href="https://ifastnet.com/portal/aff.php?aff=<?=$mofh['affid'];?>">iFastNet</a>.
      </div>
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
