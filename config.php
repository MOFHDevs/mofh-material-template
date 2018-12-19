<?php
$mofh = array(
     
'title' => 'MOFH-Material-Template', // Site title
    
'logo' => '/images/logo.png', // Logo URL
     
'protocol' => 'https://', // it is https or http

'domain' => strtolower(preg_replace('/^www\./' , '' , $_SERVER['HTTP_HOST'])), // Automatic Domain Recognition

);
?>
