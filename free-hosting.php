<?php
include 'configuration.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>Free Hosting - <?=$mofh['title'];?></title>
	<meta name="keywords" content="free, web, hosting, web hosting, premium, web site, search engine optimization, hosting, servers, ph, premium hosting, shared, paid, availability, created, page">
	<meta name="description" content="View free web hosting plans from <?=$mofh['title'];?>. Our free hosting plans contain powerful management tools and features, are reliable and easy to setup!">
	<meta name="author" content="MOFHDevWorld">
	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="5 days">
	<meta name="theme-color" content="#2196F3">
	<meta name="twitter:card" content="summary_large_image">
    <meta property="og:url" content="<?=$mofh['protocol'];?><?=$mofh['domain'];?>/free-hosting.php">
	<meta property="og:type" content="website">
	<meta property="og:description" content="View free web hosting plans from <?=$mofh['title'];?>. Our free hosting plans contain powerful management tools and features, are reliable and easy to setup!">
	<meta property="og:title" content="Free Hosting - <?=$mofh['title'];?>">
	<meta property="og:image" content="<?=$mofh['logo'];?>">
	<meta property="og:locale" content="en_US">
	<link rel="canonical" href="<?=$mofh['protocol'];?><?=$mofh['domain'];?>/free-hosting.php">
	<link rel='shortcut icon' href="<?=$mofh['favicon'];?>">

    <!-- CSS  -->
    <link href="min/plugin-min.css" type="text/css" rel="stylesheet">
    <link href="min/custom-min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
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

<!-- Hero -->
<div class="section no-pad-bot" id="ph-banner">
<div class="container">
        <h1 class="center-align">
            <span style="color:#fff">Free Hosting</span></h1>
			<h4 class="center-align">
			<span style="color:#fff">Hosting that changes your perception of free services</span></h4>

		</div>
    </div>
    <div class="section no-pad-bot" id="pricing-tabe">
<div class="container">
  <div class="row">
      <h2 class="center header text_h2"> See Our <span class="span_h2">Premium-Like</span> Features!</h2>
  </div>
  <div class="row">

    <div class=" col s12">
      <div class="card">

       <div class="card-head default_color">
            <div class="card-head-content center">
              <span>Free</span><br>
              <span class="price white-text">$0.00/forever</span>
            </div>
          </div>

        <table class="highlight centered">
        <tbody>
          <tr>
            <td class="ptable-border ptable-padone"><strong>Clustered</strong> servers</td>
          </tr>
          <tr>
            <td class="ptable-border"><strong>Unlimited</strong> GB Bandwidth</td>
          </tr>
          <tr>
            <td class="ptable-border"><strong>Unlimited</strong> GB Disk Space</td>
          </tr>
          <tr>
            <td class="ptable-border"><strong>Unlimited</strong> Addon Domains</td>
          </tr>
          <tr>
            <td class="ptable-border"><strong>1</strong> FTP Account</td>
          </tr>
          <tr>
            <td class="ptable-border"><strong>Powerful</strong> control panel with <strong>Softaculous</strong></td>
          </tr>
        </tbody>
      </table>

        <div class="ptable-padding center">
          <div class="row">
            <div class="col s12">
              <a  href='signup.php' target='_blank' class='btn waves-effect waves-light default_color'>Order Now</a>
            </div>
          </div>
        </div>

      </div>
    </div>
    </div>
</div>
<center><a class="waves-effect waves-light btn indigo accent-4" href="img/demo.png" target="_blank"><i class="mdi-hardware-phonelink left"></i>vPanel Demo</a> <a class="waves-effect waves-light modal-trigger btn blue accent-4" href="#all-features"><i class="mdi-action-view-list left"></i>See All Features</a></center>
<div id="all-features" class="modal">
    <div class="modal-content">
      <h4>This is what we offer</h4>
       <ul class="collapsible">
    <li>
      <div class="collapsible-header"><i class="mdi-action-info left"></i>Generic Information</div>
      <div class="collapsible-body">
          <table class="striped centered highlight">
          <tbody>
          <tr>
              <td>Disk Space</td>
              <td>Unlimited GB</td>
          </tr>
          <tr>
              <td>Bandwidth</td>
              <td>Unlimited GB</td>
          </tr>
          <tr>
              <td>Addon Domains</td>
              <td>Unlimited</td>
          </tr>
          <tr>
              <td>Subdomains</td>
              <td>Unlimited</td>
          </tr>
          <tr>
              <td>MySQL Databases</td>
              <td>Unlimited</td>
          </tr>
          <tr>
              <td>Email Accounts</td>
              <td>None</td>
          </tr>
          <tr>
              <td>FTP Accounts</td>
              <td>1</td>
          </tr>
          <tr>
              <td>SiteBuilder</td>
              <td><strong><i class="mdi-navigation-close red-text"></i></strong></td>
          </tr>
          <tr>
              <td>Site Statistics</td>
              <td><strong><i class="mdi-navigation-close red-text"></i></strong></td>
          </tr>
          <tr>
              <td>Custom Error Pages</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
          </tr>
          <tr>
              <td>Remote MySQL</td>
              <td><strong><i class="mdi-navigation-close red-text"></i></strong></td>
          </tr>
          <tr>
              <td>SSL Certificates</td>
              <td><strong><i class="mdi-navigation-check green-text"></i> <br>(Install your own)</strong></td>
          </tr>
          <tr>
              <td>HTTP/2 Support</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
          </tr>
          <tr>
              <td>1-Click Cloudflare Enabler</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
          </tr>
          <tr>
                <td>Softaculous</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
          </tr>
          </tbody>
      </table>
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="mdi-action-dns left"></i>Server Limits</div>
      <div class="collapsible-body">
          <table class="striped centered highlight">
            <tbody>
            <tr>
                <td>Max File Size</td>
                <td>10 MB</td>
            </tr>
            <tr>
                <td>Hits Limit</td>
                <td>50000/day</td>
            </tr>
            <tr>
                <td>Inodes Limit</td>
                <td>30019</td>
            </tr>
            <tr>
                <td>Entry Processes Limit</td>
                <td>Fair Usage</td>
            </tr>
            <tr>
                <td>CPU Limit</td>
                <td>Fair Usage</td>
            </tr>
            <tr>
                <td>RAM Limit</td>
                <td>Fair Usage</td>
            </tr>
            </tbody>
          </table>
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="mdi-communication-email left"></i>Email Features</div>
      <div class="collapsible-body">
          <table class="striped centered highlight">
            <tbody>
            <tr>
                <td><strong>Available in <a href="premium-hosting.php">premium hosting</a></strong></td>
            </tr>
            </tbody>
          </table>
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="mdi-action-settings-ethernet left"></i>Scripting Features</div>
      <div class="collapsible-body">
          <table class="striped centered highlight">
        <tbody>
            <tr>
                <td>PHP</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>MySQL</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>PostgreSQL</td>
              <td><strong>Available in <a href="premium-hosting.php">premium hosting</a></strong></td>
            </tr>
            <tr>
                <td>PhpMyAdmin</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Javascript/DHTML</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
			<tr>
                <td>Partial .htaccess Control</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Custom CRON Jobs</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
        </tbody>
          </table>
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="mdi-maps-local-grocery-store left"></i>Ecommerce Features</div>
      <div class="collapsible-body">
          <table class="striped centered highlight">
            <tbody>
            <tr>
                <td>Install PHP Cart Scripts</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Softaculous Apps Installer</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
			<tr>
                <td>Directory Privacy</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            </tbody>
          </table>
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="mdi-hardware-security left"></i>Security Features</div>
      <div class="collapsible-body">
          <table class="striped centered highlight">
            <tbody>
            <tr>
                <td>24/7 Monitoring</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Firewall Protection</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>SiteLock</td>
              <td><strong><i class="mdi-navigation-close red-text"></i></strong></td>
            </tr>
            <tr>
                <td>Spam Filter Spam Assassin</td>
              <td><strong><i class="mdi-navigation-close red-text"></i></strong></td>
            </tr>
            <tr>
                <td>Hotlink Protection</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Leech Protect</td>
              <td><strong><i class="mdi-navigation-close red-text"></i></strong></td>
            </tr>
            <tr>
                <td>UPS Power Back-up/Back-up Generator</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            </tbody>
          </table>
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="mdi-action-view-list left"></i>Our Technology</div>
      <div class="collapsible-body">
          <table class="striped centered highlight">
            <tbody>
            <tr>
                <td>Cisco Powered Network</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Linux Clustered Server Network</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Intel Processors</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Apache Web Servers</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            </tbody>
          </table>
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="mdi-action-settings left"></i>Server Settings</div>
      <div class="collapsible-body"><table class="striped centered highlight">
        <tbody>
            <tr>
                <td>PHP Version</td>
                <td>5.4 / 5.5 / 5.6 / 7.4</td>
            </tr>
            <tr>
                <td>MySQL</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>VistaPanel</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>SMTP</td>
              <td><strong><i class="mdi-navigation-close red-text"></i></strong></td>
            </tr>
            <tr>
                <td>Curl</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>GDLibrary</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Ioncube Loader</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Cron Jobs</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
        </tbody>
          </table></div>
    </li>
  </ul>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-light btn-flat btn-black-white">Close</a>
    </div>
  </div>
<div style="padding:1rem;"></div>
</div>
<div class="section no-pad-bot">
    <div class="container">
        <h2 class="center header text_h2">Featured <span class="span_h2">Software</span></h2>
        <div class="row">
          <div class="col s12 m4 l4">
              <div class="center promo promo-example"><br />
                  <i class="fab fa-wordpress-simple"></i><br />
                  <h5 class="promo-caption">WordPress</h5>
                  <p class="light center">WordPress is a state-of-the-art publishing platform with a focus on aesthetics, web standards, and usability.</p>
              </div>
          </div>
          <div class="col s12 m4 l4">
              <div class="center promo promo-example"><br />
                  <i class="fab fa-joomla"></i><br />
                  <h5 class="promo-caption">Joomla</h5>
                  <p class="light center">Joomla is an award-winning content management system (CMS), which enables you to build Web sites and powerful online applications.</p>
              </div>
          </div>
          <div class="col s12 m4 l4">
              <div class="center promo promo-example"><br />
                  <i class="fab fa-opencart"></i><br />
                  <h5 class="promo-caption">OpenCart</h5>
                  <p class="light center">OpenCart is an open source PHP-based online shopping cart system. A robust e-commerce solution for Internet merchants with the ability to create their own online business.</p>
              </div>
          </div>
        </div>
    </div>
</div>
<div class="section no-pad-bot" id="ph-wci">
    <div class="container">
        <div class="row">
            <h2 class="center header text_h2"><span class="white-text">Why Choose </span><span class="span_h2"><?=$mofh['title'];?></span><span class="white-text">?</span></h2>
            <div class="row">
      <div class="col s3">
        <div class="center promo promo-example">
            <i class="mdi-notification-play-install"></i>
            <h5 class="promo-caption white-text">Softaculous</h5>
            <p class="dark center white-text">All <?=$mofh['title'];?> accounts come with Softaculous, a script library that installs apps for you.</p>
              </div>
      </div>
      <div class="col s3">
        <div class="center promo promo-example">
            <i class="mdi-action-swap-horiz"></i>
            <h5 class="promo-caption white-text">Free Upgrade</h5>
            <p class="dark center white-text"><?=$mofh['title'];?> can quickly and easily migrate your website to a premium hosting package, free of charge!</p>
        </div>
      </div>
      <div class="col s3">
        <div class="center promo promo-example">
            <i class="mdi-hardware-phonelink"></i>
            <h5 class="promo-caption white-text">VistaPanel</h5>
            <p class="dark center white-text"><?=$mofh['title'];?> uses the powerful, custom-made vPanel control panel to give you full control of your website.</p>
        </div>
      </div>
      <div class="col s3">
        <div class="center promo promo-example">
            <i class="mdi-communication-live-help"></i>
            <h5 class="promo-caption white-text">Free Support</h5>
            <p class="dark center white-text">Need help with your website or hosting account? <?=$mofh['title'];?> is here to assist you!</p>
        </div>
      </div>
    </div>
        </div>
    </div>
</div>
<div class="section no-pad-bot">
    <div class="container">
        <div class="row">
            <h2 class="center header text_h2"><span class="span_h2">Technical</span> Information</h2>
            <div class="row">
      <div class="col s6">
        <div class="center promo promo-example">
            <i class="mdi-hardware-phonelink"></i>
            <h5 class="promo-caption">Control Panel Features</h5>
            <ul class="light center">
             <li>Custom vPanel control panel</li>
             <li>Softaculous with 240+ scripts</li>
             <li>Manage your Sites, Files, and Databases</li>
             <li>Install SSL Certificates</li>
             <li>Free DNS Records (CNAME, MX)</li>
             <li>Free Cloudflare Integration</li>
            </ul>
              </div>
      </div>
      <div class="col s6">
        <div class="center promo promo-example">
            <i class="mdi-communication-email"></i>
            <h5 class="promo-caption">Emails</h5>
            <ul class="light center">
             <li>Available in <strong><a href="premium-hosting.php">premium hosting</a></strong></li>
            </ul>
        </div>
      </div>
      </div>
      <div class="row">
      <div class="col s6">
        <div class="center promo promo-example">
            <i class="mdi-action-settings-ethernet"></i>
            <h5 class="promo-caption">Coding/MySQL</h5>
            <ul class="light center">
             <li>Support for PHP 5.4, 5.5, 5.6 and 7.4</li>
             <li>PHPMyAdmin</li>
             <li>MySQL</li>
             <li>Cronjob Scripting</li>
            </ul>
        </div>
      </div>
      <div class="col s6">
        <div class="center promo promo-example">
            <i class="mdi-action-trending-up"></i>
            <h5 class="promo-caption">Metrics</h5>
            <ul class="light center">
             <li>Disk</li>
             <li>Bandwidth</li>
             <li>Resource Monitor (Inode Limits, Daily Hits)</li>
            </ul>
        </div>
      </div>
    </div>
        </div>
        <div id="message">
      <div class="card-panel white row">
		<div class="col s12 m8">
        <h5 class="black-text">Are you convinced yet? Want to test out our features, or know more?</h5><br>
      </div>
	  <div class="col s12 m4"><br />
          <a href="signup.php" class="btn-large waves-effect waves-light blue accent-4 right">Sign up now!</a>
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
                            <i class="small fab fa-facebook-square white-text"></i> Facebook
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="<?=$mofh['twitter'];?>">
                            <i class="small fab fa-twitter-square white-text"></i> Twitter
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="<?=$mofh['google-plus'];?>">
                            <i class="small fab fa-google-plus-square white-text"></i> Google Plus
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="<?=$mofh['linkedin'];?>">
                            <i class="small fab fa-linkedin-square white-text"></i> Linkedin
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
    <script src="min/jquery-3.3.1.min.js"></script>
    <script src="min/mofh.min.js"></script>
    <script src="min/custom-min.js"></script>

    </body>
</html>
