<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

<?php
include "includes/nav.php"
?>
<?php


if(isset($_GET['logout'])){
unset($_SESSION['login']);
session_destroy();
header("location: login.php");
}


































if(isset($_POST['Login'])){
    if(isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])){
        $email=$_POST['email'];
        $password =$_POST['password'];
        $password = md5($password);

        $check_qry = mysqli_query($db , "SELECT * FROM `users` WHERE `email`='$email' AND  `password` = '$password'");

        if(mysqli_num_rows($check_qry) == 1){
            $_SESSION['login']=$email;
            header("location: index.php");
        }
    }
}

?>





<form action="" method="post">

<h2>Pet Paradise</h2>

<label for="Email">Email</label>
<br>
<input placeholder='Enter Your Email Here...' type="email" name="email">
<br><br>
<label for="password">Password</label>
<br>
<input placeholder='Enter Your Password Here...' type="password" name="password">

    <a href="signup.php">Don't Have Account? Sign up here</a>

<br><br>
<button name="Login">Login</button>
</form>




</body>
</html>