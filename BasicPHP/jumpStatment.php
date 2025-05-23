<?php

    echo "<h3>BREAK STATMENT</h3>";
    for($i = 0;$i<=10;$i++){
        if($i == 3){ //3 == 3
            break;
        }
        echo ("i = $i <br>");
    }

    echo "Break Statment finished";


    echo "<h3>Continue STATMENT</h3>";
    for($i = 0;$i<=10;$i++){
        if($i == 3){ //3 == 3
            continue;
        }
        echo ("i = $i <br>");
    }


    echo "<h3>Exit STATMENT</h3>";
    for($i = 0;$i<=10;$i++){
        if($i == 3){ //3 == 3
            exit;
        }
        echo ("i = $i <br>");
    }

    echo "Terminate Complete Program";

?>