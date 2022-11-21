<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Add student</title>
</head>

<body>
  <?php require_once 'connect_db.php'?>
  <?php 
    if (isset($_POST['add'])) {
      $mssv = $_POST['mssv'];
      $name = $_POST['nameStudent'];
      $age = $_POST['age'];

      if ($conn->query("INSERT INTO student ( mssv, nameStu, age) VALUES ('$mssv', '$name', '$age')")) {
        echo "<script>alert('Add done');</script>";
      } else {
        echo "<script>alert('Add failed');</script>";
      }
    } else {
      echo "<script>alert('CantPOST');</script>";
    }
    $conn->close();
  ?>
  <div id="container">
    <form method="POST" action="">
      <div class=" form-group">
        <label for="mssv">Mssv</label>
        <input name="mssv" class="form-control" placeholder="Ma so sinh vien">
        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
      </div>
      <div class="form-group">
        <label for="nameStudent">Name</label>
        <input name="nameStudent" class="form-control" placeholder="Name">
      </div>
      <div class="form-group">
        <label for="age">Age</label>
        <input name="age" class=" form-control" placeholder="Age">
      </div>

      <button type="submit" class="btn btn-primary" name="add"> Submit</button>
    </form>
  </div>
</body>

</html>