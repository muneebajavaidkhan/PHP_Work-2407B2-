<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
</head>

<body>

    <div class='container mt-5'>


        <H1 class="text-center">REGISTRATION FORM</H1>
        <form action="signup.php" method="post">
            <div class="row mt-5">



                <div class="col-sm-12 col-lg-6 mt-5 ">

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Your name" name="name"
                            required>
                    </div>

                    <div class="form-group mt-3">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email"
                            required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="Pass">Password:</label>
                        <input type="password" class="form-control" id="Pass" placeholder="Enter Your Password"
                            name="Pass" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="Confpass">Confirm Password:</label>
                        <input type="password" class="form-control" id="Confpass"
                            placeholder="Enter Your Confirm Password" name="ConfPass" required>
                    </div>
                    <div class="form-group mt-3">
                        <input type="submit" value="Create Account" class="btn btn-primary" name="btn">
                    </div>
                    <p class="text-center">Already Have an Account <a href="login.php">Login</a></p>
                </div>
                <div class="col-sm-12 col-lg-6 ">
                    <img src="images/img1.jpg" alt="dummyImage" style="width:430px;height:450px;margin-left:95px">
                </div>
            </div>

        </form>




    </div>
</body>

</html>


<?php


    
if (isset($_POST['btn'])) {
    // Sanitize input
    $Name      = trim($_POST['name']);
    $Email     = trim($_POST['email']);
    $Password  = $_POST['Pass'];
    $ConfPass  = $_POST['ConfPass'];

    // Basic validation
    $errors = [];

    // Name validation
    if (empty($Name) || strlen($Name) < 3) {
        $errors[] = "Name must be at least 3 characters long.";
    }

    // Email validation
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }


    // Password length
    if (strlen($Password) < 6) {
        $errors[] = "Password must be at least 6 characters long.";
    }

    // Password match
    if ($Password !== $ConfPass) {
        $errors[] = "Passwords do not match.";
    }

    // Show validation errors
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<script>alert('$error'); window.history.back();</script>";
            break;
        }
        exit();
    }

    // Check if email exists
    $Emailquery = "SELECT * FROM register WHERE Email = '$Email'"; //abc@gmail.com //abc @gmail.com
    $res = mysqli_query($conn, $Emailquery);

    if (mysqli_num_rows($res) > 0) {
        echo "<script>alert('Email already exists.'); window.history.back();</script>";
    } else {
        // Hash password
        $HashedPass = password_hash($Password, PASSWORD_BCRYPT);

        // Insert data
        $Insquery = "INSERT INTO register (Name, Email, Password,Role) 
                     VALUES ('$Name', '$Email', '$HashedPass','V')";

        $rs = mysqli_query($conn, $Insquery);

        if ($rs) {
            echo "<script>alert('Registration successful.'); window.location.href='login.php';</script>";
        } else {
            echo "<script>alert('Error: Registration failed.'); window.history.back();</script>";
        }
    }
}

?>