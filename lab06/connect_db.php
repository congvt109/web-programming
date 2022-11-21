<?php
  $servername = "localhost";
  $username = "root";
  $pass = "";
  $db_name = "my_database";
  
  $conn = mysqli_connect($servername, $username, $pass, $db_name);
  if (!$conn) {
    echo "Connect failed";
  } else {
    echo "Connected";
  }
?>