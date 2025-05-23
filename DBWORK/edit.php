<?php include 'header.php';
include 'connection.php';

?>

<?php

   $Idget =  $_GET['id'];

   $query = "select * from students where StudId =  $Idget";
   $queryExec = mysqli_query($conn,$query);
   if(mysqli_num_rows($queryExec) == 0){
    echo "<script>alert('No Record found')</script>";
    exit();
   }
   $fetchData = mysqli_fetch_assoc($queryExec);

   
   $checkEdit = $fetchData['Courses'];
   $chk = explode(",",$checkEdit); //convert into array

?>

<div class="container"> <br>
    <h3>Edit in Form</h3> <br>

    <form action="crud.php" method="post">
        <input type="hidden" value = " <?=  $fetchData['StudId'] ?>" name = "StudId">

        <div class="form-group">
            <label for="name" class="fw-bold">StudentName:</label>
            <input type="text" class="form-control mt-3" id="name" placeholder="Enter Your name" name="StudName"
            value = <?=  $fetchData['StudName'] ?>
            >
        </div>

        <div class="form-group">
            <label for="gen" class="fw-bold">Gender:</label>
            <div class="form-check-inline ml-3">
                <label class="form-check-label mt-3">
                    Male: <input type="radio" class="form-check-input" name="Gender" value="Male"
                    <?php if($fetchData['Gender'] == 'Male') echo "checked"?>
                    >
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label mt-3">
                    Female: <input type="radio" class="form-check-input" name="Gender" value="Female"
                    <?php if($fetchData['Gender'] == 'Female') echo "checked"?>
                    >
                </label>
            </div>
        </div>


        <div class="form-group">
            <label for="city" class = "mt-3 fw-bold">Select City:</label>
            <select class="form-control mt-3" id="city" name="city">
                <option value="">--Select--</option>
                <option value="Karachi" <?php if($fetchData['City'] == 'Karachi') echo "selected"?>>Karachi</option>
                <option value="Lahore" <?php if($fetchData['City'] == 'Lahore') echo "selected"?>>Lahore</option>
                <option value="Islamabad" <?php if($fetchData['City'] == 'Islamabad') echo "selected"?>>Islamabad</option>
                <option value="Peshawar" <?php if($fetchData['City'] == 'Peshawar') echo "selected"?>>Peshawar</option>
            </select>
        </div>

        <div class="form-group">
            <label for="course" class="fw-bold">Select Courses:</label>
            <div class="form-check-inline ml-4">
                <label class="form-check-label mt-3">
                    MVC <input type="checkbox" class="form-check-input" value="MVC" name="Course[]"
                    <?php  if(in_array("MVC",$chk)) echo "checked" ?>
                    >
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label mt-3">
                    PHP <input type="checkbox" class="form-check-input" value="PHP" name="Course[]"
                    <?php  if(in_array("PHP",$chk)) echo "checked" ?>>
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label mt-3">
                    MY SQL <input type="checkbox" class="form-check-input" value="MYSQL" name="Course[]"
                    <?php  if(in_array("MYSQL",$chk)) echo "checked" ?>>
                </label>
            </div>
        </div>

        <div class="form-group">
            <label for="pwd" class = "mt-3 fw-bold">Education:</label>
            <input type="text" class="form-control mt-3" id="edu" placeholder="Enter your Education" name="Education" value = <?=  $fetchData['Education'] ?> >
        </div>

        <div class="form-group">
            <label for="fee" class = "mt-3 fw-bold">Fees:</label>
            <input type="number" class="form-control mt-3" id="fee" placeholder="Enter your Fees" name="Fees"  value = <?=  $fetchData['Fees'] ?>>
        </div>

        <button type="submit" class="btn btn-primary mt-5" name="upd">Update</button>
    </form>
</div>



<?php include 'footer.php'?>