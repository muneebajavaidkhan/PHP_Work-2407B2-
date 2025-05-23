<?php

    echo "<h3>Airthematic Operators<h3>";


    $num1 = 10;
    $num2 = 20;

  


    echo "Addition result is <b>".($num1 + $num2)."</br>";
    echo "Subtraction result is <b>".($num1 -$num2)."</br>";
    echo "Multiplication result is <b>".($num1 * $num2)."</br>";
    echo "Division result is <b>".($num1 / $num2)."</br>";
    echo "Modulus result is <b>".($num1 % $num2)."</br>";

    echo "<h3>Assignment Operators<h3>";

    $x = 10;
    $y = 30;
    $z = 100;


    echo "Actual x value is ". $x. "and actual y value is ".$y. "<br>";
    
    echo "Equal Operator ".$z."<br>";

    echo "$x += $y is ".($x+=$y)."<br>"; // $x = $x + $y; // 40 = 10+30
    echo "$x -= $y is ".($x+=$y)."<br>";
    echo "$x *= $y is ".($x+=$y)."<br>";
    echo "$x /= $y is ".($x+=$y)."<br>";
    echo "$x %= $y is ".($x+=$y)."<br>";
    
    echo "<h3>Comparision Operators<h3>";

    $i = 23;
    $j = 10;

    var_dump($i == $j); echo "$i == $j --> equal <br>"; 
    var_dump($i === $j); echo "$i === $j --> equalilty + datatype <br>";
    var_dump($i != $j); echo "$i != $j --> not equal <br>";

    var_dump($i !== $j); echo "$i !== $j --> not equal + datatype <br>";
    var_dump($i > $j); echo "$i > $j --> greater than <br>";
    var_dump($i < $j); echo "$i < $j --> less than <br>";
    var_dump($i >= $j); echo "$i >= $j --> greater than equal <br>";
    var_dump($i <= $j); echo "$i <= $j --> less than equal <br>";

    echo "<h3>Logical Operators<h3>";

    $a = 10;
    $b = 20;
    var_dump($a = 150 && $b <= 100); echo "<br>"; //false && true //false
    var_dump($a == 70 || $b != 30);echo "<br>";// false  || true  = true

    echo "<h3>Conditional Operators<h3>";

    $number1 = 10;
    $number2 = 20;
    
    $result = ($a > $b) ? $a : $b;
    echo "Test: 1 Value of result is $result";




    





?>