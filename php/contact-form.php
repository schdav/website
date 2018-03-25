<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $formcontent = 'Name: ' . $name . "\n" . 'Nachricht: ' . $message;
  $recipient = 'info@schdav.de';
  $subject = 'Kontaktformular Webseite';
  $mailheader = 'From: ' . $email;
  mail($recipient, $subject, $formcontent, $mailheader) or exit('error');
  echo 'success';
  exit(0);
