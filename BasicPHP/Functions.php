<?php

    echo "<h3>Simple Function</h3>";


    function AddTwoNum(){
        $num1 = 10;
        $num2 = 20;
        $sum = $num1  + $num2;
        echo $sum. "<br>";
    };


    AddTwoNum();

    echo "<h3>Paramterized Function</h3>";


    function AvgNum($n1,$n2,$n3){
        $AvgNum = ($n1+$n2+$n3)/3;
        echo "Average Number is".round($AvgNum)."<br>";
    }

    AvgNum(10,20,30);

    // Function With Default Value -> parameter can have default value if no argument is passed

    echo "<h3>Function With Default Value</h3>";

    function Defaultfunction($city = "Karachi")
    {
        echo $city. "<br>";
    }
    Defaultfunction();
    Defaultfunction("Lahore");

// function can return a value using return keyword

    echo "<h3>Function With Return Value</h3>";

    function PrintTable($i){
        $table = " ";
        for($j= 1;$j<=10;$j++){
            $num = $i * $j;
            $table .= "$i * $j = $num <br>"; // 2 * 1 = 2 // 2 * 2 = 4 // $table = $table + 
        }
        return $table;
    }
    echo PrintTable(5);

    //*****************LOCAL GLOBAL AND STATIC VARIBALE****************
    // Local Variable declare inside a function

    echo "<h3>Local Variable</h3>";
    function testLocal(){
        $x = 10; //local Variable(With in a function defined)
        echo "Local Variable : $x <br>";
    }
testLocal();

echo $x;

// Global variable declared outside a function . Use global to access it inside a function


echo "<h3>Global Variable</h3>";

$x = 20;

function globalfunction(){
    global $x;
    echo "$x <br>";
}
globalfunction();

echo $x;

echo "<h3>Static Variable</h3>";

function Staticfunction(){
    static $x = 0;
    echo "$x <br>";
    $x++;
}
Staticfunction();
Staticfunction();
Staticfunction();


// Pass by value-> When a variable is passed by value the function works on a copy
// so any changes made inside a function do not affect the original value

echo "<h3>Pass By Value</h3>";

function changeValue($num){ // parameter //20
    $num = $num + 10;
    echo "Inside Function: $num <br>"; // 30
}

$numnber = 20;

changeValue($numnber);

echo  $numnber."<br>";

// Pass by Reference -> When a variable is pass by reference the functions work with the actual
//variable (its memory location) - so any changes made directly affect the original affect

echo "<h3>Pass By Reference</h3>";

function changereference(&$num){
    $num = $num + 10;
    echo "Inside Function: $num <br>"; //30
}
$numnber = 20;
changereference($numnber);

echo "Outside Function : $numnber <br>"; //30

?>



