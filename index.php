<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <title>Document</title>
</head>

<body>
  <h1>List of employee</h1>
  <br>
  <table class="table">
    <thead>
      <tr>
        <td>ID</td>
        <td>First name </td>
        <td>Last name </td>
        <td>Email</td>
        <td>Phone</td>
        <td>Address</td>
        <td>Action</td>
      </tr>
    </thead>

    <tbody>
      <?php

      $severname = "localhost";
      $username = "root";
      $password = "";
      $database = 'mystore';
      $con = mysqli_connect($severname, $username, $password, $database);
      $sql = "SELECT * FROM employees";
      $result = $con->query($sql);
      if (!$result) {
        die("Invalid query: " . $con->error);
      }
      while ($row = $result->fetch_assoc()) {
        echo "
        <tr>
          <td>$row[id].</td>
          <td>$row[first_name]</td>
          <td>$row[last_name]</td>
          <td>$row[email]</td>
          <td>$row[phone]</td>
          <td>$row[address]</td>
          <td>
            none
          </td>
        </tr>
        ";
      }
      ?>

    </tbody>

  </table>
</body>

</html>