<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/add_edit_product.css">
</head>
<body>
    <?php
include 'includes/admin.nav.php';
    ?>





































<?php

if(isset($_POST['submit'])){
    if(isset($_POST['p_name']) && isset($_POST['p_price']) && isset($_POST['pet_type']) && isset($_POST['food_type']) && isset($_POST['p_info']) && isset($_FILES['p_img']) && !empty($_POST['p_name']) && !empty($_POST['p_price']) && !empty($_POST['pet_type']) && !empty($_POST['food_type']) && !empty($_POST['p_info']) )
{
    $p_name = $_POST['p_name'];
    $p_price =$_POST['p_price'];
    $pet_type =$_POST['pet_type'];
    $food_type =$_POST['food_type'];
    $p_info =$_POST['p_info'];
    $p_img = $_FILES['p_img'];

    $img_name = strval($p_img['name']) ; //aram.png
   
    $img_type =end(explode('.' , $img_name)) ; //png
    
    $new_img_name=rand().'.'.$img_type; //352526.png
    $img_to = "products/$new_img_name";
    move_uploaded_file($p_img['tmp_name'],$img_to); //(file , distination) file'aka rasmakaya w destinationaka aw jeyaya ka ley dadaney


    $insert_qry = mysqli_query($db,"INSERT into `products`(`name`,`information`,`price`,`pet_type`,`food_type`,`img`) VALUES ('$p_name','$p_info','$p_price','$pet_type','$food_type','$new_img_name') ");
    if($insert_qry){ 
        header('location: admin.products.php');
    }
}
}
?>

















    <br><br><br>

    <form action="" method="post" enctype="multipart/form-data">
        <h2>Add a new product</h2>
        <label for="">Product name</label>
        <br>
        <input placeholder='Enter the product name here...' type="text" name='p_name'>
        <br><br>
        <label for="">Product price</label>
        <br>
        <input placeholder='Enter the product price here...' type="number" name='p_price'>
        <br><br>
        <label for="">Pet Type</label>
        <br>
        <select name="pet_type" id="">
            <option value="cat">Cat</option>
            <option value="dog">Dog</option>
        </select>
        <br><br>
        <label for="">Food Type</label>
        <br>
        <select name="food_type" id="">
            <option value="dry_food">Dry Food</option>
            <option value="wet_food">Wet Food</option>
        </select>
        <br><br>
        <label for="">Product Info</label>
        <br>
        <textarea  placeholder='Enter the product infromation here...' name="p_info" id="" cols="45" rows="7"></textarea>
        <br><br>
        <label for="">Product Image</label>
        <br>
        <input type="file" name='p_img'>
        <br><br>
        <input name='submit' class='submit' type="submit" value="Submit">
    </form>
</body>
</html>