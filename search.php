<?php
if(isset($_GET['search'])){
     $search=$_GET['search'];

     $select_qry =  mysqli_query($db ,"SELECT * FROM `products` WHERE `name` LIKE '%$search%'");

     if($select_qry){
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
            exit();
     }


}



?>