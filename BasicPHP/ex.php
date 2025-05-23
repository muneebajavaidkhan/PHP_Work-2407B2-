<?php

    if(isset($_GET['btn'])){

        $emailValue = htmlspecialchars($_GET['email']);
        $passValue = htmlspecialchars($_GET['pass']);

        if($emailValue == "" || $passValue == ""){
            echo "<script>alert('please fill all fields')</script>";
        }
        else{
            if($emailValue == "Admin@gmail.com" && $passValue == "admin123"){
                echo "<script>alert('Admin Login')</script>";
                echo "<p>Admin email: $emailValue</p>";
                echo "<p>Admin pass: $passValue</p>";
            }
            else{
                echo "<script>alert('Login Failed')</script>";
            }
        }

    }

?>