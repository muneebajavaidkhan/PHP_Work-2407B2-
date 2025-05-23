<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>SOME IMPORTANT BUILTIN FUNCTIONS</h3>

    <h4>SOME STRING FUNCTIONS</h4>
    <?php

        $stringChar = "Hello Steve";

        $stringLen = strlen($stringChar); //string length

        echo "Length of String <b>" .$stringChar. "</b> is: ".$stringLen."<br>";


        $stringWordCount = str_word_count($stringChar); // word count

        echo "Count of String <b>" .$stringChar. "</b> is: ".$stringWordCount."<br>";

        $stringReverse = strrev($stringChar); //Reverse String

        echo "Reverse of String <b>" .$stringChar. "</b> is: ".$stringReverse."<br>";

         $stringFind = strpos($stringChar, "Steve"); //find string
        echo " Find the String <b>" .$stringChar. "</b> is: ".$stringFind."<br>";

        $stringReplace = str_replace("Steve","Diana",$stringChar); //Replace String

        echo " Replace the String <b>" .$stringChar. "</b> is: ".$stringReplace."<br>";

?>


    <h4>PHP Math Function</h4>

    <?php
    echo "<h5>Area of Surface</h5>";
    $radius = 6;
    $surfaceArea = 4 * pi() * $radius * $radius; 
    echo "Surface Area is: ".$surfaceArea. "<br>";


    echo "Surface Area Round value is: ".round($surfaceArea)."<br>";


    echo(min(0,20,70,-90,-800));
    echo "<br>";
    echo(max(0,20,70,-90,-800));
    echo "<br>";
?>

    <h4>SOME OTHER PHP Function</h4>
    <?php
        // date() Current date ya time show karta hai.
        echo date("Y-m-d"). "<br>";

        // isset() Check karta hai ke variable set hua hai ya nahi.

        $name;
        if (isset($name)) {
            echo "Name is set <br>"; // Output: Name is set
        }
        else{
            echo "Name is not set <br>";
        }



        // Empty() Check karta hai ke variable khaali (empty) hai ya nahi.
        $age = "18";
        if (empty($age)) {
            echo "Age is empty <br>"; // Output: Age is empty
        }
        else{
            echo "Age is not empty <br>";
        }




        // htmlspecialchars() Special characters ko safe HTML text mein convert karta hai.
        



        $input = '<script>alert("Hello World");</script>';
        echo htmlspecialchars($input); // Output: &lt;h1&gt;Hello&lt;/h1&gt;
        
    ?>
</body>

</html>