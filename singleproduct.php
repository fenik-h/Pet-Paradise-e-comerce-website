<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/singleproduct.css">
</head>
<body>
<?php
include "includes/nav.php"
?>




<?php

$p_id =$_GET['product'];
$select_qry = mysqli_query($db,"SELECT * FROM `products` WHERE  `ID`='$p_id'");
foreach($select_qry as $data){
?>




<div class='product'>
    <img src="products/<?php echo $data['img'];?>" alt="">

    <div>
        <h2><?php echo $data['name']; ?></h2>
        <p><?php echo $data['information']; ?></p>
        <h4><?php echo $data['price'];?>IQD</h4>
        <form action="" class='pform'>
            <button>Shop Now</button>
        </form>
    </div>
</div>











<?php

}

?>




















