<?php
$name       = @trim(stripslashes($_POST['name'])); 
$from       = @trim(stripslashes($_POST['email'])); 
$subject    = @trim(stripslashes($_POST['subject'])); 
$message    = @trim(stripslashes($_POST['message'])); 
$to   		= 'karami.pro@gmail.com, ali_92000@hotmail.fr';
 
$headers = 'From: '.$name.' <'.$from.'>'. "\r\n" .
		   'Reply-To: <'.$from.'>'. "\r\n" .
		   'Subject: '.$subject. "\r\n" .
		   'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

die;
 ?>
