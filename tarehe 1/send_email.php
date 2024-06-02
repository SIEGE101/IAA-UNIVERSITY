<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'IAA portal@gmail.com';
  $subject = 'New message from Orange Theme contact form';
  $body = "From: $name\n Email: $email\n Message:\n $message";

  mail($to, $subject, $body);
?>