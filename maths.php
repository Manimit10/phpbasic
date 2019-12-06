<?php
    // this function will generate absolute number
    function absolute ($num){
        return abs($num);
    }
    print "the absolute of -96 is ".absolute(-96) . "<br>";
    // round the float point number to higher ineteger
    function rounder ($num){
        return ceil($num);
    }
    print "the rounded of 33.00000001 is ".rounder(33.0000001) . "<br>";
    // find higheat number among 3 integers
    function highest ($num , $num2 , $num3){
        return max($num , $num2 , $num3);
    }
    print "the highest number among 11, 12.5, and 3 is ". highest(11, 12.5, 3) . "<br>";
    // find lowest number among 3 integers
    function lowest ($num , $num2 , $num3){
        return min($num , $num2 , $num3);
    }
    print "the lowest number among 11, 12.5, and 3 is ". min(11, 12.5, 3) . "<br>";

    // mt_rand() is 4 time faster than rand() because using Mersenne Twister algorithm
    echo "the generated random number between 10 to 50 is " . mt_rand(10 , 50) ."<br>";
?>