<?php 
include("includes/header.php");
include("functions/userfunctions.php");
if(isset($_GET['category'])){
$category_slug=$_GET['category'];
$category_data=getIdActive("categories",$category_slug);

$category=mysqli_fetch_array($category_data);
if($category){
$category_id=$category['id'];
?>
<div class="py-3 custom-color">
    <div class="container">
        <h5 class="text-white"><a class="text-white" href="index.php">Home/</a><a class="text-white" href="categories.php">Collections/</a><?=$category['name'];?></h5>
    </div>
</div>
<div class="py-3">
 <div class="container"><div class="row"><div class="col-md-12">
    <div class="row">

    <h1><?=$category['name']?></h1>
    <hr>

    <?php 
   
    $products=getProdByCategory($category_id) ;
    
    if(mysqli_num_rows($products)>0){
foreach($products as $item){
    ?>
    <div class="col-md-3 mb-2">
        <a href="product-view.php?product=<?=$item['slug'];?>">
        <div class="card shadow custom-color">
        <div class="card-body ">
<img src="uploads/<?=$item['image'];?>" alt="Products Image" height="150px" width="200px">

     <h4 class="text-center text-custom"><?=$item['name'];?></h4> 
</div>
    </div>
</a>
    </div>
    <?php

}
    }
    else{
        echo "No Product available";
    }
    
    ?>
    </div></div></div></div></div>
    <?php }
        else{

            echo "Something Went Wrong";
    
        }
    


}

    else{

        echo "Something Went Wrong";

    }?>
    <?php include("includes/footer.php")?>
   