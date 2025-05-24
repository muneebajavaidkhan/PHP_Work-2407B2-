
<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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


        <H1 class="text-center">LOGIN FORM</H1>
        <form action="login.php" method="post">
            <div class="row mt-5">



                <div class="col-sm-12 col-lg-6 mt-5">



                    <div class="form-group">
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
                        <input type="submit" value="Login Account" class="btn btn-primary" name="btn">
                    </div>
                    <p class="text-center">Don't Have an Account <a href="signup.php">Signup</a></p>
                </div>


                <div class="col-sm-12 col-lg-6 ">
                    <img src="images/img2.jpg" alt="dummyImage" style="width:350px;height:280px;margin-left:95px">
                </div>

            </div>

        </form>




    </div>
</body>

</html>


<?php
    if(isset($_POST['btn'])){

        $email = $_POST['email'];
        $pass = $_POST['Pass'];

         $query = "select * from register where Email = '$email'";

         $queryExec = mysqli_query($conn,$query);

         if(mysqli_num_rows($queryExec) > 0) {
            $fetcdata = mysqli_fetch_assoc($queryExec);
            session_start();
            $_SESSION['Name'] = $fetcdata['Name'];
            $_SESSION['Email'] = $fetcdata['Email'];
            $_SESSION['Role'] = $fetcdata['Role'];
            $Dbpass = $fetcdata['Password'];
            $passVerify = password_verify($pass,$Dbpass);
            if($passVerify == true) {
                echo "<script>alert('Login Successful'); window.location.href='index.php';</script>";
            }
            else {
                echo "<script>alert('Invalid Password'); window.history.back();</script>";
            }
 
         }
         else {
            echo "<script>alert('Invalid Email'); window.history.back();</script>";
         }

    }
?>