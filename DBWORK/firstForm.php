<?php include 'connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="firstForm.php"  method = "post">

    Name: <input type="text" name = "StudName" placeholder = "Enter your name">
    Subject: <input type="text" name = "StudSubj" placeholder = "Enter your name">
    marks: <input type="number" name = "StudMarks" placeholder = "Enter your name">

    <input type="submit" value = "submit" name = "btn">

    </form>
</body>
</html>

<?php

    if(isset($_POST['btn'])){
        $studentName = $_POST['StudName'];
        $studentSubject = $_POST['StudSubj'];
        $studentMarks = $_POST['StudMarks'];

        $query = "insert into student(StudName,Subject,Marks) values ('$studentName','$studentSubject',' $studentMarks')";

        $queryExec = mysqli_query($conn,$query);

        if($queryExec){
            echo "<script>alert('Data Inserted')</script>";
        }
        else{
            echo "<script>alert('Data not Inserted')</script>";
        }


    }
?>