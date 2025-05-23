<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action = "FormHandling.php" method = "post">

        <input type="text" name = "email" placeholder = "Enter your Email"> 
        <input type="text" name = "password" placeholder = "Enter your password">
        <input type="submit" value = "submit" name = "btn">

    </form>


    <?php
    
        if(isset($_POST['btn'])){

            $result = $_POST['email']; //abc@gmail.com
            $result2 = $_POST['password'];
        }
    
    ?>

    <p>Email: <?= @$result ?></p>
    <p>Password: <?php echo @$result2 ?></p>




<form action = "ex.php" method = "get">

    <input type="text" name = "email" placeholder = "Enter your Email"> 
    <input type="text" name = "pass" placeholder = "Enter your password">
    <input type="submit" value = "submit" name = "btn">

</form>

</body>
</html>