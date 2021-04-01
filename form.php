<?php
$fname =  $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$number = $_POST["phonenumber"];
$zipcode = $_POST["zipcode"];
$moreinfo = $_POST["moreinfo"];

echo "<h1>Messaged Saved</h1>";
echo "<h2>$fname.$lname</h2>";
echo "<p>$email</p><hr style='margin-right:80%'><p>$message</p>";

 ?>
