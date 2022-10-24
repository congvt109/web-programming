<html>

<head>
    <title>Flip the coin and guess</title>
</head>

<body>
    <?php 
        srand ((double) microtime() * 10000000);
        $pick = $_POST["pick"];
        $flip = rand( 0, 1 );
        if ( $flip == 0 && $pick == 0 ) {
            print "The flip=$flip, which is heads! <br> ";
            print '<p style="color:red"> You got it right!</font>';
        } elseif ( $flip == 0 && $pick == 1 ) {
            print "The flip=$flip, which is heads! <br> ";
            print '<p style="color:red"> You got it wrong!</p>';
        } elseif ( $flip == 1 && $pick == 1 ) {
            print "The flip=$flip, which is tails! <br>";
            print '<p style="color:red"> You got it right!</font>';
        } elseif ( $flip == 1 && $pick == 0 ) {
            print "The flip=$flip, which is tails! <br>";
            print '<p style="color:red"> You got it wrong!</font>';
        } else {
            print "<br>Illegal state error!";
        }
        ?>
</body>