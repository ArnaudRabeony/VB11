<?php

/* original à gardé*/
// ini_set("SMTP", "smtp.voyageauboutdela11.fr");

// $name       = @trim(stripslashes($_POST['name'])); 
// $from       = @trim(stripslashes($_POST['email'])); 
// $subject    = @trim(stripslashes($_POST['subject'])); 
// $message    = @trim(stripslashes($_POST['message'])); 
// $to   		= 'karami.pro@gmail.com';
 
// $headers = 'From: '.$name.' <'.$from.'>'. "\r\n" .
// 		   'Reply-To: <'.$from.'>'. "\r\n" .
// 		   'Subject: '.$subject. "\r\n" .
// 		   'X-Mailer: PHP/' . phpversion();

// mail($to, $subject, $message, $headers);

// die;




ini_set("SMTP", "smtp.voyageauboutdela11.fr");

$name       = @trim(stripslashes($_POST['name'])); 
$from       = @trim(stripslashes($_POST['email'])); 
$subject    = @trim(stripslashes($_POST['subject'])); 
$message    = @trim(stripslashes($_POST['message'])); 
$to   		= 'karami.pro@gmail.com';

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/plain; charset=utf-8\r\n";
$headers .= "From: {$name} <{$from}>\r\n";
$headers .= "Reply-To: <{$from}>\r\n";
$headers .= "Subject: {$subject}\r\n";
$headers .= "X-Mailer: PHP/".phpversion()."\r\n";

mail($to, $subject, $message, $headers);


die;

 ?>
