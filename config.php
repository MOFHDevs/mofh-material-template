<?php
$mofh = array(
     
'title' => 'MOFH-Material-Template', // Site title
    
'logo' => '/images/logo.png', // Logo URL
     
'protocol' => 'https://', // it is https or http

 'mail' => 'some@mofh.ooo', // email here

'domain' => strtolower(preg_replace('/^www\./' , '' , $_SERVER['HTTP_HOST'])), // Automatic Domain Recognition

);
?>
