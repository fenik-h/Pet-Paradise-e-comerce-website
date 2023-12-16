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
if(isset($_POST['update'])){
    if(isset($_POST['p_name']) && isset($_POST['p_price']) && isset($_POST['pet_type']) && isset($_POST['food_type']) && isset($_POST['p_info'])  && !empty($_POST['p_name']) && !empty($_POST['p_price']) && !empty($_POST['pet_type']) && !empty($_POST['food_type']) && !empty($_POST['p_info']) )
    {
        $p_id= $_GET['update'];
        $p_name = $_POST['p_name'];
        $p_price =$_POST['p_price'];
        $pet_type =$_POST['pet_type'];
        $food_type =$_POST['food_type'];
        $p_info =$_POST['p_info'];


        $update_qry = mysqli_query($db,"UPDATE `products` SET 
        `name`='$p_name',
        `price` = '$p_price',
        `pet_type` ='$pet_type',
        `food_type` = '$food_type',
        `information` = '$p_info' WHERE `ID` = '$p_id'
         ");

         if($update_qry ){
            header('location: admin.products.php');
        }



    }
}

?>





















































    <br><br><br>

    <?php
        if($_GET['update']){
$p_id = $_GET['update'];
$select_qry = mysqli_query($db, "SELECT * FROM `products` WHERE `id` = '$p_id'");
foreach($select_qry as $data){
    ?>


<form action="" method="post" enctype="multipart/form-data">
    
        <h2>Update product</h2>
        <label for="">Product name</label>
        <br>
        <input value="<?php echo $data['name'] ?>" placeholder='Enter the product name here...' type="text" name='p_name'>
        <br><br>
        <label for="">Product price</label>
        <br>
        <input value="<?php echo $data['price']; ?>"  placeholder='Enter the product price here...' type="number" name='p_price'>
        <br><br>
        <label for="">Pet Type</label>
        <br>
        <select name="pet_type" id="">
            <option <?php if($data['pet_type'] == 'cat'){ echo "selected" ; } ?> value="cat">Cat</option>
            <option <?php if($data['pet_type'] == 'dog'){ echo "selected"; } ?> value="dog">Dog</option>
        </select>
        <br><br>
        <label for="">Food Type</label>
        <br>
        <select name="food_type" id="">
            <option <?php if($data['food_type'] == 'dry_food'){ echo "selected" ;} ?> value="dry_food">Dry Food</option>
            <option <?php if($data['food_type'] == 'wet_food'){ echo "selected" ;} ?> value="wet_food">Wet Food</option>
        </select>
        <br><br>
        <label for="">Product Info</label>
        <br>
        <textarea   placeholder='Enter the product infromation here...' name="p_info" id="" cols="45" rows="7"><?php echo $data['information']; ?></textarea>
        <br><br>
        <label for="">Product Image</label>
        <br>
        <input type="file" name='p_img'>
        <br><br>
        <input name='update' class='submit' type="submit" value="Submit">
    </form>


































    <?php
}

        }

?>








</body>
</html>