<html>
    <head>
        <title>Date time processing</title>
    </head>
    <body>
        
    <form action="#" method="POST">
        <div>
            <label for="name">Your name: </label>
            <input type="text" name="name">
        </div>
            <br>    
        <div>
            <label for="date">Date: </label>
            <select name="date">
                <?php
                    $i=1;
                    for($i = 1; $i <= 31; $i++){
                        print ("<option value=".$i.">".$i."</option>");
                    }
                ?>
            }
            </select>
    
            <select name="month">
                <?php
                    $i=1;
                    for($i = 1; $i <= 12; $i++){
                        print ("<option value=".$i.">".$i."</option>");
                    }
                ?>
            }
            </select>

            <select name="year">
                <?php
                    $i=1;
                    $start = 2000;
                    $end = 2023;
                    for($i = $start; $i <= $end; $i++){
                        print ("<option value=".$i.">".$i."</option>");
                    }
                ?>
            }
            </select>
        </div>
        <div>
            <label for="name">Time: </label>
            <select name="hour">
                <?php
                    $i=1;
                    for($i = 0; $i <= 23; $i++){
                        print ("<option value=".$i.">".$i."</option>");
                    }
                ?>
            }
            </select>
    
            <select name="minute">
                <?php
                    $i=1;
                    for($i = 1; $i <= 60; $i++){
                        print ("<option value=".$i.">".$i."</option>");
                    }
                ?>
            }
            </select>

            <select name="second">
                <?php
                    $i=1;
                    for($i = 1; $i <= 60; $i++){
                        print ("<option value=".$i.">".$i."</option>");
                    }
                ?>
            }
            </select>
        </div>
        <br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
    <?php 
        $name = $_POST['name'];
        $date = $_POST['date'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $hour = $_POST['hour'];
        $minute = $_POST['minute'];
        $second = $_POST['second'];
        echo"<h2>Hi $name !</h2>";
        echo"<h2>You have choose to have an appointment at $hour:$minute:$second, $date/$month/$year</h2>";
        echo"<h2>More information</h2>";
        if ($hour > 12){
            $hour = $hour-12;
            echo"<h2>In 12 hours, the time and date is $hour:$minute:$second PM</h2>";
        }else{
            echo"<h2>In 12 hours, the time and date is $hour:$minute:$second AM, $date/$month/$year</h2>";
        }
        if ($month == 1 
            ||$month == 3
            ||$month == 5 
            ||$month == 7
            ||$month == 8
            ||$month == 10
            ||$month == 12){
                echo"<h2>This month has 31 days</h2>";
        }
        if ($month == 4
            ||$month == 6
            ||$month == 9 
            ||$month == 11){
                echo"<h2>This month has 30 days</h2>";
        }
        if ($month == 2){
            if ($year % 4 == 0 || ($year % 100 == 0 && $year % 400 == 0)){
                echo"<h2>This month has 29 days</h2>";
            }else{
                echo"<h2>This month has 28 days</h2>";
            }
        }
    ?>
    </body>
</html>