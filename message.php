<?php
$to   = $email;
$subject = 'the subject';
$message = 'registration was successful';
$from = "myregistr@mail.ru";
$headers = "From: $from\r\n Replay-to: $from\r\n Content-tyap:text/plain;charst=utf-8\r\n ";


mail($to, $subject, $message, $headers);


?>