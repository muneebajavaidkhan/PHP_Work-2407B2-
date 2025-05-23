<?php include 'connection.php' ?>


<?php

    if(isset($_POST['ins'])){

        $studName = htmlspecialchars($_POST['StudName']);
        $gender = $_POST['Gender'];
        $City = $_POST['city'];
        $course = $_POST['Course']; //MVC //PHP
        $Educ = $_POST['Education'];
        $fee = $_POST['Fees'];

        $Cor = implode(",",$course ); //MVC,PHP

        $query = "insert into students(StudName,Gender,City,Courses,Education,Fees) values ('$studName','$gender','$City','$Cor', '$Educ','$fee')";

        $queryExec = mysqli_query($conn,$query);


        if($queryExec){
            echo "<script>alert('Data Inserted');window.location.href = 'Viewdata.php'</script>";
        }
        else{
            echo "<script>alert('Data not Inserted')</script>";
        }

        
    }






    if(isset($_POST['upd'])){

        $StudentId = $_POST['StudId'];
        $studName = htmlspecialchars($_POST['StudName']);
        $gender = $_POST['Gender'];
        $City = $_POST['city'];
        $course = $_POST['Course']; //MVC //PHP
        $Educ = $_POST['Education'];
        $fee = $_POST['Fees'];

        $Cor = implode(",",$course ); //MVC,PHP

        $Updquery = "update students set StudName = '$studName',Gender = '$gender',City = '$City',Courses = '$Cor',Education = '$Educ',
        Fees = '$fee' where StudId = '$StudentId'";

        $queryExecs = mysqli_query($conn, $Updquery);

        
        if($queryExecs){
            echo "<script>alert('Data Updated');window.location.href = 'Viewdata.php'</script>";
        }
        else{
            echo "<script>alert('Data not update')</script>";
        }
                                                                                                                                                  
    }
?>