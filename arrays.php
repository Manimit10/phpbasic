<?php
/* there are 3 types of Array
        - Indexed
        - Associative
        - Multidimensional
    */ 

    // Indexed String Array
    $people = array('John', 'Sam', 'Nicole');

    $numbers = array(11 , 5.2 , 586.25 , 65 );

    $cars = ['BMW', 'Toyota' , 'Nissan'];
    $cars[4] = "Mercedes";
    // add new index to the end of array
    $caes[] = "Aston Martin";
    // handy tools to see what is inside an array
    var_dump($cars);
    echo "<br>";
    //Associative Array --- key => value
    $class = array("Brayan" => 25 , "Jennifer" => 28 , "ALex" => 22);
    print_r($class);
    // Multidimensional Array
    $carshop = array(
        array("Honda", 20 , 10),
        array("BMW", 30 , 11),
        array("Ferrari" , 1 , 2)
    );
    echo "<br>" . $carshop[1][2];
    // we want to find out how many memebr we have in people array
    echo "<br> we have " . count($people) . " members in our arrayr <br>";
    // we want to combine [numbers] as key and [people] as value to new array
    $combined = array_combine($numbers , $people);
    var_dump($combined);

    $lastppl = end($people);
    print "<br>The last element of people array is " . $lastppl . "<br>";

    // add new element to the end of array
    array_push($cars , "Kia Motors");
    var_dump($cars);

    ?>