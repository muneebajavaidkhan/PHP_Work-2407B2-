<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
    
        echo "<h3>IF ELSE PROGRAM<h3>";

        $side = 28.46;
        $perimeter = $side * 4.00;
        $area = $side * $side;

        if($side > 15 && $perimeter < 1000){ //28.46 > 15 && 113.84 < 1000

            $sideValue = $side;
            $perimeterValue = $perimeter;
            $areaValue = $area;

        }
        else{
            $sideValue = 0;
            $perimeterValue = 0;
            $areaValue = 0;

        }
    ?>

    <table>
        <tr>
            <td>Side: </td>
            <td> <input type="text" value = "<?= $sideValue ?>"></td>
        </tr>
        <tr>
            <td>Perimter: </td>
            <td> <input type="text" value = "<?= $perimeter ?>"></td>
        </tr>
        <tr>
            <td>Area: </td>
            <td> <input type="text" value = "<?php echo $area ?>"></td>
        </tr>
    </table>

    <?php

        echo "<h3>IF ELSE IF PROGRAM<h3>";

        $number = -7;

        if($number > 0){ //-4 > 0 // false
            if($number % 2 == 0){
                echo "<p>Number $number is postive and even </p>";
            }
            else{
                echo "<p>Number $number is postive and odd </p>";

            }
        }
        else if($number < 0){ //-4 < 0
            if($number % 2 == 0){
                echo "<p>Number $number is negative and even </p>";

            }
            else{
                echo "<p>Number $number is negative and odd </p>";

            }
        }

    ?>

<?php

    echo "<h3>SWITCH PROGRAM<h3>";

    $role = "subscriber";
    $message = "";

    switch($role){
        case "admin":
            $message = "Welcome Admin";
        break;
        case "author":
            case "editor":
                $message = "Welcome Do you want to create a new article";
        break;
        case "subscriber":
            $message =  "Welcome!  Checkout a some new articles";
        break;
        default:
            $message = "You are not authorized to access this page";
    }


?>

<form action="">
    <label for="">Message</label>
    <input type="text" value = "<?= $message ?>" id = "msg">
    <input type="submit" value = "submit" onclick = "ClickEvent()">
</form>


<script>
    function ClickEvent(){
        let ValueGet = document.getElementById('msg').value;
        alert(ValueGet);
    }
</script>
</body>
</html>