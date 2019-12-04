<?php

//Arithmatic operators
// $num = 5+5;
// echo '5 + 5 = ' . $num . '<br>';
// $num = 5-4;
// echo '5 -4 = ' . $num . '<br>';
// $num = 5*5;
// echo '5 * 5 = ' . $num . '<br>';
// $num = 5 / 2;
// echo '5 / 2 = ' . $num . '<br>';
// $num = 8 % 3;
// echo 'if we devide 8 by 3 we will have reminder of ' . $num . '<br>';
// $num = 5 ** 3;
// echo '5 on the power of 3 = ' . $num . '<br>';

//Comparison Operators
// $x = 6;
// $y = 10;
// if ($x ==  $y) {
//     echo "Equal";
// }
// else if ($x >= $y){
//     echo "Greater";
// }
// else if ($x <= $y){
//     echo "Smaller";
// }
// else if ($x != $y){
//     echo 'Not Equal';
// }
// else {
//     echo 'Default';
// }
 // Logical Operator is for comparing two or more conditions
 $year = 2016; 
 // Leap years are divisible by 400 or by 4 but not 100
 if(($year % 400 == 0) || (($year % 100 != 0) &&  ($year % 4 == 0))){
     echo "$year is a leap year.";
 } else{
     echo "$year is not a leap year.";
 }

?>