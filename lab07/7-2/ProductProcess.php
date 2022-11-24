<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Product Information Results</title>
</head>

<body>

</body>
<?php
$description = $_POST['description'];
$code = $_POST['code'];
$products = array(
  'AB01' => '25-Pound Sledgehammer',
  'AB02' => 'Extra Strong Nails',
  'AB03' => 'Super Adjustable Wrench',
  'AB04' => '3-Speed Electric Screwdriver'
);
if (preg_match("/boat|plane/", $description)) {
  print 'Sorry, we do not sell boats or planes anymore';
} elseif (preg_match("/^AB/", $code)) {
  if (isset($products[$code])) {
    print "Code $code Description: $products[$code]";
  } else {
    print 'Sorry product code not found';
  }
} else {
  print 'Sorry, all our products code start with "AB"';
}
?>

</html>