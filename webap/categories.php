<?php 
include("includes/header.php");
include("functions/userfunctions.php");
?>
<div class="py-3 custom-color">
    <div class="container">
        <h5 class="text-custom"><a class="text-custom" href="index.php">Home/</a>Collections</h5>
    </div>
</div>
<div class="py-5">
 <div class="container"><div class="row"><div class="col-md-12">
    <div class="row">

    <h1 class="text-custom">Our Collections</h1>
    <hr>

    <?php $categories=getAllActive("categories") ;
    
    if(mysqli_num_rows($categories)>0){
foreach($categories as $item){
    ?>
    <div class="col-md-3 mb-2">
        <a href="products.php?category=<?=$item['slug'];?>">
        <div class="card shadow custom-color">
        <div class="card-body">
<img src="uploads/<?=$item['image'];?>" alt="Category Image"  height="200px" width="200px">

    <h4 class="text-custom"><?=$item['name'];?></h4>
</div>
    </div>
</a>
    </div>
    <?php

}
    }
    else{
        echo "No category available";
    }
    
    ?>
    </div></div></div></div></div>
    <?php include("includes/footer.php")?>
   