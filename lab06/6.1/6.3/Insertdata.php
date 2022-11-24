<html>
    <head><title>Insert Results</title></head>
    <body>
        <?php
            $server = 'localhost';
            $user = 'root';
            $pass = '';
            $database = 'mydatabase';
            $connect = mysqli_connect($server, $user, $pass);
            $table_name = 'Products';
            $Item = $_POST["Item"];
            $Cost = $_POST["Cost"];
            $Weight = $_POST["Weight"];
            $Quantity = $_POST["Quantity"];
            $query = "INSERT INTO $table_name VALUES
                    ('0', '$Item', '$Cost', '$Weight', '$Quantity')";
            print "The Query is <i>$query</i><br>";
            mysqli_select_db($connect, $database);
            print '<br><font size="4" color="blue">';
            if (mysqli_query($connect, $query, MYSQLI_STORE_RESULT)){
                print "Insert into $database was successful!</font>";
            } else {
                print "Insert into $database failed!</font>";
            }
            mysqli_close ($connect);
        ?>
    </body>
</html>