<?php 
include("includes/header.php");

include("functions/userfunctions.php");

if(isset($_GET['product'])){

$product_slug=$_GET['product'];
$product_data=getIdActive("products",$product_slug);
$product=mysqli_fetch_array($product_data);

if($product){

    ?>
    <div class="py-3 custom-color">
    <div class="container">
        <h5 class="text-custom"><a class="text-custom" href="index.php">Home/</a><a class="text-custom" href="categories.php">Collections/</a><?=$product['name'];?></h5>
    </div>
</div>
<div class="py-4">
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-3">
                <div class="shadow">
                <div class="card shadow">
        <div class="card-body custom-color">
                <img src="uploads/<?=$product['image'];?>" alt="Product Image" class="w-100">
</div></div>
                </div>
            </div>
            <div class="col-md-8">


            <h4 class="fw-bold text-custom"><?=$product['name'];?></h4>
            <span class="fw-bold text-custom">

            <?php
if($product['trending']=='1'){
    echo "Trending";
    ?>
    <i class="fa fire"></i>
    <?php

}
            ?>
            </span>
            <hr>
           

            <div class="row">
            
           
            <div class="col-md-6">
            <h4 class="text-custom ">₹<span class="text-custom fw-bold"><?=$product['s_cost'];?></span></h4>
            
            </div>
            <div class="col-md-6">

            <h5 class="text-custom">₹<s ><?=$product['o_cost'];?></s></h5>
            </div>
            </div>
            <div class="row mt-3">
            <div class="col-md-4">
            <!-- <div class="input-group mb-3" style="width:130px">
          

    <button class="input-group-text decrement-btn">-</button>
  <input type="text" class="form-control bg-white text-center input-qty" disabled value="1" >
  <div class="input-group-append increment-btn" style="cursor: pointer">
  <button class="input-group-text">+</button>
</div>

  
</div> -->
<div class="container">
<input type="button" onclick="decrementValue()" value="-" />
<input type="text" disabled name="quantity" value="1" maxlength="2" max="10" size="1" id="number" />
<input type="button" onclick="incrementValue()" value="+" />
</div>


            </div>
            <div class="row mt-3">
            <div class="col-md-4">
                <form method="POST">
<button class="btn custom-bg primary-btn px-4 addToCartBtn" value="<?=$product['id']?>"><i class="fa fa-shopping-cart me-2"></i>Add To Cart</button></form>



            </div>
            
         
            <div class="col-md-4 mb-2">
            <button class="btn custom-bg  primary-btn px-4"><i class="fa fa-heart me-2"></i>Add To Wishlist</button>
            </div>
            <div class="col-md-4 mb-2">

            </div>
            </div>
            <hr>
       <h6 class="text-white">Product Description</h6>
            <p class="text-white"><?=$product['description'];?></p>
       
            </div>
        </div>
    </div></div>
    <?php
}
else{
    echo "Product Not Found";
}
}

else{
    echo "Something Went Wrong";
}
?>


    <?php include("includes/footer.php")?>
   