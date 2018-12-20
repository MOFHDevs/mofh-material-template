<?php
$mofh = array(
     
'title' => 'MOFH-Material-Template', // Site title
    
'logo' => '/images/logo.png', // Logo URL
     
'protocol' => 'https://', // it is https or http

 'mail' => 'some@mofh.ooo', // email here
     
 'facebook' => 'https://www.facebook.com/#', // your facebook link
     
 'twitter' => 'https://twitter.com/#', // your twitter link
     
 'google-plus' => 'https://plus.google.com/#', // your google plus link
     
 'linkedin' => 'https://www.linkedin.com/in/#', // your linkedin link

'domain' => strtolower(preg_replace('/^www\./' , '' , $_SERVER['HTTP_HOST'])), // Automatic Domain Recognition

);
?>
