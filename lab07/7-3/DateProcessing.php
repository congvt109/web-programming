<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CheckDateTime</title>
</head>

<body>
  <?php
  $date = $_POST["date"];
  $two = '[[:digit:]]{2}';
  $month = '[0-1][[:digit:]]';
  $day = '[0-3][[:digit:]]';
  $year = "2[[:digit:]]$two";
  if (preg_match("($month)/($day)/($year)", $date)) {
    print "Valid date = $date";
  } else {
    print "Invalid date = $date";
  }
  ?>
</body>

</html>