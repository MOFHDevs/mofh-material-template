<?php
include 'config.php';
$yourdomain = $_SERVER['HTTP_HOST'];
    $yourdomain = preg_replace('/^www\./' , '' , $yourdomain);
    $yourdomain = ucfirst($yourdomain);
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>Login - <?=$mofh['title'];?></title>
    <meta name="keywords" content="free, web, hosting, web hosting, login, web site, search engine optimization, hosting, servers, log, in, availability, created, page">
    <meta name="description" content="Login to your <?=$mofh['title'];?> account.">
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
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <style type="text/css">

         .default_color {
            color: black;

        }
        }
    </style>
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
<div class="login-clean">
        <form action="http://cpanel.<?echo $yourdomain;?>/login.php" method="post" name="login">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-cloudy-night" style="color:rgb(9,124,94);"></i>
            <!-- Change "Login" below to your desired heading-->
                <h4 style="color:rgb(84,81,81);">Login</h4>
            </div>
            <!-- BEGIN MOFH API, BE CAREFUL WHEN EDITING-->
            <!-- Replace neotidev_ with your reseller's placeholder-->
           <div class="form-group"><input class="form-control" type="text" id="mod_login_username" name="uname" placeholder="Username"></div>
            <div class="form-group"><input class="form-control" type="password" id="mod_login_password" name="passwd" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" value="Login" style="background-color:rgb(9,124,94);">Log
              In</button></div><a href="signup.php" class="forgot">Don't have an account yet?</a><br><a href="https://cpanel.<?echo $yourdomain;?>/lostpassword.php" class="forgot">Forgot your password?</a></form>
            <!--END MOFH API, it is now safe to edit-->
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>




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
          Made with <i class="mdi-action-favorite"></i> by <a class="white-text" href="https://github.com/MOFHDevWorld">MOFHDevWorld</a>
          <br><br>
            <center>&copy; <?php echo date("Y"); ?> <a href="index.php" id="logo-container" class="white-text"><?=$mofh['title'];?></a>. All rights reserved.
         Powered by <a class="white-text" href="https://ifastnet.com/portal/aff.php?aff=<?=$mofh['affid'];?>">iFastNet</a>
            </center>
        </div>
    </div>
</footer>


    <!--  Scripts-->
    <script src="min/plugin-min.js"></script>
    <script src="min/custom-min.js"></script>

    </body>

</html>
