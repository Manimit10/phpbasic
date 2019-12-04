<?php
    $dayofweek = date("w");
    $month = date("n");
    $minute = date("i");

    if ($dayofweek == 1){
        echo "We are on Monday" . "<br>";
    }
    if ($month == 12){
        echo "We are in October" . "<br>";
    }else{
        echo "We are not in October" . "<br>";
    }
    if ($minute < 10){
        echo "the current minute is less than 10" . "<br>";
    }else if ($minute > 15){
        echo "the current minute is greater than 15" . "<br>";
    }else{
        echo "does not meet any condition" . "<br>";
    }

    switch ($dayofweek){
        case 1:
            echo "It is Monday";
        break;
        case 2:
            echo "It is Tuesday";
        break;
        case 3:
            echo "It is Wendsday";
        break;
        case 4:
            echo "It is Thursday";
        break;
        case 5:
            echo "It is Friday";
        break;
        case 6:
            echo "It is Saturday";
        break;
        case 0:
            echo "It is Sunday";
        break;

    }


?>