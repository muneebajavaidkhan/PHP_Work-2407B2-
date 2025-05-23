<?php include 'header.php';
include 'connection.php';
?>


<form action="Emp.php" method="post">
    <div class="form-group">
        <label for="name" class="fw-bold">Employee Name:</label>
        <input type="text" class="form-control mt-3" id="name" placeholder="Enter Your name" name="EmpName">
    </div>
    
    <div class="form-group">
        <label for="salary" class="fw-bold">Salary:</label>
        <input type="text" class="form-control mt-3" id="salary" placeholder="Enter Your salary" name="EmpSalary">
    </div>
    
    <div class="form-group">
        <label for="dep" class="mt-3 fw-bold">Select Department:</label>
        <select class="form-control mt-3" id="dep" name="Dep">
            <option value="">--Select--</option>
            <?php
            $dep = "SELECT * FROM dep";

            $result = mysqli_query($conn, $dep);

            if (mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<option value= '$row[DepId]'>$row[DepName]</option>";
                }
            } else {
                echo '<option value="">No record found</option>';
            }
            ?>
        </select>
    </div>
    
    <button type="submit" class="btn btn-primary mt-5" name="Empins">Submit</button>
</form>





<?php include 'footer.php'?>


<?php
    if(isset($_POST['Empins'])){

        $empName = $_POST['EmpName'];
        $empSalary = $_POST['EmpSalary'];
        $empDep = $_POST['Dep'];

        $sql = "insert into employee(EmpName,Salary,DepartmentId) values ('$empName', '$empSalary', '$empDep')";

        if (mysqli_query($conn, $sql)) {
           echo "<script>alert('Record inserted successfully')</script>";
        } else {
           echo "<script>alert('Error: " . $sql . "<br>" . mysqli_error($conn) . "')</script>";
        }
           
    }
?>