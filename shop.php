<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/shop.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/13f5e4b661.js" crossorigin="anonymous"></script>
</head>
<body>


<?php
include 'includes/nav.php';
?>


<form class='search'  action="">
    <input placeholder='Type to search...' type="text" name="search">
    <button >Search</button>
    <br>

    <h3 for="">Category:</h3>
    
    <div>
        <label for="">Pet Type:</label>
        <select name="pet_type" id="">
            
            <option  value="all">All</option>
            <option value="cats">Cats</option>
            <option value="dogs">Dogs</option>

        </select>
        <label for="">Food Type:</label>
        <select name="food_type" id="">
            <option  value="all">All</option>
            <option value="dry_food">Dry Food</option>
            <option value="wet_food">Wet Food</option>
        </select>
        <label for="">Age:</label>
        <select name="age" id="">
            <option  value="all">All</option>
            <option value="3">1-3 Month</option>
            <option value="6">3-6 Month</option>
        </select>
    </div>
    </form>

    <br><br>
    <div class='container'>
        <?php include 'search.php'; ?>
        <?php

                


                $select_qry = mysqli_query($db,"SELECT * FROM `products`");
                foreach($select_qry as $data){
                ?>
                    <a href="singleproduct.php?product=<?php echo $data['ID']; ?>">
                        <div class='cards'>
                            <img src="products/<?php echo $data['img']; ?>" alt="">
                            <h2><?php echo $data['name']; ?></h2>
                            <p><?php echo $data['price']; ?> IQD</p>
                            <button>Add To Cart</button>
                        </div>
                    </a>


                <?php
                }




                        ?>
        

        
    </div>
    






<?php
include "includes/footer.php"
?>


