<?php

    function sum($num1 , $num2){
        return $num1 + $num2;
    }
    function multiple($num1 , $num2){
        return $num1 * $num2;
    }
    function divide($num1 , $num2){
        return $num1 / $num2;
    }

    echo sum(7,3) . "<br>";
    echo multiple(5,6) . "<br>";
    echo divide(8,3) . "<br>";

    function calc($num1, $num2, $operator){
        switch ($operator){
            case "add":
                echo "the sum is equal to " . sum($num1,$num2) . "<br>";
            break;
            case "divide":
                echo "the divide is equal to " . divide($num1,$num2) . "<br>";
            break;
            case "multiple":
                echo "the multiple is equal to " . multiple($num1,$num2) . "<br>";
            break;
            default:
            echo "please enter correct operator";
        }
    }
    calc(5,11,"mines");
?>