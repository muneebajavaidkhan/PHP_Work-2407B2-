<?php
    echo "<h3>While Loop</h3>";

    $num = 1;
    while($num <= 10){ //1<10//2<10
        echo $num. "<br>"; //1
        $num++; //1+1 = 2
    }

    echo "<h3>Print table using while loop</h3>";

    $i = 2;
    $j= 1;
    while($i<=20){ // 2 * 1 = 2 //2 * 2 = 4// 2 * 3 = 6 

        echo  "2 * {$j} = {$i} <br>"; //2 * 1 = 2//2 * 2 = 4

        $i+=2; //$i = $i + 2 // = 4= 2+2 //6 = 4+2
        $j++; //1+1 = 2 //2 + 1 = 3

    }

    echo "<h3>Print table using Do While loop</h3>";

    $k = 1;
    do{
        $num = 2 * $k; //2 * 2 = 4
        echo "2 * {$k} = {$num} <br>"; //2 * 1 = 2
        $k++; //1+1 = 2
    }while($k > 10); // 2 >  10 //false 

    echo "<h3>Using For Loop</h3>";

    for($l= 2;$l<=10;$l++){
        echo $l ."<br>";
    };
    echo "<h3>Swap Number With Adition</h3>";
    $number1 = 10;
    $number2 = 20;

    for($i = 1;$i<= 10;$i++){ //2 <= 10

        $number3 = $number1 +$number2; // 30 = 10 + 20 //20 + 30 = 50
        $number1 = $number2; //20 //30
        $number2 = $number3; //30 //50

        echo $number3. "<br>"; //30 //50
    };




?>