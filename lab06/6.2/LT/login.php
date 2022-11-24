<html>

<head>
    <title>Table Output</title>
</head>

<body>
    <?php
    $username = $_POST['username'];
    $passwd = $_POST['password'];
    $host = 'localhost';
    $user = 'root';
    $passwd = '';
    $database = 'mydatabase';
    $connect = mysqli_connect($host, $user, $passwd);
    $table_name = 'user';
    print '<font size="5" color="blue">';
    print "$table_name Data</font><br>";
    $query = "SELECT * FROM $table_name WHERE username = $username";
    mysqli_select_db($connect, $database);
    print "$query";
    $results_id = mysqli_query($connect, $query);
    if ($results_id) {
        print "<br></be>Succesfully";
    } else {
        die("Query=$query failed!");
    }
    mysqli_close($connect);
    ?>
    </table>
</body>

</html>