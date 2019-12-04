<?php
// String
$name = "my name is " . 'Mani' . "<br>";
echo $name;

//Integer
$id = 12;
echo $id . '<br>';
//Float
$Pi = 13.14225;
echo $Pi . '<br>';

//Boolean
$isUser = true;
$isMonday = false;
echo 'true is always equals to ' . $isUser . '<br>';
echo 'fasle is always equals to ' . $isMonday . '<br>';
//Array
echo 'in array <br>';
$names = array("Joe","John","Sam");
echo $names['0'] . '<br>';

//Object
echo 'using object <br>';
class Student {
    // constructor
    public function __construct($first_name, $last_name) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function say_name() {
        echo "My name is " . $this->first_name . " " . $this->last_name . ".\n";
    }
}

$alex = new Student("Alex", "Jones");
$alex->say_name();
//NULL
/* 
    Null is a special data type 
    which can have only one value: NULL.
 */
echo '<br> NULL is alway ';
$x = "Hello world!";
$x = null;
var_dump($x) . '<br>';

?>