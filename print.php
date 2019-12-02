<?php
    echo 'helo world php <br>'; // echo is little bit faster than print
    print 12 + 18;
    print "<br>";
    // how to print an array?
    $myArray = array(1,2,3 );
    // in order to print an array we need to create for loop
    foreach($myArray as $a){
        echo "$a, ";
    }
    // using print_r is much more easier and nicer, no need of for loop
    echo "<pre>";
    print_r($myArray);
    echo "</pre>";

   
    
?>