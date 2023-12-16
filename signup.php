<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>

<?php
include "includes/nav.php"
?>
    

<?php
if(isset($_POST['FullName'])  && isset($_POST['email'])  && isset($_POST['password']) && isset($_POST['confirm_password']) && isset($_POST['dob']) && !empty($_POST['FullName']) &&  !empty($_POST['email']) &&!empty($_POST['password'])  && !empty($_POST['confirm_password'])   && !empty($_POST['dob'])  )
{
$name=$_POST['FullName'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];
$dob=$_POST['dob'];

if ($password == $confirm_password) {
    $password = md5($password);
    $insert_qry = mysqli_query($db, "INSERT INTO `users`(`fullname`,`email`,`password`,`dob`) VALUES ('$name','$email','$password','$dob')");

    if($insert_qry){
        header ('location: login.php');
    }
}
}
else{


}




?>





























<form action="" method='POST'>

    <h2>Sign Up Your Account</h2>
    <label for="">Full Name</label>
    <br>
    <input type="text" placeholder='Enter Your full name' name="FullName">
    <br><br>
    
    <label for="Email">Email</label>
    <br>
    <input placeholder='Enter Your Email Here...' type="email" name="email">
    <br><br>
    <label for="password">Password</label>
    <br>
    <input placeholder='Enter Your Password Here...' type="password" name="password">
    <br><br>
    <label for="">Confirm Password</label>
    <br>
    <input placeholder='Confirm Your Password Here...'  type="password" name='confirm_password'>
    <br><br>
    <label for="">Date Of Birth</label>
    <br>
    <input name='dob' type="date">
        <a href="login.php">Already have an account? login here..</a>

    <br><br>
    <button name='submit'>Sign Up</button>
</form>




</body>
</html>