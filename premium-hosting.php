<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>Premium Hosting - <?=$mofh['title'];?></title>
	<meta name="keywords" content="free, web, hosting, web hosting, premium, web site, search engine optimization, hosting, servers, ph, premium hosting, shared, paid, availability, created, page">
	<meta name="description" content="Get Award Winning Premium Web Hosting for your Website">
	<meta name="author" content="MOFHDevWorld">
	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="5 days">
	<meta name="theme-color" content="#2196F3">
	<meta name="twitter:card" content="summary_large_image">
    <meta property="og:url" content="<?=$mofh['protocol'];?><?=$mofh['domain'];?>/faq.php"> 
	<meta property="og:type" content="website"> 
	<meta property="og:title" content="Premium Hosting - <?=$mofh['title'];?>">
	<meta property="og:image" content="<?=$mofh['logo'];?>">
	<meta property="og:locale" content="en_US">
	<link rel="canonical" href="<?=$mofh['protocol'];?><?=$mofh['domain'];?>/faq.php">
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
            <span style="color:#fff">Premium Hosting</span></h1>
			<h4 class="center-align">
			<span style="color:#fff">The best award winning premium hosting everyone desires</span></h4>
		
		</div>
    </div>
    <div class="section no-pad-bot" id="pricing-tabe">
<div class="container">
  <div class="row">
      <h2 class="center header text_h2"> Choose Your <span class="span_h2">Premium</span> Hosting Plan!</h2>
  </div>
  <div class="row">
  
    <div class=" col s12 m4">
      <div class="card">
    
       <div class="card-head default_color">
            <div class="card-head-content center">
              <span>Starter</span><br>
              <span class="price white-text">$17.99/year</span>
            </div>
          </div>
       
        <table class="highlight centered">
        <tbody>
          <tr>
            <td class="ptable-border ptable-padone"><strong>Super fast SSD</strong> powered servers</td>
          </tr>
          <tr>
            <td class="ptable-border"><strong>250</strong> GB Bandwidth</td>
          </tr>
          <tr>
            <td class="ptable-border"><strong>5</strong> GB Disk Space</td>
          </tr>
          <tr>
            <td class="ptable-border"><strong>1</strong> Addon Domain</td>
          </tr>
          <tr>
            <td class="ptable-border"><a href="#sd" style="color:rgba(0,0,0,0.87);" class="ptable-domain modal-trigger"><strong>1</strong> Free Domain!*</a></td>
          </tr>
          <div id="sd" class="modal">
    <div class="modal-content">
      <h4>Domain Extensions:</h4>
      <h5>Generic Extensions</h5>
      <p>None</p>
      <h5>Bonus Extensions:</h5>
      <p>OO.GD, ES.HT, AR.NF, CC.NF, IN.NF, IT.NF, MX.NF, RO.NF, RU.NF, UK.NF, WEBS.NF</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-light btn-flat btn-black-white">Close</a>
    </div>
  </div>
          <tr>
            <td class="ptable-border"><strong>Latest</strong> cPanel with Softaculous</td>
          </tr>
        </tbody>
      </table>
        
        <div class="ptable-padding center">
          <div class="row">
            <div class="col s12">
              <a  href='https://ifastnet.com/portal/aff.php?aff=<?=$mofh['affid'];?>&a=add&pid=78' target='_blank' class='btn waves-effect waves-light default_color'>Order Now</a>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    
    
      
    <div class=" col s12 m4">
      <div class="card">
    
       <div class="card-head default_color">
            <div class="card-head-content center">
              <span>Super Premium</span><br>
              <span class="price white-text">$47.88/year</span>
            </div>
          </div>
       
        <table class="highlight centered">
        <tbody>
          <tr>
            <td class="ptable-border ptable-padone"><strong>Super fast SSD</strong> powered servers</td>
          </tr>
          <tr>
            <td class="ptable-border"><strong>250</strong> GB Bandwidth</td>
          </tr>
          <tr>
            <td class="ptable-border"><strong>Unlimited</strong> GB Disk Space</td>
          </tr>
          <tr>
            <td class="ptable-border"><strong>20</strong> Addon Domain</td>
          </tr>
          <tr>
            <td class="ptable-border"><a href="#spd" style="color:rgba(0,0,0,0.87);" class="ptable-domain modal-trigger"><strong>6</strong> Free Domains!*</a></td>
          </tr>
          <div id="spd" class="modal">
    <div class="modal-content">
      <h4>Domain Extensions:</h4>
      <h5>Generic Extensions</h5>
      <p><strong>1</strong> free .COM or .NET or .ORG or .CO.UK or .US or INFO or .BIZ or .EU or .IN or .PW</p>
      <h5>Bonus Extensions:</h5>
      <p>OO.GD, ES.HT, AR.NF, CC.NF, IN.NF, IT.NF, MX.NF, RO.NF, RU.NF, UK.NF, WEBS.NF</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-light btn-flat btn-black-white">Close</a>
    </div>
  </div>
          <tr>
            <td class="ptable-border"><strong>Latest</strong> cPanel with Softaculous</td>
          </tr>
        </tbody>
      </table>
        
        <div class="ptable-padding center">
          <div class="row">
            <div class="col s12">
              <a  href='https://ifastnet.com/portal/aff.php?aff=<?=$mofh['affid'];?>&a=add&pid=3' target='_blank' class='btn waves-effect waves-light default_color'>Order Now</a>
            </div>
          </div>
        </div>
        
      </div>
    </div>

      <div class=" col s12 m4">
      <div class="card">
    
       <div class="card-head default_color">
            <div class="card-head-content center">
              <span>Ultimate Premium</span><br>
              <span class="price white-text">$83.88/year</span>
            </div>
          </div>
       
        <table class="highlight centered">
        <tbody>
          <tr>
            <td class="ptable-border ptable-padone"><strong>Super fast SSD</strong> powered servers</td>
          </tr>
          <tr>
            <td class="ptable-border"><strong>Unlimited</strong> GB Bandwidth</td>
          </tr>
          <tr>
            <td class="ptable-border"><strong>Unlimited</strong> GB Disk Space</td>
          </tr>
          <tr>
            <td class="ptable-border"><strong>Unlimited</strong> Addon Domain</td>
          </tr>
          <tr>
            <td class="ptable-border"><a href="#upd" style="color:rgba(0,0,0,0.87);" class="ptable-domain modal-trigger"><strong>21</strong> Free Domains!*</a></td>
          </tr>
          <div id="upd" class="modal">
    <div class="modal-content">
      <h4>Domain Extensions:</h4>
      <h5>Generic Extensions</h5>
      <p><strong>1</strong> free .COM or .NET or .ORG or .CO.UK or .US or .INFO or .BIZ or .EU or .IN or .PW</p>
      <h5>Bonus Extensions:</h5>
      <p>OO.GD, ES.HT, AR.NF, CC.NF, IN.NF, IT.NF, MX.NF, RO.NF, RU.NF, UK.NF, WEBS.NF</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-light btn-flat btn-black-white">Close</a>
    </div>
  </div>
          <tr>
            <td class="ptable-border"><strong>Latest</strong> cPanel with Softaculous</td>
          </tr>
        </tbody>
      </table>
        
        <div class="ptable-padding center">
          <div class="row">
            <div class="col s12">
              <a  href='https://ifastnet.com/portal/aff.php?aff=<?=$mofh['affid'];?>&a=add&pid=4' target='_blank' class='btn waves-effect waves-light default_color'>Order Now</a>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    </div>
</div>
<center><a class="waves-effect waves-light btn indigo accent-4" href="https://sv4.byethost4.org:2083/login/?user=demobye&pass=password"><i class="mdi-hardware-phonelink left"></i>Try cPanel Demo</a> <a class="waves-effect waves-light modal-trigger btn blue accent-4" href="#compare-hp"><i class="mdi-action-view-list left"></i>Compare Hosting Plans</a></center>
<div id="compare-hp" class="modal">
    <div class="modal-content">
      <h4>Compare Hosting Plans</h4>
       <ul class="collapsible">
    <li>
      <div class="collapsible-header"><i class="mdi-action-info left"></i>Generic Information</div>
      <div class="collapsible-body">
          <table class="striped centered highlight">
        <thead>
          <tr>
              <th></th>
              <th>Starter</th>
              <th>Super Premium</th>
              <th>Ultimate Premium</th>
          </tr>
        </thead>

        <tbody>
            <tr>
              <td>Generic Domains</td>
              <td><strong><i class="mdi-navigation-close red-text"></i></strong></td>
              <td>Extensions depend on billing cycle.</td>
              <td>Extensions depend on billing cycle.</td>
            </tr>
          <tr>
              <td>Bonus Domains</td>
              <td>OO.GD, ES.HT, AR.NF, CC.NF, IN.NF, IT.NF, MX.NF, RO.NF, RU.NF, UK.NF, WEBS.NF</td>
              <td>OO.GD, ES.HT, AR.NF, CC.NF, IN.NF, IT.NF, MX.NF, RO.NF, RU.NF, UK.NF, WEBS.NF</td>
              <td>OO.GD, ES.HT, AR.NF, CC.NF, IN.NF, IT.NF, MX.NF, RO.NF, RU.NF, UK.NF, WEBS.NF</td>
          </tr>
          <tr>
              <td>Disk Space</td>
              <td>5 GB</td>
              <td>Unlimited</td>
              <td>Unlimited</td>
          </tr>
          <tr>
              <td>Bandwidth</td>
              <td>250 GB</td>
              <td>250 GB</td>
              <td>Unlimited</td>
          </tr>
          <tr>
              <td>Addon Domains</td>
              <td>1</td>
              <td>20</td>
              <td>Unlimited</td>
          </tr>
          <tr>
              <td>Subdomains</td>
              <td>1</td>
              <td>20</td>
              <td>Unlimited</td>
          </tr>
          <tr>
              <td>MySQL Databases</td>
              <td>1</td>
              <td>20</td>
              <td>Unlimited</td>
          </tr>
          <tr>
              <td>Email Accounts</td>
              <td>1</td>
              <td>100</td>
              <td>Unlimited</td>
          </tr>
          <tr>
              <td>FTP Accounts</td>
              <td>1</td>
              <td>100</td>
              <td>Unlimited</td>
          </tr>
          <tr>
              <td>SiteBuilder</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
          </tr>
          <tr>
              <td>Site Statistics</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
          </tr>
          <tr>
              <td>Custom Error Pages</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
          </tr>
          <tr>
              <td>Remote MySQL</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
          </tr>
          <tr>
              <td>Free SSL Certificates</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
          </tr>
          <tr>
              <td>HTTP/2 Support</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
          </tr>
          <tr>
              <td>Cloudflare RailGun</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
          </tr>
          <tr>
                <td>Softaculous</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
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
        <thead>
          <tr>
              <th></th>
              <th>Starter</th>
              <th>Super Premium</th>
              <th>Ultimate Premium</th>
          </tr>
        </thead>

        <tbody>
            <tr>
                <td>Mysql Connections</td>
                <td>20</td>
                <td>20</td>
                <td>20</td>
            </tr>
            <tr>
                <td>CPU Allocation</td>
                <td>50% / 1 CPU Core</td>
                <td>100% / 1 CPU core</td>
                <td>150% / 1.5 CPU Cores</td>
            </tr>
            <tr>
                <td>Phisical RAM</td>
                <td>512M</td>
                <td>1GB</td>
                <td>1GB</td>
            </tr>
            <tr>
                <td>EP Processes</td>
                <td>10</td>
                <td>22</td>
                <td>28</td>
            </tr>
            <tr>
                <td>I/O limit</td>
                <td>Average</td>
                <td>High</td>
                <td>Awesome!</td>
            </tr>
            <tr>
                <td>Emails / Hour</td>
                <td>200</td>
                <td>200</td>
                <td>200</td>
            </tr>
        </tbody>
          </table>
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="mdi-communication-email left"></i>Email Features</div>
      <div class="collapsible-body">
          <table class="striped centered highlight">
        <thead>
          <tr>
              <th></th>
              <th>Starter</th>
              <th>Super Premium</th>
              <th>Ultimate Premium</th>
          </tr>
        </thead>

        <tbody>
            <tr>
                <td>POP3</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>IMAP</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>SMTP</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Webmail</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Forwarders</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Auto Responders</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>SpamAssassin</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Catch-All Email Addresses</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Catch-All Email Addresses</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
        </tbody>
          </table>
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="mdi-action-settings-ethernet
 left"></i>Scripting Features</div>
      <div class="collapsible-body">
          <table class="striped centered highlight">
        <thead>
          <tr>
              <th></th>
              <th>Starter</th>
              <th>Super Premium</th>
              <th>Ultimate Premium</th>
          </tr>
        </thead>

        <tbody>
            <tr>
                <td>PHP</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Ruby On Rails</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Node.JS</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>MySQL</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Postgres</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>PhpMyAdmin</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Python</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>CGI-BIN</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>CGI Library</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Javascript/DHTML</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Flash/Shockwave</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Full .htaccess Control</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Custom CRON Jobs</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>MIME Types</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
        </tbody>
          </table>
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="mdi-maps-local-grocery-store
 left"></i>Ecommerce Features</div>
      <div class="collapsible-body">
          <table class="striped centered highlight">
        <thead>
          <tr>
              <th></th>
              <th>Starter</th>
              <th>Super Premium</th>
              <th>Ultimate Premium</th>
          </tr>
        </thead>

        <tbody>
            <tr>
                <td>OS Commerce</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>CubeCart</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Zen Cart</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Prestashop</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Magento(1/2)</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>AbanteCart</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>CS-Cart</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>OpenCart</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>TomatoCart</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>BoxBilling</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>WHMCS</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>ClientExec</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Simple Invoices</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Invoice Ninja</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
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
        <thead>
          <tr>
              <th></th>
              <th>Starter</th>
              <th>Super Premium</th>
              <th>Ultimate Premium</th>
          </tr>
        </thead>

        <tbody>
            <tr>
                <td>24/7 Monitoring</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Firewall Protection</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Web Firewall</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>SiteLock</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Spam Filter Spam Assassin</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Hotlink Protection</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Leech Protect</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>UPS Power Back-up/Back-up</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Generator</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
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
        <thead>
          <tr>
              <th></th>
              <th>Starter</th>
              <th>Super Premium</th>
              <th>Ultimate Premium</th>
          </tr>
        </thead>

        <tbody>
            <tr>
                <td>Cisco Powered Network</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Red Hat Linux Servers</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Intel Processors</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Apache Web Servers</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>NGINX Web Servers</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>CloudLinux</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>MySQL</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>PostgreSQL</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
        </tbody>
          </table>
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="mdi-action-settings left"></i>Server Settings</div>
      <div class="collapsible-body"><table class="striped centered highlight">
        <thead>
          <tr>
              <th></th>
              <th>Starter</th>
              <th>Super Premium</th>
              <th>Ultimate Premium</th>
          </tr>
        </thead>

        <tbody>
            <tr>
                <td>PHP Version</td>
                <td>5.2 / 5.3 / 5.4 / 5.5 / 5.6 / 7.0</td>
                <td>5.2 / 5.3 / 5.4 / 5.5 / 5.6 / 7.0</td>
                <td>5.2 / 5.3 / 5.4 / 5.5 / 5.6 / 7.0</td>
            </tr>
            <tr>
                <td>MySQL</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>cPanel</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>SMTP</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Curl</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>GDLibrary</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Zend Optimizer</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>Ioncube Loader</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
            </tr>
            <tr>
                <td>CronJobs</td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
              <td><strong><i class="mdi-navigation-check green-text"></i></strong></td>
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
          <div  class="col s12 m4 l4">
              <div class="center promo promo-example"><br />
                  <i class="fab fa-wordpress-simple"></i><br />
                  <h5 class="promo-caption">WordPress</h5>
                  <p class="light center">WordPress is a state-of-the-art publishing platform with a focus on aesthetics, web standards, and usability.</p>
              </div>
          </div>
          <div  class="col s12 m4 l4">
              <div class="center promo promo-example"><br />
                  <i class="fab fa-joomla"></i><br />
                  <h5 class="promo-caption">Joomla</h5>
                  <p class="light center">Joomla is an award-winning content management system (CMS), which enables you to build Web sites and powerful online applications.</p>
              </div>
          </div>
          <div class="col s12 m4 l4">
              <div class="center promo promo-example"><br />
                  <i class="fab fa-drupal"></i><br />
                  <h5 class="promo-caption">Drupal</h5>
                  <p class="light center">Drupal is an open-source platform and content management system for building dynamic web sites offering a broad range of features and services.</p>
              </div>
          </div>
        </div>
        <div class="row">
          <div  class="col s12 m4 l4">
              <div class="center promo promo-example"><br />
                  <i class="fab fa-magento"></i><br />
                  <h5 class="promo-caption">Magento</h5>
                  <p class="light center">Magento is an Open Source ecommerce web application launched on March 31, 2008. It was created by Varien, building on components of the Zend Framework.</p>
              </div>
          </div>
          <div  class="col s12 m4 l4">
              <div class="center promo promo-example"><br />
                  <i class="fab fa-opencart"></i><br />
                  <h5 class="promo-caption">OpenCart</h5>
                  <p class="light center">OpenCart is an open source PHP-based online shopping cart system. A robust e-commerce solution for Internet merchants with the ability to create their own online business.</p>
              </div>
          </div>
          <div class="col s12 m4 l4">
              <div class="center promo promo-example"><br />
                  <i class="fab fa-whmcs"></i><br />
                  <h5 class="promo-caption">WHMCS</h5>
                  <p class="light center">WHMCS is the leading web hosting management and billing software that automates all aspects of your business from billing, provisioning, domain reselling, support, and more.</p>
              </div>
          </div>
        </div>
    </div>
</div>
<div class="section no-pad-bot" id="ph-wci">
    <div class="container">
        <div class="row">
            <h2 class="center header text_h2"><span class="white-text">Why Choose </span><span class="span_h2">iFastNet</span><span class="whie-text">?</span></h2>
            <div class="row">
      <div class="col s3">
        <div class="center promo promo-example">
            <i class="mdi-action-https"></i>
            <h5 class="promo-caption white-text">Free SSL</h5>
            <p class="dark center white-text">All iFastNet accounts come with unlimited free SSL certificates provided by Let's Encrypt.</p>
              </div>
      </div>
      <div class="col s3">
        <div class="center promo promo-example">
            <i class="mdi-action-swap-horiz"></i>
            <h5 class="promo-caption white-text">Free Migration</h5>
            <p class="dark center white-text">iFastNet can quicky and easily migrate your website from <?=$mofh['title'];?>, free of charge!</p>
        </div>
      </div>
      <div class="col s3">
        <div class="center promo promo-example">
            <i class="mdi-hardware-phonelink"></i>
            <h5 class="promo-caption white-text">cPanel</h5>
            <p class="dark center white-text">iFastNet uses the industry standard cPanel control panel to give you full control.</p>
        </div>
      </div>
      <div class="col s3">
        <div class="center promo promo-example">
            <i class="mdi-action-help"></i>
            <h5 class="promo-caption white-text">Free Tech Support</h5>
            <p class="dark center white-text">Whenever you need help with your website or hosting account, iFastNet can assist you.</p>
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
             <li>Latest cPanel control panel</li>
             <li>Softaculous with 240+ scripts</li>
             <li>Manage your Sites, Files, and Databases</li>
             <li>Free SSL Certificates (Let's Encrypt)</li>
             <li>Free SiteBuilder</li>
             <li>Free RailGun</li>
            </ul>
              </div>
      </div>
      <div class="col s6">
        <div class="center promo promo-example">
            <i class="mdi-communication-email"></i>
            <h5 class="promo-caption">Emails</h5>
            <ul class="light center">
             <li>Webmail (Roundcube, Squirelmail, Horde)</li>
             <li>Unlimited Forwarders</li>
             <li>Spam Filters</li>
             <li>Catch-All Emails</li>
             <li>Mailling Lists</li>
             <li>Mail Encryption</li>
            </ul>
        </div>
      </div>
      </div>
      <div class="row">
      <div class="col s6">
        <div class="center promo promo-example">
            <i class="mdi-action-settings-ethernet"></i>
            <h5 class="promo-caption">Codding/MySQL</h5>
            <ul class="light center">
             <li>Support for PHP 5.2, 5.3, 5.4, 5.5, 5.6 and 7.0</li>
             <li>Perl, Python, Ruby on Rails</li>
             <li>PHPMyAdmin</li>
             <li>Remote MySQL</li>
             <li>Cronjob Scripting</li>
             <li>Mime Types</li>
            </ul>
        </div>
      </div>
      <div class="col s6">
        <div class="center promo promo-example">
            <i class="mdi-action-trending-up"></i>
            <h5 class="promo-caption">Metrics</h5>
            <ul class="light center">
             <li>Last Visitors</li>
             <li>Bandwidth</li>
             <li>AWStats, Analog Stats, Webalizer</li>
             <li>Resource Monitor</li>
             <li>Script Activity</li>
            </ul>
        </div>
      </div>
    </div>
        </div>
        <div id="message">
      <div class="card-panel white row">
		<div class="col s12 m8">
        <h5 class="black-text">Are you interested in iFastNet's services or would you like to know more?
        </h5><br>
      </div>
	  <div class="col s12 m4"><br />
          <a href="https://ifastnet.com/portal/aff.php?aff=<?=$mofh['affid'];?>" class="btn-large waves-effect waves-light blue accent-4 right">Visit iFastNet</a>
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
