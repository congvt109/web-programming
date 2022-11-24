<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  /*
  $str = "vutaicong";
  $subStr = "i";
  $checkPositions = strpos($str, $subStr);
  echo "check positions = $checkPositions";
  */
  /*
  $products = array(
    'AB01' => '25-Pound Sledgehammer',
    'AB02' => 'Extra Strong Nails',
    'AB03' => 'Super Adjustable Wrench',
    'AB04' => '3-Speed Electric Screwdriver'
  );
  if (preg_match('boat|plane', $description)) {
    print 'Sorry, we do not sell boats or planes anymore';
  } elseif (preg_match('^AB', $code)) {
    if (isset($products["$code"])) {
      print "Code $code Description: $products[$code]";
    } else {
      print 'Sorry, product code not found';
    }
  } else {
    print 'Sorry, all our product codes start with "AB"';
  }
  */
  $line ="Baseball, hot dogs, apple pie";
  $item = preg_split( ",", $line );
  print ("0=$item[0] 1=$item[1] 2=$item[2]");
  // echo ("PHP version : ".phpversion());

  ?>
</body>

</html>