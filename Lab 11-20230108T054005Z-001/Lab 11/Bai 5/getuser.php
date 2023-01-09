<?php
$q = $_GET["q"];
$con = mysqli_connect('localhost', 'root', '');
if (!$con) {
  echo ('Could not connect ');
} else {
  echo 'Connected';
}
mysqli_select_db($con, "xml_ajax");
$sql = "SELECT * FROM user WHERE id = '" . $q . "'";
$result = mysqli_query($con, $sql, MYSQLI_STORE_RESULT);
echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
while ($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['FirstName'] . "</td>";
  echo "<td>" . $row['LastName'] . "</td>";
  echo "<td>" . $row['Age'] . "</td>";
  echo "<td>" . $row['Hometown'] . "</td>";
  echo "<td>" . $row['Job'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);