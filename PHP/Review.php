<?php
    echo "<b>PART 1:</b><br />";
    global $y;
    $numbers = array(1,2,3,4,5,6,7,8,9,10);
    echo "Number Array:<br />";
    for ($x = 0; $x < count($numbers); $x++) {
        echo $numbers[$x]."<br />";
        $y = $numbers[$x] + $y;
    }
    echo "<br />The arverage of the number array is ".$y/count($numbers).".<br /><br />";
    
    echo "<b>PART 2:</b><br />";
    $date = date("l");
    if ($date == "Sunday") {
        echo "I don't want to go to school tomorrow. (Sunday)";
    }
    else if ($date == "Monday") {
        echo "its monday :(";
    }
    else if ($date == "Tuesday") {
        echo "What game is coming out today? (Tuesday)";
    }
    else if ($date == "Wednesday") {
        echo "It's HUMP DAY!!!!! (Wednesday)";
    }
    else if ($date == "Thursday") {
        echo "It's almost Friday (Thursday)";
    }
    else if ($date == "Friday") {
        echo "It's Friday, Friday ...";
    }
    else if ($date == "Saturday") {
        echo "IT's THE WEEKEND!!!! (Saturday)";
    }
    else {
        echo "no";
    }

    echo "<br /><br /><b>PART 3:</b><br />";
    $month = date("m");
    $day = date("j");
    $year = date("Y");
    if ($month == 01) {
        echo "January ".$day.", ".$year;
    }
    else if ($month == 02) {
        echo "February ".$day.", ".$year;
    }
    else if ($month == 03) {
        echo "March ".$day.", ".$year;
    }
    else if ($month == 04) {
        echo "April ".$day.", ".$year;
    }
    else if ($month == 05) {
        echo "May ".$day.", ".$year;
    }
    else if ($month == 06) {
        echo "June ".$day.", ".$year;
    }
    else if ($month == 07) {
        echo "July ".$day.", ".$year;
    }
    else if ($month == 8) {
        echo "August ".$day.", ".$year;
    }
    else if ($month == 9) {
        echo "September ".$day.", ".$year;
    }
    else if ($month == 10) {
        echo "October ".$day.", ".$year;
    }
    else if ($month == 11) {
        echo "November ".$day.", ".$year;
    }
    else if ($month == 12) {
        echo "December ".$day.", ".$year;
    }
    else {
        echo "no";
    }
?>