<?php

    
    echo "<h3>Global Variables</h3>";

    $x = 25;
    $y = 25;
    function addition(){
        $GLOBALS['c'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    addition();
    echo $c;

    echo "<h3>Server Variables</h3>";
    $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];

?>