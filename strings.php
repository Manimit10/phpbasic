<?php
    //print string
    echo "this is string";
    echo "<br>";
    // //decalre string variable
    $mystr = "Hello String";
    // //orint declared string
    echo $mystr;
    echo "<br>";
    echo $mystr . " and add new" . "<br>";
    // make the string in uppercase
    $upperstr = strtoupper($mystr);
    echo $upperstr . "<br>";
    // HELLO will replace by goodbye
    $change = str_replace("HELLO" , "goodbye", $upperstr);
    echo $change . "<br>";
    //replace without case sensitivity -> hello = Hello
    $evstr = str_ireplace("hello", "Evening", $mystr);
    echo $evstr . "<br>";
    // replace existing string 
    $newstr = substr_replace($mystr, "Morning " , 0, 5);
    /* substr_replace needs 4 arguments
        1- intial string
        2- new string to replace
        3- where to start
        4- length
    */
    echo $newstr . "<br>";
    // repeating the string 7 times
    echo str_repeat($mystr . " ", 7);
    echo "<br>";
    //obtain the length of a string
    echo $mystr . " has " . strlen($mystr) . " characters" . "<br>";
    // find the postion of o in $mystr
    echo "position of o in " . $mystr. "is " .strpos($mystr, 'o');
    echo "<br>";

    // we create $upperstr,, now we are going to make it lowercase
    $lowstr = strtolower($upperstr);
    echo "lower case is " . $lowstr . "<br>";
    // capitalize each word
    echo "capitilized word in " . $lowstr . " is ";
    $camelstr = ucwords($lowstr);
    echo $camelstr . "<br>";
    // we want to select world from $mystr , we know that it starts in position 5
    $change = substr($mystr , 5);
    echo "From index 5 of ".$mystr." we can select ".$change;




?>