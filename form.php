<?php
$fname =  $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$number = $_POST["phonenumber"];
$zipcode = $_POST["zipcode"];
$moreinfo = $_POST["moreinfo"];
$emailSubject = " REQUEST FROM: $fname $lname";

$emailBody = "$fname $lname \n Email: $email \n Phone number: $number \n Zipcode: $zipcode \n Message: $moreinfo";

$to = "springgardenagency@gmail.com";
$headers = "From: $email \r\n";
$headers .= "Replay-To: $email \r\n";

if (mail($to, $emailSubject, $emailBody, $headers)) {
  echo "<link rel='stylesheet' href='css/default.css'><link rel='stylesheet' href='css/style.css'>";
  echo "<link href'https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed&display=swap' rel='stylesheet'>";
  echo "<style> p {text-align:center; padding: 1rem;}}</style>";
  echo "<header>";
  echo "<img src='./img/agency-logo.png' alt='Spring Garden Agency and Home Care Services' id='logo'>";
  echo "<nav><a href='./index.html'>Home</a><a href='./about.html'>About</a>
      <a href='./contact.html'>Contact Us</a><button id='paynow' type='button' name='paynow'>Pay Now!</button></header>";
  echo "<main><p>Thank you $fname! We will get back to you as soon as we can!</p>";
  echo "<p>If this is an emergency, call 9-1-1. </p></main>";
  echo "<script src='js/app.js'></script>";
} else {
  echo "<link rel='stylesheet' href='css/default.css'><link rel='stylesheet' href='css/style.css'>";
  echo "<link href'https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap' rel='stylesheet'><link href='https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed&display=swap' rel='stylesheet'>";
  echo "<style> p {text-align:center; padding: 1rem;}}</style>";
  echo "<header>";
  echo "<img src='./img/agency-logo.png' alt='Spring Garden Agency and Home Care Services' id='logo'>";
  echo "<nav><a href='./index.html'>Home</a><a href='./about.html'>About</a><a href='./contact.html'>Contact Us</a><button id='paynow' type='button' name='paynow'>Pay Now!</button></header>";
  echo "<main><  echo <script src='js/app.js'></script> Email sending failed...</main>";
  echo "<script src='js/app.js'></script>";}
 ?>
