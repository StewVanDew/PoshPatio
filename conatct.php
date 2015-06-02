<?php

$to = 'email@poshpatio.com';
$from = $_POST['Email'];
$name = $_POST['Name'];

$subject = $_POST['Subject'];
$phone = $_POST['PhoneNumber'];
$message = $_POST['Message'];

$headers = 'From: ' . $from;

mail($to, $subject, $message, $headers);

$headers = 'From: noreply@poshpatio.com';
mail($from, 'Message about ' . $subject . 'successfully sent!', 'Thank you for contacting us!', $headers);

header("Location: index.html");