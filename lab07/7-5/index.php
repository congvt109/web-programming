<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <style>
  body {
    font-family: sans-serif;
  }

  .form-control {
    width: 500px;
  }

  label,
  input,
  button,
  h5 {
    margin-left: 10px;
  }
  </style>
</head>

<body>
  <form action="#" method="POST">
    <div class="form-group">
      <label for="email">Email address</label>
      <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
        placeholder="Enter email">
    </div>
    <br>
    <div class="form-group">
      <label for="url address">URL address</label>
      <input name="url_addr" type="text" class="form-control" id="exampleInputPassword1"
        placeholder="Enter your ul address">
    </div>
    <br>
    <div class="form-group">
      <label for="phone number">Phone Number</label>
      <input name="phone_number" type="text" class="form-control" id="exampleInputPassword1"
        placeholder="Enter your phone number">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-primary">Reset</button>
  </form>

  <?php
  $email = $_POST["email"];
  $url_addr = $_POST["url_addr"];
  $phone_number = $_POST["phone_number"];
  $bool = true;
  echo "<br>";
  if (isset($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $bool = false;
    echo "<h5>$email is invalid email</h5>";
  }
  if (isset($url_addr) && !preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $url_addr)) {
    $bool = false;
    echo "<h5>$url_addr is invalid URL address</h5>";
  }
  if (isset($phone_number) && !preg_match('/^[0-9]{10}+$/', $phone_number)) {
    $bool = false;
    echo "<h5>$phone_number is invalid phone number</h5>";
  }
  if ($bool) {
    echo "<h5> All your information is validate</h5>";
  }
  ?>

</body>

</html>