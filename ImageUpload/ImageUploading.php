<?php 
    include 'header.php';
    include 'connection.php';

?>
<form action="image.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="file" class="fw-bold">Select Image:</label>
        <input type="file" class="form-control mt-3" id="file" placeholder="Enter Your name" name="file">
    </div>
    <button type="submit" class="btn btn-primary mt-5" name="ins">Submit</button>
</form>


<?php
if(isset($_POST['ins'])){
    $file = $_FILES['file'];
    
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $folder = "images/".$fileName;
    
    $allowed = ['image/jpg', 'image/png', 'image/jpeg'];

// Step 1: Allowed file types define karna
    if(in_array(strtolower($fileType),$allowed)){
        // Step 2: File Size Check (1 MB = 1,000,000 bytes)
        if($fileSize <= 1000000){ //1 >
            //step 3: Check if file already exists
            if(file_exists($folder)){
                echo "<script>alert('File already exists')</script>";
            }
            else{
               
                //step 4: Upload the file
                if(move_uploaded_file($fileTmpName,$folder)){
                    $imagequery = "insert into  image(ImageName) values('$folder')";
                    $result = mysqli_query($conn,$imagequery);
                    if($result){
                        echo "<script>alert('File uploaded successfully')</script>";
                    }
                    else{
                        echo "script>alert('Error: " . $sql . "<br>" . mysqli_error($conn) . "')</script>";
                    }
                };
               
            }

        }
        else{
            echo "<script>alert('File size must be less than 1 MB')</script>";
        }
    }
    else{
        echo "<script>alert('Invalid file type')</script>";
    }
}
?>









<div class="container mt-5">
    <div class="row">
        <?php 
        $query = "SELECT * FROM image";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div class="col-md-3 text-center mb-4">
                    <img src="<?= $row['ImageName'] ?>" width="200px" height="200px" class="img-thumbnail"><br>
                    
                    <a href="?edit=<?= $row['ImageId'] ?>" class="btn btn-warning btn-sm mt-2">Edit</a>

                    <!-- Only show form if current image is selected for edit -->
                    <?php if (isset($_GET['edit']) && $_GET['edit'] == $row['ImageId']) { ?>
                        <form action="" method="post" enctype="multipart/form-data" class="mt-2">
                            <input type="hidden" name="id" value="<?= $row['ImageId'] ?>">
                            <input type="file" name="updatedImage" class="form-control form-control-sm mt-1">
                            <button type="submit" name="update" class="btn btn-success btn-sm mt-1">Update</button>
                        </form>
                    <?php } ?>
                </div>
        <?php
            }
        }
        ?>
    </div>
</div>



<?php
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $newImageName = $_FILES['updatedImage']['name'];
    $newTmp = $_FILES['updatedImage']['tmp_name'];
    $newType = $_FILES['updatedImage']['type'];
    $newSize = $_FILES['updatedImage']['size'];

    $allowedTypes = ['image/jpg', 'image/png', 'image/jpeg'];

    if (in_array(strtolower($newType), $allowedTypes)) {
        if ($newSize <= 1000000) {
            $newPath = "images/" . $newImageName;
            move_uploaded_file($newTmp, $newPath);
            
            $updateQuery = "UPDATE image SET ImageName ='$newPath' WHERE ImageId = $id";
            mysqli_query($conn, $updateQuery);

            echo "<script>alert('Image updated'); window.location='ImageUploading.php';</script>";
        } else {
            echo "<script>alert('Image too large!');</script>";
        }
    } else {
        echo "<script>alert('Unsupported file type!');</script>";
    }
}
?>


<?php
    include 'footer.php';
?>