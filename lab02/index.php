<?php
    $name = $_POST['name'];
    $class = $_POST['class'];
    $university = $_POST['university'];
    $gender = $_POST['gender'];
    $hobby1 = $_POST['hobby1'] ?? '';
    $hobby2 = $_POST['hobby2'] ?? '';
    $hobbies = array($hobby1,$hobby2);

  echo "<h2>Hello $name,</h2><h4>Your gender is : $gender</h4><h4>Your University is : $university</h4><h3>Your Class is : $class</h3>";
  echo "<h3>Your hobbies is :</h3><ul>";
  foreach($hobbies as $hobby){
    if($hobby != ''){
      echo "<li>$hobby</li>";
    }
  }
  echo "</ul>";
?>