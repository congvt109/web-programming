<?php
print '<font size="5" color="blue">';
print "Select Product We Just Sold:</font><br>\n";
?>

<html>

<head>
    <title>Product Update</title>
</head>

<body>
    <form action="./sale.php" method="post">
        Hammer: <input type="radio" name="Product" value="Hammer">
        Screwdriver: <input type="radio" name="Product" value="Screwdriver">
        Wrench: <input type= "radio" name="Product" value="Wrench">
        <input type="submit" value="Click To Submit">
        <input type="reset" value="Reset">
    </form>
</body>

</html>

<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'mydatabase';
$connect = mysqli_connect($server, $user, $pass);
$table_name = 'Products';
print '<font size="5" color="blue">';
print "$table_name Data</font><br>";
$query = "SELECT * FROM $table_name";
print "The query is <i>$query </i><br>";
mysqli_select_db($connect, $database);
$results_id = mysqli_query($connect, $query, MYSQLI_STORE_RESULT);
if ($results_id) {
    print '<table border=1>';
    print '<th>Num<th>Product<th>Cost<th>Weight<th>Count';
    while ($row = mysqli_fetch_row($results_id)) {
        print '<tr>';
        foreach ($row as $field) {
            print "<td>$field</td> ";
        }
        print '</tr>';
    }
} else {
    die("Query=$query failed!");
}
mysqli_close($connect);
?>