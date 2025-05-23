<?php

    echo "<h3>Index Array</h3>";

    $colors = array("Pink","Blue","Red");

    echo $colors[1]."<br>";

    // echo "<pre>";
    // print_r($colors);
    // echo "</pre>";


    echo "<ul>";
        for($i = 0;$i<count($colors);$i++){
            echo "<li>Array[$i] = $colors[$i]</li>"; //$color[0] = "Pink"
        }

    echo "</ul>";

    echo "<h3>Associative Array</h3>";
    $data = ["StudName"=>"Ali","StudMarks"=>90,"StudSubject"=>"IT"];


    // echo $data["StudName"]."<br>";

    foreach($data as $k => $v){
        echo "$k => $v<br>";
    }

    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";

    echo "<h3>MultiDimensional Array</h3>";
    $studentInfo = [
        ["Ahmed","English",70], //00,01,02
        ["Sana","Math",80], //10,11,12
        ["Farah","IT",89]

    ];
    // echo $studentInfo[1][0];
    //  echo "<pre>";
    // print_r($studentInfo );
    // echo "</pre>";

    echo "<table border = 1>";
    echo "<th>Name</th>";
    echo "<th>Subject</th>";
    echo "<th>Marks</th>";

    for($i=0;$i<Count($studentInfo);$i++){ //0 //1
        echo "<tr>";
        echo "<th colspan = 6>Student info[$i]</th>";
        echo "</tr>";
        echo "<tr>";
            for($j=0;$j<Count($studentInfo[$i]);$j++){
                echo "<td>".$studentInfo[$i][$j]."</td>"; //00 //01 //02
            }
        echo "</tr>";

    }
    echo "</table>";

    echo "<h3>MultiDimensional Associative Array</h3>";
    $studentMarks = [
        'Stud1' => ['Name'=>'Ahmed','Subject'=>'English','Marks'=>90],
        'Stud2' => ['Name'=>'Sana','Subject'=>'IT','Marks'=>80],
        'Stud3' => ['Name'=>'Fahad','Subject'=>'Science','Marks'=>95]
    ];

    echo "<table  border = 1>";
    foreach($studentMarks as $key => $val){
        echo "<tr>";
        echo "<th colspan = 3>$key</th>";
        echo "</tr>";

        foreach($val as $k => $v){
            echo "<tr>";
            echo "<th>$k</th>";
            echo "<td>$v</td>";
            echo "</tr>";
        }

    }

    echo "</table>";

?>