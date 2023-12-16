

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/13f5e4b661.js" crossorigin="anonymous"></script>
</head>
<body>
<?php include 'includes/nav.php' ?>
<?php include 'includes/slideshow.php' ?>

<h1 style='color:#ff9e08; text-align:center; margin-bottom:2%;'>What We Serve</h1>

<div class="services">
    <div >
        <img src="icons/bike.png" alt="">
        <h2>Fast Delivery</h2>
        <p>Enjoy swift and reliable deliveries, prioritizing speed without compromising the integrity of your order.</p>
    </div>


    <div>
        <img src="icons/badge.png" alt="">
        <h2>Premium Quality</h2>
    <p>Explore top-tier pet essentials for your furry friends, ensuring they receive the finest care and products.</p>
    </div>

    <div>
        <img src="icons/service.png" alt="">
        <h2>Dedicated Support</h2>
        <p>Our customer support team is ready to assist you, providing a seamless and delightful shopping experience.</p>
    </div>
</div>


<form class='newsletter' action="">
    <h1>Join Our Weekly Newsletter</h1>
    <p>Sign up to get the latest updates abour our shop</p>
    <div>
        <input  type="text" placeholder='Email Address'>
        <button>Submit</button>
    </div>
</form>


<?php
include 'includes/footer.php';
?>


