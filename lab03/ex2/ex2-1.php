<html>
    <head>
        <style>
            body{
                margin: 400px;
                padding: 0;
            }
            input{
                margin-top:20px;
            }
        </style>
    </head>
    <body>
        <form action="#" method="POST"> 
            <div>
                <label for="degree">Type your degree number :</label>
                <br>
                <input type="text" name="degree" > 
            </div>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>
        <?php
        if (isset($_POST['degree'])) {
            $degree = $_POST['degree']; 
            $radian = deg2rad($degree);
            echo "<h2> $degree degree is $radian radian</h2>"; 
        }
        ?>
    </body>
</html>