<?php

  $name = $_POST('name');

  $EMAIL = $_POST('EMAIL');

  $to = "antselley@gmail.com" ;
  $message = "Yay! Another subscriber!"

  $subjec = "Ambitious Curiosity - New email subscriber!";

  mail ($to, $subject, $message, "From: " . $name ) ;
  echo "Your message has been sent";



 ?>
