<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

    echo "<h3>PHP VARIABLES</h3>";


    $a =10;
    $b = 20;
    $c = $a + $b;

    echo "Value of a: ".$a. "and value of b: ".$b. "is equal to: ".$c."<br>";

    echo "end <br>";

    $name = "ALi";

    var_dump($name);
    
    var_dump($c);
    

    echo "<h3>SWAP TWO NUMBERS</h3>";

    $num1 = 20;
    $num2 = 30;

    echo "The number before swapping is: <br>";
    echo "num1 = ".$num1. " and num2 = ".$num2."<br>";

    $temp = $num1; //20

    $num1 = $num2;//30
    $num2 = $temp; // 20

    echo "The number before swapping is: <br>";
    echo "num1 = ".$num1. " and num2 = ".$num2."<br>";

    echo "<h3>CONSTANT VARIABLE</h3>";

    define("Hello","What new in PHP");

    echo Hello;


?>
    
</body>
</html>