<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CheckDateTime</title>
  <style>
  body {
    font-family: sans-serif;
  }
  </style>
</head>

<body>
  <?php
  $email = $_POST["email"];
  $url_addr = $_POST["url_addr"];
  $phone_number = $_POST["phone_number"];

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<h3>$email is invalid email</h3>";
  } else if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $url_addr)) {
    echo "<h3>$url_addr is invalid URL address</h3>";
  } else if (!preg_match('/^[0-9]{10}+$/', $phone_number)) {
    echo "<h3>$phone_number is invalid phone number</h3>";
  } else {
    echo "<h3> All your information is validate</h3>";
  }
  ?>
</body>

</html>