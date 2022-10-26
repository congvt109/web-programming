<html>
    <head>
        <style>
            input{
                margin-top:20px;
            }
        </style>
    </head>
    <body>
        <form action="#" method="POST"> 
            <div>
                <label for="name1">Name</label>
                <input type="text" name="name1" placeholder="First man name">
                <br>
                <label for="date1">Date</label>
                <input type="text" name="date1" placeholder="First man date"> 
                <br>
                <label for="month1">Month</label>
                <input type="text" name="month1" placeholder="First man month"> 
                <br>
                <label for="year1">Year</label>
                <input type="text" name="year1" placeholder="First man year"> 
            </div>
            <br>
            <hr>
            <div >
            <label for="name2">Name</label>
                <input type="text" name="name2" placeholder="Second man name">
                <br>
                <label for="date2">Date</label>
                <input type="text" name="date2" placeholder="Second man date"> 
                <br>
                <label for="month2">Month</label>
                <input type="text" name="month2" placeholder="Second man month"> 
                <br>
                <label for="year2">Year</label>
                <input type="text" name="year2" placeholder="Second man year"> 
            </div>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>
            <br>
            <hr>
        <?php
            date_default_timezone_set('UTC');
            if (isset($_POST['name1']) &&isset($_POST['date1']) &&isset($_POST['month1']) &&isset($_POST['year1'])
                && isset($_POST['name1']) &&isset($_POST['date2']) &&isset($_POST['month2']) &&isset($_POST['year2']) ) {

                $name1=$_POST['name1'];
                $date1 = $_POST['date1']; 
                $month1 = $_POST['month1']; 
                $year1 = $_POST['year1'];
                
                $name2=$_POST['name2'];
                $date2 = $_POST['date2']; 
                $month2 = $_POST['month2']; 
                $year2 = $_POST['year2'];
                            
                $month_name1 = date("F", mktime(0, 0, 0, $month1, 10));                
                $day_of_week1 = date("l", mktime(0, 0, 0, $month1, $date1, $year1));

                $month_name2 = date("F", mktime(0, 0, 0, $month2, 10));                
                $day_of_week2 = date("l", mktime(0, 0, 0, $month2, $date2, $year2));

                $birth1 = new DateTime("$year1-$month1-$date1");
                $birth2 = new DateTime("$year2-$month2-$date2");
                $now = new DateTime();
                
                $age1 = $birth1->diff($now);
                $age2 = $birth2->diff($now);
                $difference = $birth1->diff($birth2);

                $diff = strtotime("$year1-$month1-$date1") - strtotime("$year2-$month2-$date2");
                $diff_days = abs(round($diff / 86400));

                echo '<h3>Birthday </h3>';
                echo '<ul>
                        <li>'.$name1.' : '. $day_of_week1 .' '. $month_name1 .' '. $date1 .' '. $year1.'</li>
                            <br>
                        <li>'.$name2.' : '. $day_of_week2 .' '. $month_name2 .' '. $date2 .' '. $year2.'</li>
                    </ul>';            

                echo '<h3>Difference </h3>';
                echo '<ul>
                        <li>Days : '.$diff_days.' days </li>
                            <br>
                        <li>Years : '.$difference->y.' years </li>
                    </ul>';
            
                echo '<h3>Age </h3>';
                echo '<ul>
                        <li>'.$name1.' : '.$age1->y.' year olds </li>
                            <br>
                        <li>'.$name2.' : '.$age2->y.' year olds </li>
                    </ul>';
            }
        ?>
    </body>

    
