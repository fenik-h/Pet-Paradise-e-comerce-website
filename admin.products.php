<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin.products.css">
</head>
<body>
<?php
include "includes/admin.nav.php"
?>





<?php
if(isset($_GET['delete'])){
    $p_id=$_GET['delete'];
    $delete_qry =mysqli_query($db,"DELETE FROM `products` WHERE `ID` = '$p_id' ");
    if($delete_qry){
        header('location: admin.products.php');



    }

}

?>








<br><br><br>
<a class='addp' href="add_product.php"><button>Add Product</button></a>



    <div class='container'>
<?php

$select_qry = mysqli_query($db,"SELECT * FROM `products`");
foreach($select_qry as $data){
?>
<div class='cards'>
            <a class='card' href="singleproduct.php">
            
                <img src="products/<?php echo $data['img']; ?>" alt="">
                <h2><?php echo $data['name']; ?></h2>
                <p><?php echo $data['price']; ?> IQD</p>
                <div class='edit_delete'>
                    <a class='btn' href="admin.products.php?delete=<?php echo $data['ID']; ?>"><img src="Images/bin.png" alt=""></a>
                    <a class='btn' href="edit_product.php?update=<?php echo $data['ID']; ?>"><img src="Images/pen.png" alt=""></a>
                </div>
            
            </a>
        </div>

<?php
}




        ?>

        

        





      
        

        
    </div>

</body>
</html>