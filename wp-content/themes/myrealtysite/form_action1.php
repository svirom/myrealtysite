<?php
$_POST['date'] = date("Y-m-d H:i:s");
$headers = "From: <callback@{$_SERVER['HTTP_HOST']}>\r\nMIME-Version: 1.0\r\nContent-Type: text/plain; charset=\"utf-8\"";
$to = 'svjatoslav.romanjuk@gmail.com';
$subject = "Callback from {$_SERVER['HTTP_HOST']}";
$message = '';
$message .= 'Date: '.date("Y-m-d H:i:s")."\r\n";
$message .= 'Name: '.strip_tags($_POST['name'])."\r\n";
$message .= 'Email: '.strip_tags($_POST['email'])."\r\n";
$message .= 'Subject: '.strip_tags($_POST['subject'])."\r\n";
$message .= 'Message: '.strip_tags($_POST['message']);
mail($to, $subject, $message, $headers);
?>