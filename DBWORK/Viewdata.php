<?php include 'header.php'?>
<?php include 'connection.php' ?>



<?php

    $fetchdata = "select * from students";

    $RowData = mysqli_query($conn,$fetchdata);

    $countData = mysqli_num_rows($RowData); // 


    if($countData > 0){?> 

<table class="container table table-bordered mt-5">
    <tr>
        <th>Name</th>
        <th>Gender</th>
        <th>City</th>
        <th>Courses</th>
        <th>Education</th>
        <th>Fees</th>
        <th colspan = 2></th>
    </tr>


    <?php
                while($data = mysqli_fetch_assoc($RowData)){
                    echo "<tr>";?>

                <td> <?php echo $data['StudName'] ?></td>
                <td><?php echo $data['Gender'] ?></td>
                <td><?php echo $data['City'] ?></td>
                <td><?php echo $data['Courses'] ?></td>
                <td><?php echo $data['Education'] ?></td>
                <td><?php echo $data['Fees'] ?></td>
                <td><a href="edit.php?id=<?php echo $data['StudId'] ?>" class = "btn btn-primary">Edit</a></td>
                <td><a href="Viewdata.php?Delid=<?php echo $data['StudId'] ?>" class = "btn btn-danger">Delete</a></td>

    <?php
                    echo "</tr>";

                }
            
            
            ?>

</table>


<?php
    }
    else{
        echo "No records found";
    }
    error_reporting(0);
    $del = $_GET['Delid'];
    $Delete = "delete from students where StudId = $del";
    $DeleteExec = mysqli_query($conn,$Delete);
    if($DeleteExec){
        echo "<script>alert('Record Deleted'); window.location.href='ViewData.php';</script>";
    }
?>